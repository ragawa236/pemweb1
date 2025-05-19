<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Beasiswa extends Model
{
    use HasFactory;
    protected $table = 'beasiswas';
    protected $fillable = [
        'name',
        'description',
        'image',
    ];
}
