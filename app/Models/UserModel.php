<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserModel extends Authenticatable
{
    use HasFactory, Notifiable;

    // Atribut yang bisa diisi secara massal
    protected $fillable = [
        'username',
        'nama',
        'password',
        'level_id',
    ];

    // Atribut yang harus disembunyikan
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Definisikan relasi dengan model Level
    public function level()
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }

    // Casting attribute
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
