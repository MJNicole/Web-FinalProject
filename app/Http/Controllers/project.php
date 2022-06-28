<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class project extends BaseController
{
    //
    public function index()
    {
        return view('home');
    }

    public function register()

    {
    return view ('register');
    }

    public function login()

    {
    return view ('login');
    }

    public function UserHome()

    {
    return view ('UserHome');
    }

    public function delete()

    {
    return view ('delete');
    }

    public function update()

    {
    return view ('update');
    }
}