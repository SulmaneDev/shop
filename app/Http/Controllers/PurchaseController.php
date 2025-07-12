<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePurchaseRequest;
use App\Models\Purchase;
use App\Services\Purchase\PurchaseService;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{

    protected PurchaseService $service;

    function __construct(PurchaseService $service)
    {
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $req)
    {
        return $this->service->index($req);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(CreatePurchaseRequest $req)
    {
        return $this->service->create($req);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Purchase $purchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CreatePurchaseRequest $req, string $id)
    {
        return $this->service->update($req,$id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Purchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->service->destroy($id);
    }
}
