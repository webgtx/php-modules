<?php 
  	require 'func.php';

	$users_info = gen_usrs(array(), 20);
	$users_info[] = array('username' => 'dxv1d', 'password' => '123');
	$rec_info = $_POST;

	$is_sign_in;
	foreach ($users_info as $key => $value) {
		if ($rec_info['username'] == $users_info[$key]['username'] && 
			$rec_info['password'] == $users_info[$key]['password']) {
				$is_sign_in = true;
				header('Location: /about.php');
				exit;
		}
	}
	echo ($is_sign_in) ? 'You sign in' : 'Failed auth' ;

	// echo print_r($users_info);
