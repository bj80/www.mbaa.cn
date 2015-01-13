<!DOCTYPE html>
<html lang="{{ $lang or 'zh-CN' }}">
    <head>
      <meta charset="{{ $charset or 'utf-8' }}">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <meta name="keywords" content="晨钟,校友,联谊会,MBAA,晨光,文学社,八十中,dawn,bj80">
      <meta name="description" content="晨钟校友联谊会隶属于北京市第八十中学晨光文学社">
    <link rel="icon" href="./favicon.ico">

    <title>{{ $head_title or 'MBAA - 晨钟校友联谊会' }}</title>

    <!-- Bootstrap core CSS -->
    <link href="http://mbaa.qiniudn.com/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/public/css/subpage.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    @include('frame.topnavbar')
    <div style="height:50px"></div>
    <div class="jumbotron" style="background-image:url('http://mbaa.qiniudn.com/img/jumbotron/about.jpg');">
        <div class="container">
            <h2>关于</h2>
            <p></p>
        </div>
    </div>
    <div class="container" id="content">
        <div class="page-header">
            <h3>联系 <small></small></h3>
        </div>
        <dl class="dl-horizontal">
            <dt>晨光邮箱</dt>
                <dd><a href="mailto:chenguang2004@126.com">chenguang2004@126.com</a></dd>
            <dt>十周年投稿邮箱</dt>
                <dd><a href="mailto:chenguangshinian@126.com">chenguangshinian@126.com</a></dd>
            <dt>站长邮箱</dt>
                <dd><a href="mailto:zenkr@qq.com">zenkr@qq.com</a></dd>
        </dl>
        <div class="page-header">
            <h3>成员群 <small>申请时注明姓名界别</small></h3>
        </div>
        <dl class="dl-horizontal">
            <dt>QQ群</dt>
                <dd><a target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=c2c081a0b0762da6cc394324cfb62f8e9aca9d2d74e8670341cc5350d47a76f3"><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png" alt="晨钟校友联谊会" title="晨钟校友联谊会"></a>
                    <small>121116035</small>
                </dd>
            <dt>微信群</dt>
                <dd><img src="http://mbaa.qiniudn.com/img/about/wx-qrcode.jpg" style="max-width:180px;"></dd>
        </dl>
        <div class="page-header">
            <h3>鸣谢 <small></small></h3>
        </div>
        <dl class="dl-horizontal">
            <dt>社团素材提供</dt>
                <dd>北石老师<small></small>、王聪<small>(@<a href="http://weibo.com/wangcong19900602" target="_blank">foreveralover</a>)<公务员></small></dd>
            <dt>首页背景图</dt>
                <dd>施辰舞<small>(@<a href="http://weibo.com/u/1684580903" target="_blank">设影Senobi</a>)<摄影人、自由撰稿人></small></dd>
            <dt>十周年庆图</dt>
                <dd>孟月<small><大学在读></small></dd>
            <dt>文章来源</dt>
                <dd>晨光文学社、晨钟校友联谊会的师兄师姐学弟学妹们</dd>

            <dt>网站制作</dt>
                <dd>赵一凡<small>(@<a href="http://weibo.com/dustfeather" target="_blank">dust_feather</a>)<业余站长></small></dd>
        </dl>
    </div>
<div style="height:0px"></div>

    @include('frame.footer')

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://mbaa.qiniudn.com/js/jquery.min.js"></script>
    <script src="http://mbaa.qiniudn.com/js/bootstrap.min.js"></script>
  </body>
</html>
