<?php
	
	$deptId = $_POST['deptId'];

	if ($deptId == 1) {
	$deptinfo = array(
		'deptinfo'=>array(
			'deptId'=>12,
			'name'=>'IT部',
			'color'=>'#ff0000',
			'sortNumber'=>'9',
			'deptDes'=>'IT部的描述啥的'
		)
	);
	} elseif ($deptId == 2)  {
		$deptinfo = array(
		'deptinfo'=>array(
			'deptId'=>13,
			'name'=>'IT部',
			'color'=>'#ff0000',
			'sortNumber'=>'9',
			'deptDes'=>'IT部的描述啥的'
		)
	);

	} elseif($deptinfo == '') {
		$deptinfo = array(
		'deptinfo'=>array(
			'deptId'=>'',
			'name'=>'',
			'color'=>'',
			'sortNumber'=>'',
			'deptDes'=>''
		)
		);
	}
	$data =  json_encode($deptinfo);
	echo $data;
?>