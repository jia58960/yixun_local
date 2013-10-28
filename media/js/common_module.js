//通用模块JS

//初始化的nav-tabs。preffix->模块前缀；tabid->参数值
function nav_init(preffix,tabid){

	if (tabid == ''){

		$(".nav-tabs li").eq(0).addClass('active');

    	var _initid = $("nav-tabs li > a").eq(0).attr('href');

    	$("div "+_initid).addClass('active');


	} else {

		var tab_attr = preffix+tabid;
		$("a[href='tab_attr']")
	}
	
}