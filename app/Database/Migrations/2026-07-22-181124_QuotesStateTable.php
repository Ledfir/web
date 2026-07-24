<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class QuotesStateTable extends Migration
{
    public function up()
    {
        // Definir los campos de la tabla 'quotes_state'
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
                'comment' => 'Llave primaria de la tabla',
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
                'comment' => 'Nombre del estado de la cotización',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
                'comment' => 'Fecha de creación del registro',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
                'comment' => 'Fecha de actualización del registro',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
                'comment' => 'Fecha de eliminación del registro',
            ],
        ]);

        // Definir la llave primaria de la tabla 'quotes_state'
        $this->forge->addKey('id', true);

        // Crear la tabla 'quotes_state'
        $this->forge->createTable('quotes_state');
    }

    public function down()
    {
        // Eliminar la tabla 'quotes_state'
        $this->forge->dropTable('quotes_state');
    }
}
