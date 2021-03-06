<?php

namespace App\Http\Requests\ACase\ACase;

use App\Http\Requests\Request;

class CreateCaseRequest extends Request
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
            'user_id' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'name' => 'required',
        ];
    }
    
    /**
     * Get the error messages for the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'user_id.required' => 'A user id is required',
            'category_id.required' => 'A category id is required',
            'description.required' => 'A description is required',
            'name.required' => 'An name is required'
        ];
    }
}


