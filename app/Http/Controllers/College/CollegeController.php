<?php

namespace App\Http\Controllers\College;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Colleges;



class CollegeController extends Controller
{
    public function addCollege()
{
    return view('college.addCollege');
}
    function storeCollege(Request $request) {
        $colleges = new Colleges;
        //$table->id('college_id');
        $colleges->collegeName = $request->input('collegeName');
        $colleges->collegeAbbrivation = $request->input('collegeAbbrivation');
        $colleges->save();


        return redirect()->route('collegeList');
    }



}
