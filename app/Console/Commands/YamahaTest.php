<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Yigitbayol\Yamahawrapper\Services\Stock;
use Yigitbayol\Yamahawrapper\Services\Yamaha;
use Yigitbayol\Yamahawrapper\Services\Service;
use Yigitbayol\Yamahawrapper\Services\Customer;

class YamahaTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'yamaha:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Yamaha Paket Test Komutu';

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
        // $service = new Service();
        // $all_services = $service->getAllServices();
        // return print_r($all_services);

        // $customer = new Customer();
        // $customer->getCustomer("3368009676");
        // dd($customer->getCustomer("3368009676"));

        // $stock = new Stock();
        // dd($stock->getSpare('11DE44'));

        $yamaha = new Yamaha();
        $customer = $yamaha->customer->getCustomer('3368009676');
        dd($customer);


    }
}
