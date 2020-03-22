<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class stockRequest extends FormRequest
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
            'serie'=> 'required|min:6',
            'modele'=> 'required|min:2',
            'source'=> 'required',
        
        ];
    }
}
