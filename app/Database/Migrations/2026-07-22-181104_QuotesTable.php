<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class QuotesTable extends Migration
{
    public function up()
    {
        // Definir los campos de la tabla 'quotes'
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
                'comment' => 'Llave primaria de la tabla',
            ],
            'token' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
                'comment' => 'Token único para identificar la cotización, ejemplo "Q-123456"',
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
                'comment' => 'Nombre de la cotización',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
                'comment' => 'Correo electrónico del cliente',
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => true,
                'comment' => 'Número de teléfono del cliente',
            ],
            'company' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
                'comment' => 'Nombre de la empresa del cliente',
            ],
            'message' => [
                'type' => 'TEXT',
                'null' => true,
                'comment' => 'Mensaje adicional del cliente',
            ],
            'state' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 0,
                'comment' => 'Estado de la cotización',
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

        // Definir la llave primaria de la tabla 'quotes'
        $this->forge->addKey('id', true);

        // Crear la tabla 'quotes'
        $this->forge->createTable('quotes');

        // Agregar llaves foráneas si es necesario (ejemplo: relación con otra tabla)
        $this->forge->addForeignKey('state', 'quotes_state', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        // Eliminar la tabla 'quotes' si existe
        $this->forge->dropTable('quotes');
    }
}
