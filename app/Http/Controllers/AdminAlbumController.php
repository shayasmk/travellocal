<?php namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;

class AdminAlbumController extends Controller {
    public function index()
    {
       if(Input::has("data") )
        {
           
            $errorFlag = 0;
            $data = Input::get('data');
            $file = Input::file('image');
           
            $validation = $validator = Validator::make(
                        ['Name'         => $data['name']],
                        ['Name'         => 'required']
                );
             $errors = $validation->errors();
                
             
                if($file!= '')
                {
                    $size = $file->getSize();
                    $error = $file->getError();
                    $fileMaxActual = ini_get('upload_max_filesize');

                    if(($size == '' || empty($size)) && $error == 1)
                    {
                        $errorFlag = 1;
                        $errors->add('error1', 'Your file exceeds maximum upload size of '.$fileMaxActual);
                    }
                }
                
             
            if ($validation->fails() || $errorFlag == 1)
                {
                
                    return Redirect::to('admin/album')->withInput()->withErrors($validation);
                }
                $i = 0;
                $image = array();
             
                if($file!= '')
                {
                    $destinationPath = 'uploads/album-image';

                    $fileExtension = $file->getClientOriginalExtension();
                    $fileName = date('YmdiHs').rand(11111,999999).'.'.$fileExtension;

                    $uploadSuccessTable = $file->move($destinationPath, $fileName);

                    $data['image'] = $fileName;
                    $i++;
                }
             
                $albumTable = new \App\Model\Album();
                $album = $albumTable->insertData($data);
                
                
                
                if($album)
                {
                    $message['message'] = 'Successfully Saved';
                    return Redirect::to('admin/album')->withErrors($message);
                }
                else
                {
                    $message['message'] = 'Something went wrong';
                    return Redirect::to('admin/album')->withErrors($message);
                }
                
                
        }
        return View('/admin/album');
    }
    
    public function albumList()
    {
        $albumModel = new \App\Model\Album();
        $albums = $albumModel->getAllAlbumsAlbum();
        return View('/admin/album-list')->with('albums', $albums);
    }
    
    public function floorPlanAlbumList()
    {
        $albumModel = new \App\Model\Album();
        $albums = $albumModel->getAllAlbumsFloorPlan();
        return View('/admin/floor-plan-album-list')->with('albums', $albums);
    }
    
    public function projectStatusAlbumList()
    {
        $albumModel = new \App\Model\Album();
        $albums = $albumModel->getAllAlbumsProjectStatus();
        return View('/admin/project-status-album-list')->with('albums', $albums);
    }
    
    public function eachAlbum($id)
    {
        $validator = Validator::make(
            ['id'        => $id],
            ['id'        => 'required|numeric'
            ]
        );
        
        if ($validator->fails())
        {
            return View('no-permission');
        }
        if(Input::hasFile("image") )
        {
          
            $errorFlag = 0;
            $data = Input::get('data');
            $file = Input::file('image');
           
             $validation = $validator = Validator::make(
                     ['Title'         => $data['title']],
                     ['Title'         => 'required']
                     );
             
               $errors = $validation->errors();
               
                if($file!= '')
                {
                    $size = $file->getSize();
                    $error = $file->getError();
                    $fileMaxActual = ini_get('upload_max_filesize');

                    if(($size == '' || empty($size)) && $error == 1)
                    {
                        $errorFlag = 1;
                        $errors->add('error1', 'Your file exceeds maximum upload size of '.$fileMaxActual);
                    }
                }
        
             if($file == '')
             {
                 $errorFlag = 1;
                 $errors->add('error2', 'File not uploaded');
             }
            if ($validation->fails() || $errorFlag == 1)
                {
                    return Redirect::to('admin/album/'.$id)->withInput()->withErrors($errors);
                }
              
                $i = 0;
                $image = array();
           
                if($file!= '')
                {

                    $destinationPath = 'uploads/album-file-images';

                    $fileExtension = $file->getClientOriginalExtension();
                    $fileName = date('YmdiHs').rand(11111,999999).'.'.$fileExtension;

                    $uploadSuccessTable = $file->move($destinationPath, $fileName);

                    $data['image'] = $fileName;
                    $i++;
                }
//         
             $data['album_id'] = $id;
                $albumImageTable = new \App\Model\AlbumImage();
                $album = $albumImageTable->insertData($data);
                
                
                
                if($album)
                {
                    $message['message'] = 'Successfully Saved';
                    return Redirect::to('admin/album/'.$id)->withErrors($message);
                }
                else
                {
                    $message['message'] = 'Something went wrong';
                    return Redirect::to('admin/album/'.$id)->withErrors($message);
                }
                
                
        }
        $albumImage = new \App\Model\AlbumImage();
        $album = $albumImage->getAllimagesForAlbum($id);
        $data['id'] = $id;
        $data['album'] = $album;
        return View('/admin/each-album')->with('data',$data);
    }
    
    public function eachFloorAlbum($id)
    {
        $validator = Validator::make(
            ['id'        => $id],
            ['id'        => 'required|numeric'
            ]
        );
        
        if ($validator->fails())
        {
            return View('no-permission');
        }
        if(Input::hasFile("image") )
        {
          
            $errorFlag = 0;
            $data = Input::get('data');
            $file = Input::file('image');
           
             $validation = $validator = Validator::make(
                     ['Title'         => $data['title']],
                     ['Title'         => 'required']
                     );
             
               $errors = $validation->errors();
               
                if($file!= '')
                {
                    $size = $file->getSize();
                    $error = $file->getError();
                    $fileMaxActual = ini_get('upload_max_filesize');

                    if(($size == '' || empty($size)) && $error == 1)
                    {
                        $errorFlag = 1;
                        $errors->add('error1', 'Your file exceeds maximum upload size of '.$fileMaxActual);
                    }
                }
        
             if($file == '')
             {
                 $errorFlag = 1;
                 $errors->add('error2', 'File not uploaded');
             }
            if ($validation->fails() || $errorFlag == 1)
                {
                    return Redirect::to('admin/add-floor-plans/'.$id)->withInput()->withErrors($errors);
                }
              
                $i = 0;
                $image = array();
           
                if($file!= '')
                {

                    $destinationPath = 'uploads/album-floor-plans';

                    $fileExtension = $file->getClientOriginalExtension();
                    $fileName = date('YmdiHs').rand(11111,999999).'.'.$fileExtension;

                    $uploadSuccessTable = $file->move($destinationPath, $fileName);

                    $data['image'] = $fileName;
                    $i++;
                }
                
                $albumFloorTable = new \App\Model\FloorAlbum();
                $data['floor_album_id'] = $id;
                $album = $albumFloorTable->insertData($data);
                
                if($album)
                {
                    $message['message'] = 'Successfully Saved';
                    return Redirect::to('admin/add-floor-plans/'.$id)->withErrors($message);
                }
                else
                {
                    $message['message'] = 'Something went wrong';
                    return Redirect::to('admin/add-floor-plans/'.$id)->withErrors($message);
                }
                
                
        }
        $albumFloorTable = new \App\Model\FloorAlbum();
        $album = $albumFloorTable->getAllimagesForAlbum($id);
        $data['id'] = $id;
        $data['album'] = $album;
        return View('/admin/each-floor-album')->with('data',$data);
    }
    
    public function eachStatusAlbum($id)
    {
        $validator = Validator::make(
            ['id'        => $id],
            ['id'        => 'required|numeric'
            ]
        );
        
        if ($validator->fails())
        {
            return View('no-permission');
        }
        if(Input::hasFile("image") )
        {
          
            $errorFlag = 0;
            $data = Input::get('data');
            $file = Input::file('image');
           
             $validation = $validator = Validator::make(
                     ['Title'         => $data['title']],
                     ['Title'         => 'required']
                     );
             
               $errors = $validation->errors();
               
                if($file!= '')
                {
                    $size = $file->getSize();
                    $error = $file->getError();
                    $fileMaxActual = ini_get('upload_max_filesize');

                    if(($size == '' || empty($size)) && $error == 1)
                    {
                        $errorFlag = 1;
                        $errors->add('error1', 'Your file exceeds maximum upload size of '.$fileMaxActual);
                    }
                }
        
             if($file == '')
             {
                 $errorFlag = 1;
                 $errors->add('error2', 'File not uploaded');
             }
            if ($validation->fails() || $errorFlag == 1)
                {
                    return Redirect::to('admin/add-project-status/'.$id)->withInput()->withErrors($errors);
                }
              
                $i = 0;
                $image = array();
           
                if($file!= '')
                {

                    $destinationPath = 'uploads/album-status-images';

                    $fileExtension = $file->getClientOriginalExtension();
                    $fileName = date('YmdiHs').rand(11111,999999).'.'.$fileExtension;

                    $uploadSuccessTable = $file->move($destinationPath, $fileName);

                    $data['image'] = $fileName;
                    $i++;
                }
//         
             $data['status_album_id'] = $id;
                $albumStatusImageTable = new \App\Model\StatusAlbum();
                $album = $albumStatusImageTable->insertData($data);
                
                
                
                if($album)
                {
                    $message['message'] = 'Successfully Saved';
                    return Redirect::to('admin/add-project-status/'.$id)->withErrors($message);
                }
                else
                {
                    $message['message'] = 'Something went wrong';
                    return Redirect::to('admin/add-project-status/'.$id)->withErrors($message);
                }
                
                
        }
        $albumStatusImageTable = new \App\Model\StatusAlbum();
        $album = $albumStatusImageTable->getAllimagesForAlbum($id);
        $data['id'] = $id;
        $data['album'] = $album;
        return View('/admin/each-status-album')->with('data',$data);
    }
    
    public function deleteAlbum($id, $type)
    {
        $albumTable = new \App\Model\Album();
        $albumRecord = $albumTable->where("id", '=', $id)->first();
        $image = $albumRecord->image;
        $imageLoc = "uploads/album-image/".$image;
        
        $album = $albumTable->deleteAlbum($id);
        $message = array();
        if($album)
        {
            if($image != '')
            {
                if (File::exists($imageLoc))
                {
                    File::delete($imageLoc);
                }
            }
            $message['message'] = 'Successfully Deleted';
            if($type='album')
            {
                return Redirect::to('admin/album-list')->withErrors($message);
            }
            else if($type=='floor')
            {
                return Redirect::to('floor-plan-album-list')->withErrors($message);
            }
            else
            {
                return Redirect::to('project-status-album-list')->withErrors($message);
            }
        }
        else
        {
            $message['message'] = 'Cannot delete file';
            if($type='album')
            {
                return Redirect::to('admin/album-list')->withErrors($message);
            }
            else if($type=='floor')
            {
                return Redirect::to('floor-plan-album-list')->withErrors($message);
            }
            else
            {
                return Redirect::to('project-status-album-list')->withErrors($message);
            }
        }
        
    }
    
    public function deletePhotoInAlbum($albumID, $id)
    {
        $albumImageTable = new \App\Model\AlbumImage();
        $albumImageRecord = $albumImageTable->where("id", '=', $id)->first();
        $image = $albumImageRecord->image;
        $imageLoc = "uploads/album-file-images/".$image;
        $albumImage = $albumImageTable->deleteData($id);
        if($albumImage)
        {
            if($image !== '')
            {
                if (File::exists($imageLoc))
                {
                    File::delete($imageLoc);
                }
            }
            $message['message'] = 'Successfully Deleted';
            return Redirect::to('admin/album/'.$albumID)->withErrors($message);
        }
        else
        {
            $message['message'] = 'Cannot delete file';
            return Redirect::to('admin/album/'.$albumID)->withErrors($message);
        }
    }
}