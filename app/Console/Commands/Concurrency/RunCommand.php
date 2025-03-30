<?php

namespace App\Console\Commands\Concurrency;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Concurrency;

class RunCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'concurrency:run';

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
        [$hoge, $piyo] = Concurrency::run([
            fn () => 'hoge',
            fn () => 'piyo',
        ]);
        // $hoge: hoge, $piyo: piyo
    }
}
