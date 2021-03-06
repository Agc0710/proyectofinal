<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name'=>'required|max:255',
            'description' => 'required',
            'priority' => ['required','integer']
        ];
    }
    public  function  messages(){
        return [
            'name.required' => 'El campo nombre esta vacio',
            'shirt_value.required' => 'El campo descripcion esta vacio',
            'priority.required' => 'Seleccione la prioridad'
        ];
    }

}
