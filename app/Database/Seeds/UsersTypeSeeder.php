<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersTypeSeeder extends Seeder
{
    public function run()
    {
        // Definir los datos a insertar en la tabla 'users_type'
        $data = [
            [
                'name' => 'Administrador',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'User',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        // Insertar los datos en la tabla 'users_type'
        $this->db->table('users_type')->insertBatch($data);
    }
}
