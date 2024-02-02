<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable=[
        'event_id',
        'user_id',
        'quantity',
        'paid',
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function event()
    {
        return $this->belongsTo(Event::class,'event_id');
    }
}
