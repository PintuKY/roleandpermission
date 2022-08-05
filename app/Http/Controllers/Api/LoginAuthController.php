<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Support\Facades\Auth;

class LoginAuthController extends Controller
{

    public function Register(Request $request)
    {

        Log::info($request->all());

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
        ]);
        if ($validator->fails()) {
            return response(['error' => $validator->errors()->all()]);
        }

        try {
          $user = User::create([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => bcrypt($request->get('password'))
            ]);

            $token = $user->createToken('LaravelAuthApp')->accessToken;

            return response()->json(['token' => $token],  200);

        } catch (Exception $e) {
            Log::error($e->getMessage());
            return response(['data' => "internal Server Error", 'error' => true]);
        }
    }

    /**
     * 
     * login
     * 
     */
    public function login(Request $request)
    {

        $data = [
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ];

        if (Auth::attempt($data)) {

            $token = auth()->user()->createToken('pintu')->accessToken;

            return response()->json(['token' => $token], 200);

        } else {

            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }

    // public function logout($id){

    //     $user = Auth::user()->token();
    //     $user->revoke();
    //     return response()->json(['success' =>"logout Successfully"]);
    // }
}
