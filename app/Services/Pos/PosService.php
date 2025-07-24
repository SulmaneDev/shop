<?php

namespace App\Services\Pos;

use Illuminate\Http\Request;

class PosService
{
    public function index(Request $request)
    {
        $purchases = $request->user()->purchases()
            ->with(['product.brand'])
            ->latest()
            ->get();

        $products = $purchases->pluck('product')->filter();
        $brands = $purchases->pluck('brand')->filter()->unique('id')->values();

        $productsByBrand = $products->groupBy(fn($product) => optional($product->brand)->id ?? 'unknown');

        $pr = $productsByBrand->mapWithKeys(function ($products, $brandId) {
            $brandName = optional($products->first()->brand)->name ?? 'Unknown';
            return [
                $brandName => $products->map(function ($product) {
                    return [
                        'name' => $product->name,
                        'price' => $product->price,
                        'image' => $product->image ?? 'assets/img/default.png',
                        'quantity' => $product->quantity ?? 1,
                        'id'=> $product->id,
                    ];
                })->values()->all(),
            ];
        });

        $brandsWithProducts = $brands->map(function ($brand) use ($productsByBrand) {
            return [
                'id' => $brand->id,
                'name' => $brand->name,
                'created_at' => $brand->created_at,
                'updated_at' => $brand->updated_at,
                'products' => $productsByBrand->get($brand->id, collect())->values(),
            ];
        })->values();

        return view('layouts.pos', [
            'data' => [
                'brandsWithProducts' => $brandsWithProducts,
                'products' => $products,
                'brands' => $brands,
                'pr' => $pr,
            ],
        ]);
    }

}
