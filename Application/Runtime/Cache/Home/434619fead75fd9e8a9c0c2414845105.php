<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Matrix Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/Public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/Public/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="/Public/css/matrix-style.css" />
    <link rel="stylesheet" href="/Public/css/matrix-media.css" />
    <link rel="stylesheet" href="/Public/css/public.css" />
    <link rel="stylesheet" href="/Public/css/account_mgr.css" />
    <link href="/Public/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
    <h1><a href="dashboard.html">Matrix Admin</a></h1>
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

<!--sidebar-menu-->

<!-- <div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-signal"></i> Charts &amp; graphs</a>
    <ul>
        <li><a href="index.html"><i class="icon icon-home"></i> <span>欢迎登陆</span></a> </li>
        <li class="active"> <a href="charts.html"><i class="icon icon-signal"></i> <span>账户管理</span></a> </li>
        <li> <a href="widgets.html"><i class="icon icon-inbox"></i> <span>我的服务</span></a> </li>
        <li><a href="tables.html"><i class="icon icon-th"></i> <span>交易管理</span></a></li>
        <li><a href="grid.html"><i class="icon icon-fullscreen"></i> <span>结算管理</span></a></li>
        <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>代收代付</span> <span class="label label-important">3</span></a>
            <ul>
                <li><a href="form-common.html">Basic Form</a></li>
                <li><a href="form-validation.html">Form with Validation</a></li>
                <li><a href="form-wizard.html">Form with Wizard</a></li>
            </ul>
        </li>
        <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
        <li><a href="interface.html"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>
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
</div> -->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
        <li class="active"><a href="<?php echo U('index/index');?>"><i class="icon icon-home"></i> <span>欢迎登陆</span></a> </li>
        <li class="submenu"> <a href="#"><i class="icon icon-signal"></i> <span>账户管理</span></a>
            <ul>
                <li><a href="<?php echo U('user/index');?>">商户信息</a></li>
                <li><a href="<?php echo U('user/acount_info');?>">账户资料</a></li>
                <li><a href="<?php echo U('user/change_pwd');?>">修改密码</a></li>
                <li><a href="<?php echo U('user/oper_setting');?>">操作员设置</a></li>
            </ul>
        </li>
        <li class="submenu"> <a href="#"><i class="icon icon-inbox"></i> <span>我的服务</span></a>
            <ul>
                <li><a href="widgets.html">账户查询</a></li>
                <li><a href="#">在线充值</a></li>
                <li><a href="#">汇总账单</a></li>
            </ul>
        </li>
        <li class="submenu"><a href="#"><i class="icon icon-th"></i> <span>交易管理</span></a>
            <ul>
                <li><a href="tables.html">交易明细</a></li>
            </ul>
        </li>
        <li class="submenu"><a href="#"><i class="icon icon-fullscreen"></i> <span>结算管理</span></a>
            <ul>
                <li><a href="grid.html">结算申请</a></li>
                <li><a href="#">结算记录</a></li>
            </ul>
        </li>
        <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>代收代付</span> <span class="label label-important">3</span></a>
            <ul>
                <li><a href="form-common.html">代收管理</a></li>
                <li><a href="form-validation.html">代付管理</a></li>
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
                                        <img id="randImage" src="/Public/merchant/js/imageshowImges.jsp" align="absmiddle" style="margin:5px 5px 0 0;" onclick="loadimage()">
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
<!--Footer-part-->
<div class="row-fluid">
    <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in/">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part-->
<script src="/Public/js/jquery.min.js"></script>
<script src="/Public/js/bootstrap.min.js"></script>
<script src="/Public/js/jquery.flot.min.js"></script>
<script src="/Public/js/jquery.flot.pie.min.js"></script>
<script src="/Public/js/matrix.charts.js"></script>
<script src="/Public/js/jquery.flot.resize.min.js"></script>
<script src="/Public/js/matrix.js"></script>
<script src="/Public/js/jquery.peity.min.js"></script>
<script src="/Public/js/hr_paid/basic.js"></script>
<script src="/Public/js/hr_paid/merchant_index.js"></script>
<!--Real-time-chart-js-->
<script type="text/javascript">
    $(function () {
        // we use an inline data source in the example, usually data would
        // be fetched from a server
        var data = [], totalPoints = 300;
        function getRandomData() {
            if (data.length > 0)
                data = data.slice(1);

            // do a random walk
            while (data.length < totalPoints) {
                var prev = data.length > 0 ? data[data.length - 1] : 50;
                var y = prev + Math.random() * 10 - 5;
                if (y < 0)
                    y = 0;
                if (y > 100)
                    y = 100;
                data.push(y);
            }

            // zip the generated y values with the x values
            var res = [];
            for (var i = 0; i < data.length; ++i)
                res.push([i, data[i]])
            return res;
        }

        // setup control widget
        var updateInterval = 30;
        $("#updateInterval").val(updateInterval).change(function () {
            var v = $(this).val();
            if (v && !isNaN(+v)) {
                updateInterval = +v;
                if (updateInterval < 1)
                    updateInterval = 1;
                if (updateInterval > 2000)
                    updateInterval = 2000;
                $(this).val("" + updateInterval);
            }
        });

        // setup plot
        var options = {
            series: { shadowSize: 0 }, // drawing is faster without shadows
            yaxis: { min: 0, max: 100 },
            xaxis: { show: false }
        };
        var plot = $.plot($("#placeholder2"), [ getRandomData() ], options);

        function update() {
            plot.setData([ getRandomData() ]);
            // since the axes don't change, we don't need to call plot.setupGrid()
            plot.draw();

            setTimeout(update, updateInterval);
        }

        update();
    });
</script>
<!--Real-time-chart-js-end-->
<!--Turning-series-chart-js-->
<script type="text/javascript">
    $(function () {
        var datasets = {
            "usa": {
                label: "USA",
                data: [[1988, 483994], [1989, 479060], [1990, 457648], [1991, 401949], [1992, 424705], [1993, 402375], [1994, 377867], [1995, 357382], [1996, 337946], [1997, 336185], [1998, 328611], [1999, 329421], [2000, 342172], [2001, 344932], [2002, 387303], [2003, 440813], [2004, 480451], [2005, 504638], [2006, 528692]]
            },
            "russia": {
                label: "Russia",
                data: [[1988, 218000], [1989, 203000], [1990, 171000], [1992, 42500], [1993, 37600], [1994, 36600], [1995, 21700], [1996, 19200], [1997, 21300], [1998, 13600], [1999, 14000], [2000, 19100], [2001, 21300], [2002, 23600], [2003, 25100], [2004, 26100], [2005, 31100], [2006, 34700]]
            },
            "uk": {
                label: "UK",
                data: [[1988, 62982], [1989, 62027], [1990, 60696], [1991, 62348], [1992, 58560], [1993, 56393], [1994, 54579], [1995, 50818], [1996, 50554], [1997, 48276], [1998, 47691], [1999, 47529], [2000, 47778], [2001, 48760], [2002, 50949], [2003, 57452], [2004, 60234], [2005, 60076], [2006, 59213]]
            },
            "germany": {
                label: "Germany",
                data: [[1988, 55627], [1989, 55475], [1990, 58464], [1991, 55134], [1992, 52436], [1993, 47139], [1994, 43962], [1995, 43238], [1996, 42395], [1997, 40854], [1998, 40993], [1999, 41822], [2000, 41147], [2001, 40474], [2002, 40604], [2003, 40044], [2004, 38816], [2005, 38060], [2006, 36984]]
            },
            "denmark": {
                label: "Denmark",
                data: [[1988, 3813], [1989, 3719], [1990, 3722], [1991, 3789], [1992, 3720], [1993, 3730], [1994, 3636], [1995, 3598], [1996, 3610], [1997, 3655], [1998, 3695], [1999, 3673], [2000, 3553], [2001, 3774], [2002, 3728], [2003, 3618], [2004, 3638], [2005, 3467], [2006, 3770]]
            },
            "sweden": {
                label: "Sweden",
                data: [[1988, 6402], [1989, 6474], [1990, 6605], [1991, 6209], [1992, 6035], [1993, 6020], [1994, 6000], [1995, 6018], [1996, 3958], [1997, 5780], [1998, 5954], [1999, 6178], [2000, 6411], [2001, 5993], [2002, 5833], [2003, 5791], [2004, 5450], [2005, 5521], [2006, 5271]]
            },
            "norway": {
                label: "Norway",
                data: [[1988, 4382], [1989, 4498], [1990, 4535], [1991, 4398], [1992, 4766], [1993, 4441], [1994, 4670], [1995, 4217], [1996, 4275], [1997, 4203], [1998, 4482], [1999, 4506], [2000, 4358], [2001, 4385], [2002, 5269], [2003, 5066], [2004, 5194], [2005, 4887], [2006, 4891]]
            }
        };

        // hard-code color indices to prevent them from shifting as
        // countries are turned on/off
        var i = 0;
        $.each(datasets, function(key, val) {
            val.color = i;
            ++i;
        });

        // insert checkboxes
        var choiceContainer = $("#choices");
        $.each(datasets, function(key, val) {
            choiceContainer.append('<br/><input type="checkbox" name="' + key +
                    '" checked="checked" id="id' + key + '">' +
                    '<label for="id' + key + '">'
                    + val.label + '</label>');
        });
        choiceContainer.find("input").click(plotAccordingToChoices);


        function plotAccordingToChoices() {
            var data = [];

            choiceContainer.find("input:checked").each(function () {
                var key = $(this).attr("name");
                if (key && datasets[key])
                    data.push(datasets[key]);
            });

            if (data.length > 0)
                $.plot($("#placeholder"), data, {
                    yaxis: { min: 0 },
                    xaxis: { tickDecimals: 0 }
                });
        }

        plotAccordingToChoices();
    });
</script>
<!--Turning-series-chart-js-->
<script src="/Public/js/matrix.dashboard.js"></script>
</body>
</html>