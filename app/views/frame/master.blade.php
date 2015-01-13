<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="keywords" content="{{ $head_meta_keywords or '晨钟,校友,联谊会,MBAA,晨光,文学社,八十中,dawn,bj80,DLC,Dawning,Literature,Circle' }}">
        <meta name="description" content="{{ $head_meta_description or '晨钟校友联谊会隶属于北京市第八十中学晨光文学社' }}">
        <link rel="icon" href="./favicon.ico">
        <title>{{ $head_title or '' }}</title>

        {{-- Bootstrap core CSS --}}

        <link href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

        {{-- Custom styles for this template --}}

        <link href="./statics/css/cover.css" rel="stylesheet">



        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        {{ $body or 'body'}}
        
        {{-- Bootstrap core JavaScript . Placed at the end of the document so the pages load faster --}}

        <script src="http://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    </body>
</html>
