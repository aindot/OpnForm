<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserWorkspace;
use App\Models\Workspace;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $initial_user = [
            'name' => 'admin',
            'email' => 'admin@opnforms.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];

        $initial_workspace = [
            'name' => 'default',
        ];

        $user_workspace = [
            'user_id' => 1,
            'workspace_id' => 1,
            'role' => 'admin',
        ];

        User::insert($initial_user);
        Workspace::insert($initial_workspace);
        UserWorkspace::insert($user_workspace);
    }
}
