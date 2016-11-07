<?php

namespace App\Http\Controllers;

use AH;
use Auth;
use App\Models\User;
use App\Http\Requests\RegisterUserRequest;
use App\Http\Requests\AuthenticateUserRequest;

class AuthController extends Controller
{
   public function getLoginForm()
   {
      return view('auth.login', [
          'title' => trans('text.account.connect')
      ]);
   }

    public function authenticate(AuthenticateUserRequest $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended(AH::route('account.index'))
                ->withMessage(trans('messages.welcomeback', [
                    'firstname' => Auth::user()->firstname
                ]))
                ->withStatus('info');
        } else {
            return redirect(AH::route('auth.login'))
                ->withMessage(trans('messages.email-password-incorrect'))
                ->withStatus('warning')
                ->withInput();
        }
   }

    public function logout()
    {
        return AH::logout('/');
    }

   public function register(RegisterUserRequest $request)
   {
      $user = User::create([
        'firstname'  => $request->firstname,
        'lastname'   => $request->lastname,
        'email'      => $request->email,
        'password'   => bcrypt($request->password)
      ]);

      Auth::loginUsingId($user->id);

      return redirect(AH::route('account.index'))
          ->withMessage(trans('messages.welcome', ['firstname'=>$user->firstname]))
          ->withStatus('info');
    }

   public function getRegister()
   {
      return view('auth.register', [
         'title' => trans('text.account.create')
      ]);
   }
}
