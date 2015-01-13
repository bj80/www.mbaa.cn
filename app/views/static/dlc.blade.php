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
        <h2>晨光文学社</h2>
        <p></p>
        </div>
    </div>
<div style="height:30px;"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-4 col-sm-4" style="text-align:center;">
                <a href="/dlc/publication"><img src="http://mbaa.qiniudn.com/img/dlc/img/publication.png" class="img-rounded" style="width:80px;"></a>
            </div>
            <div class="col-xs-4 col-sm-4" style="text-align:center;">
                <a href="/dlc/inscribe"><img src="http://mbaa.qiniudn.com/img/dlc/img/inscribe.png" class="img-rounded" style="width:80px;"></a>
            </div>
            <div class="col-xs-4 col-sm-4" style="text-align:center;">
                <a href="/member"><img src="http://mbaa.qiniudn.com/img/dlc/img/member.png" class="img-rounded" style="width:80px;"></a>
            </div>
        </div>
    </div>
    <div class="container"  id="content">
        <div class="page-header">
            <h3>简介 <small></small></h3>
        </div>
        <p>晨光文学社是八十中学一个崭新的学生团体组织。它由我校青年教师侯贵平（北石）发起并于 2004年12月26日正式成立。她是北京东方地平线上，一轮喷薄而出的朝阳，每天的第一缕晨光将洒满校园，温暖我们的心灵。</p>
        
        <div class="page-header">
            <h3>由来 <small></small></h3>
        </div>
        <p>1957年11月17日，毛泽东在莫斯科向中国留学生讲话时说：“世界是你们的，也是我们的，但是归根结蒂是你们的。你们青年人朝气蓬勃，正在兴旺时期，好像早晨八、九点钟的太阳。希望寄托在你们身上。世界是属于你们的。中国的前途是属于你们的。第一，青年人既要勇敢又要谦虚；第二，祝你们身体好、学习好、将来工作好；第三，和苏联朋友要亲密团结。”</p>
        <div class="page-header">
            <h3>口号 <small>世界属于我们！ </small></h3>
        </div>
        <p>世界属于我们！</p>
        <div class="page-header">
            <h3>宗旨 <small>健康、仁爱、和谐、进步 </small></h3>
        </div>
        <p>健康，这是针对每一个社员而言，就是文学社的活动围绕这个根本的人文精神展开，即处处体现身体健康、心理健康、心灵健康和情感健康，使学生人格健全，能够承受失败和挫折，自律个人欲望和情绪，以一种自信、乐观、坚强、平实、宽容、感恩的心态笑对人生！它既是社员的在文学社的开始也是最后的归宿。这是文学社对每位社员赋予的最终发展方向和根本希望。 </p>
        <p>仁爱，我们讲的是社员与社员之间的关系。“仁者爱人”，突出的是在人与人之间应具有亲亲之心、爱人之心、正义之心、真诚之心、克己之心。是让每位社员在文学社这个大家庭里感受到一份浓浓的爱和温暖，让文学和和集体滋养我们的仁爱之心，真正做到所谓的“我爱人人，人人爱我”。 </p>
        <p>和谐，我们侧重讲的是文学社大家庭的关系。建立一种交流之和谐、合作之和谐、团队之和谐、生活之和谐关系，即自然的、良好的、默契的人际氛围和团队精神。 </p>
        <p>进步，我们讲的是文学社社员个人、文学社整体、文学社与八十中、文学社与社会的关系。那就是通过个人的进步促进文学社的发展，通过文学社的发展促进八十中教育教学和文化的进一步提升，通过八十中的发展促进晨光进一步壮大。一句话，共同发展，共同进步。</p>
        
        <div class="page-header">
            <h3>社徽 <small></small></h3>
        </div>
        <img src="http://mbaa.qiniudn.com/img/dlc/about/dlc_badge.jpg" alt="晨光文学社社徽" class="img-thumbnail center-block" style="width:80%;">
        <p>社徽是以“晨”字的声母 C构成的太阳为主体的图案，再配上光线、小鸟和流云一起组成。C字太阳和光线代表晨光文学社，在晨光里飞翔的小鸟和流云寓意着天真活泼的社员和社员们美好的心愿和执着的追求。</p>
        
        
        <div class="page-header">
            <h3>社旗 <small></small></h3>
        </div>
        <img src="http://mbaa.qiniudn.com/img/dlc/about/dlc_flag.gif" alt="晨光文学社社旗" class="img-thumbnail center-block" style="width:80%;">
        <p></p>
        
        <div class="page-header">
            <h3>社歌 <small></small></h3>
        </div>
        <p>“我们是一群快乐的小鸟，在晨光里自由飞翔。汲取智慧的露珠，播撒爱与美的希望；健康、仁爱、和谐、进步，缤纷的花蕾在校园里绽放。塑造中华魂，争做国际人，我们要做未来世界的栋梁。啊！我们一天天长大，迎接祖国美好的晨光。 </p>
        <p>我们是一群自由的小鸟，在晨光里快乐飞翔。聆听老师动人的话语，分享花季美丽的时光；健康、仁爱、和谐、进步，飞扬的青春在校园里激荡。塑造中华魂，争做国际人，我们就是未来世界的栋梁。啊！我们一天天壮大，托起祖国美好的晨光。”　　</p>
    </div>

    @include('frame.footer')

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://mbaa.qiniudn.com/js/jquery.min.js"></script>
    <script src="http://mbaa.qiniudn.com/js/bootstrap.min.js"></script>
  </body>
</html>
