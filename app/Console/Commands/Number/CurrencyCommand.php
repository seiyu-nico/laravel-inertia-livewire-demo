<?php

namespace App\Console\Commands\Number;

use Illuminate\Console\Command;
use Illuminate\Support\Number;

class CurrencyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'number:currency';

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
        $currency = Number::currency(1000, in: 'JPY');
        // ¥1,000
        $currency = Number::currency(1000, in: 'USD');
        // $1,000.00
    }
}
