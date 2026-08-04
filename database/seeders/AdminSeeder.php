<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $email = env('ADMIN_EMAIL', 'amrkfawzy@gmail.com');

        $user = User::firstOrNew([
            'email' => $email,
        ]);

        $user->name = env('ADMIN_NAME', 'Amr');
        $user->email_verified_at = $user->email_verified_at ?? now();

        if (! $user->exists) {
            $user->password = Hash::make(env('ADMIN_PASSWORD', '787898787899'));
        }

        $user->save();
    }
}
