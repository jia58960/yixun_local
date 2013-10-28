function yxload(render_area, directory, data_interface, para, mode ,islocal) {
   if (islocal === true ) {
       var _yxio = '';
    } else {
         _yxio = "jsonDataDemo/";
    }

    var sel = '#'+render_area;
    App.blockUI($(sel), false);

    $.ajax({
        url:'./'+directory,
        type:'post',
        success:function(t) {
			//alert(data_interface);
            $.ajax({
                url: _yxio + data_interface,
                type:'post',
                data:para,
                //请求data成功处理
                success:function(d){

                    //本地测试数据用
                    var data = $.parseJSON(d);

                    //正式用以下两行代码（加data属性）
                    //var newd = $.parseJSON(d);
                    //var data = {"data":newd};
                    
                    //解析
                    var render = template.compile(t);
                    var html = render(data);

                    //mode为2表示新增内容否则为替换内容
                    if (mode == 2){
                        $(sel).append(html);
                    } else if(mode == 1) {
                        $(sel).html(html);
                    } else {
                        $(sel).html(html);
                    }

                    App.unblockUI($(sel));
                },
                //请求data失败处理
                error:function(){
                    console.log('data获取失败');
                    return false;
                }
            });
        },
        //请求tpl失败处理
        error:function(){
            console.log('tpl获取失败');
            return false;
        }
    });
}
