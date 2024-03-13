<?php

namespace App\Http\Controllers\Department;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use Illuminate\Support\Facades\DB;
use App\Models\Colleges;



class DepartmentController extends Controller
{
    public function addDepartment(Request $request){
        $colleges = Colleges::all();

    return view('department.addDepartment', compact('colleges'));
    }
    public function storeDepartment(Request $request)
            {
                $department = new Department();
                $department->departmentName = $request->input('departmentName');
                $department->departmentAbbrivation = $request->input('departmentAbbrivation');
                $department->college_name = $request->input('college_name');

                $department->save();

                return "Data saved successfully";

            }
}
