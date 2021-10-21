<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductGalleryRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'products_id'=> 'required|exists:products,id',
            'photos'=> 'required|image'
        ];
    }
}
