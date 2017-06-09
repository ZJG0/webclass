<?php
namespace Home\Controller;
use Think\Controller;


class CheckController extends Controller
{	
	function _initialize()     		 //管理员权限
	{
		if(session('?username')){
				
			}else{
				$this->redirect('./index/');
			}
}
}