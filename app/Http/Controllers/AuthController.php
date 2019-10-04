<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Session;


class AuthController extends Controller
{
    public function register(Request $request)
    {
        $v = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|max:10',
        ]);
        if ($v->fails())
        {
            return response()->json([
                'status' => 'error',
                'errors' => $v->errors()
            ], 422);
        }

         User::create([
            'name' => $request->json()->get('name'),
            'email' => $request->json()->get('email'),
            'password' => Hash::make($request->json()->get('password')),
         ]);


        return response()->json(['status' => 'success'], 200);
    }




    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');



        if ($token = $this->guard()->attempt($credentials)) {

            $user = User::find(Auth::user()->id);
            $data =!empty($user) ?  ['name' => $user->name,'email' => $user->email] : [];

            return response()->json(['status' => 'success','data' => $data], 200)->header('Authorization', $token);
        }

        return response([

            'status' => 'error',
            'error' => 'invalid.credentials',
            'msg' => 'There was an error, unable to sign in with those credentials.'
        ], 401);

//        return response()->json(['error' => 'login_error'], 401);
    }




    public function logout()
    {
        $this->guard()->logout();
        return response()->json([
            'status' => 'success',
            'msg' => 'Logged out Successfully.'
        ], 200);
    }



    public function user(Request $request)
    {
        $user = User::find(Auth::user()->id);

        if ( !empty($user) ) {
            $data = ['name' => $user->name,'email' => $user->email];
            return response()->json([
                'status' => 'success',
                'data' => $data
            ]);
        }

    }


    public function refresh()
    {
        if ($token = $this->guard()->refresh()) {
            return response()
                ->json(['status' => 'successs'], 200)
                ->header('Authorization', $token);
        }
        return response()->json(['error' => 'refresh_token_error'], 401);
    }


    private function guard()
    {
        return Auth::guard();
    }
}