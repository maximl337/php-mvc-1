<?php

class Home extends Controller
{
	public function index($name = '',$phone = '')
	{
		echo $name . ' ' . $phone;
	}

	public  function  test()
	{
		echo "test Controller";
	}

}