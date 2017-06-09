<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
    public function index(){ 	
    	  $this->display('Admin/login');
    }
    public function login()
    {
    	$con=M('user');
    	$userData=$con->create();
    	$userData['pwd']=md5($userData['pwd']);
    	$pd=$con->where($userData)->count();
    	if($pd){
    		switch ($userData['status']) {
    			case '0':
    				session('admin',$userData['user']);
    				echo 0;
    				break;
    			case '1':
    				session('user',$userData['user']);
    				echo 1;
    				break;
    		}
    		
    	}
    }
    public function outLogin()
    {
    	 session('[destroy]');
   		 $this->redirect('./index/');
    }
     
}