<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Services\AuthService;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;



class AuthController extends Controller
{
   private AuthService $authService;

public function __construct(AuthService $authService)
{
$this->authService = $authService;
}




public function register(RegisterRequest $request)
{
     $result = $this->authService->register($request->validated());
       return response()->json(['data'=>$result],201);
}



public function login(LoginRequest $request)
{

    $result = $this->authService->login($request->validated());

    if(!$result){
        return response()->json(['message'=>'Invalid credentials'],401);
    }

    return response()->json(['data'=>$result]);

}


public function logout(Request $request)
{

   $result = $this->authService->logout($request->user());
   return response()->json($result);
}


public function me(Request $request)
{
    return response()->json(['user'=>$this->authService->me($request->user())]);

}

}