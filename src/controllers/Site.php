<?php

/**
* 
*/
class Site
{
	
	function __construct()
	{
		# code...
	}

	public function register()
	{

	}

	public function login()
	{
		$user = [
			'name' => 'qwerty',
			'pass' => '123456',
		];
		session_start();
		if ($user['name'] == $_POST['uname'] || $user['pass'] == $_POST['psw']) {
			$_SESSION['user'] = $user;

		} else {
			echo "no";
		}
		// session_unset();
		// print_r($_SESSION);
		echo '<form method="post">
			    <input type="text" placeholder="Enter Username" name="uname" required>
			    <input type="password" placeholder="Enter Password" name="psw" required>
			    <button type="submit">Login</button>
			</form>';
		

	}


	public function logout()
	{
		
	}
}