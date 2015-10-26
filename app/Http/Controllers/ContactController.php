<?php namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller {
    public function index()
    {
//        if(Input::has("data"))
//            {
//                $data = Input::get('data');
//                
//                $validation = $validator = Validator::make(
//                        array('Name'        => $data['name'],
//                              'email'       => $data['email'],
//                              'Telephone'   => $data['telephone'],
//                              'Message'     => $data['description']),
//                        array('Name'        => 'required',
//                              'email'       => 'required|email',
//                              'Telephone'   => 'required',
//                              'Message'     => 'required')
//                    );
//                    if ($validation->fails())
//                        {
//                            return Redirect::to('contact')->withInput()->withErrors($validation);
//                        }
//                        
//                        Mail::send('mail.contact', $data, function($message1) use($data)
//                        {
//                            $message1->from($data['email'], $data['name']);
//                            $message1->to('info@oxoniyabuilders.com', 'Contact - Oxoniya')->subject('Contact - Oxoniya');
//                        }); 
//                        $validation1['message'] = 'Contact Form Successfully Submitted';
//                        return Redirect::to('contact')->withErrors($validation1);
//            }
        return View('contact');
    }
}