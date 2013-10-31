/*
该js封装常用插件
*/

//编辑器(kindeditor)封装 异步封装
//上传处理的方法的路径（rootdir）与后台商定..
var loadKindeditor = function(selector,uploaddir,rootdir,resizeType) {
	var eresizeType = !resizeType ? 1:resizeType;
	//return eresizeType;
	if (selector == '' || uploaddir == '') {
		return false;	
	}

	$.getScript('./assets/plugins/kindeditor/kindeditor-min.js', function() {
	    KindEditor.basePath = './assets/plugins/kindeditor/';
	    KindEditor.create(selector,{
			resizeType : eresizeType,
			themeType : 'simple',
			allowPreviewEmoticons : true,
			allowImageUpload : true,
			uploadJson : rootdir+'/Editor/uploadifyChk?updir='+uploaddir,
			items : [
				'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
				'removeformat','wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
				'insertunorderedlist', '|', 'emoticons', 'image','multiimage','insertfile','|','quickformat','preview']
	    });
	});
}

//表单美化
var handleUniform = function () {
        if (!jQuery().uniform) {
            return;
        }
        var test = $("input[type=checkbox]:not(.toggle), input[type=radio]:not(.toggle, .star)");
        if (test.size() > 0) {
            test.each(function () {
                    if ($(this).parents(".checker").size() == 0) {
                        $(this).show();
                        $(this).uniform();
                    }
                });
        }
    }
//BOOTSRAP日期选择
var handleDatePickers = function (selector) {

		if (selector =='') return false;

        if (jQuery().datepicker) {
            $(selector).datepicker({
                format: 'yyyy-mm-dd'
            });
        } else {
        	alert('未加载插件');
        }
    }
//BOOTSTRAP日期时间选择器
var handleDatetimePicker = function (selector) {      

  $(selector).datetimepicker({
      format: "yyyy-mm-dd hh:ii",
      pickerPosition: (App.isRTL() ? "bottom-right" : "bottom-left"),
      language:'zh-CN',
      autoclose: true,
      showMeridian: true,
      startView:1,
      todayHighlight:true
      
  });
}
//JQUERY UI日期选择器
var handleJqueryUIDatePickers = function (selector){
  $(selector).datepicker({
      changeMonth: true,
      changeYear: true,
      showButtonPanel: true,
      showWeek:true

    });
}

//
var handleNoty = function(text,type){
  var n = noty({
      text: text,
      type: type,
      dismissQueue: true,
      layout: 'center',
      animateOpen: {height: 'toggle'},
      animateClose: {height: 'toggle'},
      timeout: 2000,
      theme: 'defaultTheme'
    });
}

//select2简约版
var handleSelectEasy = function(selector){
  $(selector).chosen();
}