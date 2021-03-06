<?php

namespace App\Http\Controllers\API\Default;
use Illuminate\Http\Request;
use App\Model\HistoryPerHitClient;
use App\Services\HistoryPerHitClientService;
use App\Services\responseService;
use App\Http\Controllers\Controller;

class HistoryPerHitClientController extends Controller
{
    private HistoryPerHitClientService $historyPerHitClientService;
    private ResponseService $responseService;

    public function __construct(
        HistoryPerHitClientService $historyPerHitClientService,
        ResponseService $responseService
    ) {
        $this->historyPerHitClientService = $historyPerHitClientService;
        $this->responseService = $responseService;
    }

    public function index(Request $request)
    {
        $in_history_per_hit_client = $this->historyPerHitClientService->mendapatkanSeluruhDataPaginate(
            paginate: $this->paginate,
            isCari: $request->cari
        );
        return compact("in_history_per_hit_client");
    }

    public function destroy($id)
    {
        $this->historyPerHitClientService->menghapusData($id);
        return $this->responseService->menghapusData($id);
    }
}
