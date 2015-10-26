<?php namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
class AuthController extends Controller {
 
    public function login()
    {
        if(Input::has("data") )
        {
            
            $data = Input::get('data');
            $validation = $validator = Validator::make(
                        ['Username' => $data['email'],
                          'Password' => $data['password']
                        ],
                        ['Username' => 'required',
                          'Password' => 'required'
                        ]
                );
            
            if ($validation->fails())
                {
                
                    return Redirect::to('admin/login')->withInput()->withErrors($validation);
                }
                

                if(Auth::attempt(array('email' => $data['email'], 'password' => $data['password'])))
                {
                    Session::put('oxoniya_login', '1');
                    return Redirect::to('admin/dashboard');
                }
               
                
                $login_errors['errors'] = 'Login Failed';
                return Redirect::to('admin/login')
                        ->withInput()
                        ->withErrors($login_errors);
        }
        return view('admin/login');
    }
    
    public function logout()
    {
        Session::forget('oxoniya_login');
         return Redirect::to('admin/login');
    }
}