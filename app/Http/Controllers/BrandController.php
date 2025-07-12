<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBrandRequest;
use App\Services\Brand\BrandService;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    protected BrandService $brand;

    /**
     * Create a new controller instance.
     */
    public function __construct(BrandService $brand)
    {
        $this->brand = $brand;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $req)
    {
        return $this->brand->index($req);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateBrandRequest $req)
    {
        return $this->brand->create($req);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateBrandRequest $req, string $id)
    {
        return $this->brand->update($req, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->brand->destroy($id);
    }
}
