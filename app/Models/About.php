<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'abouts'; // Pastikan ini sesuai dengan nama tabel di database


    protected $fillable = [
        'title',
        'description',
        'image',
    ];
}
