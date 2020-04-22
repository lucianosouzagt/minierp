<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function register(Request $request){
        $data = $request->all();
        if(!User::where('email',$data['email'])->count()){
            $data['password'] = bcrypt($data['password']);
            $user = User::create($data);
            return response()->json(['data'=>$user],201);
        } else {
            return response()->json(['msg'=>'Este e-mail já está cadastrado.'], 400);
        }
    }
}
