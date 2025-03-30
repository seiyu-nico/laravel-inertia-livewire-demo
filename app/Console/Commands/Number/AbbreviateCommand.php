<?php

namespace App\Console\Commands\Number;

use Illuminate\Console\Command;
use Illuminate\Support\Number;

class AbbreviateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'number:abbreviate';

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
        $number = Number::abbreviate(1000);
        // 1K
        $number = Number::abbreviate(489939);
        // 490K
        $number = Number::abbreviate(1230000, precision: 2);
        // 1.23M
    }
}
