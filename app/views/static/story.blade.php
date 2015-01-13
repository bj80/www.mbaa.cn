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
    <div class="jumbotron" style="background-image:url('http://mbaa.qiniudn.com/img/jumbotron/story.jpg');">
        <div class="container">
            <h2>故事</h2>
            <p></p>
        </div>
    </div>
    <div class="container">
        <dl>
        @foreach ($storyList as $piece)
            <dt>{{ $piece->sgrade or '' }} {{ $piece->author }} <small style="color:#aaa"> {{ $piece->slocation or '' }} {{ date("Y-m-d",strtotime($piece->stime)) }}</small></dt>
            <dd><a href="/story/{{ $piece->sid }}">《{{ $piece->stitle }}》</a></dd>
        @endforeach
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
