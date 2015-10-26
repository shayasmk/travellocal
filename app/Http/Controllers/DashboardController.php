<?php namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Caffeinated\Shinobi\Models\Role;

class DashboardController extends Controller {
    public function index()
    {
        return View('/admin/dashboard');
    }
}