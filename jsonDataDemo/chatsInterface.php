<?php
$navData = array (
			  'chats'=>'最新讨论',
		  	  'chats_data'=>array(
		    	'0'=>array(
		    				'name'=>'张佳',
		    				'avater'=>'media/image/avatar1.jpg',
		    				'time_stamp'=>'2013-08-25',
		    				'content'=>'你这个不行啊，前端框架加油啊0',
		    				'position'=>'in'
		    			),
		    			'1'=>array(
		    				'name'=>'forml',
		    				'avater'=>'media/image/avatar2.jpg',
		    				'time_stamp'=>'2013-08-25',
		    				'content'=>'你这个不行啊，前端框架加油啊1',
		    				'position'=>'out'
		    			),
		    			'2'=>array(
							'name'=>'blademainer',
		    				'avater'=>'media/image/avatar1.jpg',
		    				'time_stamp'=>'2013-08-25',
		    				'content'=>'你这个不行啊，前端框架加油啊2',
		    				'position'=>'out'
		    			),
		    			'3'=>array(
		    				'name'=>'hmm',
		    				'avater'=>'media/image/avatar2.jpg',
		    				'time_stamp'=>'2013-08-25',
		    				'content'=>'你这个不行啊，前端框架加油啊3',
		    				'position'=>'in'
		    			),
		    ),
				
		);
$data =  json_encode($navData);
	echo $data;
?>