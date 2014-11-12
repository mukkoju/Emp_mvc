<html>
    <head>
        <title>loading....</title>
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/view_helper.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>public/global/saddahaq/css/saddahaq-ie7.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>public/global/saddahaq/css/saddahaq.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>public/global/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>public/global/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>public/global/bootstrap/css/bootstrap-responsive.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>public/global/bootstrap/css/bootstrap-responsive.min.css" />
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
        <script type="text/javascript" src="<?php echo URL; ?>public/js/view.js"></script>
    </head>

    <body>
        <div id="header">
            <nav class="navbar navbar-default navbar- nav" role="navigation">
                <div class="container">


                    <ul class="nav navbar-nav mainmenu">
                        <li style="padding-top: 10px; padding-right: 10px" ><span><a href="/home/index"><img src="/images/logo.png" style="max-width: 130px;"></a></span></li>
                        <li class=""><a href="../home"><font color="white">Home</font></a></li>
                        <li class=""><a href="" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#" rel="nofollow"><font color="white">HR</font><i class="icon-chevron-down"></i></a>
                        <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dLabel">
                                <li class="dropdown"><a href="/home/logout">Leaves</a></li>
                                <li class="dropdown"><a href="/salaries">Salaries</a></li>
                                <li class="dropdown"><a href="/home/logout">Exit Settlement</a></li>
                            </ul>
                        </li>
                        <li class="" ><a href="../leaves"><font color="white">Leaves</font></a></li>
                        <li class="" ><a href="../download"><font color="white">Downloads</font></a></li>
                        
                        <li class="navbar-right"><a href="#model" id="modal_trigger1"><img src="/images/user.svg" style="height:35px; width:35px;"> <font color="white"><?php echo $this->user_details[0]['emp_name']; ?></font></a></li>
                        <li><a id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#" rel="nofollow">
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dLabel">
                                <li class="dropdown"><a href="/home/logout">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div id="model" class="popupContainer1 pop_cont" style="display:none;">
            <header class="popupHeader6">
                <span class="header_title">Look at your Profile</span>
                <span class="modal_close"></span>
            </header>

            <section class="popupBody">

                <div class="profile_img"><img height="900px" width="250px" src="/uploads/<?php echo $this->user_details[0]['emp_email']; ?>/profile.jpg"/></div>

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
        <script type="text/javascript">
            $("#modal_trigger1").leanModal({top: 120, overlay: 0.2, closeButton: ".modal_close"});

        </script>
        <div id="content">