<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\User;

class ApiController extends Controller
{
    public function login(Request $request) {
        $validator = Validator::make($request->all(),[
            'email'    => 'required',
            'password' => 'required',
        ]);

        if($validator->fails()) {
            return response()->json(["success" => false, "validation errors" => $validator->errors()]);
        }

        $email  =   $request->email;
        $password = $request->password;
        error_log($password);
        $user   =   DB::table("users")->where([["email", "=", $email]])->first();
        
        if(is_null($user)) {
            return response()->json(["success" => false, "message" => "User doesn't exist"]);
        }

        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
            $token = $user->createToken('token')->accessToken;
            $success['success'] = true;
            $success['message'] = "Success! you are logged in successfully";
            $user['token'] = $token;
            $success['user'] = $user;
            return response()->json($success, 200);
        } else {
            return response()->json(["success" => false, 'error' => 'Unauthorised'], 401);
        }
    }

    public function logout(Request $request) {  
	    $result = $request->user()->token()->revoke();                  
        if($result){
            $response = response()->json(['error'=>false,'message'=>'User logout successfully.','result'=>[]],200);
        } else {
            $response = response()->json(['error'=>true,'message'=>'Something is wrong.','result'=>[]],400);            
        }   
        return $response;       
    }
}
