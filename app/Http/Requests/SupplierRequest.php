<?php

namespace App\Http\Requests;

use App\Rules\Supplier\SupplierRules;
use Illuminate\Foundation\Http\FormRequest;

class SupplierRequest extends FormRequest
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
            'POST' => SupplierRules::create(),
            'PUT', 'PATCH' => SupplierRules::update(),
            default => [],
        };
        return $rules;
    }
}
