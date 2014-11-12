<?php require 'views/header.php'; ?>

<div id="all_emp" data-complete = <?php echo "'".json_encode($this->all_user_details)."'"; ?> >
    <table border="2" style="width: 1000px; height: auto">
        <tr><th>Name</th>
            <th>Emp Id</th>
            <th>Email</th>
            <th>Phone no</th>
            <th>DOB</th>
            <th>Age</th>
            <th>Designation</th>
            <th>Department</th>
<!--            <th>View full details</th>-->
            <th>Upload Payslip</th>
        </tr>
        <tr>
            <?php $row = $this->all_user_details; ?>
            <?php for ($i = 0; $i < sizeof($row); $i++) { ?>
                <td align="center"><?php echo $row[$i]['emp_name']; ?></td>
                <td align="center"><?php echo $row[$i]['emp_id']; ?></td>
                <td align="center"><?php echo $row[$i]['emp_email']; ?></td>
                <td align="center"><?php echo $row[$i]['phone_no']; ?></td>
                <td align="center"><?php echo $row[$i]['dob']; ?></td>
                <td align="center"><?php echo $row[$i]['age']; ?></td>
                <td align="center"><?php echo $row[$i]['designation']; ?></td>
                <td align="center"><?php echo $row[$i]['department']; ?></td>
<!--                <td align="center"><a href="#<?php echo $i; ?>" class="modal_trigger7">View full</a></td>-->
                <td align="center"><a href="#payslip-popup" id="<?php echo $i; ?>" class ="modal_trigger7 upld-slip">Upload Payslip</a></td>
            </tr>
            <tr>
                <td>
                    <!--  Hidden for a while-->
                    <div id="<?php //echo $i;  ?>" class="popupContainer_all pop_cont" style="display:none;">
                        <header class="popupHeader6">
                            <span class="header_title"><?php echo $row[$i]['emp_name']; ?></span>
                            <span class="modal_close"></span>
                        </header>

                        <section class="popupBody6">
                            <div class="profile_img1">

                                <img class="img_class" height="900px" width="250px" src="/images/kkk@gmail.com/<?php // echo $this->user_details[0]['emp_email'];  ?>/profile.jpg"/>                    
                            </div>
                            <div class="emr_details">
                                <p><span style="padding-left: 50px"><img style="padding-bottom: 10px" height="60px" width="30px" src="/images/king1.png"/>&nbsp;<b><font size="4" color="#663300"><?php echo $row[$i]['emp_name']; ?></font></b></span></p>
                                <p><span style="padding-left: 50px">Emaplyee Id:</span></span><span style="padding-left: 20px"><?php echo $this->user_details[0]['emp_id']; ?></span></p>
                                <p><span style="padding-left: 100px"><img src="/images/mail.png" style="height: 32px; width: 32px;"></span></span><span style="padding-left: 20px"><?php echo $this->user_details[0]['emp_email']; ?></span></p>
                                <p><span style="padding-left: 99px"><img src="/images/phone1.png" style="height: 32px; width: 32px;"></span><span style="padding-left: 20px"><?php echo $this->user_details[0]['phone_no']; ?></span></p>
                                <p><span style="padding-left: 47px">Father name:</span><span style="padding-left: 20px"><?php echo $this->user_details[0]['fathername']; ?></span></p>
                                <p><span style="padding-left: 42px">Mother Name:</span><span style="padding-left: 20px"><?php echo $this->user_details[0]['mothername']; ?></span></p>
                                <p><span style="padding-left: 80px">Gender:</span><span style="padding-left: 20px"><?php echo $this->user_details[0]['gender']; ?></span></p>

                                <p><span style="padding-left: 50px">Date of birth:</span><span style="padding-left: 20px"><?php echo $this->user_details[0]['dob']; ?></span></p>

                            </div>
                            <div class="emr_details_all">
                                <p><span style="padding-left: 75px">Age:</span><span style="padding-left: 20px"><?php echo $this->user_details[0]['age']; ?></span></p>
                                <p><span style="padding-left: 25px">Blood group:</span><span style="padding-left: 20px"><?php echo $this->user_details[0]['bloodgroup']; ?></span></p>
                                <p><span style="padding-left: 50px">Address:</span><span style="padding-left: 20px"><?php echo $this->user_details[0]['address']; ?></span></p>
                                <p><span style="padding-left: 54px">Spouse:</span><span style="padding-left: 20px"><?php echo $this->user_details[0]['spousename']; ?></span></p>
                                <p><span style="padding-left: 27px">Designation:</span><span style="padding-left: 20px"><?php echo $this->user_details[0]['designation']; ?></span></p>
                                <p><span style="padding-left: 27px">Department:</span><span style="padding-left: 20px"><?php echo $this->user_details[0]['department']; ?></span></p>
                                <p><span style="padding-left: 63px">Name:</span><span style="padding-left: 20px"><?php echo $this->user_details[0]['emr_name']; ?></span></p>
                                <p><span style="padding-left: 50px">Relation:</span><span style="padding-left: 20px"><?php echo $this->user_details[0]['emr_relation']; ?></span></p>
                                <p><span style="padding-left: 40px">Phone no:</span><span style="padding-left: 20px"><?php echo $this->user_details[0]['emr_phone']; ?></span></p>
                                <p><span style="padding-left: 67px">Email:</span><span style="padding-left: 20px"><?php echo $this->user_details[0]['emr_email']; ?></span></p>

                            </div>
                        </section>
                    </div>
                    <!--        // hidden for while-->



                    <div id="payslip-popup" class="popupContainer" style="display:none;">
                        <header class="popupHeader6">
                            <span class="header_title">Upload Payslip</span>
                            <span class="modal_close"><i class="fa fa-times"></i></span>
                        </header>

                        <section class="popupBody">

                            <form name="upload_form" id="upload_form">
                                <div class="user_details">
                                    <label>Name</label>
                                    <input name="emp_name" value="<?php echo $row[$i]['emp_name']; ?>"type="text" style="height: 30px; width: 250px;"/>
                                    <input hidden name="mail" value="<?php echo $row[$i]['emp_email']; ?>"/>
                                    <input hidden name="file_name" value="Payslip-<?php echo $date = date("F-Y"); ?>.pdf"/>
                                    <br>
                                    <label>Designation</label>
                                    <input name="designation" value="<?php echo $row[$i]['designation']; ?>" type="text" style="height: 30px; width: 250px;"/>
                                    <br>
                                    <label>Gender</label>
                                    <input name="gender" value="<?php echo $row[$i]['gender']; ?>" type="text" style="height: 30px; width: 250px;"/>
                                    <br>
                                    <label>Date of joining</label>
                                    <input name="doj" type="text" value="10-08-2013" style="height: 30px; width: 250px;"/>
                                    <br>
                                    <label>Date of Birth</label>
                                    <input name="dob" value="<?php echo $row[$i]['dob']; ?>" type="text" style="height: 30px; width: 250px;"/>
                                    <br>
                                    <label>PF A/c</label>
                                    <input name="pf_a/c" type="text" style="height: 30px; width: 250px;" value="N64676998425654"/>
                                    <br>
                                </div>
                                <div class="emr_details">
                                    <label>PAN</label>
                                    <input name="pan" value="79642316493654" type="text" style="height: 30px; width: 200px;" placeholder="Firstname"/>
                                    <br>
                                    <label>Bank A/c</label>
                                    <input name="bank_a/c" value="32355541824" type="text" style="height: 30px; width: 200px;"/>
                                    <br>
                                    <label>IFSC code</label>
                                    <input name="ifsc" type="text" value="HDFC55656C" style="height: 30px; width: 200px;"/>
                                    <br>
                                    <label>Available Calender Days</label>
                                    <input name="available_days" type="text" style="height: 30px; width: 200px;"/>
                                    <br>
                                    <label>Paid days</label>
                                    <input name="paid_days" type="text" style="height: 30px; width: 200px;"/>
                                    <br>
                                    <label>Loss Of Days</label>
                                    <input name="loss_of_days" type="text" style="height: 30px; width: 200px;"/>
                                    <br>
                                </div>
                                <div class="emr_details">
                                    <h4>Earnings</h4>

                                    <label>Basic</label>
                                    <input name="basic" type="text" style="height: 30px; width: 150px;"/>
                                    <br>
                                    <label>HRA</label>
                                    <input name="hra" type="text" style="height: 30px; width: 150px;"/>
                                    <br>
                                    <label>Conveyance Allowance</label>
                                    <input name="conveyance_allowance" type="text" style="height: 30px; width: 150px;"/>
                                    <br>
                                    <label>Special Allowance</label>
                                    <input name="Spcl_allowance" type="text" style="height: 30px; width: 150px;"/>
                                    <br>  
                                    <label><b>(A) Total Earnings</b></label>
                                    <input name="a" type="text" style="height: 30px; width: 150px;"/>
                                    <br>
                                </div><div class="emr_details">
                                    <h4>Deductions</h4>
                                    <label>TDS</label>
                                    <input name="tds" type="text" style="height: 30px; width: 150px;"/>
                                    <br>
                                    <label>PF</label>
                                    <input name="pf" type="text" style="height: 30px; width: 150px;"/>
                                    <br>
                                    <label>PT</label>
                                    <input name="pt" type="text" style="height: 30px; width: 150px;"/>
                                    <br>
                                    <label><b>(B) Total Deductions</b></label>
                                    <input name="b" type="text" style="height: 30px; width: 150px;"/>
                                    <br>
                                    <label><b>Net Salary=(A)-(B)</b></label>
                                    <input name="net" type="text" style="height: 30px; width: 150px;"/>
                                    <br>  
                                </div>
                                <div class="action_btns">
                                </div>
                                <div class="one_half last"><button id="upload_btn" class="btn btn_red">Upload</button></div>
                            </form>   
                        </section>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
    
</div>
<!--success pop up's area-->
<a id= "btn-trgr" href="#resp-popup" class="modal_trigger_status" hidden></a>
<div id="resp-popup" class="popupContainer_status" style="display:none;">
            <header class="popupHeader7">
                <span class="header_title"></span>
                <span class="modal_close"><i class="fa fa-times"></i></span>
            </header>
    <section class="popupBody"></section>
</div>

<script type="text/javascript">
    $(".modal_trigger7").leanModal({top: 50, overlay: 0.2, closeButton: ".modal_close"});
    $(".modal_trigger_status").leanModal({top: 150, overlay: 0.2, closeButton: ".modal_close"});
    
    $(".upld-slip").click(function(){
        var i = $(this).attr("id");
        var data = $("#all_emp").data('complete');
        data = data[i];
        alert((data["emp_email"])? data["emp_email"] : '');
        $("#payslip-popup").find("[name='emp_name']").val((data["emp_name"])? data["emp_name"] : '');
        $("#payslip-popup").find("[name='mail']").val((data["emp_email"])? data["emp_email"] : ''); 
        $("#payslip-popup").find("[name='designation']").val((data["designation"])? data["designation"] : '');
        $("#payslip-popup").find("[name='gender']").val((data["gender"])? data["gender"] : '');
        $("#payslip-popup").find("[name='doj']").val((data["doj"])? data["doj"] : '');
        $("#payslip-popup").find("[name='dob']").val((data["dob"])? data["dob"] : '');
        $("#payslip-popup").find("[name='pf_a/c']").val((data["pf_a/c"])? data["pf_a/c"] : '');
        $("#payslip-popup").find("[name='pan']").val((data["pan"])? data["pan"] : '');
        $("#payslip-popup").find("[name='bank_a/c']").val((data["bank_a/c"])? data["bank_a/c"] : '');
        $("#payslip-popup").find("[name='ifsc']").val((data["ifsc"])? data["ifsc"] : '');
        $("#payslip-popup").find("[name='available_days']").val((data["available_days"])? data["available_days"] : '');
        $("#payslip-popup").find("[name='paid_days']").val((data["paid_days"])? data["paid_days"] : '');
        $("#payslip-popup").find("[name='loss_of_days']").val((data["loss_of_days"])? data["loss_of_days"] : '');
        $("#payslip-popup").find("[name='basic']").val((data["basic"])? data["basic"] : '');
        $("#payslip-popup").find("[name='hra']").val((data["hra"])? data["hra"] : '');
        $("#payslip-popup").find("[name='conveyance_allowance']").val((data["conveyance_allowance"])? data["conveyance_allowance"] : '');
        $("#payslip-popup").find("[name='Spcl_allowance']").val((data["Spcl_allowance"])? data["Spcl_allowance"] : '');
        $("#payslip-popup").find("[name='a']").val((data["a"])? data["a"] : '');
        $("#payslip-popup").find("[name='tds']").val((data["tds"])? data["tds"] : '');
        $("#payslip-popup").find("[name='pf']").val((data["pf"])? data["pf"] : '');
        $("#payslip-popup").find("[name='b']").val((data["b"])? data["b"] : '');
        $("#payslip-popup").find("[name='net']").val((data["net"])? data["net"] : '');
    });
    
    $("#upload_btn").click(function(e){
        e.preventDefault();
        var regform = document.forms["upload_form"]; 
        
        $.ajax({
         url: "/home/pdf",
         method:'post',
         data:{
          "emp_name":regform.elements['emp_name'].value,
          "mail":regform.elements['mail'].value,
          "file_name":regform.elements['file_name'].value,
          "designation":regform.elements['designation'].value,
          "gender":regform.elements['gender'].value,
          "doj":regform.elements['doj'].value,
          "dob":regform.elements['dob'].value,
          "pf_a/c":regform.elements['pf_a/c'].value,
          "pan":regform.elements['pan'].value,
          "bank_a/c":regform.elements['bank_a/c'].value,
          "ifsc":regform.elements['ifsc'].value,
          "available_days":regform.elements['available_days'].value,
          "paid_days":regform.elements['paid_days'].value,
          "loss_of_days":regform.elements['loss_of_days'].value,
          "basic":regform.elements['basic'].value,
          "hra":regform.elements['hra'].value,
          "conveyance_allowance":regform.elements['conveyance_allowance'].value,
          "Spcl_allowance":regform.elements['Spcl_allowance'].value,
          "a":regform.elements['a'].value,
          "tds":regform.elements['tds'].value,
          "pf":regform.elements['pf'].value,
          "pt":regform.elements['pt'].value,
          "b":regform.elements['b'].value,
          "net":regform.elements['net'].value,
         },     
         success:function(res){
             $(".popupContainer").css("display","none");
             $("#resp-popup").find(".popupBody").html(res);
             $("#btn-trgr").trigger('click');
         }
       }); 
    });
   
</script>


                
<?php require 'views/footer.php'; ?>