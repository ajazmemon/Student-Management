<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'roll_no' => 'required|unique:students,roll_no,'.$this->segment(2),
            'first_name' => 'required',
            'last_name' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'class' => 'required',
            'image' => 'image| mimes:jpeg,jpg,png',
            
        ];
    }
    public function messages() {
        return [
            'roll_no.required' => 'Please enter roll number',           
            'roll_no.unique' => 'Please enter unique roll no',           
            'image.image' => 'Selected file must be image',        
            'first_name.required' => 'Please enter first name',        
            'last_name.required' => 'Please enter last name',        
            'dob.required' => 'Please select date of birth',
            'gender.required' => 'Please select gender',
            'class.required' => 'Please Select Class',
            
        ];
    }
}
