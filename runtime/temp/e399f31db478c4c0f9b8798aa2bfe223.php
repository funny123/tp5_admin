<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:59:"E:\phpStudy\WWW\tp5_admin\addons\user\view\index\index.html";i:1513567017;s:61:"E:\phpStudy\WWW\tp5_admin\addons\user\view\layout\common.html";i:1513567017;}*/ ?>
<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>FastAdmin - 基于ThinkPHP5和Bootstrap的极速后台开发框架</title>

        <!-- Bootstrap Core CSS -->
        <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- Plugin CSS -->
        <link href="//cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="//cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
            <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            body {
                padding-top: 70px; 
            }
            footer {
                background-color: #222;
                color:#9d9d9d;
                padding:20px 0;
            }
        </style>
    </head>

    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">FastAdmin</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav pull-right">
                        <li><a href="http://www.fastadmin.net">首页</a></li>
                        <li><a href="http://doc.fastadmin.net">文档</a></li>
                        <li><a href="http://forum.fastadmin.net">论坛</a></li>
                        <li><a href="http://www.fastadmin.net#donate">打赏</a></li>
                        <li><a href="http://www.fastadmin.net#contact">联系</a></li>
                        <li><a href="http://html.fastadmin.net" target="_blank">HTML版</a></li>
                        <li><a href="http://demo.fastadmin.net?ref=nav" target="_blank">演示</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>


        <div class="container">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="page-header" style="margin-top:10px;">
                <h4>会员中心</h4>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <?php if($user->check()): ?>
                    <div class="alert alert-dismissable bg-gray-light clearfix">
                        <div class="pull-left"><img class="img-responsive img-circle" style="width:80px;" src="/assets/img/avatar.png" /></div>
                        <div class="pull-left text-left" style="margin-left:15px;">
                            <p>
                                你好！<?php echo $user['nickname']; ?><br />
                                Lv:<?php echo $user->level; ?>
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="list-group">
                            <a href="<?php echo addon_url('user/index/changepwd'); ?>" class="list-group-item">
                                <i class="fa fa-user-o"></i> 修改密码
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="badge">2</span>
                                <i class="fa fa-comment"></i> 我发表的帖子
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="badge">1</span>
                                <i class="fa fa-comment-o"></i> 我发表的主题
                            </a>
                        </div>
                    </div>

                    <a class="btn btn-danger btn-block" href="<?php echo addon_url('user/index/logout'); ?>"><i class="fa fa-user"></i> 立即注销</a>
                    <?php else: ?>
                    <a class="btn btn-info btn-block" href="<?php echo addon_url('user/index/register'); ?>"><i class="fa fa-user"></i> 立即注册</a>
                    <a class="btn btn-success btn-block" href="<?php echo addon_url('user/index/login'); ?>"><i class="fa fa-user"></i> 立即登录</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

        <footer>
            <div class="container">
                <p>&copy; 2017 FastAdmin. All Rights Reserved.</p>
                <ul class="list-inline">
                    <li>
                        <a href="https://gitee.com/karsonzhang/fastadmin">码云</a>
                    </li>
                    <li>
                        <a href="https://github.com/karsonzhang/fastadmin">Github</a>
                    </li>
                    <li>
                        <a href="http://shang.qq.com/wpa/qunwpa?idkey=46c326e570d0f97cfae1f8257ae82322192ec8841c79b2136446df0b3b62028c">QQ群</a>
                    </li>
                </ul>
            </div>
        </footer>

        <!-- jQuery -->
        <script src="//cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script>
            $(function () {

            });
        </script>

    </body>

</html>

