
    <title>
      Saddahaq Employee login  
    </title>
<head> 
    <link rel="icon" type="image/png" href="https://saddahaq.blob.core.windows.net/multimedia/favicon.ico">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/index.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>public/global/saddahaq/css/saddahaq-ie7.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>public/global/saddahaq/css/saddahaq.css" />
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
</head>    
<body> 
        <a href="/index" id="logo"></a>
        <div class="span8 main-container">
                   <div id="table">
                        <div class="box">
                            <div class="logn-icon"><i class="icon-signin"></i></div>
                            <div class="Login">Employee Login</div>
                            <div id="login">
                                <p class="login_err" style="color: red;"></p>
                            </div>
                            <form name="login">
                                <label>Email</br><input type="text" name="email" placeholder="Email" class="inpt-logn"></label>
                                <label>Password</br><input type="password" name="password" class="inpt-logn" placeholder="Password"></label>
                                <input id="login_btn" type="submit" value="Login" class="btn btn-info btn-small btn-login-indx">
                            </form>
                            <!--<div>Forget Password? <a href="">Click Here</a></div>-->
                        </div>
                    </div>
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
            $(window).load(function() {          
          var i =0;
          var images = ['/images/sav.jpg','/images/item1.jpg','/images/item3.jpg'];
          var image = $('body');
          image.css('background-image', 'url(/images/sav.jpg)');
           //Change image at regular intervals
          setInterval(function(){
           image.css('background-image', 'url(' + images [i++] +')');
           image.fadeIn(1000);
           if(i == images.length)
            i = 0;
          }, 5000);           
         });

        </script>
    </body>
