<?php

namespace App\Services\Product;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductService
{
    public function index(Request $request)
    {
        
        $products = $request->user()->products()->with('brand')->get();
        $brands = $request->user()->brands()->get();
        

        return view('pages.admin.product', [
            'products' => $products,
            'brands' => $brands,
        ]);
    }

    public function create(ProductRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('product', 'public');
        }

        $product = new Product();
        $product->name = $data['name'];
        $product->price = $data['price'];
        $product->brand_id = $data['brand_id'];
        $product->user_id = Auth::id();
        $product->image = $data['image'] ?? null;
        $product->code = Str::random(6);
        $product->save();

        return redirect()->back()->with('toast', [
            'title' => __('product.toast.created.title'),
            'description' => __('product.toast.created.description', ['name' => $product->name]),
            'variant' => 'success',
        ]);
    }

    public function update(ProductRequest $request, string $id)
    {
        $product = Product::findOrFail($id);

        $data = $request->validated();

        if ($request->hasFile('image')) {
            if (!empty($product->image) && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }
            $data['image'] = $request->file('image')->store('product', 'public');
        }

        $product->update($data);

        return redirect()->back()->with('toast', [
            'title' => __('product.toast.updated.title'),
            'description' => __('product.toast.updated.description', ['name' => $product->name]),
            'variant' => 'success',
        ]);
    }

    public function destroy(string $id)
    {
        $product = request()->user()->products()->findOrFail($id);

        if ($product->image && Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()->back()->with('toast', [
            'title' => __('product.toast.deleted.title'),
            'description' => __('product.toast.deleted.description'),
            'variant' => 'success',
        ]);
    }
}
