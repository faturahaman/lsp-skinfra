<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'deskripsi',
        'logo',
        'alamat',
        'telepon',
        'email',
    ];

    // Kalau ingin mengambil data profil pertama saja
    public static function firstProfile()
    {
        return self::first();
    }
}
