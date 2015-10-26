<?php namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class ReservationController extends Controller {
    public function index()
    {
//        if(Input::has("data") )
//        {
//            $errorFlag = 0;
//            $data = Input::get('data');
//            $file = Input::file('file');
//          
//           $amenities = Input::get('amenities');
//           
//           
//            $validation = $validator = Validator::make(
//                        ['Name'         => $data['name'],
//                         'Address'      => $data['address'],
//                         'City'         => $data['city'],
//                         'Country'      => $data['country'],
//                         'Telephone'    => $data['telephone'],
//                         'Email'        => $data['email'],
//                         'applied_for'  => $data['applied_for'],
//                          'image'       => $file
//                         
//                        ],
//                        ['Name'         => 'required',
//                         'Address'      => 'required',
//                         'City'         => 'required',
//                         'Country'      => 'required',
//                         'Telephone'    => 'required',
//                         'Email'        => 'required|email',
//                         'Country'      => 'required',
//                          'image'       => 'required|mimes:pdf,doc,docx'
//                        ]
//                );
//             $errors = $validation->errors();
//             
//                 if($file!= '')
//                {
//                    $size = $file->getSize();
//                    $error = $file->getError();
//                    $fileMaxActual = ini_get('upload_max_filesize');
//
//                    if(($size == '' || empty($size)) && $error == 1)
//                    {
//                        $errorFlag = 1;
//                        $errors->add('error1', 'Your file exceeds maximum upload size of '.$fileMaxActual);
//                    }
//                }
//             
//        
//            
//            
//            if ($validation->fails() || $errorFlag == 1)
//                {
//                
//                    return Redirect::to('/career')->withInput()->withErrors($validation);
//                }
//               
//                if($file!= '')
//                {
//
//                    $destinationPath = 'uploads/careers';
//
//                    $fileExtension = $file->getClientOriginalExtension();
//                    $fileName = date('YmdiHs').rand(11111,999999).'.'.$fileExtension;
//
//                    $uploadSuccessTable = $file->move($destinationPath, $fileName);
//
//                    $data['file_location'] = $fileName;
//                   
//                }
//             
//                $careersTable = new \App\Model\Career();
//                $career = $careersTable->insertData($data);
//                
//                
//                
//                if($career)
//                {
//                    $message['message'] = 'Successfully Saved';
//                    return Redirect::to('/career')->withErrors($message);
//                }
//                else
//                {
//                    $message['message'] = 'Something went wrong';
//                    return Redirect::to('/career')->withErrors($message);
//                }
//                
//                
//        }
        return View('reservation');
    }
}