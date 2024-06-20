<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biblioteca extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'ubicacion', 'descripcion'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
