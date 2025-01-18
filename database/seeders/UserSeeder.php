<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Enums\RolesEnum;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()
            ->create([
                'name' => 'User',
                'email' => 'user@example.com'
            ])
            ->roles(RolesEnum::User->value);

        User::factory()
            ->create([
                'name' => 'Vendor',
                'email' => 'vendor@example.com'
            ])
            ->roles(RolesEnum::Vendor->value);
            
        User::factory()
            ->create([
                'name' => 'Admin',
                'email' => 'admin@example.com'
            ])
            ->roles(RolesEnum::Admin->value);
    }
}
