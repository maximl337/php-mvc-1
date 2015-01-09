<?php

class Home extends Controller
{
	protected $user;

	public function __construct()
    {
   	 	$this->user = $this->model('User');	
    }   

	public function index($name = '')
	{
		 $user = $this->model('User');
		 $user->name = $name;

		 $this->view('home/index', ['name' => $user->name]);
/*
		 User::create([
		 	'username' => 'ebin',
		 	'email' => 'ebin@email.com'
		 ]); */
	}

	public function create($username = '', $email = '') 
	{
		$this->user->create([
			'username' => $username,
			'email' => $email
		]);
	}

}