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
        <span class="glyphicon glyphicon-user"></span>修改用户
    </div>
</div>

<div class="container-fluid" style="margin-top: 30px">
<!-- 改动start -->
    <form action="<?php echo U('Admin/update');?>?id=<?php echo ($_GET['id']); ?>" class="form-horizontal" method="post">
        <div class="row">
            <div class="col-xs-12">
                <div class="row">
                    <div class="form-group">
                        <label class="col-xs-4 control-label">登录ID:</label>
                        <div class="col-xs-3">
                            <input type="text" name="user" class="form-control" required="required" value="<?php echo ($data["user"]); ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="row">
                    <div class="form-group">
                        <label class="col-xs-4 control-label" style="white-space: nowrap;">单位名称:</label>
                        <div class="col-xs-3">
                            <input type="text" name="unit" class="form-control" required="required" value="<?php echo ($data["unit"]); ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="row">
                    <div class="form-group">
                        <label class="col-xs-4 control-label" style="white-space: nowrap;">用户类型:</label>
                        <div class="col-xs-2">
                            <select name="status" id="" class="form-control">
                                <option <?php if($data[status] == 0) echo 'selected=selected'; ?> value="0">管理员</option>
                                <option <?php if($data[status] == 1) echo 'selected=selected'; ?> value="1" >普通用户</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row anNiu">
            <div class="text-center">
                <button type="submit" class="btn btn-primary col-xs-1 col-xs-offset-5" autocomplete="off"><span class="glyphicon glyphicon-edit"></span>修改</button>
            </div>
        </div>
    </form>
<!-- 改动start -->
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>