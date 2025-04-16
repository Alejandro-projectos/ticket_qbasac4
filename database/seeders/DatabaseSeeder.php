<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Cliente;
use App\Models\Tecnico;
use App\Models\Ticket;
use App\Models\Action;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Alejandro',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);
        Cliente::factory(10)->create();
        Tecnico::factory(10)->create();
        Ticket::factory(10)->create([
            'cliente_id' => Cliente::factory(),
            'tecnico_id' => Tecnico::factory(),
        ]);
        Action::factory(10)->create([
            'ticket_id' => Ticket::factory(),
        ]);
        // \App\Models\Cliente::factory(10)->create();
    }
}
