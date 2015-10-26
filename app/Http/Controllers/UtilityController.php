<?php namespace App\Http\Controllers;

class UtilityController extends Controller {
    public function buyersGuide()
    {
        return View('buyers-guide');
    }
    
    public function loanCalculator()
    {
        return View('loan-calulator');
    }
    
    public function emiCalculator()
    {
        return View('emi-calculator');
    }
}