<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AutController extends Controller
{
    public function signup(Request $request){
        $validateUser= Validator::make(
            $request->all(),
            [
                     'name'=>'required',
                     'email'=> 'required|email|unique:users,email',
                     'password'=>'required',
                    ]
            );
            if($validateUser->fails()){
                return response()->json([
                    'status'=>false,
                    'message'=>'Validation Error',
                    'error'=> $validateUser->errors()->all()
                ],401);
            }
            $user = User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>$request->password,
            ]);
            return response()->json([
                'status'=>true,
                'message'=>'User Created Successfully',
                'user'=>$user,
            ],200 );
    }
    public function login(Request $request){

    }
    public function logout(Request $request){

    }
}
