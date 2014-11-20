<div class="container">
    <div id="main">
        <?php
        require 'views/header.php';
// var_dump($this->getLeavesDeatilsByHr);
// var_dump($this->getLeavesDeatils);
        ?>
        <div class="main-content">
            <div id="myCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                Carousel items 
                <div class="carousel-inner">
                    <div class="active item"><img src="/images/404.jpg"></div>
                    <div class="item"><img src="/images/404.jpg"></div>
                    <div class="item"><img src="/images/404.jpg"></div>
                </div>
                Carousel nav 
                <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
            </div>
            <div id="all_leaves_hr" data-complete = <?php echo "'" . json_encode($this->getLeavesDeatilsByHr) . "'"; ?> >
                <div id="all_leaves" data-complete = <?php echo "'" . json_encode($this->getLeavesDeatils) . "'"; ?> >
                    <?php if ($this->user_details[0]['designation'] == 'hr_manager') { ?>
                        <!--            <div class="dashboard"><h4>Register New User <a href="#model_reg" class="modal_trigger6">Here</a></h4>
                                    <h4><a href="/emp_data">All employees area</a></h4>-->
                    <?php } ?>
                </div>  
            </div>
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
                        <?php
                        $row = $this->getLeavesDeatilsByHr;
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
                        <?php
                        $row = $this->getLeavesDeatils;
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
    </div>
</div>
</div>
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
