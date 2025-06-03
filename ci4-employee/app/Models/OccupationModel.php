<?php

namespace App\Models;

class OccupationModel extends BaseModel
{
  protected $table = 'occupation_table_ms';
  protected $primaryKey = 'occupation_id';
  protected $returnType = 'App\Entities\Occupations';
  protected $allowedFields = [
    'occupation_name',
    'is_active',
  ];

  protected $validationRules = [
    'occupation_name' => [
      'label' => 'Occupation Name',
      'rules' => 'required',
    ],

  ];

  protected $tableAlias = [
    'name' => 'occupation_name',
    'active' => 'is_active',
  ];
}