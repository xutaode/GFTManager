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
                    <div class="tool_bar"><span class="b_btn" onclick="add_user()">新增操作员</span></div>
                    <h3>操作员设置</h3>
                </div>
                <div class="col1">
                    <input type="hidden" id="MERSTATUS" name="MERSTATUS" value="0">
                    <div id="data"><table cellspacing="0"><thead><tr><th>姓名</th><th>操作员ID</th><th>账户状态</th><th>创建时间</th><th>操作</th></tr></thead><tbody><tr><td>黄滔</td><td>operator05</td><td><em>可用</em></td><td>2017-01-03</td><td><span class="edit_btn" onclick="update(&quot;operator05&quot;,&quot;00000000000381&quot;);">修改</span><span class="disclick_btn">关闭</span>删除</td></tr><tr><td>王文娟</td><td>operator03</td><td><em>可用</em></td><td>2016-12-27</td><td><span class="edit_btn" onclick="update(&quot;operator03&quot;,&quot;00000000000381&quot;);">修改</span><span class="switch_btn" onclick="upuser(&quot;operator03&quot;,&quot;00000000000381&quot;,0);">关闭</span><span class="del_btn" onclick="del(&quot;operator03&quot;,&quot;00000000000381&quot;);">删除</span></td></tr><tr><td>朱春娜</td><td>operator02</td><td><em>可用</em></td><td>2016-12-27</td><td>修改<span class="disclick_btn">关闭</span>删除</td></tr><tr><td>黎凯羽</td><td>operator01</td><td><em>可用</em></td><td>2016-12-27</td><td>修改<span class="disclick_btn">关闭</span>删除</td></tr><tr><td>海南奇楠沉香交易中心有限公司</td><td>admin</td><td><em>可用</em></td><td>2016-11-15</td><td>修改<span class="disclick_btn">关闭</span>删除</td></tr></tbody></table></div>
                </div>

                <div class="page_bar" id="ten">
                    <div class="page_info"></div>
                    <span>共<b id="totalPage">1</b>页</span>
                    <span>共<b id="total">5</b>条记录</span>
                    <a href="javascript:showPage(0);" id="sy" class="page_home" title="首页">home</a>
                    <a href="javascript:showPage(1);" id="ay" class="page_prev_btn" title="上一页">prev</a>
                    <!-- <a href="#.html" class="active">1</a>  -->
                    <div id="selectpage" style="display:inline"><a href="javascript:tenPage(1);" class="active">1</a></div>
                    <a href="javascript:showPage(2);" id="xy" class="page_next_btn" title="下一页">prev</a>
                    <a href="javascript:showPage(3);" id="wy" class="page_end" title="尾页">home</a>
                    <span>跳转到</span><input type="text" id="turnpage"><span class="page_jump_btn" onclick="gopage();">GO</span>
                </div>
            </div>
        </div>
    </div>
</div>