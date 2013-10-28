<?php
	
	$userid = $_POST['userid'];

	if ($userid == 12) {
	$userinfo = array(
		'userinfo'=>array(
			'userid'=>12,
			'name'=>'luoge',
			'username'=>'罗光华',
			'email'=>'1324@qq.com',
			'fdeptid'=>'2',
			'sdeptid'=>'3'
		)
	);
	} elseif ($userid == 13)  {
		$userinfo = array(
		'userinfo'=>array(
			'userid'=>13,
			'name'=>'xiaozhou',
			'username'=>'周春梅',
			'email'=>'13245@qq.com',
			'fdeptid'=>'1',
			'sdeptid'=>'4'
		)
	);

	} elseif($userinfo == '') {
		$userinfo = array(
		'userinfo'=>array(
			'userid'=>'',
			'name'=>'',
			'username'=>'',
			'email'=>'',
			'fdeptid'=>'',
			'sdeptid'=>''
		)
		);
	}
	$data =  json_encode($userinfo);
	echo $data;
?>