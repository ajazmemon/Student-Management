<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MarkRequest extends FormRequest
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
            's_roll_no' => 'required|unique:marks',
            'maths' => 'required',
            'science' => 'required',
            'english' => 'required',
            
        ];
    }
    public function messages() {
        return [
            's_roll_no.required' => 'Please enter roll number',           
            's_roll_no.unique' => 'Please enter unique roll no',
            'maths.required' => 'Please enter maths marks',        
            'science.required' => 'Please enter science marks',        
            'english.required' => 'Please enter english marks',
            
        ];
    }
}
