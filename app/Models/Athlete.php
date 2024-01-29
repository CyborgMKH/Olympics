<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Game;
use App\Models\Country;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;

class Athlete extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;
    protected $fillable=[
        'name',
        'biography',
        'dob',
        'medal_gold',
        'medal_silver',
        'game_id',
        'country_id',
        'slug',
        'Participations',
        'first_game',

    ];
    
    public function games()
    {
        return $this->belongsToMany(Game::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class,'country_id');
    }
}
