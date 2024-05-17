<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'nama_lengkap' => 'nama',
            'email' => 'admin@admin.com',
            'jenis_kelamin' => 'Laki-laki',
            'tanggal_lahir' => '2000-01-01',
            'no_hp' => '081234567890',
            'is_admin' => '1',
            'last_login' => '1',
            'is_active' => '1',
            'password' => bcrypt('123'),
        ]); 
    }
    
}
