<?php
namespace Home\Controller;
use Think\Controller;

class AdminController extends CheckAdminController {
    public function index(){ 	
    	  $this->display('Admin/index');
    }
    public function inform($page=1)	//通知公告
    {
    	$con=M('inform');
    	$all=$con->count();
    	$data=$con->page($page,10)->order('id desc')->select();
    	$allPage=ceil($all/10);
    	if($page>$allPage || $page<=0) $this->error('页面不存在!');
    	$this->assign('data',$data);
    	$this->assign('allPage',$allPage);
    	$this->assign('page',$page);
    	$this->display('Admin/tongZhiGongGao');
    }
    public function addUser()	//添加用户
    {
    	$this->display('Admin/zengTianXinYongHu');
    }
    public function allUser()	//查看所有用户
    {
    	 $User = M("user");
        // 计算总数
        $count = $User->count();
        // 导入分页类
        import('ORG.Util.Page');
        // 实例化分页类
        $p = new \Think\Page($count, 10);
        // 分页显示输出
        $page = $p->show();
        // 当前页数据查询
        $list = $User->order('id ASC')->limit($p->firstRow.','.$p->listRows)->select();
        // 赋值赋值
        $this->assign('list', $list);
        $this->assign('page', $page);
    	$this->display('Admin/chaXunYongHu');
    }
    public function updateUser()     //更改用户信息
    {
        $id=I('get.id');
        $con=M('user');
        $data=$con->where("id=$id")->find();
        $this->assign('data',$data);
        $this->display('Admin/xiuGaiYongHuXiXin');
    }
    public function insert1() {
        header("Content-Type:text/html; charset=utf-8");
        $User = M("user"); // 实例化User对象
        $data['user'] = I('post.user');
        $data['unit'] = $_POST["unit"];
        $data['pwd'] = 'e10adc3949ba59abbe56e057f20f883e';
        $data['status'] = $_POST["status"];
        $pd=$User->where("user='$data[user]'")->count();
        if($pd<=0){   
            $result=$User->add($data);
            if ($result) {
                echo "<script> alert ('添加成功'); history.go(-1);</script>";
            }
            else{
                echo "<script> alert ('添加失败'); history.go(-1);</script>";
            }
        }else{
            echo "<script> alert ('用户已经存在'); history.go(-1);</script>";
        }
    }
    public function update(){
        header("Content-Type:text/html; charset=utf-8");
        $id=$_GET['id'];
        $User = M("user"); // 实例化User对象
        $User->user = I('post.user');
        $User->unit = I('post.unit');
        $User->status = I('post.status');
        $data=$User->where("id=$id")->find();
        $Active=M("active");
        $Active->act_user = I('post.user');
        $result1=$Active->where("act_user='$data.user'")->save();
        // $us=I('post.user');
        // $pd=$User->where("user='$us'")->count();
        // if($pd<=0){ 
        $result2=$User->where("id='$id'")->save(); // 根据条件保存修改的数据

            if ($result1||$result2) {
                echo "<script> alert ('修改成功'); history.go(-1);</script>";
            }
            else{
                echo "<script> alert ('修改失败'); history.go(-1);</script>";
            }
        // }else{
        //     echo "<script> alert ('用户ID已经存在'); history.go(-1);</script>";
        // }  
    }
    public function zero(){
        header("Content-Type:text/html; charset=utf-8");
        $id=$_GET['id'];
        $User = M("user"); // 实例化User对象
        $User->pwd = 'e10adc3949ba59abbe56e057f20f883e';
        $result=$User->where("id='$id'")->save(); // 根据条件保存修改的数据
        if ($result||$result==0){
            echo "<script> alert ('初始化成功,新密码：123456'); history.go(-1);</script>";
        }
        else{
            echo "<script> alert ('初始化失败'); history.go(-1);</script>";
        }
    }
    public function newInform()		//发布通知
    {
    	$this->display('Admin/faBuGongGao');
    }
    public function saveInform()
    {
    	$data['title']=I('post.title');
    	$data['content']=$_POST['content'];
    	$data['chit']=I('post.chit');
    	$data['date']=date('Y年m月d日',time());
    	$con=M('inform');
    	$pd=$con->add($data);
    	if($pd){
    		$this->success('发布成功');
    	}else{
    		$this->error('错误！');
    	}
    }
    public function allInform($page=1)		//已发通知
    {
    	$con=M('inform');
    	$all=$con->count();
    	$data=$con->page($page,10)->order('id desc')->select();
    	$allPage=ceil($all/10);
    	if($page>$allPage || $page<=0) $this->error('页面不存在!');
    	$this->assign('data',$data);
    	$this->assign('allPage',$allPage);
    	$this->assign('page',$page);
    	$this->display('Admin/yiFaTongZhi');
    }
    public function updataInform($id)
    {
    	$con=M('inform');
    	$data=$con->where("id=$id")->find();
    	$this->assign('data',$data);
    	$this->display('Admin/xiuGaiGongGao');
    }
    public function saveUpdateInform($id)
    {
    	$data['title']=I('post.title');
    	$data['content']=$_POST['content'];
    	$data['chit']=I('post.chit');
    	$data['date']=date('Y年m月d日',time());
    	$con=M('inform');
    	$pd=$con->where("id=$id")->save($data);
    	if($pd){
    		$this->success('修改成功');
    	}else{
    		$this->error('未修改');
    	}
    }
    public function delInform($id)
    {
    	$con=M('inform');
    	$pd=$con->where("id=$id")->delete();
    	if($pd){
    		$this->success('删除成功');
    	}else{
    		$this->error('删除失败');
    	}
    }
    public function informContent($id)
    {
    	$con=M('inform');
    	$data=$con->where("id=$id")->find();
    	$this->assign('data',$data);
    	$this->display('Admin/gongGaoXiangQing');
    }
    public function updataPwd()
    {
        $this->display('Admin/mima');
    }
    public function savePwd()
    {
        $con=M('user');
        $data['user']=session('admin');
        $data['pwd']=md5(I('post.pwd'));
        $newPwd=md5(I('post.newpwd'));
        $pd=$con->where($data)->count();
        if($pd){
            $x=$con->where($data)->setField('pwd',$newPwd);
            if($x){
                $this->success('修改成功！');
            }else{
                $this->error('错误！');
            }
        }else{
            $this->error('密码错误！');
        }
    }
    public function updataUserInfo()
    {
        $this->display('Admin/xiuGaiGeRenXinXi');
    }
    public function weiShenPi($page=1){  
        $con=M('active');
        $all=$con->count();
        $data=$con->page($page,10)->order('id desc')->where('state=0')->select();
        $allPage=ceil($all/10);
        if($page>$allPage || $page<=0) $this->error('页面不存在!');
        $this->assign('data',$data);
        $this->assign('allPage',$allPage);
        $this->assign('page',$page);
        $this->display('Admin/weiShenPi');
    }
    public function success1(){
        $id=$_GET['id'];
        $Active = M("active"); // 实例化Active对象
        $Active->state = 1;
        $result=$Active->where("id='$id'")->save(); // 根据条件保存修改的数据
        if ($result||$result==0){
            $this->success('已通过！');
        }
        else{
            echo "<script> alert ('审核失败'); history.go(-1);</script>";
        }
    }
    public function reson(){
        $id=$_GET['id'];
        $Active = M("active"); // 实例化Active对象
        $Active->act_reson = I('post.reson');
        $Active->state = 2;
        $result=$Active->where("id='$id'")->save(); // 根据条件保存修改的数据
        if ($result||$result==0){
            $this->success('已告知驳回原因！');
        }
        else{
            echo "<script> alert ('审核失败'); history.go(-1);</script>";
        }
    }
    public function detail(){
        $id=$_GET['id'];
        $con=M('active');
        $data=$con->where("id=$id")->find();
        $this->assign('data',$data);
        $this->display('Admin/detail');
    }
    public function detail2(){
        $id=$_GET['id'];
        $con=M('active');
        $data=$con->where("id=$id")->find();
        $this->assign('data',$data);
        $this->display('Admin/detail2');
    }
    public function yiTongGuo($page=1){
        $con=M('active');
        $all=$con->count();
        $data=$con->page($page,10)->order('id desc')->where('state=1')->select();
        $allPage=ceil($all/10);
        if($page>$allPage || $page<=0) $this->error('页面不存在!');
        $this->assign('data',$data);
        $this->assign('allPage',$allPage);
        $this->assign('page',$page);
        $this->display('Admin/yiTongGuo');
    }
    public function yiBoHui($page=1){   
        $con=M('active');
        $all=$con->count();
        $data=$con->page($page,10)->order('id desc')->where('state=2')->select();
        $allPage=ceil($all/10);
        if($page>$allPage || $page<=0) $this->error('页面不存在!');
        $this->assign('data',$data);
        $this->assign('allPage',$allPage);
        $this->assign('page',$page); 
        $this->display('Admin/yiBoHui');
    }
    public function getNum()
    {
        $con=M('active');
        $count=$con->where('state=0')->count();
        echo $count;
    }
}