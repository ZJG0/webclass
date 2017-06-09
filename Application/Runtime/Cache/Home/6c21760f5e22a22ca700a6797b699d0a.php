<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <link rel="stylesheet" href="/webzuoye/Public/css/bootstrap.min.css">
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/webzuoye/Public/js/ie8-responsive-file-warning.js"></script>
    <script type="text/javascript" src="/webzuoye/Public/js/html5shiv.js"></script>
    <script type="text/javascript" src="/webzuoye/Public/js/respond.min.js"></script>
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
        <span class="glyphicon glyphicon-home"></span>通知公告
    </div>
</div>

<div class="container-fluid padTa">
    <table class="table gTable table-bordered">
        <tr class="bg-primary">
            <th class="col-xs-2">序号</th>
            <th class="col-xs-6">标题</th>
            <th class="col-xs-2">发布日期</th>
            <th class="col-xs-2">详情</th>
        </tr>
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                <td><?php echo ($i+($page-1)*10); ?></td>
                <td style="white-space: nowrap;text-overflow: ellipsis;"><?php echo ($vo["title"]); ?></td>
                <td><?php echo ($vo["date"]); ?></td>
                <td id="shenpi1"><span class="glyphicon glyphicon-file" style="color: green;"></span>
                    <a href="<?php echo U('Admin/informContent');?>?id=<?php echo ($vo["id"]); ?>">详情</a>
                </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
    <div class="row">
       <div class="col-sm-5 col-sm-offset-2" style="text-align: center">
            <ul class="pagination">
                <?php if($page > 1): ?><li><a href="<?php echo U('Admin/inform');?>?page=<?php echo ($page-1); ?>">&laquo;</a></li><?php endif; ?>
                <?php $__FOR_START_7231__=0;$__FOR_END_7231__=$allPage;for($i=$__FOR_START_7231__;$i < $__FOR_END_7231__;$i+=1){ ?><li><a class="x<?php echo ($i+1); ?> "  href="<?php echo U('Admin/inform');?>?page=<?php echo ($i+1); ?>"><?php echo ($i+1); ?></a></li><?php } ?>
                <?php if($page < $allPage): ?><li><a href="<?php echo U('Admin/inform');?>?page=<?php echo ($page+1); ?>">&raquo;</a></li><?php endif; ?>
            </ul>
        </div>
    </div>
</div>


<script src="/webzuoye/Public/js/jquery.min.js"></script>
<script src="/webzuoye/Public/js/bootstrap.min.js"></script>
</body>
</html>