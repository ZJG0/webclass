<?php
namespace Home\Controller;
use Think\Controller;


class CheckAdminController extends Controller
{	
	function _initialize()     		 //管理员权限
	{
		if(session('?admin')){
				
			}else{
				$this->redirect('./index/');
			}
}
}