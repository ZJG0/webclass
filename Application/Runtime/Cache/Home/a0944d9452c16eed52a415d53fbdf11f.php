<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/webzuoye/Public/js/ie8-responsive-file-warning.js"></script>
    <script type="text/javascript" src="/webzuoye/Public/js/html5shiv.js"></script>
    <script type="text/javascript" src="/webzuoye/Public/js/respond.min.js"></script>
    <![endif]-->
    <title></title>

    <link href="/webzuoye/Public/css/css.css" rel="stylesheet" type="text/css"/>
    <link href="/webzuoye/Public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <style>
        .weizhi{height:44px;width:100%;background-color: #F1F1F1;}
        .weizhi_title{white-space:nowrap;height:44px;width:100px;padding:0 10px 0;background-color: #fff;cursor: pointer;text-align: center;line-height: 44px;}
    </style>
</head>
<body>
<div class="weizhi">
    <div class="weizhi_title">
        <span class="glyphicon glyphicon-lock"></span>修改密码
    </div>
</div>
<form action="<?php echo U('User/savePwd');?>" onsubmit="return check();" method="post">
    <div class="container" style="margin-top: 70px;">
        <div class="input-group col-xs-4 col-xs-offset-4" style="margin-top: 30px;">
            <div class="input-group-addon" style="width:80px;">旧 密 码</div>
            <input type="password" name="pwd" class="form-control">
        </div>
        <div class="input-group col-xs-4 col-xs-offset-4" style="margin-top: 30px;">
            <div class="input-group-addon" style="width:80px;">新 密 码</div>
            <input type="password" name="newpwd" id="pwd1" class="form-control">
        </div>
        <div class="input-group col-xs-4 col-xs-offset-4" style="margin-top: 30px;">
            <div class="input-group-addon"  style="width:80px;">确认密码</div>
            <input type="password" class="form-control" id="pwd2">
        </div>
        <button class="btn btn-primary col-xs-2 col-xs-offset-5" style="margin-top: 20px;">修改</button>
    </div>
</form>
<script type="text/javascript" src="/webzuoye/Public/js/jquery.min.js"></script>
</body>
<script type="text/javascript">
    function check() {
        var pwd1=$("#pwd1").val();
        var pwd2=$("#pwd2").val();
        if(pwd1!=pwd2){
            alert("两次密码不一致！");
            return false;
        }else{
            return true
        }
    }
</script>
</html>