<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    /** @use HasFactory<\Database\Factories\ActionFactory> */
    use HasFactory;
    protected $fillable = [
        'ticket_id',
        'action_description',
        'action_date',
    ];
    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}
