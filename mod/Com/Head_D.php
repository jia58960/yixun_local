<?php 
	$Data = array(
		'header_data'=>array(
			'0'=>array(
				'id'=>'header_inbox_bar',
				'name'=>'待阅读信息',
				'icon_tag'=>'icon-comments',
				'num'=>12,
			),
			'1'=>array(
				'id'=>'header_task_bar',
				'name'=>'待审批任务',
				'icon_tag'=>'icon-tasks',
				'num'=>3,
			),
			'2'=>array(
				'avater'=>'media/image/avatar1_small.jpg',
				'name'=>'张佳',
				'inbox'=>10
			),
	)
	);

	$data =  json_encode($Data);
	echo $data;
?>