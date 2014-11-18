<?php
require 'views/header.php';
// var_dump($this->getLeavesDeatilsByHr);
// var_dump($this->getLeavesDeatils);
?>
<div id="all_leaves_hr" data-complete = <?php echo "'" . json_encode($this->getLeavesDeatilsByHr) . "'"; ?> >
    <div id="all_leaves" data-complete = <?php echo "'" . json_encode($this->getLeavesDeatils) . "'"; ?> >
        <?php if ($this->user_details[0]['designation'] == 'hr_manager') { ?>
            <div class="dashboard"><h4>Register New User <a href="#model_reg" class="modal_trigger6">Here</a></h4>
                <h4><a href="/emp_data">All employees area</a></h4>
            <?php } ?>

        </div>  
    </div>
</div>
<div id="model_reg" class="popupContainer" style="display:none;">
    <header class="popupHeader6">
        <span class="header_title">Register on portal</span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </header>

    <section class="popupBody">

        <form name="regform" id="resetform">
            <p align="center" class="val_err"></p>
            <div class="intial-form">
            <div class="user_details">
                <label>Name</label>
                <input name="emp_name" type="text" style="height: 30px; width: 250px;" placeholder="Name"/>
                                <br>
                <label>Emp_id</label>
                <input name="emp_id" type="text" style="height: 30px; width: 250px;" placeholder="Emp id"/>
                                <br>

                <label>Email Address</label>
                <input name="emp_email" type="email" style="height: 30px; width: 250px;" placeholder="Email"/>
                <br>
                <label>Password</label>
                <input name="password" type="password" style="height: 30px; width: 250px;" placeholder="password"/>
                <br>
                <label>Fathername</label>
                <input name="fathername" type="text" style="height: 30px; width: 250px;" placeholder="fathername"/>
                <br>

                <label>Mothername</label>
                <input name="mothername" type="text" style="height: 30px; width: 250px;" placeholder="mothername"/>
                <br>
                <label>Gender</label>
                Male: <input name="gender" type="radio" value="Male" style="height: 15px; width: 15px;"> &nbsp;&nbsp;&nbsp;Female: <input name="gender" value="Female" type="radio" style="height: 15px; width: 15px;">
                <br><br/>
            </div>
            <div class="emr_details">
                <label>Phone no</label>
                <input name="emp_phno" type="text" style="height: 30px; width: 250px;" placeholder="+9199948983078"/>
                <br>
                <label>DOB</label>
                <input name="dob" type="date" style="height: 30px; width: 250px;" placeholder="date of birth"/>
                <br>
                <label>Age</label>
                <input name="age" type="text" style="height: 30px; width: 250px;" placeholder="Age"/>
                <br>

                <label>Bloodgroup</label>
                <input name="bloodgroup" type="text" style="height: 30px; width: 250px;" placeholder="Blood group"/>
                <br>
                <label>Address</label>
                <textarea  name="address" cols="5" rows="3" style=" height: 90px; width: 250px;"></textarea>
                <br>

                <label>Spouse</label>
                <input name="spousename" type="text" style="height: 30px; width: 250px;" placeholder="If not married type unmarried"/>
                <br>
            </div>
            <div class="emr_details">
                <label>Designation</label>
                <input name="designation" type="text" style="height: 30px; width: 250px;" placeholder="Role"/>
                <br>

                <label>Department</label>
                <input name="department" type="text" style="height: 30px; width: 250px;" placeholder="Department"/>
                <br>

                <h5>Emergency contact details</h5>
                <label>Name</label>
                <input name="emr_name" type="text" style="height: 30px; width: 250px;"/>
                <br>
                <label>Relation</label>
                <input name="emr_relation" type="text" style="height: 30px; width: 250px;" placeholder="Relation with emp"/>
                <br>
                <label>Ph no</label>
                <input name="emr_phone" type="text" style="height: 30px; width: 250px;" placeholder="Ph no"/>
                <br>
                <label>Email</label>
                <input name="emr_email" type="text" style="height: 30px; width: 250px;" placeholder="Email"/>
            </div>
                <div class="action_btns">
                
                <div class="one_half last">
<!--                    <input class="btn btn_red" id="register-btn" value="Register">-->
                    <button class="btn btn-info" id="Next" value="Next" type="button" style="color: #FF7171;">Next<i class="icon-chevron-right"></i></button></div>
            </div>
            </div>
            <div class="slide_left">
                <div class="user_details">
                
                <label>Bank Acc no</label>
                <input name="bank_acc" type="number" style="height: 30px; width: 250px;" placeholder="Bank Acc no"/>
                                <br>
                <label>PF ACC no</label>
                <input name="pf_acc" type="number" style="height: 30px; width: 250px;" placeholder="PF ACC no"/>
                                <br>

                <label>PAN</label>
                <input name="pan" type="number" style="height: 30px; width: 250px;" placeholder="PAN"/>
                <br>
                <label>Bank IFSC code</label>
                <input name="ifsc" type="text" style="height: 30px; width: 250px;" placeholder="Bank IFSC code"/>
                <br>
                <label>Basic Salari</label>
                <input name="basic_sal" type="number" style="height: 30px; width: 250px;" placeholder="Basic Salari"/>
                <br>
<!--                <label>Documents uploads</label>
                <input name="doc" type="file" style="height: 30px; width: 250px;" placeholder="doc"/>
                <br>-->
            </div>
            <div class="emr_details">
                
            </div>
            <div class="emr_details">
               
            </div>
                <div class="action_btns">
                
                <div class="one_half last">
                    <span><button class="btn btn-info" id="Back" value="Back" type="button" style="color: #FF7171;"><i class="icon-chevron-left"></i> Back</button>
                        <input class="btn btn_red" id="register-btn" value="Register"></span></div>

            </div>
            </div>
            
        </form>

    </section>
</div>
<?php if ($this->user_details[0]['designation'] == 'hr_manager') { ?>
    <div class="dash_table">
        <h3>Recent Leave Applications</h3>
        <div class="overflow">
            <table border="2px">
                <tr >
                    <th>Name</th>
                    <th>Date</th>
                    <th>Manager Status</th>
                    <th>HR Status</th>
                </tr>
                <?php $row = $this->getLeavesDeatilsByHr;
                for ($i = 0; $i < sizeof($row); $i++) {
                    ?>
                    <tr>
                        <td width="100px" align="center"><a id="<?php echo $i; ?>" href="#payslip-popup" class="modal_trigger6 hr-lev"><?php echo $row[$i]['emp_name']; ?></a></td>
                        <td width="100px" align="center"><?php echo $row[$i]['apply_date']; ?></td>
                        <td width="100px" align="center"><?php echo $row[$i]['manager_status']; ?></td>
                        <td width="100px" align="center"><?php echo $row[$i]['status']; ?></td>
                    </tr>


    <?php } ?>
            </table>
        </div>
    </div>
<?php } ?>


<?php if ($this->user_details[0]['designation'] == 'Project_manager') { ?>
    <div class="dash_table">
        <h3>Recent Leave Applications</h3>
        <div class="overflow">
            <table border="1px">
                <tr bgcolor="#FF4D4D" hbgeight="30px">
                    <th>Name</th>
                    <th>Date</th>
                    <th>manager status</th>
                </tr>
                <?php $row = $this->getLeavesDeatils;
                for ($i = 0; $i < sizeof($row); $i++) {
                    ?>
                    <tr>
                        <td width="200px" align="center"><a id="<?php echo $i; ?>" href="#leave_manager" class="modal_trigger6 maneger-lev"><?php echo $row[$i]['emp_name']; ?></a></td>
                        <td width="150px" align="center"><?php echo $row[$i]['apply_date']; ?></td>
                        <td width="100px" align="center"><?php echo $row[$i]['manager_status']; ?></td>

                    </tr>
    <?php } ?>
            </table>
        </div>
    </div>
<?php } ?>

<!--success pop up's area-->

<a id= "btn-trgr" href="#resp-popup" class="modal_trigger_status" hidden></a>
<div id="resp-popup" class="popupContainer_status" style="display:none;">
    <header class="popupHeader7">
        <span class="header_title"></span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </header>

    <section class="popupBody"></section>
</div>
<!--success pop up area close-->


<!--Hr leave pop up area start-->    
<div id="payslip-popup" class="popupContainer6 pop_cont" style="display:none;">
    <header class="popupHeader6">
        <span class="header_title">Leave application</span>
        <span class="modal_close"></span>
    </header>

    <section class="popupBody6">
        <div class="hr"><i>
                Address: <p id="hrlev-emp-addr"></p>
                Employee code: <p id="hrlev-emp-code"> </p>
                Date: <p id="hrlev-date"> </p>  

                To:<br>
                HR Department <br>
                SADDAHAQ <br>
                <b>SUB:</b> <p id="hrlev-sub"></p>  
                Dear Sir,
                <p id="hrlev-desc"></p>
                Sincerely.,
                <p id="hrlev-emp-name"> </p>
            </i></div>
        <button name="hr_status" value="Approved" class="btn-info btn-small hr_status">approve</button>
        <button name="hr_status" value="Rejected" class="btn-info btn-small hr_status">reject</button>

    </section>
</div>
<!--Hr leave pop up area close-->


<!-manager leave pop up area -->
<div id="leave_manager" class="popupContainer6 pop_cont" style="display:none;">
    <header class="popupHeader6">
        <span class="header_title">Leave application</span>
        <span class="modal_close"></span>
    </header>

    <section class="popupBody6">

        <div class="mngr"><i>
                Address: <p id="mngrlev-emp-addr"></p>
                Employee code: <p id="mngrlev-emp-code"> </p>
                Date: <p id="mngrlev-date"> </p>  

                To:<br>
                HR Department <br>
                SADDAHAQ <br>
                <b>SUB:</b> <p id="mngrlev-sub"></p>  
                Dear Sir,
                <p id="mngrlev-desc"></p>
                Sincerely.,
                <p id="mngrlev-emp-name"> </p>
            </i></div>
        <button name="mngr_status" value="Approved" class="btn-info btn-small mngr_status">approve</button>
        <button name="mngr_status" value="Rejected" class="btn-info btn-small mngr_status">reject</button>
    </section>
</div>
<!--manager leave pop up area close-->


<script type="text/javascript">
    $(".modal_trigger6").leanModal({top: 10, overlay: 0.2, closeButton: ".modal_close"});
    $(".modal_trigger_status").leanModal({top: 150, overlay: 0.2, closeButton: ".modal_close"});
    $(".hr-lev").click(function () {
        var i = $(this).attr("id");
        var data = $("#all_leaves_hr").data('complete');
        data = data[i];
        $("#payslip-popup").data("lid", data['id']);
        // $("#payslip-popup").find("#hrlev-emp-addr").text(data['address']);
        // $("#payslip-popup").find("#hrlev-emp-code").text(data['emp-code']);
        $("#payslip-popup").find("#hrlev-date").text(data['apply_date']);
        $("#payslip-popup").find("#hrlev-sub").text(data['subject'].split("\\sq").join("'"));
        $("#payslip-popup").find("#hrlev-desc").text(data['description'].split("\\sq").join("'"));
        $("#payslip-popup").find("#hrlev-emp-name").text(data['emp_name']);




    });


    $(".maneger-lev").click(function () {
        var i = $(this).attr("id");
        var data = $("#all_leaves").data('complete');
        data = data[i];
        $("#leave_manager").data("lid", data['id']);
        $("#leave_manager").find("#mngrlev-date").text(data['apply_date']);
        $("#leave_manager").find("#mngrlev-sub").text(data['subject'].split("\\sq").join("'"));
        $("#leave_manager").find("#mngrlev-desc").text(data['description'].split("\\sq").join("'"));
        $("#leave_manager").find("#mngrlev-emp-name").text(data['emp_name']);



    });

    $("#register-btn").click(function () {
        var regform = document.forms['regform'];
        if (regform.elements['emp_name'].value == "" || regform.elements['emp_name'].value == null) {
            $("#model_reg").find(".val_err").text("Employee name cannot be empty ");
            return false;
        }
        if (regform.elements['emp_id'].value == "" || regform.elements['emp_id'].value == null) {
            $("#model_reg").find(".val_err").text("Employee id cannot be empty ");
            return false;
        }
        if (regform.elements['emp_email'].value == "" || regform.elements['emp_email'].value == null) {
            $("#model_reg").find(".val_err").text("Employee email address cannot be empty ");
            return false;
        }
        if (regform.elements['password'].value == "" || regform.elements['password'].value == null) {
            $("#model_reg").find(".val_err").text("Give a temporory password for emp");
            return false;
        }
        if (regform.elements['fathername'].value == "" || regform.elements['fathername'].value == null) {
            $("#model_reg").find(".val_err").text("Father name cannot be empty ");
            return false;
        }
        

        $.ajax({
            url: "/home/register",
            method: 'post',
            data: {
                "emp_name": regform.elements['emp_name'].value,
                "emp_id": regform.elements['emp_id'].value,
                "emp_email": regform.elements['emp_email'].value,
                "password": regform.elements['password'].value,
                "fathername": regform.elements['fathername'].value,
                "mothername": regform.elements['mothername'].value,
                "gender": regform.elements['gender'].value,
                "emp_phno": regform.elements['emp_phno'].value,
                "dob": regform.elements['dob'].value,
                "age": regform.elements['gender'].value,
                "bloodgroup": regform.elements['bloodgroup'].value,
                "address": regform.elements['address'].value,
                "spousename": regform.elements['spousename'].value,
                "designation": regform.elements['designation'].value,
                "department": regform.elements['department'].value,
                "emr_name": regform.elements['emr_name'].value,
                "emr_relation": regform.elements['emr_relation'].value,
                "emr_phone": regform.elements['emr_phone'].value,
                "emr_email": regform.elements['emr_email'].value,
                "bank_acc": regform.elements['bank_acc'].value,
                "pf_acc": regform.elements['pf_acc'].value,
                "pan": regform.elements['pan'].value,
                "ifsc": regform.elements['ifsc'].value,
                "basic_sal": regform.elements['basic_sal'].value,
                "doc": regform.elements['doc'].value,
            },
            
            success: function (res) {
                $("#model_reg").css("display", "none");
                $("#resp-popup").find(".popupBody").html(res);
                $("#btn-trgr").trigger('click');
            }
            
        });
        // need to know
        $("#resetform").reset();
    });


    $(".hr_status").click(function (e) {
        e.preventDefault();
        $.ajax({
            url: "/leaves/hr_approve",
            method: 'post',
            data: {
                "id": $(this).parents("#payslip-popup").data("lid"),
                "hr_status": $(this).attr("value")
                        // "reject":regform.elements['reject'].value,
            },
            success: function (res) {
                $("#payslip-popup").css("display", "none");
                $("#resp-popup").find(".popupBody").html(res);
                $("#btn-trgr").trigger('click');
            }
        });
    });

    $(".mngr_status").click(function (e) {
        e.preventDefault();
        $.ajax({
            url: "/leaves/manger_status",
            method: 'post',
            data: {
                "id": $(this).parents("#leave_manager").data("lid"),
                "mngr_status": $(this).attr("value")
                        // "reject":regform.elements['reject'].value,
            },
            success: function (res) {
                $("#leave_manager").css("display", "none");
                $("#resp-popup").find(".popupBody").html(res);
                $("#btn-trgr").trigger('click');
            }
        });
    });
</script>

<?php require 'views/footer.php'; ?>
