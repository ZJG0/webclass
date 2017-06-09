<?php
namespace Home\Controller;
use Think\Controller;

class UserController extends CheckUserController {
    public function index(){ 	
    	  $this->display('User/index');
    }
    public function inform($page=1) //通知公告
    {
        $con=M('inform');
        $all=$con->count();
        $data=$con->page($page,10)->order('id desc')->select();
        $allPage=ceil($all/10);
        if($page>$allPage || $page<=0) $this->error('页面不存在!');
        $this->assign('data',$data);
        $this->assign('allPage',$allPage);
        $this->assign('page',$page);
        $this->display('User/tongZhiGongGao');
    }
    public function informContent($id)
    {
        $con=M('inform');
        $data=$con->where("id=$id")->find();
        $this->assign('data',$data);
        $this->display('User/gongGaoXiangQing');
    }
    public function updataPwd()
    {
        $this->display('User/mima');
    }
    public function savePwd()
    {
        $con=M('user');
        $data['user']=session('user');
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
        $user=session('user');
        $con=M('user');
        $data=$con->where("user='$user'")->getField('unit');
        $this->assign('unit',$data);
        $this->display('User/xiuGaiGeRenXinXi');
    }
    public function saveInfo()
    {
        $con=M('user');
        $data=$con->create();
        $user=session('user');
        $pd=$con->where("user='$user'")->setField('unit',$data['unit']);
        if($pd){
            $this->success('修改成功');
        }else{
            $this->error('修改失败');
        }
    }
    public function creat()	//新建活动
    {
    	$this->display('User/U-createActivity');
    }
    public function saveActive()
    {
        $con=M('active');
        $data=$con->create();
        $data['content']=$_POST['content'];
        $data['act_user']=session('user');
        $data['state']=0;
        $pd=$con->add($data);
        if($pd){
            $this->success('创建成功，请等待审批。');
        }else{
            $this->error('失败');
        }
    }
    public function daiShenPi($page=1)	//待审批
    {
        $user=session('user');
        $con=M('active');
        $all=$con->where("act_user='$user'")->count();
        $allNum=ceil($all/10);
        if ($page<=0 || $page >$allNum) {
            $this->error('页面不存在！');
        }
        $data=$con->page($page,10)->where("act_user='$user' and state=0")->order('id desc')->select();
        $this->assign('page',$page);
        $this->assign('allNum',$allNum);
        $this->assign('data',$data);
    	$this->display('User/U-daiShenPi');
    }
    public function updateActive($id)
    {
        $con=M('active');
        $user=session('user');
        $data=$con->where("act_user='$user' and id='$id' and state=0")->find();
        $this->assign('data',$data);
        $this->display('User/u-xiugaihuodong');
    }
    public function saveUpdate($id)
    {
        $con=M('active');
        $data=$con->create();
        $data['content']=$_POST['content'];
        $data['state']=0;
        $user=session('user');
        $pd=$con->where("id='$id' and act_user='$user'")->save($data);
        if($pd){
            $this->success('修改成功');
        }else{
            $this->error('未修改');
        }
    }
    public function delActive($id)
    {
        $con=M('active');
        $user=session('user');
        $pd=$con->where("act_user='$user' and id='$id'")->delete();
        if($pd){
            $this->redirect('User/daiShenPi');
        }else{
            $this->error('删除失败');
        }
    }
    public function pass($page=1)	//已审批
    {
         $user=session('user');
        $con=M('active');
        $all=$con->where("act_user='$user'")->count();
        $allNum=ceil($all/10);
        if ($page<=0 || $page >$allNum) {
            $this->error('页面不存在！');
        }
        $data=$con->page($page,10)->where("act_user='$user' and state=1")->order('id desc')->select();
        $this->assign('page',$page);
        $this->assign('allNum',$allNum);
        $this->assign('data',$data);
    	$this->display('User/pass');
    }
    public function actContent($id)
    {
        $con=M('active');
        $user=session('user');
        $data=$con->where("act_user='$user' and id='$id'")->find();
        $this->assign('data',$data);
        $this->display('User/actContent');
    }
    public function noPass($page=1)
    {
        $user=session('user');
        $con=M('active');
        $all=$con->where("act_user='$user'")->count();
        $allNum=ceil($all/10);
        if ($page<=0 || $page >$allNum) {
            $this->error('页面不存在！');
        }
        $data=$con->page($page,10)->where("act_user='$user' and state=2")->order('id desc')->select();
        $this->assign('page',$page);
        $this->assign('allNum',$allNum);
        $this->assign('data',$data);
        $this->display('User/noPass');
    }
   public function noPassContent($id)
    {
        $con=M('active');
        $user=session('user');
        $data=$con->where("act_user='$user' and id='$id'")->find();
        $this->assign('data',$data);
        $this->display();
    } 
    public function jiaoan(){    
          $this->display('User/jiaoan');
    }
    public function jiaoshijianjie(){    
          $this->display('User/jiaoshijianjie');
    }
    public function kechengdagang(){    
          $this->display('User/kechengdagang');
    }
    public function kechengjianjie(){    
          $this->display('User/kechengjianjie');
    }
    public function kejian(){    
          $this->display('User/kejian');
    }
    public function shipin(){    
          $this->display('User/shipin');
    }
    public function shiyandagang(){    
          $this->display('User/shiyandagang');
    }
    public function shiyanzhidaoshu(){    
          $this->display('User/shiyanzhidaoshu');
    }
    public function xitidaan(){    
          $this->display('User/xitidaan');
    }
}