<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta information -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<!-- Title-->
<title>CAPLET |  Admin HTML Themes</title>
<!-- Favicons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="public/assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="public/assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="public/assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="public/assets/ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="public/assets/ico/favicon.ico">
<!-- CSS Stylesheet-->
<link type="text/css" rel="stylesheet" href="public/assets/css/bootstrap/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="public/assets/css/bootstrap/bootstrap-themes.css" />
<link type="text/css" rel="stylesheet" href="public/assets/css/style.css" />

<!-- Styleswitch if  you don't chang theme , you can delete -->
<link type="text/css" rel="alternate stylesheet" media="screen" title="style1" href="public/assets/css/styleTheme1.css" />
<link type="text/css" rel="alternate stylesheet" media="screen" title="style2" href="public/assets/css/styleTheme2.css" />
<link type="text/css" rel="alternate stylesheet" media="screen" title="style3" href="public/assets/css/styleTheme3.css" />
<link type="text/css" rel="alternate stylesheet" media="screen" title="style4" href="public/assets/css/styleTheme4.css" />

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
                                        <form id="form-signin" method="post" class="form-signin" action="{{ url('/login') }}">
                                        {{ csrf_field() }}
                                                <section>
                                                        <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                                <input  type="text" name="teacher_id" class="form-control" name="number" placeholder="Teacher Id">
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
<script type="text/javascript" src="public/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="public/assets/js/jquery.ui.min.js"></script>
<script type="text/javascript" src="public/assets/plugins/bootstrap/bootstrap.min.js"></script>
<!-- Modernizr Library For HTML5 And CSS3 -->
<script type="text/javascript" src="public/assets/js/modernizr/modernizr.js"></script>
<script type="text/javascript" src="public/assets/plugins/mmenu/jquery.mmenu.js"></script>
<script type="text/javascript" src="public/assets/js/styleswitch.js"></script>
<!-- Library 10+ Form plugins-->
<script type="text/javascript" src="public/assets/plugins/form/form.js"></script>
<!-- Datetime plugins -->
<script type="text/javascript" src="public/assets/plugins/datetime/datetime.js"></script>
<!-- Library Chart-->
<script type="text/javascript" src="public/assets/plugins/chart/chart.js"></script>
<!-- Library  5+ plugins for bootstrap -->
<script type="text/javascript" src="public/assets/plugins/pluginsForBS/pluginsForBS.js"></script>
<!-- Library 10+ miscellaneous plugins -->
<script type="text/javascript" src="public/assets/plugins/miscellaneous/miscellaneous.js"></script>
<!-- Library Themes Customize-->
<script type="text/javascript" src="public/assets/js/caplet.custom.js"></script>

</body>
</html>