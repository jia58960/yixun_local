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
	//alert('刷url了');
	var urlStr = JSON.stringify(urlJSON);
	window.history.pushState(null,null,"?"+urlStr);
}

/*function getParentUrlJson(){ //urlfix
	 var demo1 = urlfix.lastIndexOf('.');
    var newurl = urlfix.slice(0,demo1);
    var urljasonfix = eval(newurl);
}*/

function yixunload(paras_org,urlfix_org) {
	
	var paras = paras_org[0];
	var urlfix = urlfix_org + "." + paras.ra; //urlfix_org判断
	eval(urlfix + "= paras_org");
	urlfix += "[0]";
	/*alert('222');
	console.log(urlJSON);*/
	flushurl();
	/*alert('333');
    console.log(urlJSON);*/
    //return false;
	var yxloadtmp = function(d) {
		$.ajax({
            url:io + "mod/" + paras.dir,
            type:'post',
            async:false,                        //默认false
            success:function(t) {
                var data = {};
                data.urlfix = urlfix;
                data.serverdata = d;

                var render = template.compile(t);
                var html = render(data);

                //m为2表示新增内容否则为替换内容
                if (paras.m == 2){
                    $(sel).append(html);
                } else {
                    $(sel).html(html);
                }
            },
            error:function(){								    //请求tpl失败处理
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
		//console.log(datapath);
	}else{
		var datapath = io + "mod/" + paras.dir + "_D";
		
	}
	
	$.ajax({
            url: datapath,								//请求PHP数据
            type:'post',
            async:false, 
            data:paras.p,
            beforeSend: function(xhr) {
              xhr.withCredentials = true;
            },
            success:function(d){
            	//console.log(d);
            	//console.log('有数据');
            	if(d.resultCode == 100){
            		App.ajaxblockUI(d.resultCode,d.resultReason,
			            setTimeout(function() {
			            $.unblockUI({ 
			                onUnblock: function(){
			                	window.location.href="login.html";
			                } 
			            }); 
		            },1000));       		
            		return;
            	}
				yxloadtmp(d);
				
			},
			error:function(){
				var d = "{}";
				yxloadtmp(d);										//请求tmp同目录_D默认数据
				console.log('无数据或数据处理失败');
			}
			
	});
	
	App.unblockUI($(sel));
}

//datatable模块
function datableload(paras_org,urlfix_org){
	var paras = paras_org[0];
	var urlfix = urlfix_org + "." + paras.ra; //urlfix_org判断
	eval(urlfix + "= paras_org");
	urlfix += "[0]";
	flushurl();
	
	//刷模版
	var defaultSetting = 
	{
		ra:'',
		dir:'',
		m:1,
    };
    paras = $.extend(defaultSetting,paras);
	var sel ='#'+paras.ra;
    App.blockUI($(sel), false);

	var data = {};
	data.urlfix = urlfix;
	data.dtdiv = paras.ra + "_dt";

	function dtloadtemp(paras){
		
		var oTable = $('#' + data.dtdiv).dataTable({
			"bProcessing": true,
			"bServerSide": true,
			//"sAjaxSource": "http://10.188.199.8:19998/yixun_local/mod/DigiM/IF/purchaseBigList.php",
			"sAjaxSource": paras.dif + '?' +paras.p,
	        "aLengthMenu": [
	            [5, 15, 20, -1],
	            ["5", "15", "20", "所有"] // change per page values here
	        ],
	        "aoColumns": paras.columns,
	        //"aoColumnDefs": paras.columnDefs,
	        "iDisplayLength":5,
	        "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>", //附加功能T<'clear'>lfrtip
	        "sPaginationType": "bootstrap",//翻页样式
	        "bSort": true//禁用排序功能
		});
		
		$('#yx_table_column_toggler_1 input[type="checkbox"]').change(function(){
            /* Get the DataTables object again - this is not a recreation, just a get of the object */
            var iCol = parseInt($(this).attr("data-column"));
            var bVis = oTable.fnSettings().aoColumns[iCol].bVisible;
            oTable.fnSetColumnVis(iCol, (bVis ? false : true));
        });
	}

	$.ajax({
            url:io + "mod/" + paras.dir,
            type:'post',
            async:false,                        //默认false
            success:function(t) {

                var render = template.compile(t);
                var html = render(data);

                //m为2表示新增内容否则为替换内容
                if (paras.m == 2){
                    $(sel).append(html);
                } else {
                    $(sel).html(html);
                }
                //loaddata

                if(!paras.dif){
                	paras.dif = io + "mod/" + paras.dir + "_D2.php";
                } else {
                	paras.dif = io_java + paras.dif;
                }
				console.log(paras.dif);

				dtloadtemp(paras);
				
            },
            error:function(){								    //请求tpl失败处理
                console.log('datatable模版获取失败');
                return false;
            }
        });

	App.unblockUI($(sel));
}

//modal模态窗口
var handleModal = function (selector,area,file) {
  $(selector).on('click',function(){
    App.blockUI($('body'),false);
    $(area).load(file, '', function(){ $(area).modal(); });
    App.unblockUI($('body'));
  })
}






