<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;
use DateInterval;
use App\Http\Controllers\post_sms;
use Symfony\Component\VarDumper\VarDumper;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {

            $table = DB::table('post')->where('etat', '=', '1')->orderBy('date_fin', 'asc')->first();

            $mytime = now();
            $mytime->add(new DateInterval("PT1H"));
            $mytime = $mytime->toDateTimeString();
            /*-----------*/
            $object = new post_sms();


            if (strtotime($table->date_fin) <= strtotime($mytime)) {
                $object->post_sms1($table->num_dis, $table->text);
                $affected = DB::update(
                    'update post set etat = 0 where id = ?',
                    [$table->id]
                );
            }
        })->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
