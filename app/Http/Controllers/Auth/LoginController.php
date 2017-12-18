<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function login(Request $request, $id, $name)
    {
        if($request->isMethod('post'))
        {
            $id   = $request->id;
            $name = $request->name;

            $inquiry = new Inquiry();
            $inquiry->user_id = $id;
            $inquiry->user_name = $name;

            if($inquiry->save())
            {
                return redirect()->route('inquiry.index')->with('success', 'Success.');
            }
            else
            {
                return redirect()->route('inquiry.index')->with('error', 'An error accured.')->withInput();
            }
        }
        else
        {
            dd("Use Post.");
        }
    }
}
