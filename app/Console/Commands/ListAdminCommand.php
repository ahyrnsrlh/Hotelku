<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Admin;

class ListAdminCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List all admin accounts';

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
        $this->info('🏨 HotelKu Admin Accounts');
        $this->line('━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━');

        $admins = Admin::all();

        if ($admins->isEmpty()) {
            $this->warn('❌ No admin accounts found!');
            $this->info('💡 Create a new admin account using: php artisan admin:create');
            return 0;
        }

        $headers = ['ID', 'Username', 'Created'];
        $rows = [];

        foreach ($admins as $admin) {
            $rows[] = [
                $admin->id,
                $admin->username,
                'Available' // Since no timestamps in current table
            ];
        }

        $this->table($headers, $rows);

        $this->line('');
        $this->info("📊 Total admin accounts: {$admins->count()}");
        $this->info('🔗 Admin login URL: /admin/login');
        $this->line('━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━');

        return 0;
    }
}
