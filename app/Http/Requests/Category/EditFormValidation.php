<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class EditFormValidation extends FormRequest
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

            //'title'=>'required|unique:categories,title,'.$this->request->get('id'),
            'title'=>'required|unique:categories,title,{id}',

            'main_image'=>'mimes:jpeg,bmp,png',

        ];
    }

  /*  public function message()
    {
        return [
            'title.required'=>'Please, Add Title',
        ];
    }*/
}
