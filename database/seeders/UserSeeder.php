<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Organization;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Super Admin (Platform level)
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@example.com',
            'password' => Hash::make('12345'),
            'role' => 'super_admin',
            'org_id' => null,
        ]);

        // Organization users
        $organizations = Organization::all();

        foreach ($organizations as $org) {

            User::create([
                'name' => $org->name . ' Admin',
                'email' => strtolower($org->name) . 'admin@example.com',
                'password' => Hash::make('12345'),
                'role' => 'org_admin',
                'org_id' => $org->id,
            ]);

            User::create([
                'name' => $org->name . ' HR',
                'email' => strtolower($org->name) . 'hr@example.com',
                'password' => Hash::make('12345'),
                'role' => 'org_hr',
                'org_id' => $org->id,
            ]);

            User::create([
                'name' => $org->name . ' Sales',
                'email' => strtolower($org->name) . 'sales@example.com',
                'password' => Hash::make('12345'),
                'role' => 'org_sales',
                'org_id' => $org->id,
            ]);
        }
    }
}
