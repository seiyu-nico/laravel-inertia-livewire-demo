<?php

namespace App\Console\Commands\Arr;

use Illuminate\Console\Command;
use Illuminate\Support\Arr;


class HasCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'arr:has';

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
        $exists = Arr::has($array, 'name');
        // true
        $exists = Arr::has($array, ['name', 'age']);
        // true
        $exists = Arr::has($array, ['name', 'salary']);
        // false

        if (Arr::has($array, ['name', 'age'])) {
        }

        if (isset($array['name']) && isset($array['age'])) {
        }
    }
}
