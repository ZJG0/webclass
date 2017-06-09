<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <link rel="stylesheet" href="/webzuoye/Public/css/bootstrap.min.css">
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
        <span class="glyphicon glyphicon-user"></span>查询用户
    </div>
</div>
  <div class="container-fluid padTa">
    <table class="table gTable table-bordered">
        <tr class="bg-primary">
            <th>序号</th>
            <th>登录ID</th>
            <th>班级</th>
            <th>用户类型</th>
            <th>初始化密码</th>
            <th class="col-xs-2">操 作</th>
        </tr>
        <!-- 改动start -->
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td align="center"><?php echo ($vo['id']); ?></td>
            <td><?php echo ($vo['user']); ?></td>
            <td><?php echo ($vo['unit']); ?></td>
            <td>
                <?php if($vo['status'] == 1): ?>学生
                  <?php else: ?>
                    教师<?php endif; ?>
            </td>
            <td><a href="<?php echo U('Admin/zero');?>?id=<?php echo ($vo['id']); ?>">初始化</a></td>
            <td>
            <span class="glyphicon glyphicon-edit span1" style="color:#c21f3c"><a href="<?php echo U('Admin/updateUser');?>?id=<?php echo ($vo['id']); ?>" target="cont">修改</a></span>
            </td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        <!-- 改动end -->
    </table>
    <div class="row" >
        <div class="col-sm-5 col-sm-offset-7" style="text-align:right;">
            <ul class="pagination">
            <!-- 改动start -->
                <li><a href="<?php echo ($page); ?>"></a></li>
            <!-- 改动end -->
            </ul>
        </div>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>