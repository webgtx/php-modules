<?php 

  function concate($arr) {
    $sum;
    foreach ($arr as $item => $value) { 
      if (gettype($value) == 'string') {
        $sum = $sum . $value;
      }
    }
    return $sum;
  }

  function gen_str($chars) {
  	if (gettype($chars) == 'string')
		$chars = str_split($chars);
	for ($i = 0; $i <= 20; $i++) {
		$arr[] = $chars[mt_rand(0, count($chars))];
	}
	return $arr;
  }

  function gen_usrs($arr, $count) {
  	for ($i=0; $i < $count; $i++) { 
		$arr[] = array(
			'username' => "anon_$i", 
			'password' => concate(gen_str('eh34ldsp024jf3'))
		);
	}
	return $arr;
  }

