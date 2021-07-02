<?php

namespace App\Http\Requests;

use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;

class storePostRequest extends FormRequest
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
    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => Str::slug($this->slug),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fname' => ['required', 'max:25'],
            'lname' => ['required', 'max:25'],
            'mobile' => ['required', 'max:15', 'min:10'],
            'email' => ['required', 'max:30', 'min:5']
        ];
    }

    public function messages()
    {
        return [
            'fname.required' => "First Name is Needed",
            'lname.required' => "Last Name is Needed",
            'mobile.required' => "Mobile Number is Required",
            'email.required' => "Email id id Required",
            'mobile.max' => "Mobile number should be 15 digits long",
            'mobile.min' => "Mobile number should be atleast 10 digits long"
        ];
    }
}
