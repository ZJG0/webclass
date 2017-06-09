<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <link rel="stylesheet" href="/webzuoye/public/css/bootstrap.min.css">
    <!--[if lt IE 9]>
     <script type="text/javascript" src="/webzuoye/public/js/ie8-responsive-file-warning.js"></script>
     <script type="text/javascript" src="/webzuoye/public/js/html5shiv.js"></script>
     <script type="text/javascript" src="/webzuoye/public/js/respond.min.js"></script>
    <![endif]--> 
    <title>修改活动</title>
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
        <span class="glyphicon glyphicon-list-alt"></span>修改活动
    </div>
</div>

  <div class="container-fluid" style="margin-top: 5px;padding: 0 20px;">
        <div class="panel pnl1">
            <div class="panel-body" style="padding-top: 0;">
                &nbsp;
                <form action="<?php echo U('User/saveUpdate');?>?id=<?php echo ($data["id"]); ?>" method="post">
                    <div class="clear"></div>
                    <div class="row">
                          <div class="row" style="margin-top: 10px;">
                              <div class="col-sm-10 col-sm-offset-1" >
                                <div class="input-group">
                                    <span class="input-group-addon">活动标题：</span>
                                    <input type="text" id="tit" name="act_title" class="form-control" value="<?php echo ($data["act_title"]); ?>">
                                </div>
                            </div>
                         </div>
                         <div class="row" style="margin-top: 10px;">
                             <div class="col-sm-5 col-sm-offset-1">
                                <div class="input-group">
                                    <span class="input-group-addon">活动组织单位：</span>
                                    <input type="text"  name="act_unit" value="<?php echo ($data["act_unit"]); ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                 <div class="input-group">
                                    <span class="input-group-addon">活动时间：</span>
                                    <input type="text"  name="act_time" value="<?php echo ($data["act_time"]); ?>" class="form-control">
                                </div>
                            </div>
                         </div>
                          <div class="row" style="margin-top: 10px;">
                             <div class="col-sm-5 col-sm-offset-1">
                                <div class="input-group">
                                    <span class="input-group-addon">组织人电话：</span>
                                    <input type="text"  name="phone" value="<?php echo ($data["phone"]); ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                 <div class="input-group">
                                    <span class="input-group-addon">活动地点：</span>
                                    <input type="text"  name="place" value="<?php echo ($data["place"]); ?>" class="form-control">
                                </div>
                            </div>
                         </div>
                    </div>
                    &nbsp;
                    <span class="input-group-addon">内容：</span>
                    <script id="container" name="content" type="text/plain"><?php echo ($data["content"]); ?>
                    </script>
                    <script type="text/javascript" src="/webzuoye/public/edu/ueditor.config.js"></script>
                    <!-- 编辑器源码文件 -->
                    <script type="text/javascript" src="/webzuoye/public/edu/ueditor.all.js"></script>
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
                        <a href="<?php echo U('User/daiShenPi');?>" class="btn btn-default" value="返 回" style="height:36px; width:100px">返 回</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="submit" class="btn btn-default"  value="修 改" style="height:36px; width:100px; background-color:#5781fe; color:#FFF;">
                    </div>
                </form>
              </div>
       </div>
</div>
<script src="/webzuoye/public//webzuoye/public/js/jquery.min.js"></script>
<script src="/webzuoye/public/js/bootstrap.min.js"></script>
</body>
</html>