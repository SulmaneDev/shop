<?php
namespace App\Rules\Supplier;

use Illuminate\Support\Facades\Auth;

class SupplierRules
{
    public static function base(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'string', 'max:20'],
            'image' => ['required','file', 'image', 'max:2048'], 
            'address' => ['required', 'string'],
            'shipping_address' => ['required', 'string'],
            'city' => ['required', 'string'],
        ];
    }

    public static function create(): array
    {
        return array_merge(self::base(), [
            'email' => ['required', 'email',  function ($attr,$val,$fail) {
                $supplier = Auth::user()
                ->suppliers()
                ->where('email', $val)
                ->first();
                if($supplier) {
                    $fail("The supplier with email $supplier->email already.");
                }
            }],
        ]);
    }

    public static function update(): array
    {
        return array_merge(self::base(), [
            'email' => ['required', 'email'],
            'image'=>['nullable']
        ]);
    }
}
