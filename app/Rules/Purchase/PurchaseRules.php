<?php

namespace App\Rules\Purchase;

class PurchaseRules
{
    /**
     * Shared rules (for both create & update)
     */
    public static function base(): array
    {
        return [
            "price" => "required|numeric|min:0",
            "tax" => "required|numeric|min:0",
            "shipping" => "required|string",
            "description" => "nullable|string|max:1000",
            "order_tax" => "required|numeric|min:0",
            "brand_id" => "required|string|exists:brands,id",
            "product_id" => "required|string|exists:products,id",
            'person_d' => 'required|string',
        ];
    }

    /**
     * For storing new purchases — IMEIs required
     */
    public static function create(): array
    {
        return array_merge(self::base(), [
            "imeis" => ["required", "array"],
            "imeis.*" => ["required", "array"],
            "imeis.*.imei1" => ["required", "string", "max:255"],
            "imeis.*.imei2" => ["nullable", "string", "max:255"],
        ]);
    }

    /**
     * For updating — no IMEI fields expected
     */
    public static function update(): array
    {
        return self::base(); // no imeis
    }
}
