<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/webzuoye/Public/js/ie8-responsive-file-warning.js"></script>
    <script type="text/javascript" src="/webzuoye/Public/js/html5shiv.js"></script>
    <script type="text/javascript" src="/webzuoye/Public/js/respond.min.js"></script>
    <![endif]-->
    <title></title>
    <link href="/webzuoye/Public/css/css.css" rel="stylesheet" type="text/css"/>
    <link href="/webzuoye/Public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <style>
        .weizhi{height:44px;width:100%;background-color: #F1F1F1;}
        .weizhi_title{white-space:nowrap;height:44px;width:100px;padding:0 10px 0;background-color: #fff;cursor: pointer;text-align: center;line-height: 44px;}
    </style>
</head>
<body>
<div class="weizhi">
    <div class="weizhi_title">
        <span class="glyphicon glyphicon-volume-up"></span>课程大纲
    </div>
</div>
<div class="container-fluid">
    <div class="row" style="margin-top: 30px;">
        <div class="col-xs-3"></div>
        <div class="col-xs-3"></div>
    </div>
        <button  class="btn btn-default" onclick="history.go(-1)">返 回</button>
    <div class="container" style="margin-top: 30px;padding-bottom: 20px;border: 1px solid #eee;box-shadow: 1px 1px 1px #eee;">
    <font size = 三号><b><center>《软件测试基础》教学大纲</center></b></font>
    <ul><font size="小四"></font>
    <li>课程编码：JS020055</li><br>
    <li>课程名称：软件测试基础</li><br>     
    <li>课程类型：软件工程专业必修课</li><br>
    <li>适用对象：软件工程、计算机科学与技术等计算机类专业本科生</li><br>
    <li>先修课程：离散数学、数据结构、程序设计基础、面向对象程序设计、web</li><br>
    <li>开发基础、数据库原理及应用、软件工程</li><br>
    <li>总学时：48  （授课学时：30   实验学时：18）</li><br>
    <li>学分：3</li><br>
    </ul>
    <dl>
    <dt><font size="四号"><b>一、课程的性质和任务</b></font></h1>
    <dd>&nbsp;&nbsp;&nbsp;&nbsp;
    <font size="小四">
    《软件测试基础》是软件工程专业的专业必修课，是一门对工程实践要求极高，对学生动手能力要求极强的软件工程核心课程。本课程在软件工程本科专业
    人才培养体系中占有重要的地位及核心作用。<br/>
    &nbsp;&nbsp;&nbsp;&nbsp;软件测试是保证软件可靠性和软件质量的重要手段，对软件开发和维护有很强的针对性和实用性。本课程的宗旨是培养高素质、专业化的测试人才，让学生对软件整体质量有一个完整认识和总体把握。讲授内容从系统性、实用性和规范性出发，通过课程学习使学生掌握软件测试的基本概念，掌握软件全生命周期测试方法，掌握软件质量度量和评测方法，掌握软件测试的一般流程、常用技术和主要方法，以及针对不同应用软件测试要求。通过本课程的学习，使学生真正了解建立测试环境、 制定软件测试计划、 设计测试用例、 执行测试、 进行测试结果的分析、 编写测试文档、 选择使用测试工具等的方法和过程，使学生具备测试技术和测试管理的基本能力，并能够独立承担实施测试项目。
    </font><br>
    </dd>
    <dt><font size ='四号'><b>二、课程教学内容的基本要求、重点和难点及学时分配</b></font></dt><br>
    （1）理论教学设计
    <center>
    <table border="1"> 
    <caption></caption>
    
    <tr>
        <th><font size="小四">教&nbsp;&nbsp;学&nbsp;&nbsp;内&nbsp;&nbsp;容</font></th>
        <th><font size="小四">基&nbsp;&nbsp;本&nbsp;&nbsp;要&nbsp;&nbsp;求</font></th>
        <th><font size="小四">重&nbsp;&nbsp;点&nbsp;&nbsp;难&nbsp;&nbsp;点</font></th>
        <th><font size="小四">学&nbsp;&nbsp;时&nbsp;&nbsp;分&nbsp;&nbsp;配</font></th>
    </tr>

    <tr>
        <td ><font size="小四">1.软件工程回顾</font></td>
        <td ><font size="小四">&nbsp;&nbsp;这部分内容主要是对本课程以及本课程的主要相关知识进行介绍，包括：软件的定义、软件危机及产生原因、软件工程概念、软件开发模型等。通过介绍引入软件测试在软件工程开发过程中的位置与地位，让学生了解软件的开发与测试过程，了解测试的重要性。</font></td>
        <td><font size="小四"></font></td>
        <td><font size="小四">2</font></td>
    </tr>

    <tr>
        <td><font size="小四">2.软件测试概述</font></td>
        <td><font size="小四">这部分内容主要是讲解软件测试模型、不同种类软件的不同测试特点、测试环境的搭建要求、软件测试的国内外现状、软件测试的历史和演变、软件测试的定义、软件测试生命周期。软件测试人员必须具备的职业素质。</font></td>
        <td><font size="小四">重点：掌握软件测试的定义、软件测试模型。难点：软件测试生命周期的概念。</font></td>
        <td><font size="小四">4</font></td>
    </tr>

    <tr>
        <td><font size="小四">3.软件测试方法的分类与基本概念</font></td>
        <td><font size="小四">这部分内容主要是讲解功能测试、性能测试的概念和应用，界面测试、易用性测试、安装测试、兼容性测试、回归测试、冒烟测试、随机测试的含义。黑盒测试和白盒测试的概念。
        </font></td>
        <td><font size="小四">重点：掌握功能测试、性能测试的概念；掌握软件测试的单元测试、集成测试、系统测试与验收测试的概念。难点：回归测试、界面测试、易用性测试的测试方法。
        </font></td>
        <td><font size="小四">3</font></td>
    </tr>

    <tr>
        <td><font size="小四">4.软件静态测试</font></td>
        <td><font size="小四">这部分主要讲解软件静态测试的概念、静态代码分析方法、静态测试工具的选择与应用</font></td>
        <td><font size="小四">重点：静态测试的代码分析方法</font></td>
        <td><font size="小四">1</font></td>
    </tr>

    <tr>
        <td><font size="小四">5.软件测试过程</font></td>
        <td><font size="小四">这部分主要讲解单元测试、集成测试、系统测试、验收测试过程。讲解测试计划、测试需求分析、测试用例设计过程。</font></td>
        <td><font size="小四">重点：单元测试、测试需求分析、测试用例设计难点：测试需求分析、测试用例设计</font></td>
        <td><font size="小四">2</font></td>
    </tr>

    <tr>
        <td><font size="小四">6.白盒测试技术</font></td>
        <td><font size="小四">这部分内容主要是讲解白盒测试技术中的逻辑覆盖法、路径覆盖法、循环测试方法、程序插桩技术、变体分析技术、故障插入技术等。</font></td>
        <td><font size="小四">重点：逻辑覆盖法与路径覆盖法难点：路径覆盖</font></td>
        <td><font size="小四">6</font></td>
    </tr>

    <tr>
        <td><font size="小四">7.黑盒测试技术</font></td>
        <td><font size="小四">这部分内容主要是讲解黑盒测试方法中的等价类划分法、边界值分析法、判断表法、因果图法、错误推测法、场景法、功能图法等。</font></td>
        <td><font size="小四">重点：等价类划分、判断表与因果图法、场景法难点：场景法</font></td>
        <td><font size="小四">6</font></td>
    </tr>

    <tr>
        <td><font size="小四">8.功能测试</font></td>
        <td><font size="小四">这部分主要讲解自动化的功能测试过程、测试工具的选择与使用。通过案例实现功能测试用例的设计、脚步开发与测试过程。</font></td>
        <td><font size="小四">重点：测试脚本设计难点：测试的自动化实现</font></td>
        <td><font size="小四">2</font></td>
    </tr>

    <tr>
        <td><font size="小四">9.性能测试</font></td>
        <td><font size="小四">这部分主要讲解自动化的性能测试过程、测试工具的选择与使用。通过案例实现性能测试用例的设计、场景的设定与测试结果分析。</font></td>
        <td><font size="小四">重点：性能测试场景设计难点：测试结果分析</font></td>
        <td><font size="小四">2</font></td>
    </tr>

    <tr>
        <td><font size="小四">10.缺陷提交与测试评价</font></td>
        <td><font size="小四">这部分主要讲解软件缺陷的概念、软件缺陷描述与分类、软件缺陷流程管理、软件缺陷统计、软件缺陷报告、测试最终评价</font></td>
        <td><font size="小四">重点：软件缺陷的概念、软件缺陷描述与分类、软件缺陷报告难点：软件缺陷报告</font></td>
        <td><font size="小四">2</font></td>
    </tr>
    </table>
    </center>
    <font size='四号'>（2）实验教学设计</font> 
    <center>
    <table border="1"> 
    <caption></caption>
    
    <tr>
        <th><font size="小四">序&nbsp;号</font></th>
        <th><font size="小四">实&nbsp;验&nbsp;名&nbsp;称</font></th>
        <th><font size="小四">实&nbsp;验&nbsp;内&nbsp;容</font></th>
        <th><font size="小四">学&nbsp;时</font></th>
    </tr>

    <tr>
        <td ><font size="小四">1</font></td>
        <td ><font size="小四">&nbsp;&nbsp;静态代码测试</font></td>
        <td><font size="小四">掌握静态代码分析的工具（代码缺陷分析CppCheck、Prefast、Splin等）与分析方法。</font></td>
        <td><font size="小四">3</font></td>
    </tr>

    <tr>
        <td><font size="小四">2</font></td>
        <td><font size="小四">单元测试</font></td>
        <td><font size="小四">掌握使用单元测试工具（CppUnit、JUnit等）设计测试用例并对程序进行测试的方法。</font></td>
        <td><font size="小四">3</font></td>
    </tr>

    <tr>
        <td><font size="小四">3</font></td>
        <td><font size="小四">覆盖测试
        </font></td>
        <td><font size="小四">掌握使用白盒测试中的覆盖测试技术，使用覆盖测试工具（GCov等）设计测试用例并对程序进行测试的方法。
        </font></td>
        <td><font size="小四">3</font></td>
    </tr>

    <tr>
        <td><font size="小四">4</font></td>
        <td><font size="小四">界面测试</font></td>
        <td><font size="小四">掌握使用界面测试(Gerd)工具进行界面测试的方法。</font></td>
        <td><font size="小四">3</font></td>
    </tr>

    <tr>
        <td><font size="小四">5</font></td>
        <td><font size="小四">自动化功能测试</font></td>
        <td><font size="小四">了解使用自动化功能测试工具进行程序功能测试的方法。</font></td>
        <td><font size="小四">2</font></td>
    </tr>

    <tr>
        <td><font size="小四">6</font></td>
        <td><font size="小四">自动化功能测试</font></td>
        <td><font size="小四">了解使用自动化功能测试工具进行程序功能测试的方法。</font></td>
        <td><font size="小四">2</font></td>
    </tr>

    <tr>
        <td><font size="小四">7</font></td>
        <td><font size="小四">缺陷提交与报告分析</font></td>
        <td><font size="小四">手工的或者使用缺陷管理工具(Mantis Testlink等)进行缺陷的提交与报告分析。</font></td>
        <td><font size="小四">2</font></td>
    </tr>
    </table>
    </center>
    <dt><font size ='四号'><b>三、能力培养要求</b></font></dt>
    <dd>&nbsp;&nbsp;&nbsp;&nbsp;
    <font size="小四">
    以上教学内容，在教学中应把握其重点。理论和实验相结合，使学生在学习测试原理的同时掌握多种测试工具的使用。主要培养学生对软件测试进行有效的管理的能力，制定软件测试计划的能力，设计测试用例的能力，进行测试结果的分析和测试报告书写的能力。
    </font>
    </dd>
    <dt><font size ='四号'><b>四、教材与参考书目</b></font></dt>
    <font size="小四">
        &nbsp;&nbsp;[1] 现代软件测试基础，惠普国际软件人才及产业基地，清华大学出版社<br>
        &nbsp;&nbsp;[2] 软件测试技术及用例设计实训，魏娜娣，李文斌著, 清华大学出版社<br>
        &nbsp;&nbsp;[3] 软件测试技术大全，陈能技编著，人民邮电出版社<br>
        &nbsp;&nbsp;[4] 软件测试，佟伟光主编，人民邮电出版社<br>
        &nbsp;&nbsp;[5] 软件测试技术，王英龙，张伟，杨美红主编，清华大学出版社<br>
        &nbsp;&nbsp;[6] 软件测试实践教程，蔡建平编著, 清华大学出版社<br>
    </font>

    <dt><font size ='四号'><b>五、考核形式</b></font></dt>
    <font size="小四">
    &nbsp;&nbsp;期终考试成绩+平时成绩+实验成绩<br>
    &nbsp;&nbsp;其中，期终考试成绩占70%，平时作业及实验成绩占30%。
    </font>

    <dt><font size ='四号'><b>六、有关说明</b></font></dt>
    <font size="小四">
    &nbsp;&nbsp;&nbsp;&nbsp;本课程主要针对学生能力的培养，在学生学习软件测试课程的同时进行。一方面，老师在讲授软件测试课程理论知识的同时，结合指定教材给学生演示相关的软件测试例子，给学生感性的认识；同时，培养学生在课后通过互联网资源了解各种软件测试工具对软件测试技术与方法的支持与使用方法。
    </font>

    <dt><font size ='四号'><b>七、课程建议及改革摘要</b></font></dt>
    <font size="小四">
    &nbsp;&nbsp;&nbsp;&nbsp;本课程的内容繁多，涉及到的概念比较复杂。本课程一定要注重上机实践课的质量。
    </font>
    </dl>
    <br>
    <p align="right"><font size="小四">
    修 订 人： 马晓娜&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
    审 核 人：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
    批 准 人：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
    修订日期：2015年10月1日<br>
    </font>
    </p>
    <!-- <object width="1140" height="626" data="/webzuoye/Public/pdf/dagang.pdf" align="center" >
</object> -->
    </div>
</div>


</body>
</html>