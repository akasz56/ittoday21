<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@ittoday.id',
            'password' => Hash::make('admin123'),
        ]);
        
        User::create([
            'name' => 'test',
            'email' => 'test@example.com',
            'password' => Hash::make('test123'),
        ]);

        // User::create([
        //     'name' => 'admin',
        //     'email' => 'admin@ittoday.id',
        //     'password' => Hash::make('kest4r11tt0day'),
        // ]);
        }
    }
