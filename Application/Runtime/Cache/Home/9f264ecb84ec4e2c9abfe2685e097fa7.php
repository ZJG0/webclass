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
        <span class="glyphicon glyphicon-volume-up"></span>实验大纲
    </div>
</div>
<div class="container-fluid">
    <div class="row" style="margin-top: 30px;">
        <div class="col-xs-3"></div>
        <div class="col-xs-3"></div>
    </div>
        <button  class="btn btn-default" onclick="history.go(-1)">返 回</button>
    <div class="container" style="margin-top: 30px;padding-bottom: 20px;border: 1px solid #eee;box-shadow: 1px 1px 1px #eee;">
    <p>英文名字：The technology of software testing</p>
        <p>课程编号：</p>
        <p>课程学分： </p>
        <p>实验课性质：</p>
        <p>实验学时： 16</p>
        <p>先修或同修课程：数据库原理、数据结构与算法、软件工程</p>
        <p>适用专业： 软件工程</p>
        <h4>一、制定实验教学大纲的依据  </h4>
        <p>《软件测试技术》实验教学大纲依据《软件测试技术》课程教学大纲而制定。</p>
        <h4>二、本实验课程的目的</h4>
        <p class="shousuojin">本课程是与软件测试技术课程相配套的实训课程，其目的和任务是在软件测试理论指导下，使学生掌握软件测试的技术
        和常用工具的使用，改变对软件测试的错误认识，对测试能进行有效的管理，最终能制定软件测试计划，设计测试用例，进
        行测试结果的分析和报告的书写。并使学生能够通过完成项目工作任务，培养技术的运用能力，协同合作工作能力以及沟通交
        流的能力，以提高职业的综合素质。</p>
        <dl><dt>
        <h4>三、本实验课程的实验内容及具体要求 </h4>
        <dd><h5>（一）实验内容</h5>
        <ul>
            <ol>
                <li>掌握一定的测试工具，比如测试管理工具、功能测试工具、性能测试工具、白盒测试工具等。同时通过实践，体会测试工具搭建测试环境的过程。</li>
                <li>掌握测试用例的设计方法，主要是掌握单元测试用例的设计。</li>
                <li>掌握测试的执行过程，了解相关工具的使用。</li>
                <li>掌握白盒测试用例的设计。</li>
                <li>理解自动化测试的执行过程。</li>
            </ol>
        </ul>
        <dd><h5>（二）对学生能力的培养</h5>
        <ul>
            <ol>
                <li>通过安排适当的软件测试实验，加深学生对软件测试的基本概念、基本理论和基本方法等的理解，使学生真正掌握几种比较常用的测试工具和测试方法，
                为进一步的学习和工作打下坚实的基础。</li>
                <li>通过软件测试实验，培养学生的专业实践能力，锻炼、培养学生的协作精神和创新能力。</li>
            </ol>
        </ul>
        </dl>
        <dl><dt>
        <h4>四、实验成绩考核及评分办法  </h4>
        <dd><p>根据实验完成情况和实验报告评分，计入学生的实验成绩，占学生课程成绩的20%。</p>
        </dl>
        <h4>五、实验教材、参考资料  </h4>
        <ul>
            <ol>
                <li>自编实验指导书</li>
                <dl><dt>
                <li>参考教材：</li>
                <dd><p>（1）《软件测试技术》（第一版），王英龙、张伟、杨梅红主编，清华大学出版社2009.8</p>
                <dd><p>（2）《软件测试使用指南》 林宁 孟庆余主编    清华大学出版社 2004.10.8</p>
                <dd><p>（3）《软件测试技术概论》 古乐 史九林 编著   清华大学出版社 2004.4.8</p>
                </dl>
                <dl><dt>
                <li>实验环境：</li>
                <dd><p> Testdirect 、 cppunit 、  Loadrunner 、 QTP 、 Logiscope </p>
                </dl>
            </ol>
        </ul>
        <h4>六、实验项目的设置及学时分配 </h4>
        <p>实验总学时：16 </p>
        <table border="1" width="800" cellspacing="0">
        <caption>实验名称、内容与学时分配表</caption>
            <tr>
                <th>序号</th>
                <th>实验名称</th>
                <th>实验内容</th>
                <th>学时</th>
            </tr>
            <tr>
                <td>1</td>
                <td>软件测试环境的搭建</td>
                <td>自己动手搭建测试用环境。</td>
                <td>3</td>
            </tr>
            <tr>
                <td>2</td>
                <td>白盒测试</td>
                <td>使用白盒测试工具进行单元测试、集成测试和系统测试的测试用例的设计和执行。</td>
                <td>3</td>
            </tr>
            <tr>
                <td>3</td>
                <td>静态分析测试</td>
                <td>练习静态测试的过程和方法。</td>
                <td>2</td>
            </tr>
            <tr>
                <td>4</td>
                <td>功能测试</td>
                <td>练习使用功能测试工具进行功能测试的过程。</td>
                <td>3</td>
            </tr>
            <tr>
                <td>5</td>
                <td>性能测试</td>
                <td>练习使用性能测试工具进行性能测试的过程。</td>
                <td>3</td>
            </tr>
            <tr>
                <td>6</td>
                <td>缺陷管理</td>
                <td>练习使用缺陷管理工具进行缺陷提交和管理的过程。</td>
                <td>2</td>
            </tr>
        </table>
<!--     <object width="1140" height="626" data="/webzuoye/Public/pdf/shiyandagang.pdf" align="center" >
</object> -->
    </div>
</div>


</body>
</html>