<?php header("Content-type: text/html; charset=utf-8");?>
<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->

<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>YXSYS - Professional CMS Design</title>

	<meta content="width=device-width, initial-scale=1.0" name="viewport" />

	<meta content="" name="description" />

	<meta content="" name="author" />

	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	

	<link href="media/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/style-metro.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/style.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/style-responsive.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>

	<link href="media/css/uniform.default.css" rel="stylesheet" type="text/css"/>

	<!-- END GLOBAL MANDATORY STYLES -->

	<!-- BEGIN PAGE LEVEL STYLES --> 
	
	<link rel="stylesheet" type="text/css" href="media/css/select2_metro.css" />

	<link rel="stylesheet" href="media/css/DT_bootstrap.css" />

	<link href="media/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
	
	<link rel="stylesheet" type="text/css" href="media/css/chosen.css" />

	<link rel="stylesheet" type="text/css" href="media/css/jquery.tagsinput.css" />

	<link href="media/css/daterangepicker.css" rel="stylesheet" type="text/css" />

	<link href="media/css/fullcalendar.css" rel="stylesheet" type="text/css"/>

	 <link href="media/css/TableTools.css" rel="stylesheet" type="text/css"/> 

	 <link rel="stylesheet" type="text/css" href="media/css/datepicker.css" />
	
	<link rel="stylesheet" type="text/css" href="media/css/timepicker.css" />
	
	<link rel="stylesheet" type="text/css" href="media/css/colorpicker.css" />
	
	<link rel="stylesheet" type="text/css" href="media/css/bootstrap-toggle-buttons.css" />
	
	<link rel="stylesheet" type="text/css" href="media/css/daterangepicker.css" />
	
	<link rel="stylesheet" type="text/css" href="media/css/datetimepicker.css" />
	
	<link rel="stylesheet" type="text/css" href="media/css/multi-select-metro.css" />
	
	<link href="media/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
	
	<link href="media/css/simptip.css" rel="stylesheet" type="text/css"/>
	
	<!--<link rel="stylesheet" type="text/css" href="media/css/bootstrap-tree.css" />-->

	<!-- END PAGE LEVEL STYLES -->

	<link  href="media/css/jquery-ui-1.10.1.custom.min.css" rel="stylesheet" type="text/css"/>

	<!-- <link  href="media/css/selectBox.css" rel="stylesheet" type="text/css"/>  -->

	<link  href="media/css/news.css" rel="stylesheet" type="text/css"/> 	

	<!-- END PAGE LEVEL STYLES -->
	
	<!-- END PAGE LEVEL SCRIPTS -->
	<link  href="media/css/jquery.qtip.min.css" rel="stylesheet" type="text/css"/>


	<!-- END PAGE LEVEL STYLES -->

	<link rel="shortcut icon" href="media/image/favicon.ico" />
	
	<link href="media/css/blog.css" rel="stylesheet" type="text/css"/>
	
	<link href="media/css/chosen.css" rel="stylesheet" type="text/css"/>

		<style type="text/css">

		p[contenteditable]{
			padding: 10px;
		}

	</style>

</head>

<!-- END HEAD -->

<?php
	$host = $_SERVER['SERVER_NAME'];
	$io = 'http://'.$host.':27081/yixun_local/';
	$io_java = 'http://'.$host.':27082/YIXUN_1.5_EE/';
?>

<!--IP verification START-->
<script type="text/javascript">
	var io = "<?php echo $io; ?>";
	var io_java = "<?php echo $io_java; ?>";
</script>
<!--IP verification END-->

<!-- BEGIN BODY -->

<body class="page-header-fixed page-sidebar-fixed page-footer-fixed">

	<!-- BEGIN HEADER -->

	<div class="header navbar navbar-inverse navbar-fixed-top">

		<!-- BEGIN TOP NAVIGATION BAR -->

		<div class="navbar-inner">

			<div class="container-fluid">

				<!-- BEGIN LOGO -->
				<a href="index.html" class="brand">

					<img alt="logo" src="media/image/logo.png">

				</a>
				<!-- <div class="navbar-inner" style="width:205px;float:left">
					<ul class="nav">
				    	<li id="nav-1"><a href="#">OA</a></li>
				    	<li id="nav-2"><a href="#">CMS</a></li>
					</ul>
				</div> -->
				
                <!-- BEGIN THIRD MENU-->
				<div class="navbar hor-menu hidden-phone hidden-tablet">

					<div class="navbar-inner">

						<ul class="nav" id="sub_m">

						</ul>

					</div>

				</div>
                <!-- END THIRD MENU-->
				<!-- END LOGO -->

				<!-- BEGIN RESPONSIVE MENU TOGGLER -->

				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">

				<img src="media/image/menu-toggler.png" alt="" />

				</a>          

				<!-- END RESPONSIVE MENU TOGGLER -->            

				<!-- BEGIN TOP NAVIGATION MENU -->              

				<ul class="nav pull-right" id="Db_h">

				</ul>

			</div>

		</div>

		<!-- END TOP NAVIGATION BAR -->

	</div>

	<!-- END HEADER -->

	<!-- BEGIN CONTAINER -->

	<div class="page-container">

		<!-- BEGIN SIDEBAR -->

		<div class="page-sidebar nav-collapse collapse">

			<!-- BEGIN SIDEBAR MENU -->        

			<ul class="page-sidebar-menu" id="Db_m">

				<li>

					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

					<div class="sidebar-toggler hidden-phone"></div>

					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

				</li>

				<li>

					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->

					<form class="sidebar-search">

						<div class="input-box">

							<a href="javascript:;" class="remove"></a>

							<input type="text" placeholder="Search..." />

							<input type="button" class="submit" value=" " />

						</div>

					</form>

					<!-- END RESPONSIVE QUICK SEARCH FORM -->

				</li>
				<!--zhangjia artTemplate Data MENU_DATA-->
			</ul>

			<!-- END SIDEBAR MENU -->

		</div>

		<!-- END SIDEBAR -->

		<!-- BEGIN PAGE -->

		<div class="page-content" style="min-height:600px">

			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<div id="portlet-config" class="modal hide">

				<div class="modal-header">

					<button data-dismiss="modal" class="close" type="button"></button>

					<h3>Widget Settings</h3>

				</div>

				<div class="modal-body">

					Widget settings form goes here

				</div>

			</div>

			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="content-scroller">
			<div class="page-content-body">
					
				<div class="container-fluid" id="main-content">

				<!-- BEGIN PAGE HEADER-->

					<div class="row-fluid">

						<div class="span12">

							<!-- BEGIN PAGE TITLE & BREADCRUMB-->

							<div id="sub_h">
								<!--以下内容只是为了美观而加的，后面来真正数据 zhangjia20131114-->
								<h3 class="page-title">

 									大标题 <small>对dashboard内容的简要描述</small>

								</h3>

								<ul class="breadcrumb">

									<li>

										<i class="icon-home"></i>

										<a href="index.html">我的工作台</a> 

										<i class="icon-angle-right"></i>

									</li>

									<li><a href="#">一级菜单</a>
											<i class="icon-angle-right"></i>
									</li>

									<li><a href="#">二级菜单</a>
											<i class="icon-angle-right"></i>
									</li>


								</ul>
							</div>

							<!-- END PAGE TITLE & BREADCRUMB-->

						</div>

					</div>

					<!-- END PAGE HEADER-->
					
					<div id="dashboard">
						
						<div class="row-fluid">

							<div class="span6" id="Dashboard_feeds">

								<!--feeds_module goes here-->

							</div>
							<div class="span6" id="Dashboard_chats">
								<!--chats_module goes here-->
									
							</div>
						</div>

						<div class="clearfix"></div>

					</div>
					
				<!--tab1 到此结束-->
				</div>
					<!-- END PAGE CONTAINER-->    
		    </div>
			</div>

		</div>

		<!-- END PAGE -->

	</div>

	<!-- END CONTAINER -->

	<!-- BEGIN FOOTER -->

	<div class="footer">

		<div class="footer-inner">

			2013 &copy; Metronic by YXSYS.

		</div>

		<div class="footer-tools">

			<span class="go-top">

			<i class="icon-angle-up"></i>

			</span>

		</div>

	</div>

	<div id="ajax_err" class="ajaxErr">
		
		<b class="ajaxErrText">操作失败!</b>

	</div>

	<div id="ajax_suc" class="ajaxSuc">
		
		<b class="ajaxSucText">操作成功!</b>

	</div>

	<!-- END FOOTER -->

	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time ) -->

	<!-- BEGIN CORE PLUGINS -->

	<script src="media/js/jquery-1.10.1.min.js" type="text/javascript"></script>

	<script src="media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	
	<script src="media/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>

	<script src="media/js/bootstrap.min.js" type="text/javascript"></script>

	<!--[if lt IE 9]>

	<script src="media/js/excanvas.min.js"></script>

	<script src="media/js/respond.min.js"></script>  

	<![endif]-->   

	<script src="media/js/jquery.slimscroll.min.js" type="text/javascript"></script>

	<script src="media/js/jquery.blockUI.js" type="text/javascript"></script>  

	<script src="media/js/jquery.cookie.min.js" type="text/javascript"></script>
	
	<!-- END CORE PLUGINS -->

	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script type="text/javascript" src="media/js/chosen.jquery.min.js"></script>

	<script type="text/javascript" src="media/js/select2.min.js"></script>

	<!--jquery dataTable plugins-->
	<script src="media/js/jquery.dataTables.js" type="text/javascript"></script>	

	<script type="text/javascript" charset="utf-8" src="media/js/ZeroClipboard.js"></script>

	<script type="text/javascript" charset="utf-8" src="media/js/TableTools.min.js"></script>

	
	<script src="media/js/table-managed.js"></script>

	<script type="text/javascript" src="media/js/DT_bootstrap.js"></script>

	<script src="media/js/jquery.pulsate.min.js" type="text/javascript"></script>

	<script src="media/js/date.js" type="text/javascript"></script>

	<script src="media/js/daterangepicker.js" type="text/javascript"></script>     

	<script src="media/js/jquery.gritter.js" type="text/javascript"></script>

	<!-- <script src="media/js/fullcalendar.min.js" type="text/javascript"></script> -->

	
	
	
	<!--表单处理插件 start-->

	<script type="text/javascript" src="media/js/jquery.form.js"></script>

	<script type="text/javascript" src="media/js/jquery.validate.min.js"></script>
	
	<!--日期处理插件 end-->
	<script type="text/javascript" src="media/js/bootstrap-datepicker.js"></script>
	
	<script type="text/javascript" src="media/js/bootstrap-datetimepicker.min.js"></script>

    <script type="text/javascript" src="media/js/bootstrap-datetimepicker.zh-CN.js"></script>
	<!-- <script type="text/javascript" src="media/js/jquery.inputmask.bundle.min.js"></script> -->

	<script type="text/javascript" src="media/js/jquery.multi-select.js"></script>
	
	<script src="media/js/bootstrap-tree.js"></script>

	<!-- END PAGE LEVEL PLUGINS -->
	<!--javascript template render js 0725 by zhangjia-->
	<script type="text/javascript" src="media/js/template.min.js"></script>
	
	<script type="text/javascript" src="media/js/bootstrap-colorpicker"></script> 
	
	<script src="media/js/jquery.uniform.min.js" type="text/javascript" ></script>
		
	<script type="text/javascript" src="assets/plugins/jquery-ui/jquery-ui-1.10.3/ui/minified/jquery.ui.effect-drop.min.js"></script>

	<script type="text/javascript" src="assets/plugins/jquery-ui/jquery-ui-1.10.3/ui/minified/jquery.ui.effect-slide.min.js"></script>

	<!-- jquery notyfy -->
	<script src="media/js/noty/jquery.noty.js" type="text/javascript"></script>

	<script src="media/js/noty/themes/default.js" type="text/javascript"></script>

	<script src="media/js/noty/layouts/center.js" type="text/javascript"></script>

	<!-- 标签输入 -->
	<script type="text/javascript" src="media/js/jquery.tagsinput.min.js"></script>
	<!-- 标签输入 -->

	<script src="media/js/bootstrap-modal.js" type="text/javascript" ></script>
	<script src="media/js/bootstrap-modalmanager.js" type="text/javascript" ></script>

	<!-- 提示 -->
	<script type="text/javascript" src="media/js/jquery.qtip.min.js"></script>
	<!-- 提示 -->

	<script type="text/javascript" src="media/common.js"></script>	

	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="media/js/index.js" type="text/javascript"></script>

	<script src="media/js/app.js" type="text/javascript"></script>
	<!-- END PAGE LEVEL SCRIPTS -->  
	
	<script type="text/javascript" src="media/js/crypt.js"></script>

	<script src="media/config.js"></script>

	<!-- 表单元素初始化 -->
	<script src="media/js/form-components.js"></script>     

	
	<!-- 表单元素初始化 -->
	
	<script type="text/javascript">
		
	jQuery(document).ready(function() {
		
	    App.init(); // initlayout and core plugins
	    Index.init();
	    FormComponents.init();
		
		var urlfix = "urlJSON";//index文件特有
		var urljasonfix = eval(urlfix);

		//App.ajaxblockUI($(".page-container"),false,'这是错误原因');
		//return;
		//菜单默认设置 //@@后面还需要做点击高亮，同时更改urlJSON数据，头部2级菜单也是
		if(!urljasonfix.Db_m)
		{
			urljasonfix.Db_m =
			[{
		    	ra:'Db_m',
		    	dir:'Com/Menu',
		    	dif:'resource/listMenus',
		    	p:{"resourceTypeId":"1"},
		    	p2:{},
		    	m:"2"
	    	}];
		}
	    yixunload(urljasonfix.Db_m,urlfix);
	    
	    //加载个人头部信息
	    
	    /*if(!urljasonfix.Db_h){
			urljasonfix.Db_h = [{
	    	ra:'Db_h',
	    	dir:'Com/Head',
	    	dif:'',
    	
	    	}];
		}
	    yixunload(urljasonfix.Db_h,urlfix);*/

	 	/*$('.content-scroller').slimScroll({
            color: '#a1b2bd',
            opacity: .3,
            height: sidebarHeight - 14,
            railVisible: true,
            alwaysVisible: true
        });*/


		$('.has_qtip').each(function() {

			var id = $(this).attr('id');
	        $(this).qtip({
	            content: {
	                text: 'Loading...',
	                ajax: {
	                	once: false,//该参数默认值为true，表示qTip只在第一次加载要显示的内容，而不是每一次显示都动态获取内容。
	                    url: 'get_qtip_data.php',
	                    type: 'POST', 
				        data: { id: id,action:"get"}, 
				        dataType: 'json', 
				        success: function(data, status) {
				         	if(status === "success"){
				         		console.log(status);
				         		console.log(data);
				        	 	this.set('content.text', data.content);
				         	}
				         
				         }
	                }
	            },
	            position: {
	            	 my: 'top center', 
  					at: 'bottom center',
		          //  target: 'mouse',
		         //   adjust: { x: 5, y: 5 },
		            viewport: $(window)
		        },
	            style: {
					classes:'qtip qtip-default qtip-tipsy qtip-shadow qtip-rounded  qtip-pos-tc'// 'qtip qtip-default  qtip-pos-tl qtip-blue qtip-shadow qtip-rounded'
					},
					show: {
		            effect: function() {
		                $(this).show('slide', 500);
		            }
		        },
	            hide: {
						fixed: true,
						delay: 300,
						effect: function() {
			                $(this).hide('puff', 500);
			            }
					},
	         });
	     });
		   
		$("body").on("mouseout","p[contenteditable='true']",function(){

			var content = $(this).html();
			var id= $(this).attr('id');

			//有id，但无消息提示
			if($(this).attr("class") === "no_qtip" ){

				$.ajax({
					type: "POST",
					url: "get_qtip_data.php",
					data: {id:id,content:content,action:"insert"},
					dataType: "json",
					success: function(data){
					    
					  }
				});
			}else{

				$.ajax({
					type: "POST",
					url: "get_qtip_data.php",
					data: {id:id,content:content,action:"update"},
					dataType: "json",
					success: function(data){
					    
					  }
				});
			}

		});
        
		
	})
</script>

</body>

<!-- END BODY -->

</html>