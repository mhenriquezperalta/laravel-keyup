<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function index()
    {
        return view('Employee.index');
    }

    function showEmployee(Request $request){
        $employee = User::all();

        if($request->keyword <> ''){
            $employee = User::where('name', 'like', '%'.$request->keyword.'%')->get();
        }

        return response()->json([
            'employees' => $employee
        ]);
    }
}
