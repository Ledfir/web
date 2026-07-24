<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class QuoteSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'token' => 'COT-001',
                'name' => 'Cliente prueba',
                'email' => 'prueba@correo.com',
                'phone' => '1234567890',
                'company' => 'Empresa prueba',
                'message' => 'Mensaje de prueba',
                'state' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ];
        $this->db->table('quotes')->insertBatch($data);
    }
}
