<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model
{
    /** @use HasFactory<\Database\Factories\TecnicoFactory> */
    use HasFactory;
    protected $fillable = [
        'nombre',
        'email',
        'especialidad',
    ];
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
