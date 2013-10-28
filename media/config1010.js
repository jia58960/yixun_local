//var io = "http://localhost/yixun_local/proxy.php?url=http://10.188.192.169:8080/YIXUN_1.5_EE/";   //正式地址

//url
var getURL = window.location.search;
var urlStr = decodeURIComponent(getURL.substr(1));
if(urlStr ==''){
	urlJSON = {};
} else {
	urlJSON = $.parseJSON(urlStr);
}

function flushurl(){
	var urlStr = JSON.stringify(urlJSON);
	window.history.pushState('','',"?"+urlStr);
}

/*
    yixunload(paras) 方法说明:

其中paras包括以下参数：

1、ra:  放回页面的div id值，
2、dir:    请求的模版接口;
3、io:        请求的数据接口前缀（域之类的） 默认为Java接口前缀：http://10.188.192.200:8080/YIXUN_1.5_EE/
4、dif:请求的数据接口
5、p:         向被请求模块传递的参数(json格式) 默认''
6、m:         为直接向ra中刷入内容，2为向ra中增加内容 默认为1
7、ld:  true表示请求本地静态数据，false表示远程请求数据 默认为false

eg:
yixunload({
            ra:"Dashboard_header",
            dir:"Common/HeaderTmpl",
            dif:"Common/HeaderInterface",
            p:{"deptid":2}
        }); 
*/

//var io = 'http://10.188.192.200:8080/YIXUN_1.5_EE/';

//URL add

/*function yxsys(para_ss){

    //console.log(para_ss);
    yixunload({
        "ra":para_ss.abc.Setting_userlist.ra,
        "dir":para_ss.abc.Setting_userlist.dir,
        "dif":para_ss.abc.Setting_userlist.dif,
        "para":{"deptid":2}
    });
}*/

function yixunload(paras,urlfix) {
	//处理url
	var temp_paras = paras[0];
	//console.log(temp_paras);
//	if(temp_ra != "Dashboard_menu" && temp_ra != "Dashboard_menu" && temp_ra != "Dashboard_menu"){
		//eval("urlJSON." + temp_paras.ra + "= {}");
	var urlpass = urlfix + "." + temp_paras.ra;
	eval(urlpass + "= paras");
	urlpass += "[0]";
//	}
	//console.log(urlJSON);
	flushurl();
/*    var paras2 = {
        "ra":temp_paras.ra,
        "dir":temp_paras.dir,
        "io":temp_paras.io,
        "dif":temp_paras.dif,
        "para":temp_paras.para,
        "m":temp_paras.m,
        "ld":temp_paras.ld,
    }*/

    if( temp_paras.dif=='' ){
        yxStaticLoad(temp_paras,urlpass);

    }else{
        yxload(temp_paras,urlpass);

    }
}



// ra, dir, dif, para, m,ld

function yxStaticLoad(paras,urlfix){
    //alert('静态');
    //$('#'+paras.ra).load('mod/'+paras.dir);
    var sel ='#'+paras.ra;
    App.blockUI($(sel), false);
    $.ajax({
            url:'mod/'+ paras.dir,
            type:'post',
            success:function(t) {
                //alert('123456');
                //本地测试数据用
                //var urlpass = {"urlll":urlfix}
                var data = {"urlfix":urlfix}
                var newd = {"data":data};
                    
                //var newd = data;                
                //正式用以下一行代码（加data属性）
                //var data = {"data":d};
                
                //解析
                var render = template.compile(t);
                var html = render(newd);

                //m为2表示新增内容否则为替换内容
                if (paras.m == 2){
                    $(sel).append(html);
                } else {
                    $(sel).html(html);
                }
                App.unblockUI($(sel));
                //alert('静态解锁了');
            },
            //请求tpl失败处理
            error:function(){
                console.log('tpl获取失败');
                return false;
            }
            });
}

function yxload(paras,urlpass) {
    //初始化参数设置
    var defaultSetting = {
        ra:'',
        dir:'',
        io:io,   //默认为Java接口
        dif:'',
        p:'',
        m:1,
        ld:false,
    };

    $.extend(defaultSetting,paras);

    var sel ='#'+defaultSetting.ra;
    var prefix = defaultSetting.io;

    App.blockUI($(sel), false);
    
    $.ajax({
            //url: prefix + defaultSetting.dif + '?jsoncallback=?',
            url: prefix + defaultSetting.dif,
            type:'post',
            async:false,
            //dataType:"jsonp",
            data:defaultSetting.p,
            //请求data成功处理
            success:function(d){
                $.ajax({
                    url:'./'+ defaultSetting.dir,
                    type:'post',
                    async:false,
                    success:function(t) {
                        
                        var data = $.parseJSON(d);
                        data.urlfix = urlpass;
                        var newd = {"data":data};
						
                        //var newd = data;
                        //alert('yixunload12');
						//console.log(newd);
                        //正式用以下一行代码（加data属性）
                        //var data = {"data":d};
                        
                        //解析
                        var render = template.compile(t);
                        var html = render(newd);

                        //m为2表示新增内容否则为替换内容
                        if (defaultSetting.m == 2){
                            $(sel).append(html);
                        } else {
                            $(sel).html(html);
                        }
                        App.unblockUI($(sel));
                    },
                    //请求tpl失败处理
                    error:function(){
                        console.log('tpl获取失败');
                        return false;
                    }
            });
            },
            //请求data失败处理
            error:function(){
                console.log('data请求失败');

                App.unblockUI($(sel));
                return false;
            }
    });
    
}


function yxloadMenuHeader(ra, dir, dif, parameters){
	//console.log(parameters);
    var dataPreffix = 'http://10.188.199.8:19999/yixun_local/mod/';

    var sel ='#'+ra;

    App.blockUI($(sel), false);

    $.ajax({
            url: dataPreffix+dif,
            type:'post',
            data: parameters,
            //请求data成功处理
            success:function(d) {
                $.ajax({
                    url:'./'+ dir,
                    type:'post',
                    success:function(t) {
                        //本地测试数据用
                        var data = $.parseJSON(d);

                        //正式用以下两行代码（加data属性）
                        //var newd = $.parseJSON(d);
                        //var data = {"data":newd};
                        
                        //解析
                        var render = template.compile(t);
                        var html = render(data);
                        
                        $(sel).html(html);
                        App.unblockUI($(sel));
                    },
                    //请求tpl失败处理
                    error:function(){
                        console.log('tpl获取失败');
                        return false;
                    }
            });
            },
            //请求data失败处理
            error:function(){
                console.log('data获取失败');
                if(dir =='Common/ModuleSubmenuTmpl'){
                   
                   yxload({
				        ra:'Modules_submodules',
				        dir:'Common/ModuleSubmenuTmpl',
				        dif:'Common/ModuleSubmenuInterface',
				        p:parameters        
			    	});
                } else {
                    yxload({
				        ra:'Modules_header',
				        dir:'Common/ModuleHeaderTmpl',
				        dif:'Common/ModuleHeaderInterface',
				        p:parameters
			    	});
                }
                App.unblockUI($(sel));
                return false;
            }
    });
}

/*function yxloadHeader(){

}*/

//调用 parent_tmpl:当前模块名
function getSubModule(div_prefix, parent_tmpl) {
    var second_m = $.query.get('subModules');
    if (second_m) {
        $.each(second_m,function(i,obj){
          //console.log(obj);
          if (obj.parent == parent_tmpl) {
            yxload(div_prefix, obj.dir, obj.tmpl,'', obj.para);
          }
        })
    } else return false;

}

//将对象转换为字符串
 function obj2Str(obj){  
    switch(typeof(obj)){  
       case 'object':  
        var ret = [];  
        if (obj instanceof Array){  
         for (var i = 0, len = obj.length; i < len; i++){  
          ret.push(obj2Str(obj[i]));  
         }  
         return '[' + ret.join(',') + ']';  
        }  
        else if (obj instanceof RegExp){  
         return obj.toString();  
        }  
        else{  
         for (var a in obj){  
          ret.push(a + ':' + obj2Str(obj[a]));  
         }  
         return '{' + ret.join(',') + '}';  
        }  
       case 'function':  
        return 'function() {}';  
       case 'number':  
        return obj.toString();  
       case 'string':  
        return "\"" + obj.replace(/(\\|\")/g, "\\$1").replace(/\n|\r|\t/g, function(a) {return ("\n"==a)?"\\n":("\r"==a)?"\\r":("\t"==a)?"\\t":"";}) + "\"";  
       case 'boolean':  
        return obj.toString();  
       default:  
        return obj.toString();  
    }  
} 

