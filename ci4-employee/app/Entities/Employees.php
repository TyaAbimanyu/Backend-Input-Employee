<?php

namespace App\Entities;
use CodeIgniter\Entity\Entity;

class Employees extends Entity
{
  protected $attributes = [
    'employee_id'    => null,
    'occupation_id' => '',
    'employee_identification_number' => '',
    'employee_name' => '',
    'employee_age' => 0,
    'employee_address' => '',
    'employee_place_of_birth' => '',
    'employee_date_of_birth' => '',
    'created_at' => null,
    'updated_at' => null,
    'deleted_at' => null
  ];

  protected $casts = [
    'employee_id' => 'integer',
    'occupation_id' => 'integer',
    'employee_identification_number' => 'string',
    'employee_name' => 'string',
    'employee_age' => 'integer',
    'employee_address' => 'string',
    'employee_place_of_birth' => 'string',
    'employee_date_of_birth' => 'datetime',
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
    'deleted_at' => 'datetime'
  ];
}