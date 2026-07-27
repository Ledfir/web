<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ConfigTable extends Migration
{
    public function up()
    {
        // Definir los campos de la tabla 'config'
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
                'comment' => 'Llave primaria de la tabla',
            ],
            'key' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
                'comment' => 'Clave de configuración',
            ],
            'value' => [
                'type' => 'TEXT',
                'constraint' => 1000,
                'null' => true,
                'comment' => 'Valor de configuración',
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
        $this->forge->addKey('id', true);
        $this->forge->createTable('config');
    }

    public function down()
    {
        // Eliminar la tabla 'config'
        $this->forge->dropTable('config');
    }
}
