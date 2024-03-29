<?php

namespace App\Models;

use App\Models\Mpesa;
use Carbon\Carbon;
use DB;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
	protected $table = 'rent_payments';

	public static function c2b($ShortCode, $CommandID, $Amount, $Msisdn, $BillRefNumber)
	{

		try {
			$environment = env('MPESA_ENV');
		} catch (\Throwable $th) {
			$environment = self::env('MPESA_ENV');
		}

		if ($environment == 'live') {
			$url = 'https://api.safaricom.co.ke/mpesa/c2b/v1/simulate';
			$token = Mpesa::generateLiveToken();
		} elseif ($environment == 'sandbox') {
			$url = 'https://sandbox.safaricom.co.ke/mpesa/c2b/v1/simulate';
			$token = Mpesa::generateSandBoxToken();
		} else {
			return json_encode(['Message' => 'invalid application status']);
		}

		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Authorization:Bearer ' . $token));

		$curl_post_data = array(
			'ShortCode' => $ShortCode,
			'CommandID' => $CommandID,
			'Amount' => $Amount,
			'Msisdn' => $Msisdn,
			'BillRefNumber' => $BillRefNumber
		);

		$data_string = json_encode($curl_post_data);

		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($curl, CURLOPT_HEADER, false);
		$curl_response = curl_exec($curl);

		print_r($curl_response);
		return $curl_response;
	}

	public static function getPayments()
	{
		/** To get actual payment for the tenant, the msisdn must be the same as t_phone
		 * This means that the tenant must pay with his/her phone number
		 * Another option would be to confirm payment that dont much any tenant, & update
		 * t_phone column in the rent payments table with the t_phone & use it to search the tenant
		 */

		$payments  =   Transaction::select(
			'rent_payments.*',
			DB::raw('rent_payments.*'),
			DB::raw('rent_payments.id as transaction_id'),
			DB::raw('rent_payments.created_at as trans_created_at'),
			DB::raw('tenants.id as t_tenant_id'),
			DB::raw('tenants.t_name'),
			DB::raw('tenants.t_phone'),
			DB::raw('tenants.t_room_id'),
			DB::raw('rooms.id as room_id'),
			DB::raw('rooms.property_id'),
			DB::raw('rooms.room_no'),
			DB::raw('properties.id as prop_id'),
			DB::raw('properties.prop_name')
		)
			->join('tenants', 'tenants.t_phone', '=', 'rent_payments.phone_no', 'left outer')
			->leftJoin('rooms', 'tenants.t_room_id', '=', 'rooms.id')
			->leftJoin('properties', 'rooms.property_id', '=', 'properties.id')
			//->whereIn('rent_payments.trans_type', '=', array('Pay Bill', 'Mpesa', 'Bank', 'Cash'))
			->orderBy('rent_payments.id', 'asc')
			->get();

		$payments->map(function ($item) {
			$item->trans_date = date("Y-m-d H:i:s", strtotime($item->trans_time));

			// $item->tenant = DB::table('tenants')->select(
			// 	DB::raw('tenants.t_phone'),
			// 	DB::raw('tenants.t_name')
			// )->where('t_phone', $item->phone_no)
			// 	->first();
			return $item;
		});

		return $payments;
	}

	public static function getLatestPayments()
	{
		$latest_payments  =   Transaction::select(
			'rent_payments.*',
			DB::raw('rent_payments.*'),
			DB::raw('rent_payments.id as transaction_id'),
			DB::raw('rent_payments.created_at as trans_created_at'),
			DB::raw('tenants.id as t_tenant_id'),
			DB::raw('tenants.t_name'),
			DB::raw('tenants.t_phone'),
			DB::raw('tenants.t_room_id'),
			DB::raw('rooms.id as room_id'),
			DB::raw('rooms.property_id'),
			DB::raw('rooms.room_no'),
			DB::raw('properties.id as prop_id'),
			DB::raw('properties.prop_name')
		)
			->join('tenants', 'tenants.t_phone', '=', 'rent_payments.phone_no', 'left outer')
			->leftJoin('rooms', 'tenants.t_room_id', '=', 'rooms.id')
			->leftJoin('properties', 'rooms.property_id', '=', 'properties.id')
			->where('rent_payments.trans_type', '=', 'Pay Bill')
			->orderBy('rent_payments.id', 'asc')
			->limit(7)
			->get();

		$latest_payments->map(function ($item) {
			$item->trans_date = date("Y-m-d H:i:s", strtotime($item->trans_time));
			return $item;
		});

		return $latest_payments;
	}

	public static function sumTotalRentPayments()
	{
		$sum_rent_payments = Transaction::all();
		return $sum_rent_payments;
	}

	public static function sumPropertyRentPayments($property_id)
	{
		$sum_prop_rent_payments = DB::table('rent_payments')
			->select(
				DB::raw('rent_payments.id as payment_id'),
				DB::raw('rent_payments.trans_type'),
				DB::raw('rent_payments.trans_amount'),
				DB::raw('tenants.id as t_tenant_id'),
				DB::raw('tenants.t_name'),
				DB::raw('tenants.t_phone'),
				DB::raw('room_assignments.tenant_id'),
				DB::raw('room_assignments.room_id'),
				DB::raw('rooms.id as room_id'),
				DB::raw('rooms.property_id'),
				DB::raw('rooms.room_no'),
				DB::raw('properties.id as prop_id'),
				DB::raw('properties.prop_name')
			)
			->join('tenants', 'tenants.t_phone', '=', 'rent_payments.phone_no', 'left outer')
			->join('room_assignments', 'tenants.id', '=', 'room_assignments.tenant_id', 'left outer')
			->leftJoin('rooms', 'room_assignments.room_id', '=', 'rooms.id')
			->leftJoin('properties', 'rooms.property_id', '=', 'properties.id')
			->where('rent_payments.trans_type', '=', 'Pay Bill')
			//->groupBy( 'rooms.id' )
			->where('properties.id', '=', $property_id)
			->get();

		return $sum_prop_rent_payments;
	}

	public static function getTenantTotalPayments($t_phone)
	{
		$sum_tenant_payments = DB::table('rent_payments')->select(
			DB::raw('rent_payments.trans_type'),
			DB::raw('rent_payments.bill_ref_no'),
			DB::raw('rent_payments.trans_amount'),
			DB::raw('tenants.id as t_tenant_id'),
			DB::raw('tenants.t_name'),
			DB::raw('tenants.t_phone'),
			DB::raw('room_assignments.tenant_id'),
			DB::raw('room_assignments.room_id'),
			DB::raw('rooms.id as room_id')
		)
			->join('tenants', 'tenants.t_phone', '=', 'rent_payments.phone_no', 'left outer')
			->join('room_assignments', 'tenants.id', '=', 'room_assignments.tenant_id', 'left outer')
			->leftJoin('rooms', 'room_assignments.room_id', '=', 'rooms.id')
			->where('rent_payments.trans_type', '=', 'Pay Bill')
			//->groupBy( 'tenants.t_phone' )
			->where('tenants.t_phone', '=', $t_phone)
			->get();

		return $sum_tenant_payments;
	}
}
