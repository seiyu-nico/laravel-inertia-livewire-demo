<?php

namespace App\Console\Commands\Helper;

use Illuminate\Console\Command;
use Illuminate\Support\Sleep;
use Illuminate\Support\Benchmark;


class SleepCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'helper:sleep';

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
        $count = Sleep::for(5)->second()->then(fn () => 1 + 1);
        // 2

        [$_, $duration] = Benchmark::value(fn () => Sleep::for(1)->second()->while(fn () => $this->sampleFunc()));
        \Log::info($duration);

    }

    public function sampleFunc()
    {
        // return rand(0, 5);
        return false;
    }

}
