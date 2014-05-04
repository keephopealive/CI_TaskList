<?php

class Message extends DataMapper
{
	public function __construct($id = null)
	{
		parent::__construct($id);
	}
	
	// DEFINE THE RELATIONSHIPS
	public $has_one = array('user');
	public $has_many = array('comment');


}