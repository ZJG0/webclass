<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <link rel="stylesheet" href="/kexie/Public/css/bootstrap.min.css">
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/kexie/Public/js/ie8-responsive-file-warning.js"></script>
    <script type="text/javascript" src="/kexie/Public/js/html5shiv.js"></script>
    <script type="text/javascript" src="/kexie/Public/js/respond.min.js"></script>
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
        <span class="glyphicon glyphicon-volume-up"></span>修改公告
    </div>
</div>

<div class="container-fluid" style="margin-top: 5px;padding: 0 20px;">
    <div class="row">
        <div class="panel pnl1">
            <div class="panel-body">
                &nbsp;
                <form onsubmit="return check()" method="post" action="<?php echo U('Admin/saveUpdateInform');?>?id=<?php echo ($_GET['id']); ?>">
                    <div class="clear"></div>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="input-group">
                                <span class="input-group-addon">标题：</span>
                                <input type="text" id="tit" name="title" class="form-control" value="<?php echo ($data["title"]); ?>">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="checkbox" style="margin-top:5px;">
                                <label>
                                    <input name='chit' value="1" type='checkbox' <?php if($data['chit']) echo "checked=checked"; ?> />是否进行短信通知
                                </label>
                            </div>
                        </div>
                    </div>
                    &nbsp;
                    <span class="input-group-addon">内容：</span>
                    <script id="container" name="content" type="text/plain"><?php echo ($data["content"]); ?>
                    </script>
                    <script type="text/javascript" src="/kexie/Public/edu/ueditor.config.js"></script>
                    <!-- 编辑器源码文件 -->
                    <script type="text/javascript" src="/kexie/Public/edu/ueditor.all.js"></script>
                    <!-- 实例化编辑器 -->
                    <script type="text/javascript">
                        var ue = UE.getEditor('container', {
                            autoHeight: true,
                            autoWidth: true,
                        });
                    </script>
                    &nbsp;
                    &nbsp;
                    <div align="center">
                        <a type="button" class="btn btn-default" href="<?php echo U('Admin/allInform');?>" onclick="return confirm('您确定要返回么')"  style="height:36px; width:100px">返 回</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="submit" class="btn btn-default"  value="确 定" style="height:36px; width:100px; background-color:#5781fe; color:#FFF;">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="/kexie/Public/js/jquery.min.js"></script>
<script src="/kexie/Public/js/bootstrap.min.js"></script>
</body>
<script type="text/javascript">
    function check() {
        if($("#tit").val().length!=0){
            return confirm("您确定修改该通知么？");
        }else{
            alert('标题不可为空！');
            return false;
        }
    }
</script>
</html>