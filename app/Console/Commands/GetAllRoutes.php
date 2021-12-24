<?php

namespace App\Console\Commands;

use App\Actions\getAllRoutes as dataApiRoutes;
use Illuminate\Console\Command;

class GetAllRoutes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'amr:getAllRoutes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get All Routes From api.php';

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
        $get_all_route = new dataApiRoutes;
        $get_all_route->set_default_route_name_list();
    }
}
