<?php

namespace Http\Forms;

use Core\Validator;

class LoginForm
{
    protected $errors = [];
    public function validate($email, $password)
    {
        if (!Validator::email($email)) {
            $this->errors['email'] = 'Please enter a valid email address.';
        }

        if (!Validator::string($password, 2, 15)) {
            $this->errors['password'] = 'Please provide a valid password.';
        }

        return empty($this->errors);
    }

    public function errors()
    {
        return $this->errors;
    }
}