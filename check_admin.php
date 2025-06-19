<?php

require_once 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

echo "=== ADMIN ACCOUNTS CHECK ===\n";
$admins = Admin::all(['id', 'username', 'password']);

foreach ($admins as $admin) {
    echo "ID: {$admin->id} | Username: {$admin->username}\n";
    echo "Password Hash: " . substr($admin->password, 0, 30) . "...\n";
    echo "Hash Length: " . strlen($admin->password) . "\n";
    echo "Is Bcrypt: " . (password_get_info($admin->password)['algo'] !== null ? 'YES' : 'NO') . "\n";
    echo "---\n";
}

echo "\n=== PASSWORD TESTING ===\n";
$testAdmin = Admin::where('username', 'admin')->first();
if ($testAdmin) {
    $testPassword = 'admin123';
    echo "Testing password '{$testPassword}' for user 'admin':\n";
    echo "Hash::check result: " . (Hash::check($testPassword, $testAdmin->password) ? 'TRUE' : 'FALSE') . "\n";
    echo "password_verify result: " . (password_verify($testPassword, $testAdmin->password) ? 'TRUE' : 'FALSE') . "\n";
    
    // Test dengan semua kombinasi password yang mungkin
    $testPasswords = ['admin123', 'admin', 'password', '123456'];
    echo "\nTesting multiple passwords:\n";
    foreach ($testPasswords as $pwd) {
        $result = Hash::check($pwd, $testAdmin->password);
        echo "Password '{$pwd}': " . ($result ? 'MATCH' : 'NO MATCH') . "\n";
    }
}
