<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class IntialDatabase extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'employee_id' => [
        'type' => 'BIGINT',
        'auto_increment' => true,
      ],
      'occupation_id' => [
        'type' => 'BIGINT',
        'unique' => true,
        'unsigned' => true,
      ],
      'employee_identification_number' => [
        'type' => 'VARCHAR',
        'constraint' => 50,
      ],
      'employee_name' => [
        'type' => 'VARCHAR',
        'constraint' => 100,
      ],
      'employee_age' => [
        'type' => 'INT',
        'constraint' => 3,
      ],
      'employee_address' => [
        'type' => 'TEXT',
      ],
      'employee_place_of_birth' => [
        'type' => 'VARCHAR',
        'constraint' => 100,
      ],
      'employee_date_of_birth' => [
        'type' => 'DATE',
      ],
      'created_at' => [
        'type' => 'DATETIME',
      ],
      'updated_at' => [
        'type' => 'DATETIME'
      ],
      'deleted_at' => [
        'type' => 'DATETIME',
        'null' => true
      ]
    ]);
    $this->forge->addKey('employee_id', true);
    $this->forge->createTable('employee_table_ms', true);

    // Create occupation table
    $this->forge->addField([
      'occupation_id' => [
        'type' => 'BIGINT',
        'auto_increment' => true,
      ],
      'occupation_name' => [
        'type' => 'VARCHAR',
        'constraint' => 100,
      ],
      'is_active' => [
        'type' => 'BOOLEAN',
      ],
      'created_at' => [
        'type' => 'DATETIME',
      ],
      'updated_at' => [
        'type' => 'DATETIME'
      ],
      'deleted_at' => [
        'type' => 'DATETIME',
        'null' => true
      ]
    ]);
    $this->forge->addKey('occupation_id', true);
    $this->forge->createTable('occupation_table_ms', true);
  }

  public function down()
  {
    $this->forge->dropTable('employee_table_ms', true);
    $this->forge->dropTable('occupation_table_ms', true);
  }
}
