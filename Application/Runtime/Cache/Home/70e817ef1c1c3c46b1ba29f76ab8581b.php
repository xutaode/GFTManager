<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Matrix Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/Public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/Public/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="/Public/css/public.css" />
    <link rel="stylesheet" href="/Public/css/account_mgr.css" />
    <link rel="stylesheet" href="/Public/css/fullcalendar.css" />
    <link rel="stylesheet" href="/Public/css/matrix-style.css" />
    <link rel="stylesheet" href="/Public/css/matrix-media.css" />
    <link href="/Public/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="/Public/css/jquery.gritter.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<!--Header-part-->
<div id="header">
    <h1><a href="<?php echo U('index/index');?>">Matrix Admin</a></h1>
</div>
<!--close-Header-part-->

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
                <li class="divider"></li>
                <li><a href="login.html"><i class="icon-key"></i> 退出</a></li>
            </ul>
        </li>
        <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
                <li class="divider"></li>
                <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
                <li class="divider"></li>
                <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
                <li class="divider"></li>
                <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
            </ul>
        </li>
        <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
        <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
    </ul>
</div>

<!--start-top-serch-->
<div id="search">
    <input type="text" placeholder="Search here..."/>
    <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
        <li class="active"><a href="<?php echo U('index/index');?>"><i class="icon icon-home"></i> <span>欢迎登陆</span></a> </li>
        <li class="submenu"> <a href="#"><i class="icon icon-signal"></i> <span>账户管理</span></a>
            <ul>
                <li><a href="<?php echo U('AccountManage/index');?>">商户信息</a></li>
                <li><a href="<?php echo U('AccountManage/CommercialInfo');?>">账户资料</a></li>
                <li><a href="<?php echo U('AccountManage/ChangePwd');?>">修改密码</a></li>
                <li><a href="<?php echo U('AccountManage/OperSet');?>">操作员设置</a></li>
            </ul>
        </li>
        <li class="submenu"> <a href="#"><i class="icon icon-inbox"></i> <span>我的服务</span></a>
            <ul>
                <li><a href="<?php echo U('MyServer/AccountInquiry');?>">账户查询</a></li>
                <li><a href="<?php echo U('MyServer/OnlineRecharge');?>">在线充值</a></li>
                <li><a href="<?php echo U('MyServer/SummaryBill');?>">汇总账单</a></li>
            </ul>
        </li>
        <li class="submenu"><a href="#"><i class="icon icon-th"></i> <span>交易管理</span></a>
            <ul>
                <li><a href="<?php echo U('TransManage/TransDetail');?>">交易明细</a></li>
            </ul>
        </li>
        <li class="submenu"><a href="#"><i class="icon icon-fullscreen"></i> <span>结算管理</span></a>
            <ul>
                <li><a href="<?php echo U('SettleManage/SetleAplication');?>">结算申请</a></li>
                <li><a href="<?php echo U('SettleManage/SetleLog');?>">结算记录</a></li>
            </ul>
        </li>
        <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>代收代付</span> <span class="label label-important">3</span></a>
            <ul>
                <li><a href="<?php echo U('IOAgent/CollectManage');?>">代收管理</a></li>
                <li><a href="<?php echo U('IOAgent/PayManage');?>">代付管理</a></li>
                <li><a href="form-wizard.html">Form with Wizard</a></li>
            </ul>
        </li>
        <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>按钮 &amp; 图标</span></a></li>
        <li><a href="interface.html"><i class="icon icon-pencil"></i> <span>元素</span></a></li>
        <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">5</span></a>
            <ul>
                <li><a href="index2.html">Dashboard2</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="calendar.html">Calendar</a></li>
                <li><a href="invoice.html">Invoice</a></li>
                <li><a href="chat.html">Chat option</a></li>
            </ul>
        </li>
        <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Error</span> <span class="label label-important">4</span></a>
            <ul>
                <li><a href="error403.html">Error 403</a></li>
                <li><a href="error404.html">Error 404</a></li>
                <li><a href="error405.html">Error 405</a></li>
                <li><a href="error500.html">Error 500</a></li>
            </ul>
        </li>
        <li class="content"> <span>Monthly Bandwidth Transfer</span>
            <div class="progress progress-mini progress-danger active progress-striped">
                <div style="width: 77%;" class="bar"></div>
            </div>
            <span class="percent">77%</span>
            <div class="stat">21419.94 / 14000 MB</div>
        </li>
        <li class="content"> <span>Disk Space Usage</span>
            <div class="progress progress-mini active progress-striped">
                <div style="width: 87%;" class="bar"></div>
            </div>
            <span class="percent">87%</span>
            <div class="stat">604.44 / 4000 MB</div>
        </li>
    </ul>
</div>
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"><a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">账户管理</a><a href="#" class="current">账户信息</a></div>
    </div>
    <div class="container-fluid">
        <div class="tabs_con">
                <div class="main_con">
                    <div class="big_title">
                        <div class="tool_bar"><span class="b_btn" onclick="ecssdone1('/merchant/568201.dow')">确认修改</span></div>
                        <h3>修改密码</h3>
                    </div>

                    <div class="col2">
                        <input type="hidden" id="ACCOUNT" name="ACCOUNT" value="00000000000381">
                        <input type="hidden" id="USER_ID" name="USER_ID" value="operator05">
                        <table>
                            <tbody><tr>
                                <th><span class="require">&nbsp;</span>操作员账户：</th>
                                <td>海南奇楠沉香交易中心有限公司</td>
                            </tr>
                            <tr>
                                <th><span class="require">*</span>当前登录密码：</th>
                                <td>
                                    <input type="hidden" name="old_pwd" id="old_pwd" class="text_input">
                                    <script type="text/javascript">pgeditor.generate();</script><embed id="_ocx_password" maxlength="16" input_2="[\s\S]*" input_3="[\s\S]{6,16}" edittype="0" type="application/x-pass-guard" tabindex="2" class="ocx_style" input_1013="FormSubmit()" input_1009="document.getElementById('_ocx_password01').focus()">
                                </td>
                            </tr>
                            <tr>
                                <th><span class="require">*</span>新登录密码：</th>
                                <td>
                                    <input type="hidden" name="new_pwd" maxlength="16" id="new_pwd" class="text_input">
                                    <script type="text/javascript">pgeditor01.generate()</script><embed id="_ocx_password01" maxlength="16" input_2="[\s\S]*" input_3="[\s\S]{6,16}" edittype="0" type="application/x-pass-guard" tabindex="2" class="ocx_style" input_1013="FormSubmit()" input_1009="document.getElementById('_ocx_password02').focus()">
                                </td>
                            </tr>
                            <tr>
                                <th><span class="require">*</span>确认密码：</th>
                                <td>
                                    <input type="hidden" name="confirm_pwd" id="confirm_pwd" maxlength="16" class="text_input">
                                    <script type="text/javascript">pgeditor02.generate()</script><embed id="_ocx_password02" maxlength="16" input_2="[\s\S]*" input_3="[\s\S]{6,16}" edittype="0" type="application/x-pass-guard" tabindex="2" class="ocx_style" input_1013="FormSubmit()" input_1009="document.getElementById('auth_code').focus()">
                                </td>
                            </tr>
                            <tr>
                                <th><span class="require">*</span>验证码：</th>
                                <td style="text-align: left;">
                                    <div class="pas_style">
                                        <input type="text" class="text_input" name="auth_code" id="auth_code" style="width:100px;" onpaste="return false">
                                        <img id="randImage" src="/merchant/js/imageshowImges.jsp" align="absmiddle" style="margin:5px 5px 0 0;" onclick="loadimage()">
                                        <!-- <a href="javascript:loadimage();">看不清，换一张。</a> -->
                                    </div>
                                </td>
                            </tr>
                            </tbody></table>
                    </div>
                </div>
            </div>
        </div>
    </div>