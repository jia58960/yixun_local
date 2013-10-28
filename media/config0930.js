//var _yxio = "http://localhost/yixun_local/proxy.php?url=http://10.188.192.169:8080/YIXUN_1.5_EE/";   //正式地址

/*
    yixunload(paras) 方法说明:

其中paras包括以下参数：

1、render_area:  放回页面的div id值，
2、directory:    请求的模版接口;
3、_yxio:        请求的数据接口前缀（域之类的） 默认为Java接口前缀：http://10.188.192.200:8080/YIXUN_1.5_EE/
4、dataInterface:请求的数据接口
5、para:         向被请求模块传递的参数(json格式) 默认''
6、mode:         为直接向render_area中刷入内容，2为向render_area中增加内容 默认为1
7、isLocalData:  true表示请求本地静态数据，false表示远程请求数据 默认为false

eg:
yixunload({
            render_area:"Dashboard_header",
            directory:"Common/HeaderTmpl",
            dataInterface:"Common/HeaderInterface",
            para:{"deptid":2}
        }); 
*/

//var _yxio = 'http://10.188.192.200:8080/YIXUN_1.5_EE/';

//URL add

/*function yxsys(para_ss){

    //console.log(para_ss);
    yixunload({
        "render_area":para_ss.abc.Setting_userlist[0].render_area,
        "directory":para_ss.abc.Setting_userlist[0].directory,
        "dataInterface":para_ss.abc.Setting_userlist[0].dataInterface,
        "para":{"deptid":2}
    });
}*/

function yixunload(paras) {

    if( paras.dataInterface=='' ){

        yxStaticLoad(paras);

    }else{

        yxload(paras);

    }
}

// render_area, directory, dataInterface, para, mode,isLocalData

function yxStaticLoad(paras){
    //alert('直接装载');
    $('#'+paras.render_area).load('modules/'+paras.directory);
}


function yxload(paras) {
    //初始化参数设置
    var defaultSetting = {
        render_area:'',
        directory:'',
        _yxio:io,   //默认为Java接口
        dataInterface:'',
        para:'',
        mode:1,
        isLocalData:false,
        
    };
    $.extend(defaultSetting,paras);
    

    var sel ='#'+defaultSetting.render_area;
    var prefix = defaultSetting._yxio;

    App.blockUI($(sel), false);
    
    $.ajax({
            //url: prefix + defaultSetting.dataInterface + '?jsoncallback=?',
            url: prefix + defaultSetting.dataInterface,
            type:'post',
            //async:false,
            //dataType:"jsonp",
            data:defaultSetting.para,
            //请求data成功处理
            success:function(d){
                $.ajax({
                    url:'./'+ defaultSetting.directory,
                    type:'post',
                    success:function(t) {

                        //本地测试数据用
                        var data = $.parseJSON(d);

                        //正式用以下一行代码（加data属性）
                        //var data = {"data":d};
                        
                        //解析
                        var render = template.compile(t);
                        var html = render(data);

                        //mode为2表示新增内容否则为替换内容
                        if (defaultSetting.mode == 2){
                            $(sel).append(html);
                        } else {
                            $(sel).html(html);
                        }
                        //alert(sel);
                        App.unblockUI($(sel));
                        //alert(data_interface);
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
                App.unblockUI($(sel));
                return false;
            }
    });
    
}


function yxloadMenuHeader(render_area, directory, dataInterface, parameters){
	//console.log(parameters);
    var dataPreffix = 'http://10.188.199.8:19999/yixun_local/modules/';

    var sel ='#'+render_area;

    App.blockUI($(sel), false);

    $.ajax({
            url: dataPreffix+dataInterface,
            type:'post',
            data: parameters,
            //请求data成功处理
            success:function(d) {
                $.ajax({
                    url:'./'+ directory,
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
                if(directory =='Common/ModuleSubmenuTmpl'){
                   
                   yxload({
				        render_area:'Modules_submodules',
				        directory:'Common/ModuleSubmenuTmpl',
				        dataInterface:'Common/ModuleSubmenuInterface',
				        para:parameters        
			    	});
                } else {
                    yxload({
				        render_area:'Modules_header',
				        directory:'Common/ModuleHeaderTmpl',
				        dataInterface:'Common/ModuleHeaderInterface',
				        para:parameters
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
            yxload(div_prefix, obj.directory, obj.tmpl,'', obj.para);
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

