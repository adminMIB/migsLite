<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class AppStarter extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'amr:starter';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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

        # asking for confirmation
        if ($this->confirm("DB : " . $_ENV['DB_DATABASE'] . ' seluruh data akan di hapus dan membuat data starter')) {
            Artisan::call("db:wipe");
            Artisan::call("migrate");
            Artisan::call("db:seed AmrStarterApp");
        }
    }
}
