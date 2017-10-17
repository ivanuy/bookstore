<?php

namespace Bookstore\Http\Requests;

use Bookstore\Http\Requests\Request;

class CustomerRequest extends Request
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
            'cust_id' => 'required',
            'cust_fname' => 'required',
            'cust_lname' => 'required',
            'billing_address1' => 'required',
            'billing_address2' => 'required',
            'billing_address3' => 'required',
            'credit_card_flag' => 'required',
            // 'credit_card_type' => 'required',
            // 'credit_card_number' => 'required'

        ];
    }
}
