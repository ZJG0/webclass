<?php
namespace Home\Controller;
use Think\Controller;


class CheckUserController extends Controller
{	
	function _initialize()     		 //管理员权限
	{
		if(session('?user')){
				
			}else{
				$this->redirect('./index/');
			}
}
}