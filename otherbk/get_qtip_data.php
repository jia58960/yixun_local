<?php

$action = $_POST['action'];

switch($action){
	case "get":
		if (!empty ($_POST['id'])) {

			$id = $_POST['id'];

			$con = @mysql_connect("localhost","root","19893260") or die('error!');

			mysql_select_db("test", $con);
			
			mysql_query("SET NAMES UTF8"); 
			
			$result = mysql_query("SELECT content FROM kr_qtip_data where (id='".$id."' and type=0)");
			
			$row=mysql_fetch_array($result);

			if($row){
				
				$content = $row['content'];
				
				mysql_close($con);

				$data = array(
					'status'  => 1 ,
					'content' => '<p id="'.$id.'" contenteditable="true">'.$content.'</p> ' 
				);
				
				echo json_encode($data);

			}else{

				$data = array(
						'status'=>1,
						'content'=>'<p id="'.$id.'" contenteditable="true" class="no_qtip">暂无提示</p>'		
				);
				echo json_encode($data);
			}

		}else{
			$data = array(
				'status'=>1,
				'content'=>'<p contenteditable="true" class="no_id">无id</p>'
				
			);
			echo json_encode($data);
		} 
		break;

	case "insert":
		
		$con = @ mysql_connect("localhost","root","19893260") or die('ddderror!');//http://10.188.199.8
		
		mysql_select_db("test", $con) or die('选择数据库失败!');

		mysql_query("SET NAMES UTF8"); 
		//插入数据
		$sql = "insert into  kr_qtip_data(id,content,type) values ('".$_POST['id']."','".$_POST['content']."',0)";
			
		$result = mysql_query($sql);
		
		mysql_close($con);	
		
		break;

	case "update":
		
		if (!empty ($_POST['id'])&&!empty ($_POST['content'])) {
			
			$con = @ mysql_connect("localhost","root","19893260") or die('ddderror!');//http://10.188.199.8
			
			mysql_select_db("test", $con) or die('选择数据库失败!');
			
			mysql_query("SET NAMES UTF8"); 
			
			//修改数据
			$sql = "UPDATE kr_qtip_data SET  content='".$_POST['content']."'where (id='".$_POST['id']."' and type=0)";
			
			$result = mysql_query($sql);
			
			mysql_close($con);

			return true;

		}else{

			return false;
		}
		break;
}


?>