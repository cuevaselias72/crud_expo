<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'nombre_rol' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_rol' => 'usuario',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_rol' => 'maestro',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
