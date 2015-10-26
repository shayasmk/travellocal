<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use Illuminate\Foundation\Application;
Route::filter('adminAuth', function()
{
    
    if (!Auth::check() || !Session::get('oxoniya_login') || Session::get('oxoniya_login')!='1') 
    {
        return Redirect::to('/admin/login');
    }
    
});

//App::missing(function($exception)
//{
//    return View('no-permission');
//});
Route::group(array('prefix' => ''), function(){
    Route::get('/', 'IndexController@index');
    Route::get('/error', 'IndexController@index');
    Route::get('/error1', 'IndexController@index');

    Route::get('home', 'HomeController@index');

    Route::get('contact', 'ContactController@index');
    Route::post('contact', 'ContactController@index');
    Route::get('about-us', 'AboutUsController@index');
    Route::get('reservation', 'ReservationController@index');
    Route::post('career', 'CareersController@index');
    Route::get('blog', 'BlogController@index');
    Route::get('room', 'RoomController@index');
    Route::get('single', 'SingleController@index');
    Route::get('floor-plan/{id}', 'FloorPlanController@photoAlbum');
    Route::post('get-floor-plan-images', 'ProjectsController@getFloorPlanImages');
    Route::post('get-project-status-images', 'ProjectsController@getStatusImages');
    Route::get('all-photos', 'GalleryController@galleryAllPhotos');
    Route::get('/video', 'VideoController@index');
    Route::get('/utility/loan-calculator', 'UtilityController@loanCalculator');
    Route::get('/utility/emi-calculator', 'UtilityController@emiCalculator');
    Route::get('/utility/buyers-guide', 'UtilityController@buyersGuide');
    Route::get('/projects/ongoing', 'ProjectsController@ongoing');
    Route::get('/projects/ready-to-occupy', 'ProjectsController@readyToOccupy');
    Route::get('/projects/completed', 'ProjectsController@completed');
    Route::get('/admin/login','AuthController@login');
    Route::post('/admin/login','AuthController@login');
    Route::post('/get-floor-plans', 'GalleryController@getFloorPlans');
    
    Route::post('/mail-enquiry', 'MailController@sendEnquireMail');
    
    Route::get('/admin',array('before' => 'adminAuth',
                'uses' => 'DashboardController@index'
                ));
    Route::get('/admin/dashboard',array('before' => 'adminAuth',
                'uses' => 'DashboardController@index'
                ));
    Route::get('/admin/album',array('before' => 'adminAuth',
                'uses' => 'AdminAlbumController@index'
                ));
    Route::post('/admin/album',array('before' => 'adminAuth',
                'uses' => 'AdminAlbumController@index'
                ));
    Route::get('/admin/album-list',array('before' => 'adminAuth',
                'uses' => 'AdminAlbumController@albumList'
                ));
    Route::get('/admin/floor-plan-album-list',array('before' => 'adminAuth',
                'uses' => 'AdminAlbumController@floorPlanAlbumList'
                ));
    Route::get('/admin/project-status-album-list',array('before' => 'adminAuth',
                'uses' => 'AdminAlbumController@projectStatusAlbumList'
                ));
    Route::get('/admin/album/{id}',array('before' => 'adminAuth',
                'uses' => 'AdminAlbumController@eachAlbum'
                ));
    Route::get('/admin/add-floor-plans/{id}',array('before' => 'adminAuth',
                'uses' => 'AdminAlbumController@eachFloorAlbum'
                ));
    Route::get('/admin/add-project-status/{id}',array('before' => 'adminAuth',
                'uses' => 'AdminAlbumController@eachStatusAlbum'
                ));
    Route::post('/admin/album/{id}',array('before' => 'adminAuth',
                'uses' => 'AdminAlbumController@eachAlbum'
                ));

    Route::post('/admin/add-floor-plans/{id}',array('before' => 'adminAuth',
                'uses' => 'AdminAlbumController@eachFloorAlbum'
                ));
    Route::post('/admin/add-project-status/{id}',array('before' => 'adminAuth',
                'uses' => 'AdminAlbumController@eachStatusAlbum'
                ));

    Route::get('/admin/project',array('before' => 'adminAuth',
                'uses' => 'AdminProjectController@index'
                ));
    Route::post('/admin/project',array('before' => 'adminAuth',
                'uses' => 'AdminProjectController@index'
                ));
    Route::get('/admin/project-list',array('before' => 'adminAuth',
                'uses' => 'AdminProjectController@projectList'
                ));
    Route::get('/admin/career-list',array('before' => 'adminAuth',
                'uses' => 'AdminCareerController@careerList'
                ));
    Route::get('/admin/delete-album/{id}/{type}',array('before' => 'adminAuth',
                'uses' => 'AdminAlbumController@deleteAlbum'
                ));
    Route::get('/admin/delete-each-photo-in-album/{albumid}/{id}',array('before' => 'adminAuth',
                'uses' => 'AdminAlbumController@deletePhotoInAlbum'
                ));
    Route::get('/admin/delete-project/{id}',array('before' => 'adminAuth',
                'uses' => 'AdminProjectController@deleteProject'
                ));
    Route::get('/admin/edit-project/{id}',array('before' => 'adminAuth',
                'uses' => 'AdminProjectController@editProject'
                ));
    Route::post('/admin/edit-project/{id}',array('before' => 'adminAuth',
                'uses' => 'AdminProjectController@editProject'
                ));

    Route::get('/admin/delete-floor/{projectID}/{id}',array('before' => 'adminAuth',
                'uses' => 'AdminProjectController@deleteProjectFloors'
                ));
    Route::get('/admin/delete-status-image/{projectID}/{id}',array('before' => 'adminAuth',
                'uses' => 'AdminProjectController@deleteProjectStatusImage'
                ));
    Route::get('/admin/logout',array('before' => 'adminAuth',
                'uses' => 'AuthController@logout'
                ));
    Route::get('/admin/layout', function(){
                    return View('/layouts/index-header');
                });
    Route::get('/test-header', function(){
                    return View('/layouts/test-header');
                });
    
    Route::get('/g','AuthController@g');
});
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
