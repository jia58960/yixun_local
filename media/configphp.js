/*
全局
urlStr
urlJSON
urlfix
io
io_java
*/
var getURL = window.location.search;
//var urlStr = yxUrlDecode(window.location.search); URL解密 上线前打开
var urlStr = decodeURIComponent(getURL.substr(1));

if(urlStr ==''){
	urlJSON = {};
} else {
	urlJSON = $.parseJSON(urlStr);
}

function flushurl(){
	//var urlStr = yxUrlEncode(JSON.stringify(urlJSON)); URL加密 上线前打开
	var urlStr = JSON.stringify(urlJSON);
	window.history.pushState(null,null,"?"+urlStr);
}

/*function getParentUrlJson(){ //urlfix
	 var demo1 = urlfix.lastIndexOf('.');
    var newurl = urlfix.slice(0,demo1);
    var urljasonfix = eval(newurl);
}*/

function yixunload(paras_org,urlfix_org) {
	//console.log(paras_org);
	var paras = paras_org[0];
	var urlfix = urlfix_org + "." + paras.ra; //urlfix_org判断
	eval(urlfix + "= paras_org");
	urlfix += "[0]";
	flushurl();
    
	var yxloadtmp = function(d) {	
		$.ajax({
            url:io + "mod/" + paras.dir,
            type:'post',
            async:false,                        //默认false
            success:function(t) {
                
                var data = {};
                data.urlfix = urlfix;
                data.serverdata = d;
				console.log(data);
                var newd = {"data":data};
                console.log(newd);
				//return;
                var render = template.compile(t);
                var html = render(newd);

                //m为2表示新增内容否则为替换内容
                if (paras.m == 2){
                    $(sel).append(html);
                } else {
                    $(sel).html(html);
                }

                
            },
            error:function(){									    //请求tpl失败处理
                console.log('tpl获取失败');
                return false;
            }
        });
	}

	var defaultSetting = 
	{
		ra:'',
		dir:'',
		dif:'',
		p:'',
		m:1,
    };

    paras = $.extend(defaultSetting,paras);
	//console.log(paras);
    var sel ='#'+paras.ra;

    App.blockUI($(sel), false);
	
	if(paras.dif){
		var datapath = io_java + paras.dif;
	}else{
		var datapath = io + "mod/" + paras.dir + "_D";
		console.log(datapath);
	}
	
	$.ajax({
            url: datapath,								//请求PHP数据
            type:'get',
            async:false,
            //dataType:"jsonp",
            data:paras.p,
            //jsonp: "jsoncallback",
            //jsonpCallback:"success_jsonpCallback",
            success:function(d){
            	//console.log(d);
            	/*if(d.errorCode == 100){
            		App.ajaxblockUI(d.errorReason,
			            setTimeout(function() {
			            $.unblockUI({ 
			                onUnblock: function(){
			                	window.location.href="login.html";
			                } 
			            }); 
		            },1000));       		
            		return;
            	}*/
				console.log(d);
				yxloadtmp(d);
			},
			error:function(){
				var d = "{ }";
				yxloadtmp(d);
				console.log('无数据或数据处理失败');
			}
			
	});
	
	App.unblockUI($(sel));
}