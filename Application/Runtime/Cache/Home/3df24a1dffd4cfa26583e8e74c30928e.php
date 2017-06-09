<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <link rel="stylesheet" href="/kexie/Public/css/bootstrap.min.css">
    <!--[if lt IE 9]>
     <script type="text/javascript" src="js/ie8-responsive-file-warning.js"></script>
     <script type="text/javascript" src="js/html5shiv.js"></script>
     <script type="text/javascript" src="js/respond.min.js"></script>
    <![endif]--> 
    <title></title>
    <style>
        .container-fluid{padding-left: 50px}
        .form-control{border-radius: 1px}
         label{ font-weight:normal; }
        .biao{margin-bottom: 20px;}
        .anNiu{margin-top: 20px}
        .weizhi{height:44px;width:100%;background-color: #F1F1F1;}
        .weizhi_title{white-space:nowrap;height:44px;width:100px;padding:0 10px 0;background-color: #fff;cursor: pointer;text-align: center;line-height: 44px;}
    </style>
</head>
<body style="margin-bottom: 25px">
<div class="weizhi">
    <div class="weizhi_title">
        <span class="glyphicon glyphicon-user"></span>个人信息
    </div>
</div>

<div class="container-fluid" style="margin-top: 30px">
    <form action="<?php echo U('User/update');?>?id=<?php echo ($_GET['id']); ?>" class="form-horizontal" method="post">
        <div class="col-sm-6">
            <div class="row">
              <div class="form-group">
                    <label class="col-sm-6 control-label">登录ID:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="user" required="required">
                    </div>
              </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="row">
             <div class="form-group">
                <label class="col-sm-2 control-label" style="white-space: nowrap;">单位名称:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="unit" required="required">
                </div>
              </div>
            </div>
        </div>
        <div class="row anNiu">
            <div class="col-sm-6 text-center col-sm-offset-3">
                <button type="submit" class="btn btn-primary col-sm-4 col-sm-offset-4" autocomplete="off"><span class="glyphicon glyphicon-edit">保 存</span></button>
            </div>
        </div>
    </form>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>