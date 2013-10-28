<?php
/*	$data = array(
		"submenu" => array(
			"Set_set_user" => array(

				"set_user" => array(
					"directory"=>	"Set/",
					"modulename"=>	"set_user",
					"subname"=>		"set_user",
					"name"=>		"用户设置"
				),

				"set_sub1" => array(
					"directory"=>	"Set/",
					"modulename"=>	"set_user",
					"subname"=>		"set_sub1",
					"name"=>		"用户设置11"
				),
				"set_sub2" => array(
					"directory"=>	"Set/",
					"modulename"=>	"set_user",
					"subname"=>		"set_sub2",
					"name"=>		"用户设置22"
				),

			),


			"Index_set_user" => array(

				"set_user" => array(
					"directory"=>	"Set/",
					"modulename"=>	"set_user",
					"subname"=>		"set_user",
					"name"=>		"用户设置"
				),
				"set_sub1" => array(
					"directory"=>	"Set/",
					"modulename"=>	"set_user",
					"subname"=>		"set_sub1",
					"name"=>		"用户设置11"
				),
				"set_sub2" => array(
					"directory"=>	"Set/",
					"modulename"=>	"set_user",
					"subname"=>		"set_sub2",
					"name"=>		"用户设置22"
				),
			
			),
			
			"DigiM_purchase" => array(
				"purchaseBL" => "",
			),
		),
	);
	
	$modulename = $_POST['modulename'];
	$submenu = $_POST['submenu'];
	$return_data = $data['submenu'][$modulename][$submenu];
	echo json_encode($return_data);*/
	
	
	//旧数据
		$module_name = $_POST['modulename'];
		
		//echo $module_id;
		switch($module_name){
			case 'set_user':
				$data = array(
					'subm_data'=>array(
						array(
						"directory"=>"Set/",
						"module_name"=>$module_id,
						"subname"=>"set_user",
						"name"=>"用户设置"
						),
						array(
						"directory"=>"Set/",
						"module_name"=>$module_id,
						"subname"=>"set_sub1",
						"name"=>"用户设置11"
						),
						array(
						"directory"=>"Set/",
						"module_name"=>$module_id,
						"subname"=>"set_sub2",
						"name"=>"用户设置22"
						)
					)
					
				);
				echo json_encode($data);
				break;
			case 'Index':
				$data = array(
					'subm_data'=>array(
						array(
						"directory"=>"Index/",
						"module_name"=>$module_id,
						"subname"=>"Index",
						"name"=>"仪表盘"
						),
						array(
						"directory"=>"Index/",
						"module_name"=>$module_id,
						"subname"=>"Index_demo1",
						"name"=>"仪表盘1"
						),
						array(
						"directory"=>"Index/",
						"module_name"=>$module_id,
						"subname"=>"Index_demo2",
						"name"=>"仪表盘2"
						)
					)
				);
				echo json_encode($data);
				break;
			 case '9':
				$data = array(
					
					'subm_data'=>array(
						array(
						'id'=>'setting_role',
						'url'=>'setting_role_index.html',
						'name'=>'角色管理'
						),
						array(
						'id'=>'role_sort',
						'url'=>'role_sort.html',
						'name'=>'角色排序'
						),
						array(
						'id'=>'roles_priv',
						'url'=>'roles_priv.html',
						'name'=>'添加/删除权限'
						)
					)
				);
				echo json_encode($data);
				break;
			case '4':
				$data = array(
					
					'subm_data'=>array(
						array(
						'id'=>'attendance_approve',
						'url'=>'administrative_attendance_index.html',
						'name'=>'考勤审批'
						),
						array(
						'id'=>'attendance_record',
						'url'=>'administrative_attendance_record.html',
						'name'=>'考勤记录'
						),
						array(
						'id'=>'attendance_statistics',
						'url'=>'administrative_attendance_statistics.html',
						'name'=>'考勤统计'
						),
						array(
						'id'=>'attendance_setting',
						'url'=>'administrative_attendance_setting.html',
						'name'=>'考勤设置'
						)
					)
				);
				echo json_encode($data);
				break; 
			case '1':
				$data = array(
					'subm_data'=>array(
						array(
						'id'=>'customer_project',
						'url'=>'customer/customer_index.html',
						'name'=>'项目客户列表'
						),
						array(
						'id'=>'customer_manager',
						'url'=>'customer/customer_manager.html',
						'name'=>'项目经理列表'
						)
					)
				);
				echo json_encode($data);
				break;
			case '5':
				$data = array(
					'subm_data'=>array(
						array(
						'id'=>'customer_project',
						'url'=>'administrative_hr_index.html',
						'name'=>'用户设置'
						),
						array(
						'id'=>'customer_manager',
						'url'=>'administrative_hr_manage.html',
						'name'=>'人事管理'
						)
					)
				);
			default:
				$data = array(
					'subm_data'=>array()
				);
			echo json_encode($data);
			break;
		}
		
	
	
?>