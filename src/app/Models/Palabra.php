<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Palabra extends Model
{
    use HasFactory;

    /**
     * Los atributos que se pueden asignar masivamente
     */
    protected $fillable = [
        'palabra',
    ];
}
