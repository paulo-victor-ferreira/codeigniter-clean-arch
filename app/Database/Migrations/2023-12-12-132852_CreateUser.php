<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUser extends Migration
{
    private $tableName = "users";

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'SERIAL',
                'unsigned' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'unique'     => true,
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable($this->tableName);

        $this->forge->addColumn($this->tableName, [
            'created_at TIMESTAMP WITHOUT TIME ZONE DEFAULT CURRENT_TIMESTAMP',
            'updated_at TIMESTAMP WITHOUT TIME ZONE ',
            'deleted_at TIMESTAMP WITHOUT TIME ZONE ',
        ]);
    }

    public function down()
    {
        $this->forge->dropTable($this->tableName);
    }
}
