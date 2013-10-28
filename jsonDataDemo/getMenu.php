<?php
	if (!empty ($_POST['module_id'])) {
		$module_id = $_POST['module_id'];
		switch($module_id){
			case 'work_record_menu':
				$data = array(
					'status'=>1,
					'data'=>array(
						array(
						'id'=>'myrecord',
						'url'=>'work/wrok_record_index.html',
						'name'=>'我的工作记录'
						),
						array(
						'id'=>'other_record',
						'url'=>'work/work_record/other_record.html',
						'name'=>'其它工作记录'
						)
						)
					
				);
				echo json_encode($data);
				break;
			case 'attendence_menu':
				$data = array(
					'status'=>1,
					'data'=>array(
						array(
						'id'=>'work_punch',
						'url'=>'work/work_punch_index.html',
						'name'=>'考勤记录'
						),
						array(
						'id'=>'work_leave',
						'url'=>'work/work_punch/work_leave.html',
						'name'=>'请假申请'
						),
						array(
						'id'=>'work_evection',
						'url'=>'work/work_punch/work_evection.html',
						'name'=>'出差外出登记'
						)
					)
				);
				echo json_encode($data);
				break;
			 case '9':
				$data = array(
					'status'=>1,
					'data'=>array(
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
			case 'admin_attendence_menu':
				$data = array(
					'status'=>1,
					'data'=>array(
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
			case 'customer_menu':
				$data = array(
					'data'=>array(
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
					'data'=>array(
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
					'data'=>array()
				);
				echo json_encode($data);
				break;
		}
		/* if ($module_id == 'work_record_menu') {
			$data = array(
				'status'=>1,
				'data'=>array(
					array(
					'id'=>'myrecord',
					'url'=>'work/wrok_record_index.html',
					'name'=>'我的工作记录'
					),
					array(
					'id'=>'other_record',
					'url'=>'work/work_record/other_record.html',
					'name'=>'其它工作记录'
					)
					)
				
			);
			echo json_encode($data);
		} else if($module_id == 'attendence_menu'){//我的考勤
			$data = array(
				'status'=>1,
				'data'=>array(
					array(
					'id'=>'work_punch',
					'url'=>'work/work_punch_index.html',
					'name'=>'考勤记录'
					),
					array(
					'id'=>'work_leave',
					'url'=>'work/work_punch/work_leave.html',
					'name'=>'请假申请'
					),
					array(
					'id'=>'work_evection',
					'url'=>'work/work_punch/work_evection.html',
					'name'=>'出差外出登记'
					)
				)
			);
			echo json_encode($data);
		} else if($module_id == 'setting_role_menu'){//角色设置
			$data = array(
				'status'=>1,
				'data'=>array(
					array(
					'id'=>'setting_role',
					'url'=>'setting/setting_role_index.html',
					'name'=>'角色管理'
					),
					array(
					'id'=>'role_sort',
					'url'=>'seting/role_sort.html',
					'name'=>'角色排序'
					),
					array(
					'id'=>'roles_priv',
					'url'=>'setting/roles_priv.html',
					'name'=>'添加/删除权限'
					),
					array(
					'id'=>'roles_assis_priv',
					'url'=>'setting/roles_assis_priv.html',
					'name'=>'添加/删除辅助角色'
					)
				)
			);
			echo json_encode($data);
		} else if($module_id == 'admin_attendence_menu'){//考勤管理
			$data = array(
				'status'=>1,
				'data'=>array(
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
		}else if($module_id == 'customer_menu'){//客户管理
			$data = array(
				'status'=>1,
				'data'=>array(
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
			echo json_encode($data);*/
	}else{
		return false;
	} 
	
	
	
?>