<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use DateTime;
use Carbon\Carbon;

class MonthlyPayment extends Model
{
    protected $table = 'tenant_monthly_payments';

    public static function getMonthlyPaymentsTrack()
    {
        $monthly_payment_track = DB::table('tenant_monthly_payments')->select(
            DB::raw('tenant_monthly_payments.*'),
            DB::raw('tenant_monthly_payments.payment_status as pay_status'),
            DB::raw('tenant_monthly_payments.id as track_id')
        )

            ->orderBy('tenant_monthly_payments.id', 'asc')
            ->get();

        return $monthly_payment_track;
    }

    public static function getPaymentTracker()
    {
        $rent_trackers = DB::table('tenant_monthly_payments')->select(
            DB::raw('tenant_monthly_payments.*'),
            DB::raw('tenant_monthly_payments.id as track_id'),
            DB::raw('tenant_monthly_payments.created_at as track_date'),
            DB::raw('rent_payment_status.id'),
            DB::raw('rent_payment_status.rent_status'),
            DB::raw('rooms.id'),
            DB::raw('rooms.room_no'),
            DB::raw('properties.id as prop_id'),
            DB::raw('properties.prop_name')
        )
            ->leftJoin('rent_payment_status', 'tenant_monthly_payments.payment_status', 'rent_payment_status.id')
            ->leftJoin('rooms', 'tenant_monthly_payments.room_id', 'rooms.id')
            ->leftJoin('properties', 'rooms.property_id', 'properties.id')
            ->orderBy('tenant_monthly_payments.id', 'desc')
            ->get();

        $rent_trackers->map(function ($item) {

            /** Not sure where it has been used */
            $month = $item->period;
            $month = new DateTime($month);
            $item->month = $month->format('Y-m-d');

            $formatted_period = $item->period;
            $formatted_period = new DateTime($formatted_period);
            $item->formatted_period = $month->format('Y-m-d H:i:s');

            return $item;
        });

        return $rent_trackers;
    }

    public static function getTracksForSMS()
    {
        $rent_trackers = DB::table('tenant_monthly_payments')->select(
            DB::raw('tenant_monthly_payments.id as track_id'),
            DB::raw('tenant_monthly_payments.payment_status'),
            DB::raw('tenant_monthly_payments.period'),
            DB::raw('tenant_monthly_payments.balance_due'),
            DB::raw('tenant_monthly_payments.rent_amount'),
            DB::raw('tenant_monthly_payments.amount_paid'),
            DB::raw('tenant_monthly_payments.sms_reminder_sent'),
            DB::raw('rent_payment_status.id'),
            DB::raw('rooms.id as room_id'),
            DB::raw('rooms.property_id'),
            DB::raw('rooms.room_no'),
            DB::raw('rooms.is_vacant'),
            DB::raw('room_assignments.room_id as assign_room_id'),
            DB::raw('room_assignments.tenant_id'),
            DB::raw('tenants.id as t_id'),
            DB::raw('tenants.t_phone'),
            DB::raw('tenants.t_name'),
            DB::raw('properties.id as prop_id'),
            DB::raw('properties.prop_name'),
            DB::raw('properties.category_id')

        )
            ->leftJoin('rent_payment_status', 'tenant_monthly_payments.payment_status', 'rent_payment_status.id')
            ->leftJoin('rooms', 'tenant_monthly_payments.room_id', 'rooms.id')
            ->leftJoin('room_assignments', 'tenant_monthly_payments.room_id', 'room_assignments.room_id')
            ->leftJoin('tenants', 'room_assignments.tenant_id', 'tenants.id')
            ->leftJoin('properties', 'rooms.property_id', 'properties.id')
            ->orderBy('tenant_monthly_payments.id', 'asc')->get();

        $rent_trackers->map(function ($item) {

            $total_tenants = DB::table('room_assignments')->select(
                DB::raw('room_assignments.*'),
                DB::raw('tenants.id as t_id')
            )
                ->leftJoin('tenants', 'room_assignments.tenant_id', 'tenants.id')
                ->where('room_id', $item->room_id)
                ->where('r_end_date', null)
                ->get();

            $item->sum_tenants = count($total_tenants);

            $tenant_name = explode(" ", $item->t_name);
            unset($tenant_name[1]);
            $item->tenant_name = implode(" ", $tenant_name);
            if ($item->sum_tenants == 1) {
                $item->bal_due_hostel = number_format(round($item->balance_due), 2, '.', ',');
            } else {
                $item->bal_due_hostel = number_format(round($item->balance_due / $item->sum_tenants), 2, '.', ',');
            }

            return $item;
        });

        return $rent_trackers;
    }

    public static function getTracksForDeposits()
    {

        $rent_trackers = DB::table('tenant_monthly_payments')->select(
            DB::raw('tenant_monthly_payments.id as room_id'),
            DB::raw('tenant_monthly_payments.id as track_id'),
            DB::raw('tenant_monthly_payments.payment_status'),
            DB::raw('tenant_monthly_payments.period'),
            DB::raw('tenant_monthly_payments.balance_due'),
            DB::raw('tenant_monthly_payments.rent_amount'),
            DB::raw('tenant_monthly_payments.amount_paid'),
            DB::raw('tenant_monthly_payments.sms_reminder_sent'),
            DB::raw('rent_payment_status.id'),
            DB::raw('rooms.id'),
            DB::raw('rooms.property_id'),
            DB::raw('rooms.room_no'),
            DB::raw('rooms.is_vacant'),
            DB::raw('room_assignments.room_id as assign_room_id'),
            DB::raw('room_assignments.tenant_id'),
            DB::raw('tenants.id as t_id'),
            DB::raw('tenants.t_phone'),
            DB::raw('tenants.t_name'),
            DB::raw('properties.id as prop_id'),
            DB::raw('properties.prop_name'),
            DB::raw('properties.category_id'),
            DB::raw('variation_value_template.id as var_val_id'),
            DB::raw('variations.id as var_id'),
            DB::raw('variations.monthly_rent')
        )
            ->leftJoin('rent_payment_status', 'tenant_monthly_payments.payment_status', 'rent_payment_status.id')
            ->leftJoin('rooms', 'tenant_monthly_payments.room_id', 'rooms.id')
            ->leftJoin('room_assignments', 'tenant_monthly_payments.room_id', 'room_assignments.room_id')
            ->leftJoin('tenants', 'room_assignments.tenant_id', 'tenants.id')
            ->leftJoin('properties', 'rooms.property_id', 'properties.id')
            ->leftJoin('variation_value_template', 'rooms.variation_val_id', 'variation_value_template.id')
            ->leftJoin('variations', 'variation_value_template.id', 'variations.id')
            ->orderBy('tenant_monthly_payments.id', 'asc')->get();

        $rent_trackers->map(function ($item) {
            $tenant_name = explode(" ", $item->t_name);
            unset($tenant_name[1]);
            $item->tenant_name = implode(" ", $tenant_name);
            $item->bal_due_hostel = $item->balance_due / 2;

            /** Get deposits amount */

            return $item;
        });

        return $rent_trackers;
    }
}
