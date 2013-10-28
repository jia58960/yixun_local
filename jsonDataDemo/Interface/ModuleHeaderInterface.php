<?php

	if($_POST['module_id']==1){
		
		$navData = array(
		    'module_name'=>'我的工作台',
			'module_des'=>'这是工作台的小段描述',
		    'module_nav'=>array(
		    	'0'=>array(
		    		'nav_name'=>'我的工作台'
		    	),
		    )
					
		
		);
		
	} elseif($_POST['module_id']==2) {
		$navData = array(
		    'module_name'=>'用户设置',
			'module_des'=>'这是用户设置的小段描述',
		    'module_nav'=>array(
		    	'0'=>array(
		    		'nav_name'=>'系统设置',
		    		'nav_url'=>''
		    	),
		    	'1'=>array(
		    		'nav_name'=>'用户设置',
		    		'nav_url'=>''
		    	)
		    )
					
		);
		
	} elseif($_POST['module_id']==12) {
		$navData = array(

		    'module_name'=>'采购',
			'module_des'=>'采购的小描述',
		    'module_nav'=>array(
		    	'0'=>array(
		    		'nav_name'=>'数字台账管理',
		    		'nav_url'=>''

		    	),
		    	'1'=>array(
		    		'nav_name'=>'采购',
		    		'nav_url'=>''
		    	)
		    )
					
		);
	}
	$data =  json_encode($navData);
	echo $data;
	
	
?>