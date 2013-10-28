<?php
	/*
		用户设置页数据需求：
		1、部门数据
		
	*/
	
	//1、部门数据格式
	$flag = $_POST['deptid'];
	$deptData = array(
		'deptlist_data'=>array(
			'0'=>array(
				'id'=>'1',
				'name'=>'IT部',
			),
			'1'=>array(
				'id'=>'2',
				
				'name'=>'综合管理中心',
				'color'=>'#136311'
			),
			'2'=>array(
				'id'=>'3',
				'name'=>'资金部',
				'color'=>'#d6471b'
			),
			'3'=>array(
				'id'=>'4',
				'name'=>'拓展部',
				'color'=>'#7a82ab'
			)
		),
		'flag'=>$flag,
		);
				
		$data =  json_encode($deptData);
		echo $data;
	
?>