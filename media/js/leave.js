
$(function() {
		//请假申请
		$("#btn_leave_new").click(function(){
			$("#dv_leave").slideUp();
			$("#fm_leave").slideDown();
		});
		
		$("#btn_leave_cancel").click(function(){
			$("#dv_leave").slideDown();
			$("#fm_leave").slideUp();
		});
		
		//出差登记
		$("#evection_new").click(function(){
			$("#dv_evection").slideUp();
			$("#fm_evection").slideDown();
		});
		$("#btn_evection_cancel").click(function(){
			$("#dv_evection").slideDown();
			$("#fm_evection").slideUp();
		});
		
		//考勤审批
		$("#btn_goout_back").click(function(){
			$("#dv_approve").slideUp();
			$("#dv_gooutback").slideDown();
		});
		
		$("#btn_goback").click(function(){
			$("#dv_approve").slideDown();
			$("#dv_gooutback").slideUp();
		});
});