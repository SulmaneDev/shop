<?php

namespace App\Http\Requests;

use App\Rules\Product\ProductRules;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules= match($this->method()) {
            'POST' => ProductRules::create(),
            'PUT', 'PATCH' => ProductRules::update(),
            default => [],
        };
        return $rules;
    }
}
