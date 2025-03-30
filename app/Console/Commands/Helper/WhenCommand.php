<?php

namespace App\Console\Commands\Helper;

use Illuminate\Console\Command;

class WhenCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'helper:when';

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
        $value = when(true, fn() => 'Hello World');

        // 前の処理の結果がtrueの時だけ実行しておきたい何か
        when(true, fn() => func());
        // if () {
        //     func()
        // }


    }
}
