<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    /** @use HasFactory<\Database\Factories\ClienteFactory> */
    use HasFactory;
    protected $fillable = [
        'nombre',
        'email',
        'direccion',
        'telefono',
    ];
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
