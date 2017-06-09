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
        <span class="glyphicon glyphicon-volume-up"></span>习题答案
    </div>
</div>
<div class="container-fluid">
    <div class="row" style="margin-top: 30px;">
        <div class="col-xs-3"></div>
        <div class="col-xs-3"></div>
    </div>
        <button  class="btn btn-default" onclick="history.go(-1)">返 回</button>
    <div class="container" style="margin-top: 30px;padding-bottom: 20px;border: 1px solid #eee;box-shadow: 1px 1px 1px #eee;">
        <table class="table table-striped" style="text-align: center;">
        <caption>习题答案</caption>
          <thead>
            <tr>
              <td>名称</th>
              <td>操作</th>
          </tr>
      </thead>
      <tbody>
      <tr>
          <td>软件测试试卷1</td>
          <td><a href="/webzuoye/Public/doc/软件测试试卷1.doc"><button type="button" class="btn btn-primary">下载</button></a></td>
      </tr>
      <tr>
          <td>软件测试试卷2</td>
          <td><a href="/webzuoye/Public/doc/软件测试试卷2.doc"><button type="button" class="btn btn-primary">下载</button></a></td>
      </tr>
      <tr>
          <td>试卷1答案</td>
          <td><a href="/webzuoye/Public/doc/试卷1答案.doc""><button type="button" class="btn btn-primary">下载</button></a></td>
      </tr>
      <tr>
          <td>试卷2答案</td>
          <td><a href="/webzuoye/Public/doc/试卷2答案.doc""><button type="button" class="btn btn-primary">下载</button></a></td>
      </tr>
  </tbody>
</table>
    </div>
</div>


</body>
</html>