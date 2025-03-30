<?php

namespace App\Console\Commands\Helper;

use Illuminate\Console\Command;
use Illuminate\Support\Timebox;
use Illuminate\Support\Benchmark;

class TimeboxCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'helper:timebox';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        [$res, $duration] = Benchmark::value(function () {
            return (new Timebox)->call(function ($timebox) {
                // ...
                return 2;
            }, microseconds: 1000000); // 1秒
        });
        // $res: 2
        // $duration: 1000ミリ秒


    }
}
