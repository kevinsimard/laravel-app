<?php

namespace App\Modules\Auth\Entities;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * @param mixed $value
     *
     * @return $this
     */
    public function setPasswordAttribute($value)
    {
        $this->password = bcrypt($value);

        return $this;
    }
}
