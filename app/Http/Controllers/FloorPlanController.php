<?php namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
class FLoorPlanController extends Controller {
    public function photoAlbum($id)
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
        $albumImageTable = new \App\Model\FloorAlbum();
        $images = $albumImageTable->getAllImagesForAlbum($id);
//        if(count($images)<1)
//        {
//            return Redirect::to('projects/ongoing');
//        }
        return View('photos-in-floor-plans')->with('images', $images);
    }
}