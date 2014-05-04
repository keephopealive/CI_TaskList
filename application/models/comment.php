<?php

class Comment extends DataMapper
{
	public function __construct($id = null)
	{
		parent::__construct($id);
	}
	
	// DEFINE THE RELATIONSHIPS
	public $has_one = array('message', 'user');

}