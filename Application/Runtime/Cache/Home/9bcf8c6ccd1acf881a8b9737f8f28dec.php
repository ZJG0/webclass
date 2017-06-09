<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <link rel="stylesheet" href="/webzuoye/public/css/bootstrap.min.css">
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
        <span class="glyphicon glyphicon-list-alt"></span>已通过
    </div>
</div>

  <div class="container-fluid padTa">
    <table class="table gTable table-bordered">
        <tr class="bg-primary">
            <th>序号</th>
            <th>作业题目</th>
            <th>班级</th>
            <th>时间</th>
            <th>电话</th>
            <th>学号</th>
            <th>操作</th>
        </tr>
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                <td><?php echo ($i); ?></td>
                <td style="white-space: nowrap;overflow:hidden;text-overflow: ellipsis;"><?php echo ($vo["act_title"]); ?></td>
                <td><?php echo ($vo["act_unit"]); ?></td>
                <td><?php echo ($vo["act_time"]); ?></td>
                <td><?php echo ($vo["phone"]); ?></td>
                <td><?php echo ($vo["place"]); ?></td>
                <td>
                    <span class="glyphicon glyphicon-edit span1" style="color:#c21f3c"><a href="<?php echo U('User/actContent');?>?id=<?php echo ($vo["id"]); ?>" target="cont" target="cont">详情</a></span>
                </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
    <div class="row">
       <div class="col-sm-5 " style="text-align: right">
            <ul class="pagination">
                <?php if($page > 1): ?><li><a href="<?php echo U('User/daiShenPi');?>?page=<?php echo ($page-1); ?>">&laquo;</a></li><?php endif; ?>
                <?php $__FOR_START_16770__=0;$__FOR_END_16770__=$allNum;for($i=$__FOR_START_16770__;$i < $__FOR_END_16770__;$i+=1){ ?><li class="x<?php echo ($i+1); ?>"><a   href="<?php echo U('User/daiShenPi');?>?page=<?php echo ($i+1); ?>"><?php echo ($i+1); ?></a></li><?php } ?>
                <?php if($page < $allNum): ?><li><a href="<?php echo U('User/daiShenPi');?>?page=<?php echo ($page+1); ?>">&raquo;</a></li><?php endif; ?>
            </ul>
        </div>
    </div>
</div>

<script src="/webzuoye/public/js/jquery.min.js"></script>
<script src="/webzuoye/public/js/bootstrap.min.js"></script>
</body>
<script type="text/javascript">
    $(".x<?php echo ($page); ?>").addClass('disabled');
</script>
</html>