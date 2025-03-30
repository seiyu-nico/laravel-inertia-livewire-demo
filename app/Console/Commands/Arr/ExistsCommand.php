<?php

namespace App\Console\Commands\Arr;

use Illuminate\Console\Command;
use Illuminate\Support\Arr;

class ExistsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'arr:exists';

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
        $array = ['name' => 'John Doe', 'age' => 17];
        $exists = Arr::exists($array, 'name');
        // true
        $exists = Arr::exists($array, 'salary');
        // false
        $exists = Arr::has($array, ['name', 'age']);
        // true
        $exists = Arr::has($array, ['name', 'salary']);
        // false


        $exists = isset($array['name']);
        // true
        $exists = isset($array['name']) && isset($array['age']);
        // true

    }
}
