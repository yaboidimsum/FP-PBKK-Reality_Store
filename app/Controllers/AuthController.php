<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\AdminModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }
}