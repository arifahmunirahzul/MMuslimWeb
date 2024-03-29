<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        'App\Console\Commands\NewBooking',
        'App\Console\Commands\ReminderJob',
        'App\Console\Commands\ChangeStatusToCompleted',
        'App\Console\Commands\ChangeStatusToExpired',
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
         $schedule->command('booking:newbook')
                  ->twiceDaily(1, 13);

         $schedule->command('reminder:job')
                  ->twiceDaily(1, 13);

         $schedule->command('statuschange:completed')
                  ->daily('18:15');

         $schedule->command('statuschange:expired')
                  ->daily('18:15');

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
