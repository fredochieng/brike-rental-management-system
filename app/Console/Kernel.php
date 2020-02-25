<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Jobs\ProcessPaymentsJob;
use App\Jobs\MonthlyRentPaymentTrackerJob;
use App\Jobs\SaveRentPaymentNotificationJob;
use App\Jobs\SendSMSJob;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
       // $schedule->job(new MonthlyRentPaymentTrackerJob())->everyMinute();
        $schedule->job(new ProcessPaymentsJob())->everyMinute();
       //$schedule->job(new SaveRentPaymentNotificationJob())->everyMinute();
   // $schedule->job(new SendSMSJob())->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
