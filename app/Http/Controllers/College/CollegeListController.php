<?php

namespace App\Http\Controllers\College;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Colleges;

class CollegeListController extends Controller
{
    function collegeList(){
        $list = colleges::all();

        return view('college.collegeList', compact('list'));
    }
}
