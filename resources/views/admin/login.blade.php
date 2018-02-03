<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="/admins/assets/img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/admins/assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Fonts from Font Awsome -->
    <link rel="stylesheet" href="/admins/assets/css/font-awesome.min.css">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="/admins/assets/css/animate.css">
    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="/admins/assets/css/main.css">
    <link rel="stylesheet" href="/general/css/message.css">
    <!-- Fonts -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> -->
    <!-- Feature detection -->
    <script src="/admins/assets/js/modernizr-2.6.2.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/admins/assets/js/html5shiv.js"></script>
    <script src="/admins/assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <section id="login-container">

        <div class="row">
            <div class="col-md-3" id="login-wrapper">
                <div class="panel panel-primary animated flipInY">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            后台登录
                        </h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form">
                            <!-- <p>用户名:</p> -->
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="username" id="email" placeholder="Username">
                                    <i class="fa fa-user"></i>
                                    <div class="help-block" id="nameerror" style="font-size: 11px; color: red;display: none;"></div>
                                </div>
                            </div>
                            <!-- <p>密 码:</p> -->
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                    <i class="fa fa-lock"></i>
                                    <div class="help-block" id="passerror" style="font-size: 11px; color: red;display: none;"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    
                                    <div class="btn btn-primary btn-block" onclick="login()">登录</div>
                                    <hr />
                                    <!-- <a href="pages-sign-up.html" class="btn btn-default btn-block">Not a member? Sign Up</a> -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--Global JS-->
    <script src="/admins/assets/js/jquery-1.10.2.min.js"></script>
    <script src="/admins/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/admins/assets/plugins/waypoints/waypoints.min.js"></script>
    <script src="/admins/assets/plugins/nanoScroller/jquery.nanoscroller.min.js"></script>
    <script src="/admins/assets/js/application.js"></script>
    <!-- <script src="/admins/assets/js/base64.js"></script> -->
    <script src="/general/js/message.js"></script>
    <script src="/general/js/messageIE.js"></script>
    <script type="text/javascript">
     function login() {
        $('#nameerror').hide();
        $('#passerror').hide();
        var username = $('#email').val();
        var password = $('#password').val();
        if (!username) {
            $('#nameerror').html('用户名不能为空!').show();
        } else if (!password) {
            $('#passerror').html('密码不能为空!').show();
        } else {
            $.post('/admin/login', {
                'username': username,
                'password': password
            },
            function(data) {
                var data = JSON.parse(data);
                if (data.status == '404') {
                    $('#nameerror').html(data.info).show();
                } else if (data.status == '400') {
                    $('#passerror').html(data.info).show();
                } else if (data.status == '500') {
                    $.message({
                        message: data.info,
                        time: '5000',
                        type: 'error'
                    });
                } else {
                    location.href = '/admin';
                }
            });
        }
    }
document.onkeydown = function(event) {
    var e = event || window.event || arguments.callee.caller.arguments[0];
    if (e && e.keyCode == 13) {
        login();
    }
};
    </script>
</body>

</html>
