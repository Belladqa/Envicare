<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PDF extends Model
{
    protected $fillable = [
        'tipe', 'judul', 'deskripsi', 'media'
    ];
}
