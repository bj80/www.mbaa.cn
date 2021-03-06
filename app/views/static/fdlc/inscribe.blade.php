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
    <div class="jumbotron" style="background-image:url('http://mbaa.qiniudn.com/img/jumbotron/dlc.jpg');">
        <div class="container">
        <h2>题字</h2>
        <p></p>
        </div>
    </div>
    <div class="container">
        <div class="page-header">
            <h3> <small></small></h3>
        </div>
        <div class="row">
            @foreach ($inscribeList as $piece)
                <div class="col-xs-12 col-sm-6 col-md-4" style="border:0px solid #ccc;margin-bottom:10px;">
                    <div style="width:40%;height:150px;float:left;border:1px solid #ccc;
                background:url('http://mbaa.qiniudn.com/img/dlc/inscribe{{ $piece->ipic }}');
                background-repeat:no-repeat;
                background-size:contain;
                background-position: center;">
                    </div>
                    <div style="width:60%;float:left;padding-left:10px;">
                        <h4><strong>{{ $piece->iname }}</strong></h4>
                        <p style="color:#aaa"><small>{{ $piece->iwork }}</small></p>
                        <p>{{ $piece->icontent }}</p>
                        <p><small>——{{ $piece->itime }}</small></p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @include('frame.footer')

    <script src="http://mbaa.qiniudn.com/js/masonry.pkgd.min.js"></script>
    <script src="http://mbaa.qiniudn.com/js/imagesloaded.pkgd.min.js"></script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
