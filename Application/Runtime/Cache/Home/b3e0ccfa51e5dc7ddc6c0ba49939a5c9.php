<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <link rel="stylesheet" href="/webzuoye/public/css/css.css">
    <link rel="stylesheet" href="/webzuoye/public/css/bootstrap.min.css">
    <script type="text/javascript" src="/webzuoye/public/js/laydate.js"></script>
    <!--[if lt IE 9]>
     <script type="text/javascript" src="js/ie8-responsive-file-warning.js"></script>
     <script type="text/javascript" src="js/html5shiv.js"></script>
     <script type="text/javascript" src="js/respond.min.js"></script>
    <![endif]--> 
    <title>提交作业</title>
    <style>
        .form-control{border-radius: 1px}
         label{ font-weight:normal; }
        .biao{margin-bottom: 20px;}
        .anNiu{margin-top: 20px}
        .weizhi{height:44px;width:100%;background-color: #F1F1F1;}
        .weizhi_title{white-space:nowrap;height:44px;width:100px;padding:0 10px 0;background-color: #fff;cursor: pointer;text-align: center;line-height: 44px;}
/*         .laydate_box, .laydate_box * {
          box-sizing:content-box;
         } */
    </style>
</head>
<body style="margin-bottom: 25px">
<div class="weizhi">
    <div class="weizhi_title">
        <span class="glyphicon glyphicon-list-alt"></span>提交作业
    </div>
</div>

  <div class="container-fluid" style="margin-top: 5px;">
        <div class="panel pnl1">
            <div class="panel-body" style="padding-top: 0;">
                &nbsp;
                <form action="<?php echo U('User/saveActive');?>" method="post">
                    <div class="clear"></div>
                    <div class="row">
                          <div class="row" style="margin-top: 10px;">
                              <div class="col-sm-10 col-sm-offset-1" >
                                <div class="input-group">
                                    <span class="input-group-addon">作业题目：</span>
                                    <input type="text" required="" id="tit" name="act_title" class="form-control">
                                </div>
                            </div>
                         </div>
                         <div class="row" style="margin-top: 10px;">
                             <div class="col-sm-5 col-sm-offset-1">
                                <div class="input-group">
                                    <span class="input-group-addon">班级：</span>
                                    <input type="text" required=""  name="act_unit" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                 <div class="input-group">
                                    <span class="input-group-addon">时间：</span>
                                    <input type="text" required=""  name="act_time" class="form-control">
                                </div>
                            </div>
                         </div>
                          <div class="row" style="margin-top: 10px;">
                             <div class="col-sm-5 col-sm-offset-1">
                                <div class="input-group">
                                    <span class="input-group-addon">电话：</span>
                                    <input type="text" required=""  name="phone" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                 <div class="input-group">
                                    <span class="input-group-addon">学号：</span>
                                    <input type="text" required=""  name="place" class="form-control">
                                </div>
                            </div>
                         </div>
                    </div>
                    &nbsp;
                    <span class="input-group-addon">内容：</span>
                    <script id="container" name="content" type="text/plain">
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
                        <input type="submit" class="btn btn-default"  value="确 定" style="height:36px; width:100px; background-color:#5781fe; color:#FFF;">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="reset" class="btn btn-default" value="重置" style="height:36px; width:100px">
                    </div>
                </form>
              </div>
       </div>
  </div>
<!--<script type="text/javascript">
!function(){
    laydate.skin('molv');//切换皮肤，请查看skins下面皮肤库
    laydate({elem: '#d1'});//绑定元素
}();

//日期范围限制
var start = {
    elem: '#start',
    format: 'YYYY-MM-DD',
    min: laydate.now(), //设定最小日期为当前日期
    max: '2099-06-16', //最大日期
    istime: true,
    istoday: false,
    choose: function(datas){
         end.min = datas; //开始日选好后，重置结束日的最小日期
         end.start = datas //将结束日的初始值设定为开始日
    }
};

var end = {
    elem: '#end',
    format: 'YYYY-MM-DD',
    min: laydate.now(),
    max: '2099-06-16',
    istime: true,
    istoday: false,
    choose: function(datas){
        start.max = datas; //结束日选好后，充值开始日的最大日期
    }
};
laydate(start);
laydate(end);

//自定义日期格式
laydate({
    elem: '#test1',
    format: 'YYYY年MM月DD日',
    festival: true, //显示节日
    choose: function(datas){ //选择日期完毕的回调
        alert('得到：'+datas);
    }
});

//日期范围限定在昨天到明天
laydate({
    elem: '#hello3',
    min: laydate.now(-1), //-1代表昨天，-2代表前天，以此类推
    max: laydate.now(+1) //+1代表明天，+2代表后天，以此类推
});
</script>-->
<script src="/webzuoye/public/js/jquery.min.js"></script>
<script src="/webzuoye/public/js/bootstrap.min.js"></script>
</body>
</html>