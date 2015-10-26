<?php namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;


class AboutUsController extends Controller {
    public function index()
    {
        return View('/about-us');
    }
}