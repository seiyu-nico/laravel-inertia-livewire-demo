<?php

namespace App\Console\Commands\Arr;

use Illuminate\Console\Command;
use Illuminate\Support\Arr;

class CollapseCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'arr:collapse';

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
        $array = Arr::collapse([[1, 2, 3], [4, 5, 6], [7, 8, 9]]);
        // [1, 2, 3, 4, 5, 6, 7, 8, 9]
        $this->info(json_encode($array));


        $data_1 = [
            "name" => "1",
            "created_at" => "2021-01-01 08:00:00",
        ];

        $data_2 = [
            "name" => "2",
            "created_at" => "2021-01-01 00:00:00",
        ];


        $array = Arr::collapse([$data_1, $data_2]);
        \Log::info($array);


    }
}
