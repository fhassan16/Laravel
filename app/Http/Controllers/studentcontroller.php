<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentcontroller extends Controller
{
    //
    function showStudents(){
        return view ('students');
    }
}
