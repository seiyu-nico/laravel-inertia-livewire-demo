<?php

namespace App\Console\Commands\Helper;

use Exception;
use Illuminate\Console\Command;

class RetryCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'helper:retry';

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
        return retry(5, function () {
            // 試行間に100ms待ち、5回試みる
        }, 100);


        // $i = 1;
        // while (true) {
        //     // 処理
        //     if (処理成功) {
        //         break;
        //     }

        //     if ($i == 5) {
        //         throw new Exception("エラーです");
        //     }
        //     $i++;
        // }
    }
}
