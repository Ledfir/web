<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UsersTable extends Migration
{
    public function up(){
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
            'correo' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
                'unique' => true,
                'comment' => 'Correo electrónico del usuario',
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
                'comment' => 'Contraseña del usuario',
            ],
            'type' => [
                'type' => 'int',
                'constraint' => 1,
                'default' => 0,
                'comment' => 'Tipo de usuario (0 = user, 1 = admin)',
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
        // Definir la llave primaria de la tabla 'users'
        $this->forge->addKey('id', true);

        // Crear la tabla 'users' en la base de datos
        $this->forge->createTable('users');

        // Agregar llaves foráneas si es necesario (ejemplo: relación con otra tabla)
        $this->forge->addForeignKey('type', 'user_types', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        // Eliminar la tabla 'users' si existe
        $this->forge->dropTable('users');
    }
}
