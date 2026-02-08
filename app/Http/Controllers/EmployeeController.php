<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
		return view('employees.index', compact('employees'));
    }
	
	public function create()
    {        
		return view('employees.create');
    }

    public function show($id)
    {
        $employee = Employee::findOrFail($id);
		return view('employees.show', compact('employee'));
    }

    public function store(Request $request)
	{
		$request->validate([
			'name' => 'required',
			'designation' => 'required',
			'phone' => 'required',
		]);

		Employee::create([
			'org_id' => auth()->user()->org_id,
			'name' => $request->name,
			'designation' => $request->designation,
			'phone' => $request->phone,
		]);

		return redirect('/employees')->with('success', 'Employee created');
	}
}

