<?php

namespace App\Database\Seeds;

use App\Models\OccupationModel;
use CodeIgniter\Database\Seeder;

class OneSeeder extends Seeder
{
  public function run()
  {
    $occupations = [
      ['Software Engineer', true],
      ['Data Scientist', true],
      ['Product Manager', true],
      ['UX Designer', true],
      ['DevOps Engineer', true],
      ['System Administrator', true],
      ['Network Engineer', true],
      ['Database Administrator', true],
      ['Security Analyst', true],
      ['Cloud Architect', true]
    ];
    $db = db_connect();
    $db->transBegin();
    $occupationData = [];
    foreach ($occupations as $occupation) {
      $occupationData[] = [
        'occupation_name' => $occupation[0],
        'is_active' => $occupation[1],
      ];
    }

    $occupationModel = new OccupationModel();
    if($occupationModel->insertBatch($occupationData)) {
      $db->transCommit();
      echo "Occupations seeded successfully.\n";
    } else {
      $db->transRollback();
      echo "Failed to seed occupations: " . implode(', ', $occupationModel->errors()) . "\n";
    }
    $db->close();
  }
}
