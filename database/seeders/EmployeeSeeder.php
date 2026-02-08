<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Employee;
use App\Models\Organization;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        $organizations = Organization::all();

        foreach ($organizations as $org) {
            Employee::create([
                'org_id' => $org->id,
                'name' => 'John Doe - ' . $org->name,
                'designation' => 'Software Engineer',
                'phone' => '9999999999',
            ]);

            Employee::create([
                'org_id' => $org->id,
                'name' => 'Jane Smith - ' . $org->name,
                'designation' => 'HR Manager',
                'phone' => '8888888888',
            ]);
        }
    }
}

