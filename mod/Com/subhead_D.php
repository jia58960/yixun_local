<?php
	$modulename =  $_POST['modulename'];
	$subname =  $_POST['subname'];
	if($modulename =='Index'){
		switch ($subname) {
			case 'index':
				$navData = array(
				    'module_name'=>'我的工作台',
					'module_des'=>'这是工作台的小段描述',
				    'module_nav'=>array(
				    	'0'=>array(
				    		'nav_name'=>'我的工作台'
				    	),
				    )				
				);
			break;
			
			default:
				$navData = array(
				    'module_name'=>'我的工作台其它',
					'module_des'=>'这是工作台的小段描述其它',
				    'module_nav'=>array(
				    	'0'=>array(
				    		'nav_name'=>'我的工作台12'
				    	),
				    )				
				);
				break;
		}
	} elseif($modulename=='set_user') {
		switch ($subname) {
			case 'set_user':
				$navData = array(
				    'module_name'=>'用户设置',
					'module_des'=>'这是用户设置的小段描述',
				    'module_nav'=>array(
				    	'0'=>array(
				    		'nav_name'=>'系统设置',
				    		'nav_url'=>'###'
				    	),
				    	'1'=>array(
				    		'nav_name'=>'用户设置',
				    		'nav_url'=>'###'
				    	)
				    )
							
				);
				break;

			case 'set_sub1':
				$navData = array(
				    'module_name'=>'用户设置11',
					'module_des'=>'这是用户设置的小段描述11',
				    'module_nav'=>array(
				    	'0'=>array(
				    		'nav_name'=>'系统设置1',
				    		'nav_url'=>''
				    	),
				    	'1'=>array(
				    		'nav_name'=>'用户设置1',
				    		'nav_url'=>''
				    	)
				    )
							
				);
				break;

			case 'set_sub2':
				$navData = array(
				    'module_name'=>'用户设置2',
					'module_des'=>'这是用户设置的小段描述2',
				    'module_nav'=>array(
				    	'0'=>array(
				    		'nav_name'=>'系统设置2',
				    		'nav_url'=>'###'
				    	),
				    	'1'=>array(
				    		'nav_name'=>'用户设置2',
				    		'nav_url'=>'###'
				    	)
				    )
							
				);
				break;
			default:
				$navData = array(
				    'module_name'=>'',
					'module_des'=>'',
				    'module_nav'=>array(
				    	'0'=>array(
				    		'nav_name'=>'',
				    		'nav_url'=>''
				    	)
				    )
							
				);
				break;
		}
		
		
	} elseif($modulename=='purchase') {
		switch ($subname) {
			case 'purchase':
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
				break;			
			default:
			$navData = array(
				'module_name'=>'',
				'module_des'=>'',
			    'module_nav'=>array(
			    	'0'=>array(
			    		'nav_name'=>'',
			    		'nav_url'=>''

			    	)
			    )
						
			);
				break;

		}
		

		    
	}
	$data =  json_encode($navData);
	echo $data;
	
	
?>