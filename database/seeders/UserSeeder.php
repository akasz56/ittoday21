<?php

namespace Database\Seeders;

use App\Models\Amember;
use App\Models\Bmember;
use App\Models\Leader;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'nim' => 'G64190065',
            'institusi' => 'IPB University',
            'prov' => 'Jawa Barat',
            'kota' => 'Bogor',
            'email' => 'akaasyahnurfath@gmail.com',
            'phone' => '089608703393',
            'whatsapp' => '089608703393',
            'idline' => 'indo14id',
        ]);

        Amember::create([
            'name' => 'Admin Member 1 Name',
            'nim' => 'G64190065',
            'institusi' => 'IPB University',
            'prov' => 'Jawa Barat',
            'kota' => 'Bogor',
            'email' => 'akaasyahnurfath@gmail.com',
            'phone' => '089608703393',
            'whatsapp' => '089608703393',
            'idline' => 'indo14id',
        ]);

        Bmember::create([
            'name' => 'Admin Member 2 Name',
            'nim' => 'G64190065',
            'institusi' => 'IPB University',
            'prov' => 'Jawa Barat',
            'kota' => 'Bogor',
            'email' => 'akaasyahnurfath@gmail.com',
            'phone' => '089608703393',
            'whatsapp' => '089608703393',
            'idline' => 'indo14id',
        ]);

        // BITCH ------------------------------------------------------------------------------
        
        User::create([
            'name' => 'test',
            'email' => 'test@example.com',
            'password' => Hash::make('test123'),
            'jenis_lomba' => 'ux_1',
        ]);

        Leader::create([
            'name' => 'test Leader Name',
            'nim' => 'G64190065',
            'institusi' => 'Universitas Dramaga',
            'prov' => 'Jawa Barat',
            'kota' => 'Bogor',
            'email' => 'akaasyahn@gmail.com',
            'phone' => '085157100780',
            'whatsapp' => '085157100780',
            'idline' => 'kazios',
        ]);

        Amember::create([
            'name' => 'test Member 1 Name',
            'nim' => 'G64190065',
            'institusi' => 'Universitas Dramaga',
            'prov' => 'Jawa Barat',
            'kota' => 'Bogor',
            'email' => 'akaasyahn@gmail.com',
            'phone' => '085157100780',
            'whatsapp' => '085157100780',
            'idline' => 'kazios',
        ]);

        Bmember::create([
            'name' => 'test Member 2 Name',
            'nim' => 'G64190065',
            'institusi' => 'Universitas Dramaga',
            'prov' => 'Jawa Barat',
            'kota' => 'Bogor',
            'email' => 'akaasyahn@gmail.com',
            'phone' => '085157100780',
            'whatsapp' => '085157100780',
            'idline' => 'kazios',
        ]);
        }
    }
