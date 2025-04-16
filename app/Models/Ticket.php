<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    /** @use HasFactory<\Database\Factories\TicketFactory> */
    use HasFactory;
    protected $fillable = [
        'cliente_id',
        'tecnico_id',
        'descripcion',
        'estado',
        'prioridad',
        'fecha_creacion',
        'fecha_cierre',
    ];
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
    public function tecnico()
    {
        return $this->belongsTo(Tecnico::class);
    }
    public function actions()
    {
        return $this->hasMany(Action::class);
    }
}
