<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    public function loginPage(){
        return view('pages.auth.login');
    }

    public function login(LoginRequest $request){
        $request->validated();
        try{
            isset($request->remember) ? $remember = true : $remember = false;

            if(Auth::attempt($request->only("email", "password"), $remember)){
                return redirect()->route("dashboard")->with("success", "Login successfuly");
            }
            return back()->withErrors("Invalid credentials");
        }catch(\Exception $e){
            return back()->withErrors($e->getMessage());
        }
    }

    public function registerPage(){
        return view('pages.auth.register');
    }

    public function register(RegisterRequest $request){
        $request->validated();
        DB::beginTransaction();
        try{
            User::create([
                "name" => $request->name,
                "email" => $request->email,
                "password" => bcrypt($request->password),
            ]);
            DB::commit();
            if(Auth::attempt($request->only("email", "password"))){
                return redirect()->route("dashboard")->with("success", "Account created successfully");
            }
        }catch(\Exception $e){
            DB::rollBack();
            return back()->withErrors($e->getMessage());
        }
    }

    public function logout(){
        try{
            Auth::logout();
            return redirect()->route("login");
        }catch(\Exception $e){
            return back()->withErrors($e->getMessage());
        }
    }

    public function forgotPage(){
        return view('pages.auth.forgot');
    }

    public function sendResetEmail(Request $request){
        $request->validate([
            "email" => ["required", "email"]
        ]);

        try{
            $user = User::where("email", $request->email)->first();
            if(!$user){
                return back()->withErrors("Email not found");
            }
            $status = Password::sendResetLink($request->only('email'));
            return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
        }catch(\Exception $e){
            return back()->withErrors($e->getMessage());
        }
    }

    public function resetPasswordPage(Request $request, $token){
        return view('pages.auth.reset', [
            'email' => $request->email,
            'token' => $token,
        ]);
    }
}
