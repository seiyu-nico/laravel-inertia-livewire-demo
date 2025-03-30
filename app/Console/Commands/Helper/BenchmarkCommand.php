<?php

namespace App\Console\Commands\Helper;

use Illuminate\Console\Command;
use Illuminate\Support\Sleep;
use Illuminate\Support\Benchmark;

class BenchmarkCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'helper:benchmark';

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
        Benchmark::dd(fn () => rand(0,10));
        // "0.009ms" // vendor/laravel/framework/src/Illuminate/Support/Benchmark.php:67
        
        [$count, $duration] = Benchmark::value(fn () => $this->sampleFunc());
        // $count: 2
        // $duration: 5000
    }

    public function sampleFunc()
    {
        return Sleep::for(5)->second()->then(fn () => 1 + 1);
    }

}
