<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'titulo',
        'contenido',
        'imagen',
        'tipo',
        'autor_id',
        'created_at',
        'updated_at'
    ];
}
