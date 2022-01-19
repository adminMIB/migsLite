<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\API\Artajasa\ArtajasaHttp;
use App\Http\Controllers\API\Artajasa\ArtajasaRequestConverter;

class algoTestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'algo:test';

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
        $this->testSignature();
        dd(ArtajasaRequestConverter::paymentRequest("paymentRequest"));
        dd(ArtajasaHttp::setEndpoint("payment"));
        dd(ArtajasaRequestConverter::inquiryRequest("sample"));
    }


    public function testSignature()
    {
        ArtajasaHttp::setEndpoint("inquiry");
        $fixed_request = ArtajasaRequestConverter::inquiryRequest("123");
        $response = ArtajasaHttp::http()->post($fixed_request)->apply()->json();
        dd($response);
    }
}
