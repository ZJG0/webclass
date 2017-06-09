<?php 

 //include THINK_PATH.'Common/extends.php';
	/*	互评函数。
	*	参数：要排序的数组
	*	返回值：排好序的二维数组
	*	适用范围：同一学校的参赛选手不超过总数的1/2;
	*/
	function randdata($data){ 
    $num=0;     
		$count=count($data);
		go:
   		shuffle($data);   //打乱数组
   		$arr=array();
         $arr2=array();
   		for ($i=0; $i <$count ; $i++) { 
   			for($j=0;$j<$count;$j++){
   				if($i==$j) continue;								//不能评自己
   				if($data[$j]['school']!=$data[$i]['school']){
   					$tem=array('uno'=>$data[$i]['no'],'headno'=>$data[$j]['no']);	//防止互评的出现
   					if(!in_array($tem,$arr)){
   						  		foreach ($arr as $key => $value) {
   									if($data[$j]['no']==$value['uno'])
   										continue 2;						//跳出两层
   								}	
   						$arr[]=array('uno'=>$data[$j]['no'],
                                  'headno'=>$data[$i]['no'],
                                 );
                     $arr2[]=array('uno'=>$data[$j]['no'],
                                   'uname'=>$data[$j]['groupname'],
                                   'ucall'=>$data[$j]['headcall'],
                                   'uschool'=>$data[$j]['school'],
                                  'headno'=>$data[$i]['no'],
                                  'hname'=>$data[$i]['groupname'],
                                  'hcall'=>$data[$i]['headcall'],
                                  'hschool'=>$data[$i]['school'],
                                 );
   						break;
   					}
   				}
   			}
   		}	
   		$arrconut=count($arr);					
   		if($arrconut!=$count){
                $num++;
                if($num>30){
                  //dump($count);
                    return false;
                }else{
                         goto go; 
                         }  //防止有空的数据
      }
   		return $arr2;
	}


    /*
     *删除文件函数 
     *
     * false代表不删除目录
     *
     */
  
  function delDirAndFile($path, $delDir = FALSE) {  
    //$path= iconv('utf-8' , 'gbk' ,$path);
    $handle = opendir($path);
    if ($handle) {
        while (false !== ( $item = readdir($handle) )) {
            if ($item != "." && $item != "..")
                is_dir("$path/$item") ? delDirAndFile("$path/$item", $delDir) : unlink("$path/$item");
        }
        closedir($handle);
        if ($delDir)
            return rmdir($path);
    }else {
        if (file_exists($path)) {
            return unlink($path);
        } else {
            return FALSE;
        }
    }
}

/*  
 *读取目录文件 
 * 最多可有一个子目录
 *返回 文件二维数组
 */
function reddir($dir){  
  $dir=iconv('utf-8' , 'gb2312' ,$dir); //汉字转码，否则不认识！！    
  $data=scandir("$dir");
      $arr=array();
      $arr2=array();
      foreach($data as $file) {  
        if(is_dir($dir.$file) && $file!='.' && $file!='..'){ 
            $data2=scandir($dir.$file);
            foreach ($data2 as  $file2) {
            $file1 = iconv('gb2312' , 'utf-8' , $file);
            $file2= iconv('gb2312' , 'utf-8' , $file2);
            if($file2!='.' && $file2!='..')    
            $arr2[][0]=$file1."/".$file2;
            }   
        }else{
      $data= iconv('gb2312' , 'utf-8' , $file );  
      if($data!='.' && $data!='..')    
      $arr[][0]=$data;
       }
       }
    $newarr = array_merge($arr,$arr2);
    return $newarr;
}



 /** 
     * 解压文件 
     * 需开启配置 php_zip.dll 
     * filename 要解压的文件全路径 
     * path 解压文件后保存路径 
     * id   要解压的文件ID 
     * phpinfo(); 
     */  
    function get_zip_originalsize($filename, $path, $id=0) {  
        //先判断待解压的文件是否存在  
        $filename = iconv("utf-8", "gb2312", $filename);  
        $path = iconv("utf-8", "gb2312", $path);  
        if (!file_exists($filename)) {  
            die("文件 $filename 不存在！"); 
           return false; 
        }  
      //  $starttime = explode(' ', microtime()); //解压开始的时间  
        //将文件名和路径转成windows系统默认的gb2312编码，否则将会读取不到  
       
        //打开压缩包  
        $resource = zip_open($filename);  
        $i = 1;  
        //遍历读取压缩包里面的一个个文件  
        while ($dir_resource = zip_read($resource)) {  
            //如果能打开则继续  
            if (zip_entry_open($resource, $dir_resource)) {  
                //获取当前项目的名称,即压缩包里面当前对应的文件名  
                $file_name = $path.zip_entry_name($dir_resource);  
                //以最后一个“/”分割,再用字符串截取出路径部分  
                $file_path = substr($file_name, 0, strrpos($file_name, "/"));  
                //如果路径不存在，则创建一个目录，true表示可以创建多级目录  
                if (!is_dir($file_path)) {  
                    mkdir($file_path, 0777, true);  
                }  
                //如果不是目录，则写入文件  
                if (!is_dir($file_name)) {  
                    //读取这个文件  
                    $file_size = zip_entry_filesize($dir_resource);  
                    //最大读取6M，如果文件过大，跳过解压，继续下一个  
                    if ($file_size < (1024 * 1024 * 200)) {  
                        $file_content = zip_entry_read($dir_resource, $file_size);  
                        file_put_contents($file_name, $file_content);  
                    } else {  
                       // echo "<p> ".$i++." 此文件已被跳过，原因：文件过大， -> ".iconv("gb2312", "utf-8", $file_name)." </p>";  
                      return false;
                    }  
                }  
                //关闭当前  
                zip_entry_close($dir_resource);  
            }  
        }  
        //关闭压缩包  
        zip_close($resource); 
        return true; 
        //$endtime = explode(' ', microtime()); //解压结束的时间  
       // $thistime = $endtime[0] + $endtime[1] - ($starttime[0] + $starttime[1]);  
       // $thistime = round($thistime, 3); //保留3为小数  
        //echo "<p>解压完毕！，本次解压花费：$thistime 秒。</p>演示地址：/".$path;  
    } 

/*
 *生成excel表格
 *参数：表头数组，内容数组，文件名
 *
 */

function exc($tableheader,$data,$filename="文件"){
        import("Org.PHPExcel.Classes.PHPExcel");            //   反斜杠代表当前引入的目录
        $excel = new \PHPExcel();
         $excel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
        $excel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
        $excel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
        $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
          $excel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
        $excel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
        $excel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
        $excel->getActiveSheet()->getColumnDimension('H')->setWidth(20);
        $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(20);
        $excel->getDefaultStyle()->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $letter = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL','AM','AN','AO');
        //填充表头信息
        for($i = 0;$i < count($tableheader);$i++) {
        $excel->getActiveSheet()->setCellValue("$letter[$i]1","$tableheader[$i]");
        }
        //填充表格信息
        for ($i = 2;$i <= count($data) + 1;$i++) {
        $j = 0;
        foreach ($data[$i - 2] as $key=>$value) {
        $excel->getActiveSheet()->setCellValue("$letter[$j]$i","$value");
        $j++;
        }
        }
        $excel->getActiveSheet()->setTitle('表1');
        //创建Excel输入对象
        ob_end_clean();                                   //清除缓存  解决乱码问题！！！！
        $write = new \PHPExcel_Writer_Excel5($excel);
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
        header("Content-Type:application/force-download");
        header("Content-Type:application/vnd.ms-execl");
        header("Content-Type:application/octet-stream");
        header("Content-Type:application/download");;
        header('Content-Disposition:attachment;filename='.$filename.'.xls');
        header("Content-Transfer-Encoding:binary");
        $write->save('php://output');
}



/*
 *压缩文件
 *文件以以为数组为参数
 *
 *
 */
function filezip($datalist,$name='文件.zip'){
    $filename=iconv('utf-8', 'gbk',$name); //最终生成的文件名（含路径） 
    if(file_exists($filename)){ 
        unlink($filename); 
    } 
    //重新生成文件 
    $zip=new ZipArchive(); 
    if($zip->open($filename,ZIPARCHIVE::CREATE)!==TRUE){ 
        exit('无法打开文件，或者文件创建失败'); 
    } 
    //$datalist=array('ss/desert.jpg','ss/city.jpg'); 
    foreach($datalist as $val){ 
       $val=iconv('utf-8','gbk', $val); 
        if(file_exists($val)){ 
            $zip->addFile($val); 
           // echo $val;
        } 
        //echo $val;
    } 
    $zip->close();//关闭 
    if(!file_exists($filename)){ 
        exit('无法找到文件'); //即使创建，仍有可能失败 
    }         
}

//拷贝文件夹函数，每次只拷贝一个文件夹
function Xcopy($src,$dst)   // 原目录，复制到的目录
{
    $handle = opendir( $src );
    @mkdir( $dst );
    while(false!==($file=readdir($handle))){
        if(($file!='.')&&($file!='..')) {
            if( is_dir($src .'/'.$file)){
                Xcopy( $src . '/' . $file, $dst . '/' . $file );
            }
            else{ 
                copy($src.'/'.$file,$dst.'/'.$file);
            }
        }
    }
    closedir($handle);
}

//url编码函数
function enurl($url="")
{
  $url = rawurlencode($url);
  $a = array("%3A", "%2F", "%40","%28","%29");
  $b = array(":", "/", "@","(",")");
  $url = str_replace($a, $b, $url);
  return $url;
}