<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function getHome()
    {
      return view('frontend/home');
    }
    public function getDepartments()
    {
      return view('frontend/departments');
    }
    public function getDoctors()
    {
      return view('frontend/doctors');
    }
    public function getAboutus()
    {
      return view('frontend/aboutus');
    }
}
