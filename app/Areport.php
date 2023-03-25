<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Areport extends Model
{
    protected $fillable = [
        'tipe', 'judul', 'deskripsi', 'media'
    ];
}
