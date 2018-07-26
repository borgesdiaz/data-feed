<?php

namespace App\Http\Requests\ACase\ACase;

use App\Http\Requests\Request;

class DeleteCaseRequest extends Request
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
            'case_id' => 'required'
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
            'case_id.required' => 'A case id is required'
        ];
    }
}
