<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create users first
        $users = User::factory(env('MAX_USER_SEED'))->create();

        // Get the roles
        $adminRole = Role::where('role_name', 'A')->first();
        $contributorRole = Role::where('role_name', 'C')->first();
        $subscriberRole = Role::where('role_name', 'S')->first();

        // Assign all roles to the admin user
        $randomUser = $users->random();
        $randomUser->roles()->attach($adminRole);
        $randomUser->roles()->attach($contributorRole);
        $randomUser->roles()->attach($subscriberRole);

        foreach ($users as $user) {
            // Test if user already is admin
            if ($user->id !== $randomUser->id) {
                $roles = collect([$contributorRole, $subscriberRole])
                    ->shuffle()
                    ->take(rand(1, 2));
                $user->roles()->attach($roles);
            }
        }
    }
}
