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
                <li><a href="<?php echo U('AccountManage/CommercialInfo');?>">商户信息</a></li>
                <li><a href="<?php echo U('AccountManage/index');?>">账户资料</a></li>
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
                    <div class="tool_bar"><!-- <span class="b_btn">编辑</span> --></div>
                    <h3>账户资料</h3>
                </div>
                <div class="col2">
                    <table>
                        <tbody><tr>
                            <th>商户名称：</th>
                            <td>海南奇楠沉香交易中心有限公司</td>
                        </tr>
                        <tr>
                            <th>商户ID：</th>
                            <td>00000000000381</td>
                        </tr>
                        <tr>
                            <th>操作员姓名：</th>
                            <td>海南奇楠沉香交易中心有限公司</td>
                        </tr>
                        <tr>
                            <th>操作员账户名：</th>
                            <td>operator05</td>
                        </tr>
                        <tr>
                            <th>用户状态：</th>
                            <td> 可用</td>
                        </tr>
                        <tr>
                            <th>联系电话：</th>
                            <td>18377114219</td>
                        </tr>
                        <tr>
                            <th>邮箱：</th>
                            <td>2338459298@qq.com</td>
                        </tr>
                        </tbody></table>
                </div>
                <div class="col2">
                    <table><tbody>
                    <tr><th>功能权限：</th> </tr>
                    <tr>
                        <td class="powerTd">
                            <ul class="powerUl">
                                <li> 商户系统</li>
                                <li> 账户管理, 商户信息 </li>
                                <li> 账户资料,修改密码, 操作员设置</li>
                                <li> 我的服务, 账户查询,在线充值</li>
                                <li> 汇总账单, 交易管理,交易明细</li>
                                <li> 退款管理,结算管理,结算申请</li>
                                <li> 结算记录,代收代付,代付管理</li>
                                <li>代收管理</li>
                            </ul>
                        </td>
                    </tr>
                    </tbody></table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--Footer-part-->
<div class="row-fluid">
    <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in/">Themedesigner.in</a> </div>
</div>
</body>
</html>
<!--<div class="con" id="tabcon_01" style="display: block; top: 0px; opacity: 1;">-->
<!--<div class="col2">-->
<!--<table class="firmTab">-->
<!--<tbody>-->
<!--<?php $num = '0'; ?>-->
<!--<?php if(is_array($info_list)): foreach($info_list as $key=>$v): ?>-->
<!--<?php if($v['code'] == 582): ?>-->
<!--<?php if($num == 4){break;} $num++;?>-->
<!--<tr>-->
<!--<th><?php if($v['state'] == 1): ?><span class="require">*</span><?php endif; echo ($v['name']); ?>：</th>-->
<!--<td><?php echo ($v['value']); ?></td>-->
<!--</tr>-->
<!--<?php endif; ?>-->
<!--<?php endforeach; endif; ?>-->
<!--</tbody></table>-->
<!--</div>-->
<!--<div class="col2">-->
<!--<table class="firmTab">-->
<!--<tbody>-->
<!--<?php $tnum = '0'; ?>-->
<!--<?php if(is_array($info_list)): foreach($info_list as $key=>$v): ?>-->
<!--<?php if($v['code'] == 582): ?>-->
<!--<?php $tnum++;?>-->
<!--<?php if($tnum > 4): ?>-->
<!--<tr>-->
<!--<th><?php if($v['state'] == 1): ?><span class="require">*</span><?php endif; echo ($v['name']); ?>：</th>-->
<!--<td><?php echo ($v['value']); ?></td>-->
<!--</tr>-->
<!--<?php endif; ?>-->
<!--<?php endif; ?>-->
<!--<?php endforeach; endif; ?>-->
<!--</tbody></table>-->
<!--</div>-->
<!--<div class="col2">-->
<!--<table>-->
<!--<tbody><tr>-->
<!--<th>功能权限：</th>-->
<!--</tr>-->
<!--<tr>-->
<!--<td class="powerTd">-->
<!--<ul class="powerUl">-->
<!--<li> 商户系统</li>-->
<!--<li> 账户管理,商户信息 </li>-->
<!--<li> 账户资料,修改密码, 操作员设置</li>-->
<!--<li> 我的服务,账户查询,在线充值</li>-->
<!--<li> 汇总账单,交易管理,交易明细</li>-->
<!--<li> 退款管理,结算管理,结算申请</li>-->
<!--<li> 结算记录,代收代付, 代付管理</li>-->
<!--<li>代收管理</li>-->
<!--</ul>-->
<!--</td>-->
<!--</tr>-->
<!--</tbody></table>-->
<!--</div>-->
<!--&lt;!&ndash;不要删&ndash;&gt;<div class="clear"></div>&lt;!&ndash;不要删&ndash;&gt;-->

<!--<div class="page_bar">-->
<!--<span id="firmEditBtn" class="b_btn" onclick="updateFirm('/merchant/562219.tran')">修改</span>-->
<!--</div>-->
<!--</div>-->