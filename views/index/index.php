
    <title>
        Landing...
    </title>
<head>
</head>
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/index.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>public/global/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>public/global/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>public/global/bootstrap/css/bootstrap-responsive.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>public/global/bootstrap/css/bootstrap-responsive.min.css" />
    <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.leanModal.min.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/popup.js"></script>
    <link type="text/css" rel="stylesheet" href="<?php echo URL; ?>public/css/style.css" />
<!--    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />-->

    <script type="text/javascript" src="<?php echo URL; ?>public/global/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/global/bootstrap/js/bootstrap.min.js"></script>
    <body> 
        <h2 align="center">Portal</h2>
        <div class="span8 main-container">
            <ul class="nav nav-tabs">
                <li class="span2 active"><a href="#home" data-toggle="tab"><h5>Employe Login</h5></a></li>
                <li class="span2"><a href="#profile" data-toggle="tab"><h5>Admin Login</h5></a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <div id="table">
                        <div class="box">
                            <div class="Login">Emp_Login</div>
                            <div id="login">
                                <p class="login_err" style="color: red;"></p>
                            </div>
                            <form name="login">
                                <label>Username/Email</br><input type="text" name="email" placeholder="username" style="height: 25px;"></label>
                                <label>Password</br><input type="password" name="password" placeholder="Password" style="height: 25px;"></label>
                                <input id="login_btn" type="submit" value="Login" class="btn-info btn-small">
                            </form>
                            <div>Forget Password? <a href="">Click Here</a></div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="profile">
                    <div id="table">
                        <div class="box">
                            <div class="Login">Admin_Login</div>
                            <form action="/index/login" method="post">
                                <label>Username/Email</br><input type="email" name="email" placeholder="username" style="height: 25px;"></label>
                                <label>Password</br><input type="password" name="password" placeholder="Password" style="height: 25px;"></label>
                                <input type="submit" value="Login" class="btn-info btn-small">
                                    <!--<div>Forget Password?<a href="">Click Here</a></div>-->
                                </form>
                                <div>Create a new account? <a id="modal_trigger" href="#model">Signup</a></div>
                        </div>
                    </div></div>
            </div>
        </div>

        <div id="model" class="popupContainer" style="display:none;">
            <header class="popupHeader">
                <span class="header_title">Register on portal</span>
                <span class="modal_close"><i class="fa fa-times"></i></span>
            </header>

            <section class="popupBody">
                <form action="/index/signup" method="post">
                            <label>Firstname</label>
                            <input name="firstname" type="text" style="height: 30px; width: 250px;" placeholder="Firstname"/>
                            <br />
                            <label>Lastname</label>
                            <input name="lastname" type="text" style="height: 30px; width: 250px;" placeholder="Lastname"/>
                            <br />
                            <label>Username</label>
                            <input name="username" type="text" style="height: 30px; width: 250px;" placeholder="Username"/>
                            <br />
                            <label>Email Address</label>
                            <input name="email" type="email" style="height: 30px; width: 250px;" placeholder="Email"/>
                            <br />

                            <label>Password</label>
                            <input name="password" type="password" style="height: 30px; width: 250px;" placeholder="password"/>
                            <br />
                            
                            <div class="action_btns">

                                <div class="one_half last"><input type="submit" class="btn btn_red" value="Register"></div>
                            </div>
                        </form>
                   
                
            </section>
        </div>     
        <script type="text/javascript">
            $("#modal_trigger").leanModal({top: 100, overlay: 0.2, closeButton: ".modal_close"});
            
            $("#login_btn").click(function(e){
        e.preventDefault(); 
        var regform = document.forms['login'];
        $.ajax({
         url: "/index/login",
         method:'post',
         data:{
          "email":regform.elements['email'].value,
          "password":regform.elements['password'].value,
           },
         success:function(res){
             if(res == "Incorect email or password"){
                 $("#login").find(".login_err").html(res);
             }
             else{
                 window.open (res, '_self');
             // $("#btn-trgr").trigger('click');
//             location.reload();
         
        }
        }
       });
    });
        </script>
    </body>
