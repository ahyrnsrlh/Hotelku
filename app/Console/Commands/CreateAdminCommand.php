<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class CreateAdminCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:create 
                            {username? : Username for the admin}
                            {password? : Password for the admin}
                            {--force : Force create without confirmation}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new admin account';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('🏨 Creating new admin account for HotelKu');
        $this->line('━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━');

        // Get username
        $username = $this->argument('username') ?: $this->ask('👤 Enter admin username');
        
        // Validate username
        if (empty($username)) {
            $this->error('❌ Username cannot be empty!');
            return 1;
        }

        // Check if admin already exists
        $existingAdmin = Admin::where('username', $username)->first();
        if ($existingAdmin && !$this->option('force')) {
            if (!$this->confirm("⚠️  Admin '{$username}' already exists. Do you want to update the password?")) {
                $this->info('Operation cancelled.');
                return 0;
            }
        }

        // Get password
        $password = $this->argument('password') ?: $this->secret('🔒 Enter admin password (min 6 characters)');
        
        // Validate password
        if (strlen($password) < 6) {
            $this->error('❌ Password must be at least 6 characters long!');
            return 1;
        }

        try {
            // Create or update admin
            $admin = Admin::updateOrCreate(
                ['username' => $username],
                ['password' => Hash::make($password)]
            );

            $this->info('━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━');
            $this->info('✅ Admin account created/updated successfully!');
            $this->line('');
            $this->info("👤 Username: {$username}");
            $this->info("🔒 Password: {$password}");
            $this->line('');
            $this->info('🔗 Login URL: /admin/login');
            $this->info('━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━');

            return 0;
        } catch (\Exception $e) {
            $this->error('❌ Failed to create admin account: ' . $e->getMessage());
            return 1;
        }
    }
}
