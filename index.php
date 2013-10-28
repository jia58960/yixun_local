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
	
	<!--<link rel="stylesheet" type="text/css" href="media/css/bootstrap-tree.css" />-->

	<!-- END PAGE LEVEL STYLES -->

	<link  href="media/css/jquery-ui-1.10.1.custom.min.css" rel="stylesheet" type="text/css"/>

	<link  href="media/css/jquery.qtip.min.css" rel="stylesheet" type="text/css"/> 

	<!-- END PAGE LEVEL STYLES -->
	
	<!-- END PAGE LEVEL SCRIPTS -->
	<link rel="shortcut icon" href="media/image/favicon.ico" />

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

<body class="page-header-fixed">

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

		<div class="page-content">

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
			<div class="container-fluid">
						<!-- BEGIN PAGE CONTAINER-->
				<div class="page-content-body">
						
					<div class="container-fluid" id="main-content">

					<!-- BEGIN PAGE HEADER-->

						<div class="row-fluid">

							<div class="span12">

								<!-- BEGIN STYLE CUSTOMIZER -->

								<div class="color-panel hidden-phone">

									<div class="color-mode-icons icon-color"></div>

									<div class="color-mode-icons icon-color-close"></div>

									<div class="color-mode">

										<p>THEME COLOR</p>

										<ul class="inline">

											<li class="color-black current color-default" data-style="default"></li>

											<li class="color-blue" data-style="blue"></li>

											<li class="color-brown" data-style="brown"></li>

											<li class="color-purple" data-style="purple"></li>

											<li class="color-grey" data-style="grey"></li>

											<li class="color-white color-light" data-style="light"></li>

										</ul>


									</div>

								</div>

								<!-- END BEGIN STYLE CUSTOMIZER -->    

								<!-- BEGIN PAGE TITLE & BREADCRUMB-->

								<div id="sub_h">
									
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

	<script src="media/js/form-validation.js"></script>
	
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
	

	<script src="media/js/bootstrap-modal.js" type="text/javascript" ></script>
	<script src="media/js/bootstrap-modalmanager.js" type="text/javascript" ></script>


	<script type="text/javascript" src="media/js/jquery.qtip.min.js"></script>

	<script type="text/javascript" src="media/common.js"></script>	

	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="media/js/index.js" type="text/javascript"></script>

	<script src="media/js/app.js" type="text/javascript"></script>
	<!-- END PAGE LEVEL SCRIPTS -->  
	
	<script type="text/javascript" src="media/js/crypt.js"></script>

	<script src="media/config.js"></script>

	<script type="text/javascript">
		
	jQuery(document).ready(function() {
		
	    App.init(); // initlayout and core plugins
	    Index.init();
		
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
        
		
	})
</script>

</body>

<!-- END BODY -->

</html>