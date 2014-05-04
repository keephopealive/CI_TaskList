<?php

class Task extends DataMapper
{
	// DEFINE THE RELATIONSHIPS
	public $has_one = array('user');
	var $updated_at = 'updated_at';
	var $created_at = 'created_at';

	public function __construct($id = null)
	{
		parent::__construct($id);
	}
	

}