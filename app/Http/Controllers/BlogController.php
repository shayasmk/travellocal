<?php namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
class BlogController extends Controller {
    public function index()
    {
        return view('blog');
    }
}