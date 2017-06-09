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
        <span class="glyphicon glyphicon-volume-up"></span>教案
    </div>
</div>
<div class="container-fluid">
    <div class="row" style="margin-top: 30px;">
        <div class="col-xs-3"></div>
        <div class="col-xs-3"></div>
    </div>
        <button  class="btn btn-default" onclick="history.go(-1)">返 回</button>
    <div class="container" style="margin-top: 30px;padding-bottom: 20px;border: 1px solid #eee;box-shadow: 1px 1px 1px #eee;">
    <object width="1140" height="626" data="/webzuoye/Public/pdf/jiaoan.pdf" align="center" >
</object>
    </div>
</div>


</body>
</html>