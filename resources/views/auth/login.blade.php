<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta information -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<!-- Title-->
<title>Teacher Portal |  OOS</title>
<!-- Favicons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="login_assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="login_assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="login_assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="login_assets/ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="login_assets/ico/favicon.ico">
<!-- CSS Stylesheet-->
<link type="text/css" rel="stylesheet" href="login_assets/css/bootstrap/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="login_assets/css/bootstrap/bootstrap-themes.css" />
<link type="text/css" rel="stylesheet" href="login_assets/css/style.css" />

<!-- Styleswitch if  you don't chang theme , you can delete -->
<link type="text/css" rel="alternate stylesheet" media="screen" title="style1" href="login_assets/css/styleTheme1.css" />
<link type="text/css" rel="alternate stylesheet" media="screen" title="style2" href="login_assets/css/styleTheme2.css" />
<link type="text/css" rel="alternate stylesheet" media="screen" title="style3" href="login_assets/css/styleTheme3.css" />
<link type="text/css" rel="alternate stylesheet" media="screen" title="style4" href="login_assets/css/styleTheme4.css" />

</head>
<body class="full-lg">
<div id="wrapper">

<div id="loading-top">
        <div id="canvas_loading"></div>
        <span>Checking...</span>
</div>

<div id="main">
        <div class="container">
                <div class="row">
                        <div class="col-lg-12">
                        
                                <div class="account-wall">
                                        <section class="align-lg-center">
                                        <div class="site-logo"></div>
                                        <h1 class="login-title"><span>Teacher</span> Portal <small> ONLINE OPERATING SYSTEM</small></h1>
                                        </section>
                                        <form id="form-signin" class="form-signin" method="post" action="{{ url('/login') }}">
                                         {{ csrf_field() }}
                                                <section>
                                                        <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                                <input  type="number" class="form-control" name="teacher_id" placeholder="Username">
                                                        </div>
                                                        <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-key"></i></div>
                                                                <input type="password" class="form-control"  name="password" placeholder="Password">
                                                        </div>
                                                        <button class="btn btn-lg btn-theme-inverse btn-block" type="submit" id="sign-in">Sign in</button>
                                                </section>
                                            
                                        </form>
                                </div>  
                                <!-- //account-wall-->
                                
                        </div>
                        <!-- //col-sm-6 col-md-4 col-md-offset-4-->
                </div>
                <!-- //row-->
        </div>
        <!-- //container-->
        
</div>
<!-- //main-->

        
</div>
<!-- //wrapper-->


<!--
////////////////////////////////////////////////////////////////////////
//////////     JAVASCRIPT  LIBRARY     //////////
/////////////////////////////////////////////////////////////////////
-->
        
<!-- Jquery Library -->
<script type="text/javascript" src="login_assets/js/jquery.min.js"></script>
<script type="text/javascript" src="login_assets/js/jquery.ui.min.js"></script>
<script type="text/javascript" src="login_assets/plugins/bootstrap/bootstrap.min.js"></script>
<!-- Modernizr Library For HTML5 And CSS3 -->
<script type="text/javascript" src="login_assets/js/modernizr/modernizr.js"></script>
<script type="text/javascript" src="login_assets/plugins/mmenu/jquery.mmenu.js"></script>
<script type="text/javascript" src="login_assets/js/styleswitch.js"></script>
<!-- Library 10+ Form plugins-->
<script type="text/javascript" src="login_assets/plugins/form/form.js"></script>
<!-- Datetime plugins -->
<script type="text/javascript" src="login_assets/plugins/datetime/datetime.js"></script>
<!-- Library Chart-->
<script type="text/javascript" src="login_assets/plugins/chart/chart.js"></script>
<!-- Library  5+ plugins for bootstrap -->
<script type="text/javascript" src="login_assets/plugins/pluginsForBS/pluginsForBS.js"></script>
<!-- Library 10+ miscellaneous plugins -->
<script type="text/javascript" src="login_assets/plugins/miscellaneous/miscellaneous.js"></script>
<!-- Library Themes Customize-->
<script type="text/javascript" src="login_assets/js/caplet.custom.js"></script>
<script type="text/javascript">
$(function() {
           //Login animation to center 
            function toCenter(){
                    var mainH=$("#main").outerHeight();
                    var accountH=$(".account-wall").outerHeight();
                    var marginT=(mainH-accountH)/2;
                           if(marginT>30){
                               $(".account-wall").css("margin-top",marginT-15);
                            }else{
                                $(".account-wall").css("margin-top",30);
                            }
                }
                toCenter();
                var toResize;
                $(window).resize(function(e) {
                    clearTimeout(toResize);
                    toResize = setTimeout(toCenter(), 500);
                });
                
            //Canvas Loading
              var throbber = new Throbber({  size: 32, padding: 17,  strokewidth: 2.8,  lines: 12, rotationspeed: 0, fps: 15 });
              throbber.appendTo(document.getElementById('canvas_loading'));
              throbber.start();
              
            //Set note alert
            setTimeout(function () { 
                $.notific8('Hi Teacher , please use your ID and given password to login.',{ sticky:true, horizontalEdge:"top", theme:"inverse" ,heading:"LOGIN"}) 
                }, 1000);
    
            
            $("#form-signin").submit(function(event){
                    event.preventDefault();
                    var main=$("#main");
                    //scroll to top
                    main.animate({
                        scrollTop: 0
                    }, 500);
                    main.addClass("slideDown");     
                    
                    // send username and password to php check login
                    $.ajax({
                            url: $(this).attr('action'),
                            data: $(this).serialize(), 
                            type: "POST",
                            dataType: 'json',
                            success: function (data) {
                              
                              
                                 setTimeout(function () { $("#loading-top span").text("Yes, you are now loggin in...") }, 500);
                                 setTimeout(function () { $("#loading-top span").text("Redirecting to your page...")  }, 1500);
                                 setTimeout( "window.location.href='"+data.redirect+"'", 3100 );
                        },
                           error: function (data) {
                            var errors = $.parseJSON(data.responseText);
                                 setTimeout(function () { main.removeClass("slideDown") }, !errors.ok ? 500:3000);
                                 if (errors.ok == false) { 
                                     $.notific8('Check Username or Password again !! ',{ life:5000,horizontalEdge:"bottom", theme:"danger" ,heading:" ERROR :) "});
                                    return false;
                                 }
                                
                        }
                    }); 
            
            });
    });
</script>
</body>
</html>