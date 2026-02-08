<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

use App\Models\Organization;

class OrganizationSeeder extends Seeder
{
    public function run(): void
    {
        Organization::insert([
            ['name' => 'Tcs', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Infosys', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Wipro', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Capegemini', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
