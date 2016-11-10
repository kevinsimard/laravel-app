<?php

namespace App\Modules\Auth\Http\Requests;

use App\Http\Requests\BaseRequest;

class RegisterRequest extends BaseRequest
{
    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            "name" => "required|max:255",
            "email" => "required|email|max:255|unique:user",
            "password" => "required|min:6|confirmed",
        ];
    }
}
