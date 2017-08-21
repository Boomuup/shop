<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:58:"E:\shop\public/../application/admin\view\goods\create.html";i:1503022720;s:52:"E:\shop\public/../application/admin\view\common.html";i:1502988461;}*/ ?>
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
            <li ><a href="<?php echo url('admin/goods/index'); ?>">商品列表</a></li>
            <li class="active"><a href="#">添加/编辑</a></li>
        </ul>
        <hr>
        <!-- TAB CONTENT -->
        <div class="tab-content container" style="width: 90%">
            <form action="<?php echo url('admin/goods/save'); ?>" method="post">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 class="panel-title ">商品种类</h1>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label >商品名称</label>
                            <input type="text" class="form-control" name="gname">
                        </div>
                        <div class="form-group">
                            <label >商品分类</label>
                            <select name="pid" id="inputID" class="form-control">
                                <option value=""> -- 选择商品分类 --</option>
                                <?php if(is_array($cData) || $cData instanceof \think\Collection || $cData instanceof \think\Paginator): if( count($cData)==0 ) : echo "" ;else: foreach($cData as $key=>$v): ?>
                                <option value="<?php echo $v['cid']; ?>"><?php echo $v['_catname']; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                        <div>
                            <label>商城价格</label>
                            <input type="text" class="form-control" name="gprice">
                        </div>
                        <div>
                            <label>市场价格</label>
                            <input type="text" class="form-control" name="mprice">
                        </div>
                        <div>
                            <label>商品描述</label>
                            <textarea class="form-control" name="description" maxlength="255" cols="30" rows="3 " placeholder="最长不超过255个字符"></textarea>
                        </div>
                        <div class="form-group">
                            <label >商品图集</label>

                            <!--缩略图使用框架的单图上传组件-->
                            <div>
                                <div class="input-group">
                                    <input type="text" class="form-control" id ='duotu' name="atlas" readonly>
                                    <div class="input-group-btn">

                                        <button onclick="upImage1(this)" class="btn btn-default" type="button">选择图片</button>
                                    </div>
                                </div>
                                <div id="demo" class="row" data></div>

                            </div>
                            <script>
                                //上传图片

                                function upImage1(obj) {
                                    require(['util'], function (util) {
                                        options = {
                                            multiple: true,//是否允许多图上传
                                            //data是向后台服务器提交的POST数据
                                            data:{name:'后盾人',year:2099}
                                        };

                                        util.image(function (images) {          //上传成功的图片，数组类型
                                            url = images.join('|');
                                            $('#demo').data(images);
                                            $("[name='atlas']").val(url);
//                                            $(".img-thumbnail1").attr('src', images[0]);

                                            $.each(images,function (v) {
                                                $('<div class="col-sm-2" style="margin-top:5px;">\n' +
                                                    ' <img src='+ images[v] +' class="img-responsive img-thumbnail1" width="150">\n' +
                                                    ' <em class="close" style="position:absolute; top: 0px; right: 0px;" title="删除这张图片" onclick="removeImg1(this)">×</em>\n' +
                                                    '  </div>').appendTo($('#demo'));

                                            })

                                        }, options)
                                    });
                                }

                                //移除图片
                                function removeImg1(obj) {
                                    var oldurl = $(obj).prev('img').attr('src');
                                    $(obj).remove();
                                    var url = $('#duotu').val().split('|');



                                }
                            </script>

                        </div>


                        <div class="form-group">
                            <label >商品详情</label>
                            <textarea name="details" id="container" style="height:300px;width:100%;"></textarea>
                            <script>
                                util.ueditor('container', {hash:2,data:'hd'}, function (editor) {
                                    //这是回调函数 editor是百度编辑器实例
                                });
                            </script>
                        </div>

                        <div class="form-group">
                            <label>商品预览图</label>
                            <!--缩略图使用框架的单图上传组件-->
                            <div>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="cover" readonly  >
                                    <div class="input-group-btn">
                                        <button onclick="upImage(this)" class="btn btn-default" type="button">选择图片</button>
                                    </div>
                                </div>
                                <div class="input-group" style="margin-top:5px;">
                                    <img src="__ZY__/node_modules/hdjs/images/nopic.jpg" class="img-responsive img-thumbnail" width="150">
                                    <em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="removeImg(this)">×</em>
                                </div>
                            </div>
                            <script>
                                //上传图片
                                function upImage(obj) {
                                    require(['util'], function (util) {
                                        options = {
                                            multiple: false,//是否允许多图上传
                                            //data是向后台服务器提交的POST数据
                                            data:{name:'后盾人',year:2099}
                                        };
                                        util.image(function (images) {          //上传成功的图片，数组类型

                                            $("[name='cover']").val(images[0]);
                                            $(".img-thumbnail").attr('src', images[0]);
                                        }, options)
                                    });
                                }

                                //移除图片
                                function removeImg(obj) {
                                    $(obj).prev('img').attr('src', 'resource/images/nopic.jpg');
                                    $(obj).parent().prev().find('input').val('');
                                }
                            </script>

                        </div>
                        <div class="form-group">
                            <label>查看次数</label>
                            <input type="number" name="click" class="form-control" >
                        </div>
                    </div>
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">商品分类</h3>
                    </div>
                    <div class="panel-body" id="app">

                        <div class="panel panel-default" v-for="(v,k) in subclass">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label >货品属性</label>
                                    <input type="text" class="form-control" v-model="v.sname">
                                </div>
                                <div class="form-group">
                                    <label >货品数量</label>
                                    <input type="number" class="form-control" v-model="v.snum">
                                </div>
                                <div class="form-group">
                                    <div >
                                        <button type="submit" class="btn btn-danger" @click.prevent="del(k)">删除</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <textarea name="subclass"   hidden>{{subclass}}</textarea>

                        <div class="panel-footer">
                            <button type="submit" @click.prevent="add" class="btn btn-info">增加</button>

                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">保存</button>
            </form>

        </div>
</div>

<script>
    require(['vue'],function (Vue) {
        new Vue({
            el:'#app',
            data:{
                subclass:[{'sname':'',snum:0},]
            },
            methods:{
                add(){
                    // id 防止重复
                    let field = {'sname':'',snum:0};
                    this.subclass.push(field);
                },
                del(k){
                    if(confirm('确定要删除吗')){
                        this.subclass.splice(k,1);
                    }
                }
            }
        })
    })
</script>

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