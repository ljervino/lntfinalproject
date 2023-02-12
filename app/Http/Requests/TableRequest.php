<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TableRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|string|min:5|max:20',
            'age'=>'required|integer|min:21',
            'address'=>'required|string|min:10|max:40',
            'phone'=>'required|string|regex:/(08)/|min:9|max:12'
        ];
    }
}
