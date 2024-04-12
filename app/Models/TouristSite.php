<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TouristSite extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'location',
        'category',
        'location_latitude',
        'location_longitude',
        'status' ,
    ];

    // Relation avec la table 'locations'
    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    // Relation avec la table 'categories'
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function mediaSites()
{
    return $this->hasMany(MediaSite::class);
}

}

