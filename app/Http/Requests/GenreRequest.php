<?php

namespace Bookstore\Http\Requests;

use Bookstore\Http\Requests\Request;

class GenreRequest extends Request
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
            'genre_id' => 'required',
            'genre_name' => 'required',
        ];
    }
}
