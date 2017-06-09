<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <title></title>

    <link rel="stylesheet" href="/webzuoye/public/css/css.css">
    <link rel="stylesheet" href="/webzuoye/public/css/bootstrap.min.css">

    <script type="text/javascript" src="/webzuoye/public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/webzuoye/public/js/tendina.min.js"></script>
    <script type="text/javascript" src="/webzuoye/public/js/common.js"></script>
    <script type="text/javascript" src="/webzuoye/public/js/bootstrap.min.js"></script>
    <style>
        a{text-decoration: none;}
        .top{height:50px;background-color:#1389D3;color:#fff;width: 100%;}
        .dropbtn1 {width:150px;color: white;height:50px;border: none;cursor: pointer;background-color:#1389D3;}
        .dropdown1 {position: relative;display: inline-block;height: 50px;width:150px;}
        .dropdown-content1 {display: none;position: absolute;min-width: 150px;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);background-color: #fff;}
        .dropdown-content1 a {color: black;padding: 12px 16px;text-decoration: none;display: block;outline: 0;}
        .dropdown-content1 a:hover {background-color: #eee;}
        .dropdown1:hover .dropdown-content1 {display: block;}
        .menu{width:190px;background-color: #F8F9FB;float: left;border-right: 4px solid #E1E1E1;}
        .menu ul{display: block;list-style: none;}
        .menu ul li{display: block;list-style: none;border-bottom: 1px #eeeeee solid;cursor: pointer;background-color: #fff;}
        .menu ul li a{display: block;list-style: none;height: 41px;padding:10px;color:#000;outline: 0;text-decoration: none;}
        .menu ul li a:hover{color:#000;text-decoration: none;background-color: #F5F5F5;}
        .menu ul li ul li a{display: block;list-style: none;height: 41px;padding:10px 10px 10px 20px;color:#000;outline: 0;}
        .menu ul li ul li a:hover{color:#000;text-decoration: none;background-color: #F5F5F5;}
        .cont{margin-left:194px;}
    </style>
</head>
<body style="min-width: 1000px;">
<div class="container-fluid" style="padding:0;">
    <div class="top">
        <div style="float:left;width:50%;">
            <img src="/webzuoye/public/images/logo.png" width="40" height="34" style="display:inline-block;margin-top:-8px;margin-left: 10px;" alt=""/>
            <span style="font-weight: 700;font-size:18px;line-height: 49px;">&nbsp;软件测试精品课程网站</span>
        </div>
        <div style="width:151px;float:right;border-left: 2px #1082C9 solid;">
            <div class="dropdown1">
                <button class="dropbtn1">
                    您好，学生：<?php echo session('user');?>&nbsp;&nbsp;<span style="position: relative;top:3px;" class="glyphicon glyphicon-chevron-down"></span>
                </button>
                <div class="dropdown-content1">
                    <a href="<?php echo U('User/updataUserInfo');?>" target="cont"><span class="glyphicon glyphicon-user"></span>&nbsp;修改个人信息</a>
                    <a href="<?php echo U('User/updataPwd');?>" target="cont"><span class="glyphicon glyphicon-lock"></span>&nbsp;修改密码</a>
                    <a onclick="return confirm('您确定要退出么？')" href="<?php echo U('Index/outLogin');?>"><span class="glyphicon glyphicon-log-out"></span>&nbsp;退出</a>
                </div>
            </div>
        </div>
    </div>
    <div class="menu">
        <div style="cursor: pointer;height: 44px;font-size: 16px;padding-left: 10px;line-height: 44px;background-color: #505050;color:#fff;">
            <span class="glyphicon glyphicon-th-large"></span>
            学生中心
            <span class="glyphicon glyphicon-list" style="display: inline-block;width:20px;position: relative;left:67px;"></span>
        </div>
        <ul id="menu">
            <li>
                <a href="<?php echo U('User/inform');?>" target="cont">
                    <span class="glyphicon glyphicon-home"></span>
                    通知中心
                    <span class="glyphicon glyphicon-star" style="display: inline-block;width:20px;position: relative;left:80px;"></span>
                </a>
            </li>
            <li>
                <a href="javascript:">
                    <span class="glyphicon glyphicon-list-alt"></span>
                    课程介绍<span class="glyphicon glyphicon-chevron-down" style="display: inline-block;width:20px;position: relative;left:80px;"></span>
                </a>
                <ul>
                    <li>
                        <a href="<?php echo U('User/jiaoan');?>" target="cont">
                            <span class="glyphicon glyphicon-minus"></span>
                            教案
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo U('User/jiaoshijianjie');?>" target="cont">
                            <span class="glyphicon glyphicon-minus"></span>
                            教师团队及简介
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo U('User/kechengdagang');?>" target="cont">
                            <span class="glyphicon glyphicon-minus"></span>
                            课程大纲
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo U('User/kechengjianjie');?>" target="cont">
                            <span class="glyphicon glyphicon-minus"></span>
                            课程简介
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo U('User/shipin');?>" target="cont">
                            <span class="glyphicon glyphicon-minus"></span>
                            课程视频
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo U('User/kejian');?>" target="cont">
                            <span class="glyphicon glyphicon-minus"></span>
                            课件
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:">
                    <span class="glyphicon glyphicon-list-alt"></span>
                    实验习题<span class="glyphicon glyphicon-chevron-down" style="display: inline-block;width:20px;position: relative;left:80px;"></span>
                </a>
                <ul>
                    <li>
                        <a href="<?php echo U('User/shiyandagang');?>" target="cont">
                            <span class="glyphicon glyphicon-minus"></span>
                            实验大纲
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo U('User/shiyanzhidaoshu');?>" target="cont">
                            <span class="glyphicon glyphicon-minus"></span>
                            实验指导书
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo U('User/xitidaan');?>" target="cont">
                            <span class="glyphicon glyphicon-minus"></span>
                            习题及答案
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:">
                    <span class="glyphicon glyphicon-list-alt"></span>
                    作业提交<span class="glyphicon glyphicon-chevron-down" style="display: inline-block;width:20px;position: relative;left:80px;"></span>
                </a>
                <ul>
                    <li>
                        <a href="<?php echo U('User/creat');?>" target="cont">
                            <span class="glyphicon glyphicon-minus"></span>
                            上交作业
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo U('User/daiShenPi');?>" target="cont">
                            <span class="glyphicon glyphicon-minus"></span>
                            待审批
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo U('User/pass');?>" target="cont">
                            <span class="glyphicon glyphicon-minus"></span>
                            已通过
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo U('User/noPass');?>" target="cont">
                            <span class="glyphicon glyphicon-minus"></span>
                            未通过
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="cont">
        <iframe src="<?php echo U('User/inform');?>" name="cont" marginheight="0" marginwidth="0" frameborder="0" width="100%" id="iframepage"></iframe>
    </div>
    <div style="width:100%;position: fixed;bottom:0;height: 20px;font-size: 12px;line-height: 24px;">
        <span>demo</span>
        <i style="display: inline-block;float: right;">版权所有 &copy;2017</i>
    </div>
</div>
<script>
    $(function (){
        var hei=$(window).height()*1-70;
        $("#iframepage").css("height",hei);
        $(".menu").css("height",hei);
        $(window).resize(function (){ // 监听浏览器窗口高度变化
            var hei=$(window).height()*1-70;
            $("#iframepage").css("height",hei);
            $(".menu").css("height",hei);
        })
    });
</script>
</body>
</html>