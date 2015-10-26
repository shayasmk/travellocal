<?php namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
/**
 * Description of AdminCareerController
 *
 * @author optimus
 */
class AdminCareerController extends Controller {
    public function careerList()
    {
        $careerModel = new \App\Model\Career();
        $careers = $careerModel->getAllCareers();
        return View('/admin/career-list')->with('careers', $careers);
        
    }
}
