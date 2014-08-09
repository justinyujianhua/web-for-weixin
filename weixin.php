<?php
  /*
  Template Name: 时光旅人
  */
?>

<!DOCTYPE html>
<html lang="zh-cn">
  
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="时光旅人,我们用生活和故事记录时光">
    <meta name="author" content="郁剑华，yujianhua,aijiaohu,爱交互">
    <meta name="keywords" content="时光旅人，爱交互，微信公众号，timetraveller"/>
    <link rel="shortcut icon" href="favicon.ico">
    <title>
        时光旅人-微信公众号
    </title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
      <script src="../../docs-assets/js/ie8-responsive-file-warning.js">
      </script>
    <![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media
    queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js">
      </script>
      <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js">
      </script>
    <![endif]-->


    <style type="text/css">
       /*scroll-bar伪类*/::-webkit-scrollbar {
  width:10px;
}
::-webkit-scrollbar-track {
  background:rgba(0,0,0,0.6);
}
::-webkit-scrollbar-thumb {
  -webkit-border-radius:4px;
  border-radius:4px;
  background:rgba(0,0,0,.4);
}
::-webkit-scrollbar-thumb:window-inactive {
  background:0,0,0,.3
}
;/*-------------响应式------------
*/
@media (min-width:1366px) {
  body {
  background:url("../images/wallpaper9.jpg") no-repeat fixed center;
  overflow-x:hidden;
}
}</style>
  </head>
  
  <body>

      <div class="col-md-4 col-md-offset-1 intro">
          <img src="images/weixinlogo.png" draggable="false">
          <div class="slogan">
            <p id="search">搜索公众号：时光旅人</p>
          </div> 
          <footer>
            <div class="copyright">
                <p>Copyright © AiJiaoHu.com 2014 All Rights Reserved.<br>相关文章版权归时光旅人及作者所有，禁止匿名转载，禁止商业使用</p>
            </div>
          </footer> 
      </div>
      <div class="col-md-3 col-md-offset-1 content">
         <div class="weixin-back">
          <a class="back" href="weixin-article.html" target="weixinframe">
            <img src="images/button.png" onmouseover="this.src='images/button-hl.png'" onmouseout="this.src='images/button.png'">
          </a>
          <p>Time Traveller</p>      
         </div>
         <iframe name="weixinframe" src="weixin-article.html" frameborder="no" border="0" width="400px" height="600px"></iframe>
      </div>
  </body>

</html>