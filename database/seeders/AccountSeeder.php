<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Schema::enableForeignKeyConstraints();
        User::factory()->admin()->create([
            'username' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => '12345678'
        ]);
        User::factory()->user()->create([
            'username' => 'User',
            'email' => 'user@gmail.com',
            'password' => '12345678'
        ]);
    }
}
