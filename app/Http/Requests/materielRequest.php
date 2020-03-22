<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class materielRequest extends FormRequest
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
            
            'matricule'=> 'required|min:1|max:9',
           
            'Nserie'=> 'required',
            'modele'=> 'required|min:5|max:16',
        ];
    }
}
