<?php

namespace Database\Seeders;

use App\Models\Amember;
use App\Models\Bmember;
use App\Models\Leader;
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
            'jenis_lomba' => 'hack',
        ]);

        Leader::create([
            'name' => 'Admin Leader Name',
        ]);

        Amember::create([
            'name' => 'Admin Member 1 Name',
        ]);

        Bmember::create([
            'name' => 'Admin Member 2 Name',
        ]);
        
        User::create([
            'name' => 'test',
            'email' => 'test@example.com',
            'password' => Hash::make('test123'),
            'jenis_lomba' => 'ux_1',
        ]);

        Leader::create([
            'name' => 'test Leader Name',
        ]);

        Amember::create([
            'name' => 'test Member 1 Name',
        ]);

        Bmember::create([
            'name' => 'test Member 2 Name',
        ]);

        // User::create([
        //     'name' => 'admin',
        //     'email' => 'admin@ittoday.id',
        //     'password' => Hash::make('kest4r11tt0day'),
        //     'jenis_lomba' => Hash::make('kest4r11tt0day'),
        // ]);
        }
    }
