<?php

class User extends DataMapper
{
	public function __construct($id = null)
	{
		parent::__construct($id);
	}
	
	// DEFINE THE RELATIONSHIPS
	// public $has_one = array('something', 'something');
	public $has_many = array('message', 'comment', 'task');

	public $validation = array(
		'first_name' => array(
			'label' => 'First Name',
			'rules' => array('required')
			),
		'last_name' => array(
			'label' => 'Last Name',
			'rules' => array('required')
			),
		'email' => array(
			'label' => 'Email',
			'rules' => array('required', 'unique')
			),
		'password' => array(
			'label' => 'Password',
			'rules' => array('required')
			),
		'confirm_password' => array( // $this->confirm_password
			'label' => 'Confirm Password',
			'rules' => array('matches' => 'password')
			)
		);	
}