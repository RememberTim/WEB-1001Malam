<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;


class CheckoutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => 'required|integer',
            'transaction_total' => 'required|integer',
            'total_keuntungan' => 'required|integer',
            'transaction_status' => 'nullable|string|in:MASUK,BERHASIL,TERIMA,BATAL',
            'transaction_details' => 'required|array',
            'transaction_details.*' => 'integer|exists:products,id'
            

        ];
    }
}
