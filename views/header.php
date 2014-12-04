<html>
    <head>
        <title>Saddahaq Employes</title>
        <link rel="icon" type="image/png" href="https://saddahaq.blob.core.windows.net/multimedia/favicon.ico">
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/view_helper.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>public/global/saddahaq/css/saddahaq-ie7.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>public/global/saddahaq/css/saddahaq.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>public/global/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>public/global/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>public/global/bootstrap/css/bootstrap-responsive.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>public/global/bootstrap/css/bootstrap-responsive.min.css" />
        <link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
        <script src="<?php echo URL; ?>public/js/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.leanModal.min.js"></script>
<!--        <script type="text/javascript" src="<?php echo URL; ?>public/js/popup.js"></script>-->
        <link type="text/css" rel="stylesheet" href="<?php echo URL; ?>public/css/style.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>public/global/bootstrap/css/logout.css"/>
        <script src="<?php echo URL; ?>public/js/logout.js"></script>
        <script type="text/javascript" src="<?php echo URL; ?>public/global/bootstrap/js/bootstrap.js"></script>
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
        <script type="text/javascript" src="<?php echo URL; ?>public/global/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo URL; ?>public/global/bootstrap/js/jquery-ui.js"></script>
        <script type="text/javascript" src="<?php echo URL; ?>public/global/bootstrap/js/jquery-ui.min.js"></script>
    </head>
    <body>
        <header>

            <a href="/home" id="logo"></a>

            <nav>
                <a href="#" id="menu-icon"></a>
                <!--          Hidden desktop menu-->
                <ul class="hidden-desktop" style="float: right;">
                    <li class="dropdown hidn-dsktp-mnu pull-right"><a href="" id="dLabel" class="dropdown-toggle" role="button" data-toggle="dropdown" data-target="#" rel="nofollow"><i class="icon-navicon"></i></a>
                        <ul class="dropdown-menu hr-dropdwn" role="menu" aria-labelledby="dLabel">
                            <li class="dropdown"><a href="/home" class="current">HOME</a></li>
                            <li class="dropdown"><a href="/leaves">LEAVES</a></li>
                            <li class="dropdown"><a href="/download">DOWNLOADS</a></li>
                            <?php if($this->user_details[0]['designation'] == HR_MANAGER){ ?>
                            <li class="dropdown-submenu"><a href="" class="dropdown-toggle" role="button" data-toggle="dropdown" data-target="#" rel="nofollow">HR</a>
                                <ul class="dropdown-menu hr-dropdwn pull-right" role="menu" aria-labelledby="dLabel">
                                    <li class="dropdown"><a href="/salaries">SALARIES</a></li>
                                    <li class="dropdown"><a href="#model_reg" class="modal_trigger6">NEW EMP</a></li>
                                    <li class="dropdown"><a href="#model_doc" class="modal_trigger6">EMP DOCS</a></li>
                                    <li class="dropdown"><a href="#">EXIT SETTILEMENT</a></li>
                                    <li class="dropdown"><a href="/emp_data">ALL EMP</a></li>
                                </ul>
                            </li>
                            <?php }?>
                            <li class="dropdown"><a href="/home/logout">LOGOUT</a></li>
                            <li class="usr-pic-name-hdr"><a href="#model" id="modal_trigger12">
                                   <?php $mail = $_SESSION['loggedIn']; 
                                   $profile_img = "/var/www/Emp_mvc/uploads/$mail/profile_pic";
                                   $image_name = scandir($profile_img);
                                   $image_name = $image_name[2];
                                   ?>
                                    <?php $email = $this->user_details[0]['emp_email']; ?>
                                    <?php if (!file_exists("$profile_img/$image_name")) { ?><img src='/images/avtr.jpg' class="profile-avtr"><?php } else { ?><img src='/uploads/<?php echo $email?>/profile_pic/<?php echo $image_name?>' class="profile-avtr"><?php } ?> <?php echo $this->user_details[0]['emp_name']; ?></a>
                                <a id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#" rel="nofollow"><span class="caret"></span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!--          Hidden phone menu-->
                <ul class="hidden-phone">
                    <li><a href="/home" class="current">HOME</a></li>
                    <li><a href="/leaves">LEAVES</a></li>
                    <li><a href="/download">DOWNLOADS</a></li>
                    <?php if($this->user_details[0]['designation'] == HR_MANAGER){ ?>
                    <li class="dropdown"><a href="" id="dLabel" class="dropdown-toggle" role="button" data-toggle="dropdown" data-target="#" rel="nofollow">HR<span class="caret"></span></a>
                        <ul class="dropdown-menu hr-dropdwn" role="menu" aria-labelledby="dLabel">
                            <li class="dropdown"><a href="/salaries">SALARIES</a></li>
                            <li class="dropdown"><a href="#model_reg" class="modal_trigger6">NEW EMP</a></li>
                            <li class="dropdown"><a href="#model_doc" class="modal_trigger6">EMP DOCS</a></li>
                            <li class="dropdown"><a href="#">EXIT SETTILEMENT</a></li>
                            <li class="dropdown"><a href="/emp_data">ALL EMP</a></li>
                        </ul>
                    </li>
                    <?php }?>
                    <li class="usr-pic-name-hdr hidden-phone"><a href="#model" id="modal_trigger1">
                            <?php $mail = $_SESSION['loggedIn']; 
                        $profile_img = "/var/www/Emp_mvc/uploads/$email/profile_pic";
                        if(file_exists($profile_img)){
                         $image_name = scandir($profile_img);
                        }
                         $image_name = $image_name[2];
                                ?>
                            <?php $email = $this->user_details[0]['emp_email']; ?>
                            <?php if (!file_exists("$profile_img/$image_name")) { ?><img src='/images/avtr.jpg' class="profile-avtr"><?php } else { ?><img src='/uploads/<?php echo $email?>/profile_pic/<?php echo $image_name?>' class="profile-avtr"><?php } ?> <?php echo $this->user_details[0]['emp_name']; ?></a>
                        <a id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#" rel="nofollow"><span class="caret"></span></a>
                        <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dLabel">
                            <li class="dropdown"><a href="/home/logout">LOGOUT</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <div id="model" class="popupContainer1 pop_cont" style="display:none;">
            <header class="popupHeader6">
                <span class="header_title">Look at your Profile</span>
                <span class="modal_close"></span>
                <!--</header>-->

                <section class="popupBody">
                    <div class="profile_img">
                        <?php $mail = $_SESSION['loggedIn']; 
                        $profile_img = "/var/www/Emp_mvc/uploads/$email/profile_pic";
                        if(file_exists($profile_img)){
                         $image_name = scandir($profile_img);
                        }
                         $image_name = $image_name[2];?>
                        <?php if(file_exists("$profile_img/$image_name")){ ?>
                        <img src="/uploads/<?php echo $email?>/profile_pic/<?php echo $image_name?>" id="profile_image_style"/><input type="file" class="profile-img-change-input" id="p-pic-change"><i class="icon-add-image"></i>
                        <?php }else{?>
                        <img src="/images/avtr.jpg" id="profile_image_style"/><input type="file" class="profile-img-change-input" id="p-pic-change"><i class="icon-add-image"></i>
                        <?php }?>
                    </div>
                    <div class="profile"><h4><img height="60px" width="30px" src="/images/king.png"/>&nbsp;<?php echo $this->user_details[0]['emp_name']; ?></h4>
                        <p>Email:<span style="padding-left: 50px"><?php echo $this->user_details[0]['emp_email']; ?></span></p>
                        <p>EmployeeID:<span style="padding-left: 10px" ><?php echo $this->user_details[0]['emp_id']; ?></span></p>
                        <p>Address:<span style="padding-left: 35px" ><?php echo $this->user_details[0]['address']; ?></span>sp</p>
                        <p>Ph no:<span style="padding-left: 50px" ><?php echo $this->user_details[0]['phone_no']; ?></span></p>
                        <p>Designation:<span style="padding-left: 10px" ><?php echo $this->user_details[0]['designation']; ?></span></p>
                        <p>Age:<span style="padding-left: 60px" ><?php echo $this->user_details[0]['age']; ?></span></p>
                        <p>Gender:<span style="padding-left: 39px"><?php echo $this->user_details[0]['gender']; ?></span></p>
                    </div>

                </section>
        </div>
        <div id="model_reg" class="popupContainer" style="display:none;">
            <header class="popupHeader6">
                <span class="header_title">Register on portal</span>
                <span class="modal_close"></span>
            </header>
            <section class="popupBody">
                <form name="regform" id="resetform">
                    <p align="center" class="val_err"></p>
                    <div class="intial-form">
                        <div class="user_details">
                            <label>Name</label>
                            <input name="emp_name" id="emp_name_reg" type="text" style="height: 30px; width: 250px;" placeholder="Name"/>
                            <br>
                            <label>Emp_id</label>
                            <input name="emp_id"id="emp_id_reg" type="text" style="height: 30px; width: 250px;" placeholder="Emp id"/>
                            <br>
                            <label>Email Address</label>
                            <input name="emp_email" id="emp_email_reg" type="email" style="height: 30px; width: 250px;" placeholder="Email"/>
                            <br>
                            <label>Password</label>
                            <input name="password" id="password_reg" type="password" style="height: 30px; width: 250px;" placeholder="password"/>
                            <br>
                            <label>Fathername</label>
                            <input name="fathername" id="fathername_reg" type="text" style="height: 30px; width: 250px;" placeholder="fathername"/>
                            <br>
                            <label>Mothername</label>
                            <input name="mothername" id="mothername_reg" type="text" style="height: 30px; width: 250px;" placeholder="mothername"/>
                            <br>
                            <label>Gender</label>
                            Male: <input name="gender" id="gender_reg" type="radio" value="Male" style="height: 15px; width: 15px;"> &nbsp;&nbsp;&nbsp;Female: <input name="gender" value="Female" type="radio" style="height: 15px; width: 15px;">
                            <br><br>
                        </div>
                        <div class="emr_details">
                            <label>Phone no</label>
                            <input name="emp_phno" id="emp_phno_reg" type="text" style="height: 30px; width: 250px;" placeholder="+9199948983078"/>
                            <br>
                            <label>DOB</label>
                            <input name="dob" id="dob_reg" type="date" style="height: 30px; width: 250px;" placeholder="date of birth"/>
                            <br>
                            <label>Age</label>
                            <input name="age" id="age_reg" type="text" style="height: 30px; width: 250px;" placeholder="Age"/>
                            <br>
                            <label>Bloodgroup</label>
                            <input name="bloodgroup" id="bloodgroup_reg" type="text" style="height: 30px; width: 250px;" placeholder="Blood group"/>
                            <br>
                            <label>Address</label>
                            <textarea  name="address" id="address_reg" cols="5" rows="3" style=" height: 90px; width: 250px;"></textarea>
                            <br>
                            <label>Spouse</label>
                            <input name="spousename" id="spousename_reg" type="text" style="height: 30px; width: 250px;" placeholder="If not married type unmarried"/>
                            <br>
                        </div>
                        <div class="action_btns">
                            <div class="one_half last">
                                <button class="btn btn-info" id="Next" value="Next" type="button" style="color: #FF7171;">Next<i class="icon-chevron-right"></i></button></div>
                        </div>
                    </div>
                    <div class="slide_left">
                        <div class="user_details">
                            <label>Designation</label>
                            <input name="designation" id="designation_reg" type="text" style="height: 30px; width: 250px;" placeholder="Role"/>
                            <br>
                            <label>Department</label>
                            <input name="department" id="department_reg" type="text" style="height: 30px; width: 250px;" placeholder="Department"/>
                            <br>
                            <h5>Emergency contact details</h5>
                            <label>Name</label>
                            <input name="emr_name" id="emr_name_reg" type="text" style="height: 30px; width: 250px;"/>
                            <br>
                            <label>Relation</label>
                            <input name="emr_relation" id="emr_relation_reg" type="text" style="height: 30px; width: 250px;" placeholder="Relation with emp"/>
                            <br>
                            <label>Ph no</label>
                            <input name="emr_phone" id="emr_phone_reg" type="text" style="height: 30px; width: 250px;" placeholder="Ph no"/>
                            <br>
                            <label>Email</label>
                            <input name="emr_email" id="emr_email_reg" type="text" style="height: 30px; width: 250px;" placeholder="Email"/>
                        </div>
                        <div class="emr_details">
                            <h5>Salaries details</h5>
                            <label>Bank Acc no</label>
                            <input name="bank_acc" id="bank_acc_reg" type="number" style="height: 30px; width: 250px;" placeholder="Bank Acc no"/>
                            <br>
                            <label>PF ACC no</label>
                            <input name="pf_acc" id="pf_acc_reg" type="number" style="height: 30px; width: 250px;" placeholder="PF ACC no"/>
                            <br>
                            <label>PAN</label>
                            <input name="pan" type="number" id="pan_reg" style="height: 30px; width: 250px;" placeholder="PAN"/>
                            <br>
                            <label>Bank IFSC code</label>
                            <input name="ifsc" type="text" id="ifsc_reg" style="height: 30px; width: 250px;" placeholder="Bank IFSC code"/>
                            <br>
                            <label>Basic Salarie</label>
                            <input name="basic_salrie" id="basic_salrie_reg" type="number" style="height: 30px; width: 250px;" placeholder="Basic Salari"/>
                            <br>
                            <label>Date of joining</label>
                            <input name="doj"  id="doj_reg" type="date" style="height: 30px; width: 250px;" placeholder="Date of joining"/>
                            <br>
                            <!--                <label>Documents uploads</label>
                                         <input name="doc" type="file" style="height: 30px; width: 250px;" placeholder="doc"/>
                                         <br>-->
                        </div>
                        <div class="emr_details">
                        </div>
                        <div class="action_btns">
                            <ul class="one_half_last">
                                <li><button class="btn btn-info" id="Back" value="Back" type="button" style="color: #FF7171;"><i class="icon-chevron-left"></i> Back</button></li>
                                <li class="reg-li"><input class="btn btn_red" id="register-btn" value="Register"></li>
                            </ul>
                        </div>   
                    </div>
                </form>
            </section>
        </div>
        <div id="model_doc" class="popupContainer" style="display:none;">
            <header class="popupHeader6">
                <span class="header_title">Employee docs uploading</span>
                <span class="modal_close"></span>
            </header>
            <section class="popupBody">
                <div><form id="docs-form" enctype="multipart/form-data">
                        <p id="upload-doc-err"></p>
                        <label>Employee Email:<br><input type="email" name="emp_doc_email" id="emp-doc-emial" class="emp-doc-emial" placeholder="Mail id of employe" style="height: 30px; width: 250px;"></label>
                        <label>Select Document:<br><input type="file" name = "empdoc" id="docs-file1" style="display: inline-block;">
                                    <select class="slct-month">
                                        <option value='0' selected>--Select Doc type--</option>
                                        <option value="1">10th</option>
                                        <option value="2">Bachelor</option>
                                        <option value="3">Experience</option>
                                        <option value="4">Address</option>
                                        <option value="4">Other</option>
                                    </select><a href="#"><i class="icon-plus-strong" id="pluse-doc" style="margin-left: 5%;"></i></a>
                                </label>
                                <button class="btn btn-info" value="POST" id="upload-docs-butn" type="button" style="color: #FF7171;">Upload</button>
                       </form>
                       <!--<progress></progress>-->
                </div>
            </section>
        </div>
        
        <!--body starting here-->
        <div id="main">
        <div class="container all-content">
        <div class="main-content">
            <div id="notifc">
            </div>
        <script type="text/javascript">
            $(".modal_trigger6").leanModal({top: 10, overlay: 0.2, closeButton: ".modal_close"});
            $("#modal_trigger1").leanModal({top: 120, overlay: 0.2, closeButton: ".modal_close"});
        </script>
        