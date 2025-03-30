<?php

namespace App\Console\Commands\Str;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class SubstrReplaceCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'str:substr-replace';

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

        $originalStr = '4102124';
        $str = Str::substrReplace($originalStr, '-', 3, 0);
        // 410-2124

        $str = substr($originalStr, 0, 3) . '-' . substr($originalStr, 3, 4);
        // 410-2124

        $str = substr_replace($originalStr, '-', 3, 0);
        // 410-2124

    }
}
