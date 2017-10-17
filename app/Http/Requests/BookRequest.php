<?php

namespace Bookstore\Http\Requests;

use Bookstore\Http\Requests\Request;

class BookRequest extends Request
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
            'book_isbn' => 'required',
            'book_title' => 'required',
            'book_author' => 'required',
            'book_publisher' => 'required',
            'book_publish_year' => 'required',
            'book_genre' => 'required',
        ];
    }
}
