<?php

namespace App\Http\Controllers;

use App\Helpers\JwtHelper;

class TokenController extends Controller
{
    public function index()
    {        
        $token=JwtHelper::generateToken([
            'sub' => '1234567890',
            'name' => 'John Doe',
            'admin' => true
        ]);
        return response()->json([
            'token' => $token
        ]);
    }
}
