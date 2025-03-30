<?php

namespace App\Console\Commands\Concurrency;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Concurrency;
class DeferCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'concurrency:defer';

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
        Concurrency::defer([
            fn () => '後で実行したい何かの処理1',
            fn () => '後で実行したい何かの処理2',
        ]);
        // HTTPレスポンスを返した後に実行される
    }
}
