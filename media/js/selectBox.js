/*
* author：hmm  2013/08/30
* 版权没有，随便使用！
*/

(function ($) { 	
	
	$.fn.selectBox = function (options) { 
		
		var defaults = { 
			//各种属性及其默认值 
			id:'',
			
			selectBox_id:'',//选择框id
			
			title: '选择', //选择框title
			
			mutipleSelect:'true',
			
			loadStr: 'Loading', 
			
			ajaxSrc: '',
			
			type:''

		}; 
		
		var opts = $.extend(defaults, options); 
		

		//页面存放选择框选择的人的容器
        var selectContainer = "<a class='btn green' href='#" + opts.selectBox_id + "' data-toggle='modal'>选择人员&nbsp;<i class='m-icon-swapright m-icon-white'></i></a>";
        selectContainer += "<a class='select-container-multi span4' href='#" + opts.selectBox_id + "' data-toggle='modal'>";
        selectContainer += "<ul class='select-choices'>";
        selectContainer += "<li class='select-search-field'>    <input type='text' placeholder='" + opts.title + "...' autocomplete='off' class='select-input'>  </li>";
        selectContainer += "<li><i class='corner1'> <span class='tag_close' data-icon='✔'></span><span class='selected'></span></i>    <i title='移除全部' class='icon-remove delall'></i> </li></ul></a>";
		
		//将容器添加到页面上
		$(this).html(selectContainer);	
		
		//ajax获取数据 
		if (opts.ajaxSrc != "") { 
		
			 $.ajax({
				url: opts.ajaxSrc,
				cache: false,
				type: "POST",
				data: {type:opts.type},
				dataType: "json",
				success: function (data) {//除数据之外还需要传是选择人员还是选择部门
					if(data){
						
						//build html code of the selectBox
						var selectBox = "<div id='" + opts.selectBox_id + "' class='modal hide fade' tabindex='-1' data-backdrop='static' data-keyboard='false'>";
        				selectBox += "<div class='modal-header'><button type='button' class='close' data-dismiss='modal' aria-hidden='true'></button><h3>选择" + data.type + "</h3></div>";
        				selectBox += "<div class='modal-body'><div class='row-fluid'><div class='span12'><div class='tabbable tabbable-custom tabs-left'>";
        				selectBox += "<ul class='nav nav-tabs tabs-left'><li class=''><a href='#tab_" + opts.selectBox_id +"_selected' data-toggle='tab'><i class='icon-cog'></i>已选" + data.type + "</a></li>";
					
						for(var i = 0,length = data.department_list.length; i < length; i++){//部门
							selectBox += "<li class=''><a href='#tab_" + opts.selectBox_id + i + "' data-toggle='tab'><i class='icon-user'></i>" + data.department_list[i].d_name + "</a></li>";
						}
						selectBox += "</ul>";
						selectBox += "<div class='tab-content'><div class='tab-pane' id='tab_" + opts.selectBox_id +"_selected'>";
						selectBox += "<p><button class='btn blue' type='button' style='width:100%'>已选" + data.type + " </button></p>";
        				selectBox += "<p><button class='btn green addall' type='button' style='width:100%'><i class='icon-plus'></i>全部添加&nbsp; </button></p>";
        				selectBox += "<p><button class='btn green delall' type='button' style='width:100%'><i class='icon-trash'></i>全部删除&nbsp; </button></p><ul></ul></div>";
					
        				for(var i = 0,length = data.department_list.length; i < length; i++){//部门内人员
	        				
	        				selectBox += "<div class='tab-pane' id='tab_" + opts.selectBox_id + i +"' style='background:#eee'>";
							selectBox += "<p><button class='btn blue' type='button' style='width:100%'>已选" + data.type + " </button></p>";
	       					selectBox += "<p><button class='btn blue addall' type='button' style='width:100%'><i class='icon-plus'></i>全部添加&nbsp; </button></p>";
	        				selectBox += "<p><button class='btn green delall' type='button' style='width:100%'><i class='icon-trash'></i>全部删除&nbsp; </button></p><ul>";
	        				for(var j = 0,length1 = data.department_list[i].d_user_list.length; j < length1; j++){
	        					var user = data.department_list[i].d_user_list[j];
	        					selectBox += "<li class='nouser' id='" + user.u_id+ "'>" + user.u_name + "</li>";
	        				}
	        				selectBox += "</ul></div>";
        				}

        				selectBox += "</div></div></div></div></div>";
						selectBox += "<div class='modal-footer'><button type='button' data-dismiss='modal' class='btn red'>确定</button></div></div>";
						console.log(selectBox);
					
						$("body").append(selectBox);
						$("body #" + opts.selectBox_id + " .tab-pane:eq(1)").addClass("active");
						$("body #" + opts.selectBox_id + " .tabs-left li:eq(1)").addClass("active");
						//只能单选
						if(opts.mutipleSelect === "false"){		

							$("#"+ opts.selectBox_id +" .addall,#"+ opts.selectBox_id +" .delall").css("display","none");
							
						}

					}
				}, 
				error: function () {
					
				}
			});
		} /*else{
			alert("您没有定义数据源,请定义数据源,谢谢~");
		}*/
		
		
		//全部添加
		$("body").on("click","#"+ opts.selectBox_id +" .addall",function(){
		
			var $tab_pane = $(this).closest(".tab-pane");
				
			//将未选状态改为已选状态，再添加到已选框中
			$tab_pane.find(".nouser").removeClass("nouser").addClass("seuser").each(function(){
				
				var li_id = $(this).attr("id");
				
				//若不同部门也有此人也要修改成已选状态
				$("#" + opts.selectBox_id + " .tab-pane ul").find("#"+li_id).removeClass("nouser").addClass("seuser");
				
				//增加到选人框之前判断
				if($("#" + opts.selectBox_id + " #tab_" + opts.selectBox_id + "_selected ul").find("#"+li_id).length <= 0){
			
					$("#" + opts.selectBox_id + " #tab_" + opts.selectBox_id + "_selected ul").append($(this).clone(true));
							
				}
			});
		});
		
		//全部删除
		$("body").on("click","#"+ opts.selectBox_id +" .delall",function(){
		
			var $tab_pane = $(this).closest(".tab-pane");
			
			var tab_id = $tab_pane.attr("id");
					
			//删除已选框中的内容
			$tab_pane.find(".seuser").each(function(){
				
				var li_id=$(this).attr("id");
				
				$("#" + opts.selectBox_id + " #tab_" + opts.selectBox_id + "_selected ul").find("#"+li_id).remove(); 
				
				//若不同部门也有此人也要修改成未选状态
				$("#" + opts.selectBox_id + " .tab-pane ul").find("#"+li_id).removeClass("seuser").addClass("nouser");
			});
			
			//将已选状态改为未选状态
			$tab_pane.find(".seuser").removeClass("seuser").addClass("nouser");
						
			//如果是在已选框点击全部删除则需要将所有li的已选状态改为未选状态
			if( tab_id === "tab_" + opts.selectBox_id + "_selected"){
				$("#" + opts.selectBox_id + " .seuser").removeClass("seuser").addClass("nouser");
			}
		});
		
		//单击点击一个人
		$("body").on("click","#"+ opts.selectBox_id +" .tab-pane ul li",function(){	
			
			var tab_id = $(this).closest(".tab-pane").attr("id");
			console.log(tab_id);
			var li_id = $(this).attr("id");
			console.log(li_id);
			var class_now = $(this).attr("class");			
			console.log(class_now);
			
			switch(opts.mutipleSelect){
				
				case "true":
					//如果是在已选框单击点击一个人(只有将已选状态改为未选状态的case),则要把相应tab的li的已选状态改为未选状态
					if(tab_id === "tab_" + opts.selectBox_id + "_selected"){
					
						$("#tab_" + opts.selectBox_id + "_selected ul").find("#"+li_id).remove();
						
						$("#" + opts.selectBox_id + " .tab-pane").find("#"+li_id).removeClass("seuser").addClass("nouser");
						
					}else{
					
						switch(class_now){
							
							//当前是未选状态则修改成已选状态，并添加到已选框中
						
							case "nouser":
							
								$(this).removeClass("nouser").addClass("seuser");
								
								//若不同部门也有此人也要修改成已选状态
								$("#"+ opts.selectBox_id + " .tab-pane ul").find("#"+li_id).removeClass("nouser").addClass("seuser");
								
								//增加到选人框之前判断是否已存在
								if($("#tab_" + opts.selectBox_id + "_selected ul").find("#"+li_id).length <= 0){
								
									$("#tab_" + opts.selectBox_id + "_selected ul").append($(this).clone(true));
								}
								
								break;
								
							//当前是已选状态
								
							case "seuser":
								
								//先在已选框中删除内容
								$("#tab_" + opts.selectBox_id + "_selected ul").find("#"+li_id).remove();
								
								//若不同部门也有此人也要修改成未选状态
								$("#"+ opts.selectBox_id + " .tab-pane ul").find("#"+li_id).removeClass("seuser").addClass("nouser");
								
								//再修改成未选状态
								$(this).removeClass("seuser").addClass("nouser");
								
								break;
								
							default:
							
								break;
						}
					}
					break;
				
				case "false":

					switch(class_now){
						
						//当前是未选状态则修改成已选状态，并添加到已选框中
					
						case "nouser":
						
							//$("#" + opts.selectBox_id + " #tab_" + opts.selectBox_id + "_selected ul").empty();
						
							$("#" + opts.selectBox_id + " .tab-pane .seuser").removeClass("seuser").addClass("nouser");
						
							$(this).removeClass("nouser").addClass("seuser");
							
							//若不同部门也有此人也要修改成已选状态
							$("#" + opts.selectBox_id + " .tab-pane ul").find("#"+li_id).removeClass("nouser").addClass("seuser");
							
							//增加到选人框之前判断
							if($("#tab_" + opts.selectBox_id + "_selected ul").find("#"+li_id).length <= 0){
							
								//单选时需要先清空ul
								$("#" + opts.selectBox_id + " #tab_" + opts.selectBox_id + "_selected ul").empty().append($(this).clone(true));
							}
							
							break;
							
						//当前是已选状态	
						case "seuser":
								
							//先在已选框中删除内容
							$("#" + opts.selectBox_id + " #tab_" + opts.selectBox_id + "_selected ul").find("#"+li_id).remove();
							
							//若不同部门也有此人也要修改成未选状态
							$("#" + opts.selectBox_id + " .tab-pane ul").find("#"+li_id).removeClass("seuser").addClass("nouser");
							
							//再修改成未选状态
							$(this).removeClass("seuser").addClass("nouser");
							
							break;
							
						default:
						
							break;
					}
					break;
				
			}		
		});

		//确定退出选人框
		$("body").on("click","#"+ opts.selectBox_id +" .modal-footer button,#"+ opts.selectBox_id +" .modal-header button",function(){
			//先清空页面内的内容
			$("#"+ opts.id +" .select-container-multi .select-choices").find(".select-search-choice").remove();	
			var $field = $("#"+ opts.id +" .select-container-multi .select-choices .select-search-field");
			console.log($field);
			//将选人框内的内容更新到页面
			$("#"+ opts.selectBox_id +" #tab_" + opts.selectBox_id + "_selected ul li").each(function(){
				var li_id = $(this).attr("id");
				var li_name = $(this).html();
				var li_new = "<li class='select-search-choice' id='"+li_id+"'><i title='移除此人' class='icon-remove delone'></i> <div>"+li_name+"</div></li>";
				$(li_new).insertBefore($field);
			});
		});
		
		//在页面上删除已选的人
		$("body #"+ opts.id).on("click",".select-container-multi .select-choices .select-search-choice i",function(e){
		//$(".select-container-multi .select-choices .select-search-choice li").on("click",".delone",function(e){
			var li_id = $(this).closest("li").attr("id");
			console.log("删除全部"+li_id+"selectBox_id:"+opts.selectBox_id);
			$("#" + opts.selectBox_id + " #tab_" + opts.selectBox_id + "_selected ul").find("#"+li_id).remove();				
			$("#" + opts.selectBox_id + " .tab-pane").find("#"+li_id).removeClass("seuser").addClass("nouser");
			$(this).closest("li").remove();	
			e.stopPropagation();
		});  
		
		//在页面上删除全部已选的人
		$(".select-container-multi .select-choices li").on("click",".delall",function(e){
			
			var li_id;
			
			$(this).closest("ul").find(".select-search-choice").each(function(){
				
				li_id = $(this).attr("id");
				
				console.log("删除全部"+li_id+"selectBox_id:"+opts.selectBox_id);
				
				$("#" + opts.selectBox_id + " #tab_" + opts.selectBox_id + "_selected ul").find("#"+li_id).remove();				
				
				$("#" + opts.selectBox_id + " .tab-pane").find("#"+li_id).removeClass("seuser").addClass("nouser");
				
				$(this).remove();

			});
				
			e.stopPropagation();
		}); 

		return this;
	};
})(jQuery); 

//初始化页面
$("body .selectBox").each(function(){

	var $this = $(this);	
	
	var id = $this.attr("id");

	var se_id = $this.attr("selectBox_id");

	var is_muti = $this.attr("mutipleSelect");

	var ajax_src = $this.attr("ajax_src");

	var type = $this.attr("type");

	$(this).selectBox({
		
		id:id,
		
		selectBox_id:se_id,//选择框id
		
		mutipleSelect:is_muti,//是否多选
		
		ajaxSrc:ajax_src,//数据来源
		
		type:type//类型:人员还是部门
	});
});
