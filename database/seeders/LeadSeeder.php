<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Lead;
use App\Models\Organization;

class LeadSeeder extends Seeder
{
    public function run(): void
    {
        $organizations = Organization::all();

        foreach ($organizations as $org) {
            Lead::create([
                'org_id' => $org->id,
                'lead_name' => 'Rahul Verma',
                'company' => 'Startup X',
                'phone' => '9999999999',
                'status' => 'New',
            ]);

            Lead::create([
                'org_id' => $org->id,
                'lead_name' => 'Anita Sharma',
                'company' => 'Enterprise Y',
                'phone' => '8888888888',
                'status' => 'Contacted',
            ]);
			
			
			Lead::create([
                'org_id' => $org->id,
                'lead_name' => 'Priya Sen',
                'company' => 'Startup P',
                'phone' => '7777777777',
                'status' => 'New',
            ]);

            Lead::create([
                'org_id' => $org->id,
                'lead_name' => 'Ajit Nair',
                'company' => 'Enterprise Q',
                'phone' => '6666666666',
                'status' => 'Contacted',
            ]);
        }
    }
}

