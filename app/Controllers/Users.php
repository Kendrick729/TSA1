<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function profile()
    {
        $data['user'] = (new UserModel())->orderBy('id', 'ASC')->first();

        return view('profile/index', $data);
    }
}
