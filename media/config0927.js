//var _yxio = "http://10.188.199.8:19999/yixun_local/proxy.php?url=http://10.188.192.169:8080/YIXUN_1.5_EE/";   //正式地址

/*
    yixunload(paras) 方法说明:

其中paras包括以下参数：

1、render_area:  放回页面的div id值，
2、directory:    请求的模版接口;
3、dataInterface:请求的数据接口
4、para:         向被请求模块传递的参数(json格式) 默认''
5、mode:         为直接向render_area中刷入内容，2为向render_area中增加内容 默认为1
6、isLocalData:  true表示请求本地静态数据，false表示远程请求数据 默认为false

eg:
yixunload({
            render_area:"Dashboard_header",
            directory:"Common/HeaderTmpl",
            dataInterface:"Common/HeaderInterface",
            para:{"deptid":2}
        }); 
*/

//var _yxio = 'http://10.188.192.169:8080/YIXUN_1.5_EE/'; 正式的时候用

var _yxio = "./jsonDataDemo/";  //本地给出服务器的数据时用

function yixunload(paras){
    if( paras.dataInterface=='' ){   
        yxStaticLoad(paras);

    } else {
        yxload(paras);

    }
}

// render_area, directory, dataInterface, para, mode,isLocalData

function yxStaticLoad(paras){

    $('#'+paras.render_area).load('modules/'+paras.directory);
}


function yxload(paras) {
    //初始化参数设置
    var defaultSetting = {
        render_area:'',
        directory:'',
        dataInterface:'',
        para:'',
        mode:1,
        isLocalData:false,
        
    };

    $.extend(defaultSetting,paras);

    //console.log(defaultSetting);
    if (defaultSetting.isLocalData === true){ _yxio = 'http://10.188.199.8:19999/yixun_local/modules/';};

    var sel ='#'+defaultSetting.render_area;

    App.blockUI($(sel), false);
    
    $.ajax({
            url: _yxio + defaultSetting.dataInterface,
            type:'post',
            data:defaultSetting.para,
            //请求data成功处理
            success:function(d){
                $.ajax({
                    url:'./'+ defaultSetting.directory,
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
                return false;
            }
    });
    
}


function yxloadMenuHeader(render_area, directory, dataInterface, para){

    var dataPreffix = 'http://10.188.199.8:19999/yixun_local/modules/';
    var sel ='#'+render_area;

    App.blockUI($(sel), false);

    $.ajax({
            url: dataPreffix+dataInterface,
            type:'post',
            data: para,
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
                    $(sel).html(''); 
                } else{
                    $(sel).html('<b>主模块必须给Head啊！</b>');
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

//JS判断某文件是否存在
/*function getFileStatus(filepath) {

    var xmlhttp;
    
    if(window.XMLHttpRequest) //非IE浏览器及IE7(7.0及以上版本)，用xmlhttprequest对象创建
    {   
        
        xmlhttp = new XMLHttpRequest();
        
    }
    else if(window.ActiveXObject) //IE(6.0及以下版本)浏览器用activexobject对象创建,如果用户浏览器禁用了ActiveX,可能会失败.
    {
        xmlhttp = new ActiveXObject("Microsoft.XMLHttp");
    } else {

        return null;
    }

    
    xmlhttp.open("HEAD",filepath,true);
    
    xmlhttp.onreadystatechange = function(){
       //xmlhttp.sss = '123';

      if(xmlhttp.readyState == 4)
      {
          if(xmlhttp.status == 200)
        {   
            //demo34 = '123';
            window .sss = '123';
        }else if(xmlhttp.status == 404){
           // demo34 = '456';
           window .sss = '456';
        }
      }
    }
    

    return window.sss;


}*/

