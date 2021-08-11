<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'ticketID', 'email', 'phone', 'whatsapp', 'bundleID', 'event1ID', 'event2ID', 'event3ID', 'event4ID', 'event5ID', 'payMethod', 'payName', 'payFile', 'payStatus',];

    public function bundle()
    {
        return $this->hasOne(Bundle::class, 'id', 'bundleID');
    }
    
    public function event1()
    {
        return $this->hasOne(Bundle::class, 'id', 'event1ID');
    }
    
    public function event2()
    {
        return $this->hasOne(Bundle::class, 'id', 'event2ID');
    }
    
    public function event3()
    {
        return $this->hasOne(Bundle::class, 'id', 'event3ID');
    }
    
    public function event4()
    {
        return $this->hasOne(Bundle::class, 'id', 'event4ID');
    }
    
    public function event5()
    {
        return $this->hasOne(Bundle::class, 'id', 'event5ID');
    }
}
