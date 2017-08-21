<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:60:"E:\shop\public/../application/admin\view\category\index.html";i:1503020568;s:52:"E:\shop\public/../application/admin\view\common.html";i:1502988461;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>商城后台</title>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" type="text/css" href="__ZY__/css/layout.css" />
    <link rel="stylesheet" type="text/css" href="__ZY__/css/style.css" />
    <link rel="stylesheet" href="__ZY__/node_modules/hdjs/css/bootstrap.min.css">

    <script type="text/javascript" src="__ZY__/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="__ZY__/js/haidao.offcial.general.js"></script>
    <script>
        hdjs = {
            'base': '__ZY__/node_modules/hdjs',
            'uploader': "<?php echo url('system/component/uploader'); ?>",
            'filesLists': "<?php echo url('system/component/filesLists'); ?>?"
        }
    </script>
    <script src="__ZY__/node_modules/hdjs/app/util.js"></script>
    <script src="__ZY__/node_modules/hdjs/require.js"></script>
    <script src="__ZY__/node_modules/hdjs/config.js"></script>

    <script>
        require(['jquery'], function ($,util) {
            //为异步请求设置CSRF令牌
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        })
    </script>
</head>

<body>

<div class="view-topbar">
    <div class="topbar-console">
        <div class="tobar-head fl">
            <a href="#" class="topbar-logo fl">
                <span><img src="__ZY__/images/logo.png" width="20" height="20"/></span>
            </a>
            <a href="#" class="topbar-home-link topbar-btn text-center fl"><span>管理控制台</span></a>
        </div>
    </div>
    <div class="topbar-info">
        <ul class="fr">
            <li class="fl dropdown topbar-notice topbar-btn">
                <a href="#" class="dropdown-toggle">
                    <span class="icon-notice"></span>
                </a>
            </li>
            <li class="fl topbar-info-item">
                <div class="dropdown">
                    <a href="#" class="topbar-btn">
                        <span class="fl text-normal">帮助与文档</span>
                        <span class="icon-arrow-down"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">使用文档</a></li>
                        <li><a href="#">联系我们</a></li>
                    </ul>
                </div>
            </li>
            <li class="fl topbar-info-item">
                <div class="dropdown">
                    <a href="#" class="topbar-btn">
                        <span class="fl text-normal">
                            <?php echo session('user.user_username'); ?>
                        </span>
                        <span class="icon-arrow-down"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo url('admin/user/changepassword'); ?>">修改密码</a></li>
                        <li><a href="<?php echo url('admin/user/logout'); ?>">退出</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>

<div class="view-body">

    <div class="view-sidebar">
        <div class="sidebar-content">
            <div class="sidebar-nav">
                <div class="sidebar-title">
                    <a href="#">
                        <span class="icon"><b class="fl icon-arrow-down"></b></span>
                        <span class="text-normal">栏目管理</span>
                    </a>
                </div>
                <ul class="sidebar-trans">
                    <li>
                        <a href="<?php echo url('admin/category/index'); ?>">
                            <b class="sidebar-icon"><img src="__ZY__/images/icon_author.png" width="16" height="16" /></b>
                            <span class="text-normal">栏目列表</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo url('admin/category/create'); ?>">
                            <b class="sidebar-icon"><img src="__ZY__/images/icon_message.png" width="16" height="16" /></b>
                            <span class="text-normal">添加栏目</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="sidebar-nav">
                <div class="sidebar-title">
                    <a href="#">
                        <span class="icon"><b class="fl icon-arrow-down"></b></span>
                        <span class="text-normal">商品管理</span>
                    </a>
                </div>
                <ul class="sidebar-trans">
                    <li>
                        <a href="<?php echo url('admin/goods/index'); ?>">
                            <b class="sidebar-icon"><img src="__ZY__/images/icon_author.png" width="16" height="16" /></b>
                            <span class="text-normal">商品列表</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo url('admin/goods/create'); ?>">
                            <b class="sidebar-icon"><img src="__ZY__/images/icon_message.png" width="16" height="16" /></b>
                            <span class="text-normal">添加商品</span>
                        </a>
                    </li>
                </ul>
            </div>


            <div class="sidebar-nav">
                <div class="sidebar-title">
                    <a href="#">
                        <span class="icon"><b class="fl icon-arrow-down"></b></span>
                        <span class="text-normal">订单管理</span>
                    </a>
                </div>
                <ul class="sidebar-trans">
                    <li>
                        <a href="/admin/tag">
                            <b class="sidebar-icon"><img src="__ZY__/images/icon_author.png" width="16" height="16" /></b>
                            <span class="text-normal">订单列表</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/tag/create">
                            <b class="sidebar-icon"><img src="__ZY__/images/icon_message.png" width="16" height="16" /></b>
                            <span class="text-normal">更新订单</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <div class="view-product background-color">
        
<div class="padding-big background-color">
	<!-- TAB NAVIGATION -->
	<ul class="nav nav-tabs" role="tablist">
		<li class="active"><a href="">栏目列表</a></li>
		<li ><a href="<?php echo url('admin/category/create'); ?>">添加/编辑</a></li>
	</ul>
	<hr>
	<table class="table table-hover" >
		<thead>
		<tr >
			<th width="100">id</th>
			<th >分类名称</th>
			<th>预览图</th>
			<th>操作</th>
		</tr>
		</thead>
		<tbody>
		<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): if( count($data)==0 ) : echo "" ;else: foreach($data as $key=>$v): ?>
			<tr >
				<td style="line-height: 40px;"><?php echo $v['cid']; ?></td>
				<td style="line-height: 40px"><?php echo $v['_catname']; ?></td>
				<td>
					<img src="<?php echo $v['thumb']; ?>" alt="" width="60">
				</td>
				<td style="line-height: 40px">
					<a href="<?php echo url('admin/category/edit',['id'=>$v['cid']]); ?>" class="btn btn-primary btn-xs">编辑</a>
					<a href='javascript:if(confirm("确定删除吗？")) location.href="<?php echo url('admin/category/delete',['id'=>$v['cid']]); ?>";' class="btn btn-danger btn-xs">删除</a>
				</td>
			</tr>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>

</div>

    </div>
</div>

<script>
    $(".sidebar-title").live('click', function() {
        if ($(this).parent(".sidebar-nav").hasClass("sidebar-nav-fold")) {
            $(this).next().slideDown(200);
            $(this).parent(".sidebar-nav").removeClass("sidebar-nav-fold");
        } else {
            $(this).next().slideUp(200);
            $(this).parent(".sidebar-nav").addClass("sidebar-nav-fold");
        }
    });
</script>


</body>

</html>