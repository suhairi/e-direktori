<?php

class LoginController extends BaseController {

    public function loginPost() {

        $validator = Validator::make(Input::all(), array(
            'username'  => 'required',
            'password'  => 'required'
        ));

        if($validator->fails()) {
            return Redirect::route('login')->with('title', 'Input Validation Failed');
        } else {

            $user = Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password')));
            if($user) {
                return Redirect::intended('/');
                dd('User : ' . $user);
                echo 'here';
            } else {
                return Redirect::route('login')->with('title', 'Username/Password does not match');
            }
        }
    }

    public function login() {
        return View::make('/admin/login')->with('title', 'Log Masuk 2');
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect::route('home');
    }
}