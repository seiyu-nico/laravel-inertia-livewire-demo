<?php

namespace App\Console\Commands\Str;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class PluralCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:plural';

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
        $plural = Str::plural('car');
        // cars
        $plural = Str::plural('child');
        // children
    }
}
