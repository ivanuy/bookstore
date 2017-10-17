<?php

namespace Bookstore\Http\Requests;

use Bookstore\Http\Requests\Request;

class AuthorRequest extends Request
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
            'author_id' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'author_title' => 'required',
        ];
    }
}
