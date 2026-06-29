<?php

namespace App\Services;


use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\UserResource;



class AuthService
{


    public function register(array $data)
    {


        $user = User::create([

            'name' => $data['name'],

            'email' => $data['email'],

            'password' => Hash::make(
                $data['password']
            ),

            'role' => 'user'

        ]);



        $token = $user
            ->createToken('auth_token')
            ->plainTextToken;



        return [

            'user' => new UserResource($user),

            'token' => $token

        ];


    }





    public function login(array $data) {


       $user = User::where('email',$data['email'])->first();
  
       if(!$user ||!Hash::check($data['password'],$user->password))
        {
          return null;
        }

      $user->tokens()->delete();
      $token = $user->createToken('auth_token')->plainTextToken;

      return ['user'=>new UserResource($user),'token'=>$token];
    }


    public function logout(User $user)
    {
        $user ->currentAccessToken() ->delete();

        return [
            'message'=>'Logged out successfully'
        ];

    }





    public function me(User $user)
    {
        return new UserResource($user);
    }



}