<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'slug',
        'konten',
        'gambar',
    ];
     public function getRouteKeyName()
    {
        return 'slug';
    }
}
