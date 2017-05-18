<?php

namespace App\Console;

use App\Console\Commands\CreateAdministrator;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Console\Commands\GiveID;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan Commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        CreateAdministrator::class,
        GiveID::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('view:id')->everyMinute();
    }

    /**
     * Register the Closure based Commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
