    var avlble_days;
    $(document).on('change', '.mtnh-leavs', function () {
        // $('#textarea_hidden').val($('#mtnh-leavs').val());
        function getDaysInMonth(month, year) {

                return new Date(year, month, 0).getDate();
            }
         
        var $this = $(this);
        var maxpay = $('.max-pay').val();
        var  year  = $('#slct-year').val();
        var month = $('#slct-month').val();
        var avlble_days = getDaysInMonth(month, year);
        var byleavs = maxpay / +avlble_days;
        var cut = ($this.val() * byleavs).toFixed();
        var total = maxpay - cut;
        $this.parents("tr").find(".tol-pay").html(total);
        
    });
    $(function () {
//        $('.add').on("clcik", function () {
//            alert();
//            var name = $(this).parents("tr").find('.sal-name').text();
//            var leaves = $('.mtnh-leavs').val();
//            var maxpay = $('.max-pay').val();
//            var totalpay = $('.tol-pay').html();
//            alert(maxpay);
//            $('#addhereform li:last').append('<input type="text" style="width:120px; height:30px;" id="sal-name" name="sal-name" value="' + name + '"/><input type="text" style="width:50px; height:30px;" id="max-pay" name="pqty" value="' + maxpay + '"/><input type="text" style="width:50px; height:30px;" id="mtnh-leavs" name="mtnh-leavs" value="' + leaves + '"/><input type="text" style="width:50px; height:30px;" id="tol-pay" name="totalpprice" value="' + totalpay + '"/></li><li>');
//        });


        

        $("#process").click(function () {
            var chkbxs = $('.table').find("tr .checkbox");
            var slctd_emp = [], obj;
            chkbxs.each(function () {
                if ($(this).prop('checked') == true) {

                    obj = {
                        "emp_name": $(this).parents("tr").find('.sal-name').text(),
                        "mail": $(this).parents("tr").find(".pay_email").val(),
                        "file_name": $(this).parents("tr").find(".payslip-name").val(),
                        "designation": $(this).parents("tr").find(".desigination").val(),
                        "gender": $(this).parents("tr").find(".gender").val(),
                        "doj": $(this).parents("tr").find(".doj").val(),
                        "dob": $(this).parents("tr").find(".dob").val(),
                        "month_slip": $('#slct-month option:selected').text(),
                        "year_slip": $(this).parents("tr").find(".year_slip").val(),
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
                   // alert($(".payslip-name").val());
                    
                }
            });
            $.ajax({
                url: "/home/pdf",
                method: 'post',
                data: {"slctd_emp": slctd_emp},
                success: function (res) {

                }
            });
        });


        $("#Next").on('click', function () {

            //        $(".intial-form").effect("slide", {
            //                        direction: "left"
            //                    }, 1000);
            $(".intial-form").css('opacity', '0');
            $(".slide_left").effect("slide", {
                direction: "right"
            }, 1000);
        });

        $("#Back").on('click', function () {

            $(".slide_left").effect("slide", {
                direction: "left"
            }, 1000);
            $(".slide_left").hide();
            $(".intial-form").css('opacity', '1');
            //        $(".intial-form").effect("slide", {
            //                        direction: "left"
            //                    }, 1000);
        });


        var start = 2012;
        var end = new Date().getFullYear();
        var options = "";
        for (var year = start; year <= end; year++) {
            options += "<option>" + year + "</option>";
        }
        document.getElementById("slct-year").innerHTML = options;
        $(document).ready(function () {
            var end = new Date().getFullYear();
            $("#slct-year").val(end);
        });
        $(document).ready(function () {
             $('#table1').hide();
             $('#process').hide();
             $('#selct-mnth-prcd').html("Select the month to proceed");
        });
        $('#slct-month').change(function () {
            // $('#data-tr').remove();
            $.ajax({
                url: "/home/due_deatils",
                method: 'post',
                data: {
                    "year": $('#slct-year').val(),
                    "month": $('#slct-month option:selected').text(),
                },
                success: function (d) {
                    $('#table1').show();
                    $('#process').show();
                    $('#selct-mnth-prcd').hide();
                    function getDaysInMonth(month, year) {
                    return new Date(year, month, 0).getDate();
                    }
                    var  year  = $('#slct-year').val();
                    var month = $('#slct-month').val();
                    var month_txt = $('#slct-month option:selected').text();
                    alert(month_txt);
                    var avlble_days = getDaysInMonth(month, year);
                    d = JSON.parse(d);
                    $("#table1").html("<tr><th>Select</th><th>Name</th><th>Max-payable</th><th>#Leaves</th><th>Net-payable</th></tr>");
                    for (var i = 0; i < 10; i++) {
 
                        $("#table1").append("<tr id='data-tr'><td>" + "<input type='checkbox' name='checkbox' value='1' class='checkbox'>" + "</td><td  class='sal-name'>" + d[i]['emp_name'] + "</td><td id=''>" + "<input type='text'  class='max-pay' value='20000' style='border: none; height: 50px; width: 95px; margin-top: 0px; outline: none;'>" + "</td><td id=''>" + "<input type='text'  class='mtnh-leavs' style='border: none; height: 50px; width: 95px; margin-top: 0px; outline: none;'>" + "</td><td contenteditable='true'  class='tol-pay'>" + 20000 + "</td><td hidden>" +
                                "<input type='hidden' name='' value=" + d[i]['emp_email'] + " class='pay_email'><input type='hidden' name='' value='Payslip-"+month_txt+"-"+year+".pdf' class='payslip-name'><input type='hidden' name='' value="+ d[i]['designation'] +" class='desigination'><input type='hidden' name='' value="+ d[i]['gender'] +" class='gender'><input type='hidden' name='' value='date of joing' class='doj'><input type='hidden' name='' value="+ d[i]['dob'] +"' class='dob'><input type='hidden' name='' value='pf account no not in db' class='pf_ac'><input type='hidden' name='' value='PAN not in DB' class='pan'><input type='hidden' name='' value='BANK ac' class='bank'><input type='hidden' name='' value='ifsc code' class='ifsc'><input type='hidden' name='' value="+ avlble_days +" class='avilble_days'><input type='hidden' name='' value='paid days' class='paid_days'><input type='hidden' name='' value='loss of days' class='loss-days'><input type='hidden' name='' value='basic' class='basic'><input type='hidden' name='' value='hra' class='hra'><input type='hidden' name='' value='conveyance_allowance' class='conveyance'><input type='hidden' name='' value='Spcl_allowance' class='Spcl_allowance'><input type='hidden' name='' value='(A) Total Earnings' class='a'><input type='hidden' name='' value='TDS' class='tds'><input type='hidden' name='' value='PF' class='pf'><input type='hidden' name='' value='PT' class='pt'><input type='hidden' name='' value='(B) Total Deductions' class='b'><input type='hidden' name='' value="+month_txt+" class='month_slip'><input type='hidden' name='' value="+year+" class='year_slip'>" + "</td></tr>");
                        // console.log(d[i]['emp_email']);
                    }

                }
            });

        });

    });
