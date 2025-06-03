<?php

namespace App\Models;

class EmployeeModel extends BaseModel
{
  protected $table = 'employee_table_ms';
  protected $primaryKey = 'employee_id';
  protected $returnType = 'App\Entities\Employees';
  protected $useSoftDeletes = true;
  protected $allowedFields = [
		'occupation_id',
    'employee_identification_number',
    'employee_name',
    'employee_age',
    'employee_address',
    'employee_place_of_birth',
    'employee_date_of_birth',
  ];

  protected $validationRules = [
		'occupation_id' => [
			'label' => 'Employee Occupation',
			'rules' => 'required',
    ],
    'employee_identification_number' => [
			'label' => 'Employee Identification Number',
			'rules' => 'required',
    ],
    'employee_name' => [
			'label' => 'Employee Name',
			'rules' => 'required',
    ],
    'employee_age' => [
			'label' => 'Employee Age',
			'rules' => 'required|integer',
    ],
    'employee_address' => [
			'label' => 'Employee Address',
			'rules' => 'required',
    ],
    'employee_place_of_birth' => [
			'label' => 'Employee Place of Birth',
			'rules' => 'required',
    ],
    'employee_date_of_birth' => [
			'label' => 'Employee Date of Birth',
			'rules' => 'required|valid_date',
    ],
  ];

	protected $tableAlias = [
		'occupationId' => 'occupation_id',
		'id_number' => 'employee_identification_number',
		'name' => 'employee_name',
		'age' => 'employee_age',
		'address' => 'employee_address',
		'place_of_birth' => 'employee_place_of_birth',
		'date_of_birth' => 'employee_date_of_birth',
	];
}