<?php
namespace App\Entities;
use CodeIgniter\Entity\Entity;

class Occupations extends Entity
{
  protected $attributes = [
		'occupation_id' => null,
		'occupation_name' => '',
		'is_active' => null,
		'created_at' => null,
		'updated_at' => null,
		'deleted_at' => null
	];

	protected $casts = [
		'occupation_id' => 'integer',
		'occupation_name' => 'string',
		'is_active' => 'boolean',
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
		'deleted_at' => 'datetime'
	];

	function getIsActive()
	{
		return $this->attributes['is_active'] === true ? true : false;
	}
}