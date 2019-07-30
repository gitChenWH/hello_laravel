<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserssController extends Controller
{
    public function create()
    {
        return view('users.create');
    }
}
