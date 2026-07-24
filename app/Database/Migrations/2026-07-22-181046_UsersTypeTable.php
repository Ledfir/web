<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UsersTypeTable extends Migration
{
    public function up()
    {
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
                'comment' => 'Nombre del usuario',
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

        // Definir la llave primaria de la tabla 'users_type'
        $this->forge->addKey('id', true);

        // Crear la tabla 'users_type'
        $this->forge->createTable('users_type');
    }

    public function down()
    {
        // Eliminar la tabla 'users_type' si existe
        $this->forge->dropTable('users_type');
    }
}
