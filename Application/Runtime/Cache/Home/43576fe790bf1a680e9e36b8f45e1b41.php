<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <link rel="stylesheet" href="/kexie/public/css/bootstrap.min.css">
    <!--[if lt IE 9]>
     <script type="text/javascript" src="js/ie8-responsive-file-warning.js"></script>
     <script type="text/javascript" src="js/html5shiv.js"></script>
     <script type="text/javascript" src="js/respond.min.js"></script>
    <![endif]--> 
    <title>已审批</title>
    <style>
        .container-fluid{padding-left: 50px}
        .form-control{border-radius: 1px}
         label{ font-weight:normal; }
        .biao{margin-bottom: 20px;}
        .anNiu{margin-top: 20px}
        .gTable {
            margin: 30px auto 0;
            text-align: center;
            width: 100%;
        }
        .gTable th{
            text-align: center;
            font-family: "黑体";
            font-size: 14px;
            font-weight: bold;
        }
        .weizhi{height:44px;width:100%;background-color: #F1F1F1;}
        .weizhi_title{white-space:nowrap;height:44px;width:100px;padding:0 10px 0;background-color: #fff;cursor: pointer;text-align: center;line-height: 44px;}
    </style>
</head>
<body style="margin-bottom: 25px">
<div class="weizhi">
    <div class="weizhi_title">
        <span class="glyphicon glyphicon-list-alt"></span>已审批
    </div>
</div>

  <div class="container-fluid padTa">
    <table class="table gTable table-bordered">
        <tr class="bg-primary">
            <th>序号</th>
            <th>活动标题</th>
            <th>活动组织单位</th>
            <th>活动时间</th>
            <th>组织人电话</th>
            <th>活动地点</th>
            <th>操作</th>
        </tr>
        <tr>
            <td>1</td>
            <td style="white-space: nowrap;overflow:hidden;text-overflow: ellipsis;">大学</td>
            <td>山东建筑大学</td>
            <td>2015.1.05</td>
            <td>17864159843</td>
            <td>山东建筑大学</td>
            <td>
                <span class="glyphicon glyphicon-edit span1" style="color:#c21f3c"><a href="all-xiangqing.html" target="cont" target="cont">详情</a></span>
            </td>
        </tr>
    </table>
    <div class="row">
        <div class="col-sm-5 col-sm-offset-7" style="text-align: right">
            <ul class="pagination">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>
        </div>
    </div>
</div>

<script src="/kexie/public/js/jquery.min.js"></script>
<script src="/kexie/public/js/bootstrap.min.js"></script>
</body>
</html>