<?php namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller {
    public function sendEnquireMail()
    {
                $name = Input::get('name');
                $email = Input::get('email');
                 $mobile = Input::get('mobile');
                $message2 = Input::get('message');
                
                $result = array();
                $validation = $validator = Validator::make(
                        array('Name'        => $name,
                              'email'       => $email,
                              'Mobile'      => $mobile,
                              'Message'     => $message2),
                        array('Name'        => 'required',
                              'email'       => 'required|email',
                              'Mobile'      => 'required|numeric',
                              'Message'     => 'required')
                    );
                    if ($validation->fails())
                        {
                            $result['status'] = 'Failure';
                            $result['message'] = 'Fill all fields with valid values';
                            return response()->json($result);
                        }
                        
                        $data['name'] = $name;
                        $data['email'] = $email;
                        $data['mobile'] = $mobile;
                        $data['message2'] = $message2;
                        
                        
                        
                        Mail::send('mail.enquire', $data, function($message1) use($data)
                        {
                            $message1->from($data['email'], $data['name']);
                            $message1->to('info@oxoniyabuilders.com', 'Enquiry - Oxoniya')->subject('Enquiry - Oxoniya');
                        }); 
                        $result['status'] = 'Success';
                        $result['message'] = 'Contact Form Successfully Submitted';
                        return response()->json($result);
            
    }

}


?>