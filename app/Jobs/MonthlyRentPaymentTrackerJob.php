<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use DB;
use Carbon\Carbon;
use DateInterval;
use DatePeriod;
use DateTime;
use App\Models\Rooms;
use App\Models\MonthlyPayment;
use App\Models\RentPaymentTracker;
use Illuminate\Support\Facades\Log;

class MonthlyRentPaymentTrackerJob
{
    use Dispatchable, Queueable;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    public function __construct($date = null)
    {
        if ($date == null) {
            $date = Carbon::now();
        }
        $this->date = $date;
    }

    /**
     * Execute the job.
     *
     * @return void
     */

    public function handle()
    {
        $start_date = Carbon::parse($this->date->startOfMonth()->toDateString());
        $end_date = $start_date->addMonths(12);

        $start_date = $this->date->startOfMonth()->toDateString();

        $start_date = new DateTime($start_date);
        $end_date = new DateTime($end_date);

        $dates = array();
        for ($i = $start_date; $i <= $end_date; $i->modify('+1 month')) {
            $dates[] = $i->format('M Y');
        }

        $is_vacant = 0;
        $rooms = DB::table('rooms')->select(
            DB::raw('rooms.variation_val_id'),
            DB::raw('rooms.id as room_id'),
            DB::raw('rooms.id as room_rent'),
            DB::raw('rooms.is_vacant'),
            DB::raw('variation_value_template.id as var_val_id'),
            DB::raw('variation_value_template.name as var_name'),
            DB::raw('variations.id as var_id'),
            DB::raw('variations.monthly_rent'),
            DB::raw('properties.id as prop_id'),
            DB::raw('properties.category_id')

        )
            ->leftJoin('variation_value_template', 'rooms.variation_val_id', 'variation_value_template.id')
            ->leftJoin('variations', 'variation_value_template.id', 'variations.id')
            ->leftJoin('properties', 'rooms.property_id', 'properties.id')
            ->where('rooms.is_vacant', '=', $is_vacant)
            ->orderBy('rooms.id', 'asc')->get();

        $rooms->map(function ($item) {
            if ($item->is_vacant == 0) {
                $item->rented = 'Yes';
            } else {
                $item->rented = 'No';
            }

            return $item;
        });

        if (!empty($rooms)) {
            foreach ($dates as $key => $period) {

                foreach ($rooms as $key => $value) {

                    $existing_track = MonthlyPayment::where('period', $period)->where('room_id', $value->room_id)->first();
                    if (!empty($existing_track)) {
                        continue;
                    }

                    $save_track_array = array(
                        'tenant_id' => 1, 'room_id' => $value->room_id,  'payment_status' => 3, 'period' => $period,
                        'rented' => $value->rented, 'rent_amount' => $value->room_rent, 'amount_paid' => '0.00',
                        'balance_due' => $value->room_rent
                    );

                    $insert_track = MonthlyPayment::insert($save_track_array);
                }
            }
        }
    }
}
