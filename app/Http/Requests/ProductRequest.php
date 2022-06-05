<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'nama' => 'required|string|max:255',
            'tipe' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'bahan' => 'required|string|max:255',
            'harga' => 'required|integer',
            'stok' => 'required|integer'
        ];
    }
}
