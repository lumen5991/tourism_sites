<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles; 
use Illuminate\Database\Eloquent\Model;

class TourismGuide extends Model
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'user',
        'description',
        'ifu',
        'languages'
    ];

    // Relation avec l'utilisateur
   // Dans votre modèle TourismGuide
public function user()
{
    return $this->belongsTo(User::class, 'user');
}

}
