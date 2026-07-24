<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class QuotesStateSeeder extends Seeder
{
    public function run()
    {
        // Definir los datos a insertar en la tabla 'quotes_state'
        $data = [
            [
                'name' => 'Pendiente de revisión',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'En revisión',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Aprobada',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Rechazada',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        // Insertar los datos en la tabla 'quotes_state'
        $this->db->table('quotes_state')->insertBatch($data);
    }
}
