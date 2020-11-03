<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台登录-L-admin2.0</title>
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />

    <link rel="shortcut icon" href="/hsfavicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/layuiadmin/css/font.css">
	<link rel="stylesheet" href="/layuiadmin/css/xadmin.css">
	
    <script src="/layuiadmin/js/jquery.min.js"></script>
    <script src="/layuiadmin/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/layuiadmin/js/xadmin.js"></script>

</head>
<body>
    <!-- 顶部开始 -->
    <div class="container">
        <div class="logo"><a href="/">L-admin v2.0</a></div>
        <div class="left_open">
            <i title="展开左侧栏" class="iconfont">&#xe699;</i>
        </div>
        <ul class="layui-nav left fast-add" lay-filter="">
          <li class="layui-nav-item">
            <a href="javascript:;">+新增</a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
              <dd><a onClick="x_admin_show('资讯','http://www.baidu.com')"><i class="iconfont">&#xe6a2;</i>资讯</a></dd>
              <dd><a onClick="x_admin_show('图片','http://www.baidu.com')"><i class="iconfont">&#xe6a8;</i>图片</a></dd>
               <dd><a onClick="x_admin_show('用户','http://www.baidu.com')"><i class="iconfont">&#xe6b8;</i>用户</a></dd>
            </dl>
          </li>
        </ul>
        <ul class="layui-nav right" lay-filter="">
          <li class="layui-nav-item">
            <a href="javascript:;">你好！{{$sname}}</a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
              <dd><a id="tuichu"  class="tc" value="1">退出</a></dd>
            </dl>
          </li>
          <li class="layui-nav-item to-index"><a href="/admin">首页</a></li>
        </ul>
        
    </div>
    <!-- 顶部结束 -->
    <!-- 中部开始 -->
     <!-- 左侧菜单开始 -->
    <div class="left-nav">
      <div id="side-nav">
        <ul id="nav">
             <li >
                <a href="javascript:;">
                    <i class="iconfont">&#xe6eb;</i>
                    <cite>主页</cite>
                    <i class="iconfont nav_right">&#xe6a7;</i>
                </a>
                <ul class="sub-menu">
                    <li><a _href="html/welcome.html"><i class="iconfont">&#xe6a7;</i><cite>控制台</cite></a></li >
                </ul>
            </li>
        
            
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe705;</i>
                    <cite>语文模块</cite>
                    <i class="iconfont nav_right">&#xe6a7;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="/ywupdatelist">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>修改标题内容</cite>
                        </a>
                    </li >
                     <li>
                        <a _href="/ywupdateimagelist">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>修改语文模块图片</cite>
                        </a>
                    </li >
                </ul>
            </li>  
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe6de;</i>
                    <cite>数学模块</cite>
                    <i class="iconfont nav_right">&#xe6a7;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="/sxupdatelist">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>修改标题内容</cite>
                        </a>
                    </li >
                     <li>
                        <a _href="/sxupdateimagelist">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>修改数学模块图片</cite>
                        </a>
                    </li >
                </ul>
            </li>   
             <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe6c7;</i>
                    <cite>英语模块</cite>
                    <i class="iconfont nav_right">&#xe6a7;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="/yyupdatelist">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>修改标题内容</cite>
                        </a>
                    </li >
                     <li>
                        <a _href="/yyupdateimagelist">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>修改语文模块图片</cite>
                        </a>
                    </li >
                </ul>
            </li>                   
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe6b8;</i>
                    <cite>用户管理</cite>
                    <i class="iconfont nav_right">&#xe6a7;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="html/member-list.html">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>会员列表</cite>
                            
                        </a>
                    </li >
                    <li>
                        <a _href="html/member-del.html">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>会员删除</cite>
                            
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="iconfont">&#xe70b;</i>
                            <cite>会员管理</cite>
                            <i class="iconfont nav_right">&#xe6a7;</i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a _href="html/member-del.html">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>会员列表</cite>
                                    
                                </a>
                            </li >
                            <li>
                                <a _href="html/member-del.html">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>会员删除</cite>
                                    
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    
                </ul>
            </li>             

                    </ul>
      </div>
    </div>
    <!-- <div class="x-slide_left"></div> -->
    <!-- 左侧菜单结束 -->
    <!-- 右侧主体开始 -->
    <div class="page-content">
        <div class="layui-tab tab" lay-filter="xbs_tab" lay-allowclose="false">
          <ul class="layui-tab-title">
            <li class="home"><i class="layui-icon">&#xe68e;</i>我的桌面</li>
          </ul>
          <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <iframe src='/layuiadmin/html/welcome.html' frameborder="0" scrolling="yes" class="x-iframe"></iframe>
            </div>
          </div>
        </div>
    </div>
    <div class="page-content-bg"></div>
    <!-- 右侧主体结束 -->
    <!-- 中部结束 -->
    <!-- 底部开始 -->
    <!--<div class="footer">
        <div class="copyright">Copyright ©2019 L-admin v2.3 All Rights Reserved</div>  
    </div>-->
    <!-- 底部结束 -->
</body>
</html>
<script src="/jquery-3.1.1.min.js"></script>
<script>
    $(function(){
        $("#tuichu").click(function(){
            var tc =$(".tc").val();
            var r = confirm('您确定退出么？');
            if (r == true) {
                $.ajax({
                    type: 'post',
                    data: {tc: tc},
                    dateType: 'json',
                    url: "/sessiondel",
                    success: function (msg) {
                        if (msg.code == 1) {
                            window.location = '/login';
                        }
                    }
                });
            } else {

            }
        })
    })
</script>
