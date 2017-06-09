<?php
return array(
    'DB_TYPE'=>'mysql',
    'DB_HOST'=>'localhost',
    'DB_NAME'=>'kexie',
    'DB_USER'=>'root',
    'DB_PWD'=>'123456',
    'DB_PREFIX'=>'rs_',
    'DB_CHARSET'=>'UTF8',
    'SESSION_AUTO_START' => true,  //开启session
    // 'SESSION_PREFIX' => 'se_',   //session前缀
    'URL_MODEL' => '2',      //url重写
    'URL_CASE_INSENSITIVE' =>true,   //url不区分大小写
    'SHOW_PAGE_TRACE'=> false, //调试
    // 'TMPL_EXCEPTION_FILE'   =>  MODULE_PATH.'View/error/404.html',// 异常页面的模板文件
    //     //默认错误跳转对应的模板文件
    // 'TMPL_ACTION_ERROR' => MODULE_PATH.'View/error/tiaozhuan.html',
    // //默认成功跳转对应的模板文件
    // 'TMPL_ACTION_SUCCESS' =>  MODULE_PATH.'View/error/tiaozhuan.html',
);
