<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Yigitbayol\Dia\Services\Dia;

class DiaTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dia:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dia Test Command';

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

        return 0;
    }
}
