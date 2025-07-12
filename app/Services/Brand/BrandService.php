<?php

namespace App\Services\Brand;

use App\Http\Requests\CreateBrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BrandService
{
    /**
     * Display all brands belonging to the current user.
     */
    public function index(Request $req)
    {
        $brands = $req->user()->brands()->latest()->get();

        return view('pages.admin.brand', [
            'brands' => $brands,
        ]);
    }

    /**
     * Create a new brand for the authenticated user.
     */
    public function create(CreateBrandRequest $req)
    {
        $data = $req->validated();
        $data['user_id'] = Auth::id(); // Ensure correct user_id

        $brand = Brand::create($data);

        return redirect()->back()->with('toast', [
            'title' => 'Completed',
            'description' => "Brand '{$brand->name}' created successfully.",
            'variant' => 'success',
        ]);
    }

    /**
     * Update a specific brand owned by the user.
     */
    public function update(CreateBrandRequest $req, string $id)
    {
        $brand = Brand::where('user_id', Auth::id())->findOrFail($id);
        $data = $req->validated();

        $brand->update($data);

        return redirect()->back()->with('toast', [
            'title' => 'Completed',
            'description' => "Brand '{$brand->name}' updated successfully.",
            'variant' => 'success',
        ]);
    }

    /**
     * Delete a specific brand.
     */
    public function destroy(string $id)
    {
        $brand = Auth::user()->brands()->findOrFail($id);
        $name = $brand->name;
        $brand->delete();

        return redirect()->back()->with('toast', [
            'title' => 'Completed',
            'description' => "Brand '{$name}' deleted successfully.",
            'variant' => 'success',
        ]);
    }
}
