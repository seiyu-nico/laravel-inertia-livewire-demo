<?php

namespace App\Console\Commands\Arr;

use Illuminate\Console\Command;
use Illuminate\Support\Arr;

class ToCssClassesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'arr:to-css-classes';

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
        $isActive = false;
        $hasError = true;

        $array = ['p-4', 'font-bold' => $isActive, 'bg-red' => $hasError];
        $classes = Arr::toCssClasses($array);
        // p-4 bg-red



        // <span @class([
        //     'p-4',
        //     'font-bold' => $isActive,
        //     'bg-red' => $hasError,
        // ])></span>

        // <span class="p-4 bg-red"></span>

    }
}
