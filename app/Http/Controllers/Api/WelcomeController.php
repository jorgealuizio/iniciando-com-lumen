<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function index()
    {
        $name = 'Jorge Aluizio';
        return view('welcome', ['data' => $name]);
    }
}