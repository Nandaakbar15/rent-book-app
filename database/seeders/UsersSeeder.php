<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => "udin",
            "passsword" => Hash::make('udin1234'),
            "phone" => "08181234566",
            "address" => "Test Alamat",
            'role_id' => 2
        ]);
    }
}
