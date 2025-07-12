<?php

namespace App\Http\Controllers;

use App\Http\Requests\SupplierRequest;
use App\Services\Supplier\SupplierService;
use Illuminate\Http\Request;

class SupplierController extends Controller
{

    protected SupplierService $supplier;
    /**
     * Create a new controller instance.
     *
     * @param SupplierService $supplier
     */
    public function __construct(SupplierService $supplier)
    {
        $this->supplier = $supplier;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $req)
    {
        return $this->supplier->index($req);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(SupplierRequest $req)
    {
        return $this->supplier->create($req);
    }




    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SupplierRequest $req,string $id)
    {
        return $this->supplier->update($req,$id);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->supplier->destroy($id);
    }
}
