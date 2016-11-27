<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
      return view('home');
    }

    public function klass()
    {
      return view('klass');
    }

    public function student()
    {
      return view('student');
    }

    public function instructor()
    {
      // $teacher = App\Instructor::where('first_name', $instructor)->first();
      //
      //
      // return View::make('instructor')->with('instruc', $teacher);
      return view('instructor');
    }
    public function welcome()
    {
      return view('welcome');
    }
}
