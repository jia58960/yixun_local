var FormValidation = function () {


    return {
        //main function to initiate the module
        init: function () {

            // for more info visit the official plugin documentation: 
            // http://docs.jquery.com/Plugins/Validation

            var form1 = $('#addDeptForm');
            var error1 = $('.alert-error', form1);
            var success1 = $('.alert-success', form1);

            form1.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-inline', // default input error message class
                focusInvalid: true, // do not focus the last invalid input
                ignore: "",
                rules: {
                    dept_name: {
                        minlength: 2,
                        required: true
                    },
                    dept_parent: {
                        required: true,
                    },
                    dept_color: {
                        required: true,
                    },
                    dept_sort: {
                        required: true,
                        number: true
                    }
                },
                messages: {
                    dept_name: {
                        minlength: '至少两个字符',
                        required: '请填写部门名称'
                    },
                    dept_parent: {
                        required: '请选择所属部门',
                    },
                    dept_color: {
                        required: '请为部门选择一种颜色来标识',
                    },
                    dept_sort: {
                        required: '请填写部门排序号',
                        number: '部门排序号为数字'
                    }
                },
                invalidHandler: function (event, validator) { //display error alert on form submit              
                    success1.hide();
                    error1.show();
                    App.scrollTo(error1, -200);
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.help-inline').removeClass('ok'); // display OK icon
                    $(element)
                        .closest('.control-group').removeClass('success').addClass('error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change dony by hightlight
                    $(element)
                        .closest('.control-group').removeClass('error'); // set error class to the control group
                },

                success: function (label) {
                    label
                        .addClass('valid').addClass('help-inline ok') // mark the current input as valid and display OK icon
                    .closest('.control-group').removeClass('error').addClass('success'); // set success class to the control group
                },

                submitHandler: function (form) {
                    success1.show();
                    error1.hide();
                }
            });

            //Sample 2
            $('#form_2_select2').select2({
                placeholder: "Select an Option",
                allowClear: true
            });            


        }

    };

}();