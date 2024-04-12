<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaSite extends Model
{
    use HasFactory;

    protected $fillable = [
        'tourist_site',
        'path',
        'type',
    ];

    public function touristSite()
    {
        return $this->belongsTo(TouristSite::class);
    }
    
}
