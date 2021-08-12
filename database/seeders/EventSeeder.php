<?php

namespace Database\Seeders;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::create([
            'name' => 'Ilkommunity Data Mining',
            'datetime' => Carbon::create(2021, 8, 28, 13, 0, 0, 'Asia/Jakarta'),
            'link' => 'ipb.link/webinar-datamining',
            'desc' => "Merupakan seminar bertaraf nasional yang akan diisi oleh
            komunitas Data Mining dari Departemen Ilmu Komputer dengan mengundang
            pembicara yang ahli dibidangnya dengan tema \"Preparing Career in Data
            Science World\". Seminar ini memungkinkan peserta melakukan interaksi
            aktif bersama pembicara terkait topik-topik menarik mengenai IT
            khususnya Data Mining.",
        ]);
        Event::create([
            'name' => 'Ilkommunity Game Reality',
            'datetime' => Carbon::create(2021, 8, 29, 10, 0, 0, 'Asia/Jakarta'),
            'link' => 'ipb.link/webinar-gamedev',
            'desc' => "Merupakan seminar bertaraf nasional yang akan diisi oleh
            komunitas Game Development dari Departemen Ilmu Komputer dengan
            mengundang pembicara yang ahli dibidangnya yang mengusung tema
            \"Indonesia Synergizes to Go Overseas\". Seminar ini memungkinkan
            peserta melakukan interaksi aktif bersama pembicara terkait
            topik-topik menarik mengenai IT khususnya pada bidang Game Development.",
        ]);
        Event::create([
            'name' => 'Ilkommunity AgriUX',
            'datetime' => Carbon::create(2021, 9, 4, 10, 0, 0, 'Asia/Jakarta'),
            'link' => 'ipb.link/webinar-agriux',
            'desc' => "Merupakan seminar yang akan diisi oleh komunitas AgriUX
            di Departemen Ilmu Komputer dengan tema \"Interaksi Manusia Komputer
            Post-Pandemic di Dunia Kerja\" dan mengundang pembicara yang ahli
            dibidangnya. Seminar ini membahas tentang teknologi pada User
            Experience dan Design. Seminar ini memungkinkan peserta melakukan
            interaksi aktif bersama pembicara terkait topik-topik menarik
            mengenai IT khususnya pada bidang User Experience.",
        ]);
        Event::create([
            'name' => 'Ilkommunity Dev Talks',
            'datetime' => Carbon::create(2021, 9, 11, 13, 0, 0, 'Asia/Jakarta'),
            'link' => 'ipb.link/webinar-devtalks',
            'desc' => "Merupakan seminar yang akan diisi oleh komunitas Mobile
            Apps Developer dan IPB Web Development Community (IWDC) di Departemen
            Ilmu Komputer dengan mengundang pembicara yang ahli dibidangnya.
            Seminar ini membahas tentang teknologi pada web dan mobile apps.
            Seminar ini memungkinkan peserta melakukan interaksi aktif bersama
            pembicara terkait topik-topik menarik mengenai IT khususnya pada
            bidang Mobile Apps dan Web Development.",
        ]);
        Event::create([
            'name' => 'International Seminar',
            'datetime' => Carbon::create(2021, 9, 18, 13, 0, 0, 'Asia/Jakarta'),
            'link' => "ipb.link/seminar-internasional",
            'desc' => "An International Seminar attended by three notable
            professional speakers in their respective fields. Discussing various
            interesting topics regarding the application of Information Technology
            on Agro-Maritime concerns. Enables interaction among speakers and
            up to 300 webinar participants from around the world",
        ]);
        Event::create([
            'name' => 'Design System Workshop',
            'datetime' => Carbon::create(2021, 9, 5, 13, 0, 0, 'Asia/Jakarta'),
            'link' => "ipb.link/workshop-ux",
            'desc' => "Merupakan workshop yang akan diisi oleh komunitas AgriUX
            di Departemen Ilmu Komputer dengan mengundang pembicara yang ahli
            dibidangnya. Workshop ini membahas tentang teknologi pada User
            Experience dan Design. Seminar ini memungkinkan peserta melakukan
            interaksi aktif bersama pembicara terkait topik-topik menarik
            mengenai IT khususnya pada bidang User Experience",
        ]);
    }
}