<?php

namespace App\Console\Commands\Arr;

use Illuminate\Console\Command;
use Illuminate\Support\Arr;


class QueryCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'arr:query';

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

        $array = [
            'name' => 'Taylor',
            'order' => [
                'column' => 'created_at',
                'direction' => 'desc'
            ]
        ];

        $query = Arr::query($array);
        // name=Taylor&order[column]=created_at&order[direction]=desc
        $this->info($query);

        $query = http_build_query($array);
        // name=Taylor&order%5Bcolumn%5D=created_at&order%5Bdirection%5D=desc
        $this->info($query);

    }
}
