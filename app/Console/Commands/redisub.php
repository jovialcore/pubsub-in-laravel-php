<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Redis;

class redisub extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Redis:Subscribe';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Hey! Subscribe to a redis topic';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        Redis::subscribe(['topic'], function($message){
            echo $message;
        
        });     // return 0; this was here by default
    }
}
