<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Definir los datos a insertar en la tabla 'users'
        $data = [
            [
                'name' => 'Aflores',
                'correo' => 'aangel19_98@hotmail.com',
                'password' => password_hash('Patito13', PASSWORD_DEFAULT),
                'type' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'User',
                'correo' => 'user@example.com',
                'password' => password_hash('User123', PASSWORD_DEFAULT),
                'type' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        // Insertar los datos en la tabla 'users'
        $this->db->table('users')->insertBatch($data);
    }
}
