$('.has_qtip').each(function() {

				var id = $(this).attr('id');

		        $(this).qtip({
		            content: {
		                text: 'Loading...',
		                ajax: {
		                	once: false,//该参数默认值为true，表示qTip只在第一次加载要显示的内容，而不是每一次显示都动态获取内容。
		                    url: 'get_qtip_data.php',
		                    type: 'POST', // POST or GET
					        data: { id: id,action:"get"}, // Data to pass along with your request
					        dataType: 'json', // Tell it we're retrieving JSON
					        success: function(data, status) {
					         	if(status === "success"){
					         		//console.log(status);
					         		//console.log(data);
					        	 	this.set('content.text', data.content);
					         	}
					         
					         }
		                }
		            },
		            position: {
		                viewport: $(window)
		            },
		            style: {
    					classes: 'qtip qtip-default  qtip-pos-tl qtip-blue qtip-shadow qtip-rounded'
  					},					 
		            hide: {
							fixed: true,
							delay: 300,
							
						},
		         });
		     });
		
		$("body").on("mouseout","p[contenteditable='true']",function(){

				var content = $(this).html();
				var id= $(this).attr('id');

				//有id，但无消息提示
				if($(this).attr("class") === "no_qtip" ){

					$.ajax({
						type: "POST",
						url: "get_qtip_data.php",
						data: {id:id,content:content,action:"insert"},
						dataType: "json",
						success: function(data){
						    
						  }
					});
				}else{

					$.ajax({
						type: "POST",
						url: "get_qtip_data.php",
						data: {id:id,content:content,action:"update"},
						dataType: "json",
						success: function(data){
						    
						  }
					});
				}

			});