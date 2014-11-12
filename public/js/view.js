   $(document).on('change', '.mtnh-leavs', function(){
       // $('#textarea_hidden').val($('#mtnh-leavs').val());
       var $this = $(this);
       var maxpay = $('.max-pay').val();
       var byleavs = maxpay / 30;
       var cut = ($this.val() * byleavs).toFixed();
       var total = maxpay-cut;
       $this.parents("tr").find(".tol-pay").html(total);
   });
$(function(){
    $('.add').click(function(){
    var name = $(this).parents("tr").find('.sal-name').text();
	var leaves = $('.mtnh-leavs').val();
	var maxpay = $('.max-pay').val();
	var totalpay = $('.tol-pay').html();
         alert(maxpay);
	$('#addhereform li:last').append('<input type="text" style="width:120px; height:30px;" id="sal-name" name="sal-name" value="' + name + '"/><input type="text" style="width:50px; height:30px;" id="max-pay" name="pqty" value="' + maxpay + '"/><input type="text" style="width:50px; height:30px;" id="mtnh-leavs" name="mtnh-leavs" value="' + leaves + '"/><input type="text" style="width:50px; height:30px;" id="tol-pay" name="totalpprice" value="' + totalpay + '"/></li><li>');
});

    $("#process").click(function () {
        var chkbxs = $('.table').find("tr .checkbox");
        var slctd_emp = [],obj;
        chkbxs.each(function () {
            if ($(this).prop('checked') == true){
                
                obj = {
                 "emp_name": $(this).parents("tr").find('.sal-name').text(), 
                 "mail": $(this).parents("tr").find(".email").val(), 
                 "file_name": $(this).parents("tr").find(".payslip-name").val(), 
                 "designation": $(this).parents("tr").find(".desigination").val(), 
                 "gender": $(this).parents("tr").find(".gender").val(), 
                 "doj": $(this).parents("tr").find(".doj").val(), 
                 "dob": $(this).parents("tr").find(".dob").val(), 
                 "pf_a/c": $(this).parents("tr").find(".pf_ac").val(), 
                 "pan": $(this).parents("tr").find(".pan").val(), 
                 "bank_a/c": $(this).parents("tr").find(".bank").val(), 
                 "ifsc": $(this).parents("tr").find(".ifsc").val(), 
                 "available_days": $(this).parents("tr").find(".avilble_days").val(), 
                 "paid_days": $(this).parents("tr").find(".paid_days").val(), 
                 "loss_of_days": $(this).parents("tr").find(".loss-days").val(), 
                 "basic": $(this).parents("tr").find(".basic").val(), 
                 "hra": $(this).parents("tr").find(".hra").val(), 
                 "conveyance_allowance": $(this).parents("tr").find(".conveyance").val(), 
                 "Spcl_allowance": $(this).parents("tr").find(".Spcl_allowance").val(),
                 "a": $(this).parents("tr").find(".a").val(), 
                 "tds": $(this).parents("tr").find(".tds").val(),
                 "pf": $(this).parents("tr").find(".pf").val(),
                 "pt": $(this).parents("tr").find(".pt").val(),
                 "b": $(this).parents("tr").find(".b").val(),
                 "net": $(this).parents("tr").find(".a-y").val()
                  };
                 slctd_emp.push(obj);
           }
        });
        $.ajax({
            url: "/home/pdf",
            method: 'post',
            data: {"slctd_emp":slctd_emp},
            success: function (res) {
                
            }
        });
    });
    
    
    $("#Next").on('click', function(){
        
//        $(".intial-form").effect("slide", {
//                        direction: "left"
//                    }, 1000);
        $(".intial-form").css('opacity', '0');
        $(".slide_left").effect("slide", {
                        direction: "right"
                    }, 1000);
    });
    
    $("#Back").on('click', function(){
        
        $(".slide_left").effect("slide", {
                        direction: "left"
                    }, 1000);
        $(".slide_left").hide();            
        $(".intial-form").css('opacity', '1');
//        $(".intial-form").effect("slide", {
//                        direction: "left"
//                    }, 1000);
    });
});
