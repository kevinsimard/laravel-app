<?php

namespace App\Modules\Auth\Http\Controllers;

use App\Http\Controllers\BaseController;
use App\Modules\Auth\Entities\User;
use App\Modules\Auth\Http\Requests\RegisterRequest;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Validation\Validator;

class AuthController extends BaseController
{
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * @var \App\Modules\Auth\Entities\User
     */
    protected $users;

    /**
     * @param  \App\Modules\Auth\Entities\User  $users
     * @return void
     */
    public function __construct(User $users)
    {
        $this->users = $users;

        $this->middleware($this->guestMiddleware(), [
            'except' => 'logout',
        ]);
    }

    /**
     * @param  array  $data
     * @return \App\Modules\Auth\Entities\User
     */
    protected function create(array $data): User
    {
        return $this->users->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
        ]);
    }

    /**
     * @param  array  $data
     * @return \Illuminate\Validation\Validator
     */
    protected function validator(array $data): Validator
    {
        $formRequest = new RegisterRequest();

        return validator($data,
            $formRequest->rules(),
            $formRequest->messages(),
            $formRequest->attributes()
        );
    }
}
