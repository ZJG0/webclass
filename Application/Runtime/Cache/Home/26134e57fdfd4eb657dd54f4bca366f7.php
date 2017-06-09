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
        <span class="glyphicon glyphicon-list-alt"></span>已驳回
    </div>
</div>

  <div class="container-fluid padTa">
    <table class="table gTable table-bordered" style="word-break: normal;">
        <tr class="bg-primary">
            <th>序号</th>
            <th>作业题目</th>
            <th>班级</th>
            <th>时间</th>
            <th>电话</th>
            <th>学号</th>
            <th colspan="2">操作</th>
        </tr>
                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($i+($page-1)*10); ?></td>
            <td><?php echo ($vo["act_title"]); ?></td>
            <td><?php echo ($vo["act_unit"]); ?></td>
            <td><?php echo ($vo["act_time"]); ?></td>
            <td><?php echo ($vo["phone"]); ?></td>
            <td><?php echo ($vo["place"]); ?></td>
             <td class="tdPadding">
                <div class="btn-group">
                    <button class="btn btn-default" data-toggle="dropdown">
                        审批
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a onclick="return confirm('您确定要通过该申请么？')" href="<?php echo U('Admin/success1');?>?id=<?php echo ($vo["id"]); ?>">通过</a></li>
                        <li><a href="" data-toggle="modal" data-target="#myModal">驳回</a></li>
                    </ul>
                </div>
            </td>
            <td style="padding-top: 14px;"> 
            <span class="glyphicon glyphicon-file span1" style="color:#c21f3c"><a href="<?php echo U('Admin/detail2');?>?id=<?php echo ($vo["id"]); ?>" target="cont">详情</a></span>
            </td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
      <!-- 模态声明，show 表示显示-->
                     <div class="modal fade" id="myModal">
                   <!-- 窗口声明-->
                            <div class="modal-dialog">
                        <!-- 内容声明-->
                                <div class="modal-content">
                            <!-- 头部-->
                                <div class="modal-header">
                                <button type="button" class="close"
                                    data-dismiss="modal">
                                        <span>&times;</span>
                                </button>
                            <h4 class="modal-title">请填写驳回理由...</h4>
                            </div>
                            <!-- 主体-->
                            <div class="modal-body">
                                    <form action="<?php echo U('Admin/reson');?>?id=<?php echo ($vo["id"]); ?>" class="form-horizontal" method="post">
                                          <div class="row">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" style="padding-top: 39px;">驳回理由：</label>
                                                <div class="col-sm-8">
                                                    <textarea class="form-control" name="reson" rows="4"  required="required" style="box-shadow: 0 1px 1px #ddd"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 注脚-->
                                        <div class="modal-footer">
                                           <button type="submit" class="btn btn-primary"> 确 定</button>
                                       </div>
                                    </form>
                            </div>
                    </div>
                  </div>
             </div>
    <div class="row">
        <div class="col-sm-5 col-sm-offset-7" style="text-align: right">
            <ul class="pagination">
                <?php if($page > 1): ?><li><a href="<?php echo U('Admin/yiBoHui');?>?page=<?php echo ($page-1); ?>">&laquo;</a></li><?php endif; ?>
                <?php $__FOR_START_23621__=0;$__FOR_END_23621__=$allPage;for($i=$__FOR_START_23621__;$i < $__FOR_END_23621__;$i+=1){ ?><li><a class="x<?php echo ($i+1); ?> "  href="<?php echo U('Admin/yiBoHui');?>?page=<?php echo ($i+1); ?>"><?php echo ($i+1); ?></a></li><?php } ?>
                <?php if($page < $allPage): ?><li><a href="<?php echo U('Admin/yiBoHui');?>?page=<?php echo ($page+1); ?>">&raquo;</a></li><?php endif; ?>
            </ul>
        </div>
    </div>
  </div>
<script src="/webzuoye/Public/js/jquery.min.js"></script>
<script src="/webzuoye/Public/js/bootstrap.min.js"></script>
</body>
</html>