<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Athlete;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;

class Game extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;
    protected $fillable=[
        'name',
    ];

    public function athlete()
    {
        return $this->belongsToMany(Athlete::class);
    }
    
    public function highlight()
    {
        return $this->hasMany(Highlight::class,'game_id','id');
    }
}
