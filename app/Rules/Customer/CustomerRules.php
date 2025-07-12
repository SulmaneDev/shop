<?php
namespace App\Rules\Customer;

use Illuminate\Support\Facades\Auth;

class CustomerRules
{
    public static function base(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'string', 'max:20'],
            'cnic_front_image' => ['required','file', 'image', 'max:2048'], 
            'cnic_back_image' => ['required','file', 'image', 'max:2048'], 
        ];
    }

    public static function create(): array
    {
        return array_merge(self::base(), [
            'email' => ['required', 'email',  function ($attr,$val,$fail) {
                $supplier = Auth::user()
                ->customers()
                ->where('email', $val)
                ->first();
                if($supplier) {
                    $fail("The customer with email $supplier->email already.");
                }
            }],
        ]);
    }

    public static function update(): array
    {
        return array_merge(self::base(), [
            'email' => ['required', 'email'],
            'cnic_front_image'=>['nullable'],
            'cnic_back_image'=>['nullable'],
        ]);
    }
}
