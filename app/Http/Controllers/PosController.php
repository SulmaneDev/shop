<?php

namespace App\Http\Controllers;

use App\Services\Pos\PosService;
use Illuminate\Http\Request;

class PosController extends Controller
{
    protected PosService $service;
    public function __construct(PosService $service)
    {
        $this->service = $service;
    }
    /**
     * Show pos dashboard
     */
    function index(Request $request) {
        return $this->service->index($request);
    }
}
