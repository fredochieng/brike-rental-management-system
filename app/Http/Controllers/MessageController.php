<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\Models\Tenants;
	use App\Models\RoomAssignment;
	use App\Models\Property;
	use App\Models\Message;
	use Illuminate\Support\Facades\Input;
	use Kamaln7\Toastr\Facades\Toastr;
	use Illuminate\Support\Facades\Auth;
	use Illuminate\Support\Facades\Log;
	use DB;

	class MessageController extends Controller
	{
		/**
		 * Display a listing of the resource.
		 *
		 * @return \Illuminate\Http\Response
		 */

		public function index()
		{
			$data['property'] = Property::getProperty();
			$data['messages'] = Message::getSMSs();
			$property_id = Input::get('property_id');
			$message_status = Input::get('message_status');

			/** Get the search value and perform the neccessary queries */
			if (isset($_GET['property_id']) && empty($message_status)) {

				$data['searched'] = 'yes';
				$data['messages'] = Message::getSMSs()->where('prop_id', $property_id);

				$total_sms = count($data['messages']);

				if (count($data['messages']) == 0) {

					Toastr::info('No messages found for your query');

					return view('messages.index')->with($data);

				} elseif (count($data['messages']) > 0) {

					Toastr::success($total_sms . ' messages found for your query');

					return view('messages.index')->with($data);
				}
			} elseif (isset($_GET['property_id']) && isset($_GET['message_status'])) {
				$data['searched'] = 'yes';
				$data['messages'] = Message::getSMSs()->where('prop_id', $property_id)->where('message_status', $message_status);

				$total_sms = count($data['messages']);

				if (count($data['messages']) == 0) {

					Toastr::info('No messages found for your query');

					return view('messages.index')->with($data);

				} elseif (count($data['messages']) > 0) {

					Toastr::success($total_sms . ' messages found for your query');

					return view('messages.index')->with($data);
				}
			}
			$data['searched'] = 'no';
			// dd( $data['messages'] );
			return view('messages.index')->with($data);
		}

		/**
		 * Show the form for creating a new resource.
		 *
		 * @return \Illuminate\Http\Response
		 */

		public function create()
		{
			$data['property'] = Property::getProperty();
			return view('messages.create')->with($data);
		}

		/**
		 * Store a newly created resource in storage.
		 *
		 * @param \Illuminate\Http\Request $request
		 * @return \Illuminate\Http\Response
		 */

		public function store(Request $request)
		{
			$property_id = $request->input('property_id');
			$message_title = ucwords($request->input('c_title'));
			$contact_source = $request->input('contact_source');
			$room_id = $request->input('room_id');
			$recepient_contacts = $request->input('recepient_contacts');
			$text = $request->input('message');

			if ($contact_source == 1) {
				if ($room_id == '') {
					$tenants = RoomAssignment::getRoomAssignments()->where('property_id', $property_id)
						->where('r_end_date', '');
				} else {
					$tenants = RoomAssignment::getRoomAssignments()->where('property_id', $property_id)->where('room_id', $room_id)
						->where('r_end_date', '');
				}

				foreach ($tenants as $key => $value) {
					$message = new Message();
					$message->message_title = $message_title;
					$message->message = $text;
					$message->phone_no = $value->t_phone;
					$message->save();
				}
				Toastr::success('SMS created successfully');
				return back();

			} elseif ($contact_source == 2) {

				$recepient_contacts = explode(',', $recepient_contacts);
				$recepient_contacts = json_decode(json_encode($recepient_contacts, true));
				$recepient_contacts = array_map('trim', $recepient_contacts);

				$valid_contacts = 0;
				$invalid_contacts = 0;

				foreach ($recepient_contacts as $key => $phone_no) {

					if ($this->validate_phone_no($phone_no)) {
						$valid_contacts++;

					} else {
						$invalid_contacts++;
					}

					if ( $invalid_contacts > 0 ) {

						Toastr::warning('Some contacts are incorrect');
						return back();

					}elseif($invalid_contacts == 0){
						$message = new Message();
						$message->message_title = $message_title;
						$message->message = $text;
						$message->phone_no = $phone_no;

						$message->save();
					}
				}
				if($invalid_contacts == 0){
					Toastr::success('SMS created successfully');
					return back();
				}
			}
		}

		 private function validate_phone_no( $phone_no ) {

		     $required_phone_lengths = array( 9, 10, 12 );
		     $phone_length = ( string ) strlen( $phone_no );

		     if ( in_array( $phone_length, $required_phone_lengths ) && ctype_digit( $phone_no ) ) {
		         return true;
		     } else {
		         return false;
		     }
		 }

		/**
		 * Display the specified resource.
		 *
		 * @param int $id
		 * @return \Illuminate\Http\Response
		 */

		public function show($id)
		{
			//
		}

		/**
		 * Show the form for editing the specified resource.
		 *
		 * @param int $id
		 * @return \Illuminate\Http\Response
		 */

		public function edit($id)
		{
			//
		}

		/**
		 * Update the specified resource in storage.
		 *
		 * @param \Illuminate\Http\Request $request
		 * @param int $id
		 * @return \Illuminate\Http\Response
		 */

		public function update(Request $request, $id)
		{
			//
		}

		/**
		 * Remove the specified resource from storage.
		 *
		 * @param int $id
		 * @return \Illuminate\Http\Response
		 */

		public function destroy($id)
		{
			//
		}
	}
