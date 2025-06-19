<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buat akun admin default
        $admins = [
            [
                'username' => 'admin',
                'password' => Hash::make('admin123')
            ],
            [
                'username' => 'superadmin',
                'password' => Hash::make('superadmin123')
            ],
            [
                'username' => 'manager',
                'password' => Hash::make('manager123')
            ]
        ];

        foreach ($admins as $admin) {
            Admin::updateOrCreate(
                ['username' => $admin['username']], // Check by username
                $admin // Update or create with this data
            );
        }

        $this->command->info('Admin accounts created successfully!');
        $this->command->info('Available accounts:');
        $this->command->info('1. Username: admin | Password: admin123');
        $this->command->info('2. Username: superadmin | Password: superadmin123');
        $this->command->info('3. Username: manager | Password: manager123');
    }
}
