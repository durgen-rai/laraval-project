<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class AddFormValidation extends FormRequest
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
            'username'=>'required|unique:users,username',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:5',
            'full_name'=>'required',
            'contact_no'=>'required',
            'address'=>'required',
            'gender'=>'required',
            'status'=>'required'

        ];
    }

  /*  public function message()
    {
        return [
            'title.required'=>'Please, Add Title',
        ];
    }*/
}
