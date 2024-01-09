<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Visor;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

            $user = new User();
            $user->name = 'Adolfo Alvarez';
            $user->email = 'asalvarez@pjud.cl';
            $user->password = date('dmy');
            $user->save();

            $visor = new Visor();
            $visor->ip = '10.130.161.150';
            $visor->name = 'Equipo Nicolas Ruminot';
            $visor->save();

            $visor2 = new Visor();
            $visor2->ip = '10.130.161.140';
            $visor2->name = 'Equipo Adolfo Alvarez';
            $visor2->save();

            $visor2 = new Visor();
            $visor2->ip = '127.0.0.1';
            $visor2->name = 'Maquina Local';
            $visor2->save();

    }
}
