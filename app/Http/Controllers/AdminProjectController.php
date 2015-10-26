<?php namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;


class AdminProjectController extends Controller {
    public function index()
    {
        if(Input::has("data") )
        {
            $errorFlag = 0;
            $data = Input::get('data');
            
            $file = Input::file('image');
            
            $floors = Input::file('floor');
            
            $floor_title = Input::get('floor_title');
            
            $threeSixty = Input::file('three_sixty');
            
            $statuses = Input::file('status');
            
            $status_title = Input::get('status_title');
            
            $validation = $validator = Validator::make(
                        ['Name'             => $data['name'],
                         'Address'          => $data['address'],
                         'Location'         => $data['location'],
                         'Overview'         => $data['overview'],
                         'Project_status'   => $data['project_status'],
                         'Amenities'        => $data['amenities'],
                         'Latitude'         => $data['latitude'],
                         'Longitude'        => $data['longitude']
                         
                        ],
                        ['Name'             => 'required',
                         'Address'          => 'required',
                         'Location'         => 'required',
                         'Overview'         => 'required',
                         'Project_status'   => 'required',
                         'Amenities'        => 'required',
                         'Latitude'         => 'required',
                         'Longitude'        => 'required',
                         'image'            => 'mimes:jpeg,jpg,png'
                        ]
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
                
                if($threeSixty != '')
                {
                    $size2 = $threeSixty->getSize();
                    $error2 = $threeSixty->getError();
                    $fileMaxActual2 = ini_get('upload_max_filesize');

                    if(($size2 == '' || empty($size2)) && $error2 == 1)
                    {
                        $errorFlag2 = 1;
                        $errors->add('error3', 'Your 360 degree view file exceeds maximum upload size of '.$fileMaxActual);
                    }  
                }
                
                foreach($floors AS $key => $floor)
                {
                    if($floor != '')
                    {
                        
                        $size1 = $floor->getSize();
                        $error1 = $floor->getError();
                        $fileMaxActual1 = ini_get('upload_max_filesize');
                        if($floor_title[$key] == '')
                        {
                            $errorFlag = 1;
                            $errors->add('error10', 'One of your Uploaded Floor Plan file doesnot have a title');
                        
                        }
                        
                        if(($size1 == '' || empty($size1)) && $error1 == 1)
                        {
                            $errorFlag = 1;
                            $errors->add('error2', 'One of your floor plan file exceeds maximum upload size of '.$fileMaxActual);
                        }
                    }
                }
                
                foreach($statuses AS $key => $status)
                {
                    if($status != '')
                    {
                        $size2 = $status->getSize();
                        $error2 = $status->getError();
                        $fileMaxActual2 = ini_get('upload_max_filesize');

                        if($status_title[$key] == '')
                        {
                            $errorFlag = 1;
                            $errors->add('error10', 'One of your Uploaded status files doesnot have a title');
                        }

                        if(($size2 == '' || empty($size2)) && $error2 == 1)
                        {
                            $errorFlag = 1;
                            $errors->add('error2', 'One of your Status file exceeds maximum upload size of '.$fileMaxActual);
                        }
                    }
                }
            
            if ($validation->fails() || $errorFlag == 1)
                {
                
                    return Redirect::to('admin/project')->withInput()->withErrors($errors);
                }
                 
                if($file!= '')
                    {

                        $destinationPath = 'uploads/projects';

                        $fileExtension = $file->getClientOriginalExtension();
                        $fileName = date('YmdiHs').rand(11111,999999).'.'.$fileExtension;

                        $uploadSuccessTable = $file->move($destinationPath, $fileName);

                        $data['image_location'] = $fileName;

                    }
                    if($threeSixty!= '')
                    {

                        $destinationPath = 'uploads/three-sixty';

                        $fileExtension = $threeSixty->getClientOriginalExtension();
                        $fileName = date('YmdiHs').rand(11111,999999).'.'.$fileExtension;

                        $uploadSuccessTable = $threeSixty->move($destinationPath, $fileName);

                        $data['three_sixty_image'] = $fileName;

                    }
                    
                    $floorCount = 0 ;
                    $floorPlan = array();
                    foreach($floors AS $key => $floor)
                    {
                        if($floor!= '')
                        {
                            if($floor_title[$key] != '')
                            {
                                $destinationPath = 'uploads/project-floor-plan';

                                $fileExtension = $floor->getClientOriginalExtension();
                                $fileName = date('YmdiHs').rand(11111,999999).'.'.$fileExtension;

                                $uploadSuccessTable = $floor->move($destinationPath, $fileName);

                                $floorPlan[$floorCount]['image'] = $fileName;
                                $floorPlan[$floorCount]['image_title'] = $floor_title[$key];
                                $floorCount++;
                            }
                        }
                    }
                    
                    $statusCount = 0;
                    $statusArray = array();
                    foreach($statuses AS $key => $status)
                    {
                        if($status!= '')
                        {
                            if($status_title[$key] != '')
                            {
                                $destinationPath2 = 'uploads/project-status';

                                $fileExtension2 = $status->getClientOriginalExtension();
                                $fileName2 = date('YmdiHs').rand(11111,999999).'.'.$fileExtension2;

                                $uploadSuccessTable = $status->move($destinationPath2, $fileName2);

                                $statusArray[$statusCount]['image'] = $fileName2;
                                $statusArray[$statusCount]['image_title'] = $status_title[$key];
                                $statusCount++;
                            }
                        }
                    }
                    
                    
             
                $projectsTable = new \App\Model\Projects();
                $project = $projectsTable->insertData($data, $floorPlan, $statusArray);
                
                
                
                if($project)
                {
                    
                    $message['message'] = 'Successfully Saved';
                    return Redirect::to('admin/project')->withErrors($message);
                }
                else
                {
                    $message['message'] = 'Something went wrong';
                    return Redirect::to('admin/project')->withErrors($message);
                }
                
                
        }
        
        $albumTable = new \App\Model\Album();
//        $floorPlan = $albumTable->getAllAlbumsFloorPlanAsList();
//        $projectStatus = $albumTable->getAllAlbumProjectStatusList();
//        $data['floorPlan'] = $floorPlan;
//        $data['projectStatus'] = $projectStatus;
        return View('/admin/projects');
    }
    
    public function projectList()
    {
        $projectModel = new \App\Model\Projects();
        $projects = $projectModel->getAllProject();
        return View('/admin/project-list')->with('projects', $projects);
    }
    
    public function deleteProject($id)
    {
        $projectsTable = new \App\Model\Projects();
        $projects = $projectsTable->where("id", '=', $id)->first();
        $image = $projects->image_location;
        $imageLoc = "uploads/projects/".$image;
        $projectImage = $projectsTable->deleteData($id);
        if($projectImage)
        {
            if($image != '')
            {
                if (File::exists($imageLoc))
                {
                    File::delete($imageLoc);
                }
            }
            $message['message'] = 'Successfully Deleted';
            return Redirect::to('admin/project-list/')->withErrors($message);
        }
        else
        {
            $message['message'] = 'Cannot delete file';
            return Redirect::to('admin/project-list/')->withErrors($message);
        }
    }
    
    public function editProject($id)
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
        
        if(Input::has("data") )
        {
            $errorFlag = 0;
            $data = Input::get('data');
            $file = Input::file('image');
            
            $floors = Input::file('floor');
            
            $floor_title = Input::get('floor_title');
            
            $statuses = Input::file('status');
            
            $status_title = Input::get('status_title');
          
            $validation = $validator = Validator::make(
                        ['Name'             => $data['name'],
                         'Address'          => $data['address'],
                         'Location'         => $data['location'],
                         'Overview'         => $data['overview'],
                         'Project_status'   => $data['project_status'],
                         'Amenities'        => $data['amenities'],
                         'Latitude'         => $data['latitude'],
                         'Longitude'        => $data['longitude']
                         
                        ],
                        ['Name'             => 'required',
                         'Address'          => 'required',
                         'Location'         => 'required',
                         'Overview'         => 'required',
                         'Project_status'   => 'required',
                         'Amenities'        => 'required',
                         'Latitude'         => 'required',
                         'Longitude'        => 'required',
                         'image'            => 'mimes:jpeg,jpg,png'
                        ]
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
                if(isset($floors) && count($floors) > 0)
                {
                    foreach($floors AS $key => $floor)
                    {
                        if($floor != '')
                        {

                            $size1 = $floor->getSize();
                            $error1 = $floor->getError();
                            $fileMaxActual1 = ini_get('upload_max_filesize');
                            
                            if($floor_title[$key] == '')
                            {
                                $errorFlag = 1;
                                $errors->add('error10', 'One of your Uploaded Floor Plan file doesnot have a title');

                            }
                            
                            if(($size1 == '' || empty($size1)) && $error1 == 1)
                            {
                                $errorFlag = 1;
                                $errors->add('error2', 'One of your floor plan file exceeds maximum upload size of '.$fileMaxActual);
                            }
                        }
                    }
                }
                if(isset($statuses) && count($statuses) > 0)
                {
                    foreach($statuses AS $key => $status)
                    {
                        if($status != '')
                        {

                            $size2 = $status->getSize();
                            $error2 = $status->getError();
                            $fileMaxActual2 = ini_get('upload_max_filesize');
                            
                            if($status_title[$key] == '')
                            {
                                $errorFlag = 1;
                                $errors->add('error10', 'One of your Uploaded files doesnot have a title');
                            }

                            if(($size2 == '' || empty($size2)) && $error2 == 1)
                            {
                                $errorFlag = 1;
                                $errors->add('error2', 'One of your Status file exceeds maximum upload size of '.$fileMaxActual);
                            }
                        }
                    }
                }
             
            if ($validation->fails() || $errorFlag == 1)
                {
                
                    return Redirect::to('admin/project')->withInput()->withErrors($errors);
                }
                
                if($file!= '')
                {

                    $destinationPath = 'uploads/projects';

                    $fileExtension = $file->getClientOriginalExtension();
                    $fileName = date('YmdiHs').rand(11111,999999).'.'.$fileExtension;

                    $uploadSuccessTable = $file->move($destinationPath, $fileName);

                    $data['image_location'] = $fileName;
                }
                $floorCount = 0;
                $floorPLan = array();
                    foreach($floors AS $floor)
                    {
                        if($floor!= '')
                        {
                            if($floor_title[$key] != '')
                            {
                                $destinationPath = 'uploads/project-floor-plan';

                                $fileExtension = $floor->getClientOriginalExtension();
                                $fileName = date('YmdiHs').rand(11111,999999).'.'.$fileExtension;

                                $uploadSuccessTable = $floor->move($destinationPath, $fileName);

                                $floorPLan[$floorCount]['image'] = $fileName;
                                $floorPLan[$floorCount]['image_title'] = $floor_title[$key];
                                $floorCount++;
                            }
                        }
                    }
                    
                    $statusCount = 0;
                    $statusArray = array();
                    foreach($statuses AS $key => $status)
                    {
                        if($status!= '')
                        {
                            if($status_title[$key] != '')
                            {
                                $destinationPath2 = 'uploads/project-status';

                                $fileExtension2 = $status->getClientOriginalExtension();
                                $fileName2 = date('YmdiHs').rand(11111,999999).'.'.$fileExtension2;

                                $uploadSuccessTable = $status->move($destinationPath2, $fileName2);

                                $statusArray[$statusCount]['image'] = $fileName2;
                                $statusArray[$statusCount]['image_title'] = $status_title[$key];
                                $statusCount++;
                            }
                        }
                    }
             
                $projectsTable = new \App\Model\Projects();
                
                $project = $projectsTable->updateData($data, $floorPLan, $statusArray, $id);
                
                if($project)
                {
                    $message['message'] = 'Successfully Saved';
                    return Redirect::to('admin/edit-project/'.$id)->withErrors($message);
                }
                else
                {
                    $message['message'] = 'Something went wrong';
                    return Redirect::to('admin/edit-project/'.$id)->withErrors($message);
                }
                
                
        }
        $projectTable = new \App\Model\Projects();
        $project = $projectTable->selectCurrentProjectDet($id);
        if(count($project)<1)
        {
            return Redirect::to('admin/project-list/');
        }
        
        $projectStatusTable = new \App\Model\ProjectStatus();
        $projectStatus = $projectStatusTable->selectCurrentProjectStatusImages($id);
        
        $floorPlanTable = new \App\Model\ProjectFloorPlans();
        $floorPlan = $floorPlanTable->selectCurrentProjectFloorPlans($id);
       
        $projectDet = array();
        $projectDet['project'] = $project;
        $projectDet['project_status'] = $projectStatus;
        $projectDet['floor_plans'] = $floorPlan;
        return View('/admin/edit-project')->with('project', $projectDet);
    }
    
    public function deleteProjectFloors($projectID, $id)
    {
        $validator = Validator::make(
            ['projectID' => $projectID,
             'id'        => $id],
            ['projectID' => 'required|numeric',
             'id'        => 'required|numeric'
            ]
        );
        
        if ($validator->fails())
        {
            return View('no-permission');
        }
        
        
        $projectFloorsTable = new \App\Model\ProjectFloorPlans();
        $projectRow = $projectFloorsTable->where("id", "=", $id)->first();
         $imageURL  = $projectRow['image'];
       
        $project = $projectFloorsTable->deleteData($id);
        if($project)
        {
            if($imageURL != '')
            {
                $imageLoc = "uploads/project-floor-plan/".$imageURL;
                
                if (File::exists($imageLoc))
                {
                    File::delete($imageLoc);
                }
                
            }
            $message['message'] = 'Floor Plan successfully deleted';
        }
        else
        {
            $message['message'] = 'Something went wrong';
        }
        
        return Redirect::to('admin/edit-project/'.$projectID)->withErrors($message);
    }
    
    
    public function deleteProjectStatusImage($projectID, $id)
    {
        $validator = Validator::make(
            ['projectID' => $projectID,
             'id'        => $id],
            ['projectID' => 'required|numeric',
             'id'        => 'required|numeric'
            ]
        );
        
        if ($validator->fails())
        {
            return View('no-permission');
        }
        
        
        $projectStatusTable = new \App\Model\ProjectStatus();
        $projectRow = $projectStatusTable->where("id", "=", $id)->first();
         $imageURL  = $projectRow['image'];
       
        $project = $projectStatusTable->deleteData($id);
        if($project)
        {
            if($imageURL != '')
            {
                $imageLoc = "uploads/project-status/".$imageURL;
                
                if (File::exists($imageLoc))
                {
                    File::delete($imageLoc);
                }
                
            }
            $message['message'] = 'Status Image successfully deleted';
        }
        else
        {
            $message['message'] = 'Something went wrong';
        }
        
        return Redirect::to('admin/edit-project/'.$projectID)->withErrors($message);
    }
        
}