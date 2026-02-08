<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;

class LeadController extends Controller
{
    public function index()
	{
		$user = auth()->user();

		$leads = $user->role === 'super_admin'
			? Lead::all()
			: Lead::where('org_id', $user->org_id)->get();

		return view('leads.index', compact('leads'));
	}
	
	public function create()
    {        
		return view('leads.create');
    }

    public function show($id)
    { 
        $lead = Lead::findOrFail($id);
		return view('leads.show', compact('lead'));
		
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'lead_name' => 'required',
            'company' => 'required',
            'phone' => 'required',
            'status' => 'required',
        ]);

        $data['org_id'] = auth()->user()->role === 'super_admin'
            ? $request->org_id
            : auth()->user()->org_id;

        Lead::create($data);
		return redirect('/leads')->with('success', 'Lead created');
    }
}

