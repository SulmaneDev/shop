<?php
namespace App\Rules\Product;

use Illuminate\Support\Facades\Auth;

class ProductRules
{
    public static function base(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required','integer', 'min:0'],
            'brand_id'=> ['required','exists:brands,id'],
            'image' => ['required','file', 'image', 'max:2048'], 
        ];
    }

    public static function create(): array
    {
        return array_merge(self::base(), [
            'name' => ['required', 'string',  function ($attr,$val,$fail) {
                $supplier = Auth::user()
                ->products()
                ->where('name', $val)
                ->first();
                if($supplier) {
                    $fail("The Product with name $supplier->email already.");
                }
            }],
        ]);
    }

    public static function update(): array
    {
        return array_merge(self::base(), [
            'image'=>['nullable']
        ]);
    }
}
