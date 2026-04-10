<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function messages(): array
    {
        return [
            'reg_number.required' => __('owners.reg_number_required'),
            'reg_number.max' => __('owners.reg_number_max'),
            'brand.required' => __('owners.brand_required'),
            'brand.max' => __('owners.brand_max'),
            'model.required' => __('owners.model_required'),
            'model.max' => __('owners.model_max'),
            'owner_id.required' => __('owners.owner_required'),
        ];
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'reg_number' => 'required|max:15',
            'brand' => 'required|max:30',
            'model' => 'required|max:30',
            'owner_id'   => 'required|exists:owners,id',
        ];
    }
}
