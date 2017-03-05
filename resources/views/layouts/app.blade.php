<html>
    <head>
        <title>@yield('title')</title>
          <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
        <meta name="description" content="博客" /> 
        <meta name="keywords" content="博客 PHP Python JS 微信小程序  Vue  Weex" /> 
        <meta name="HandheldFriendly" content="True" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
        <link rel="shortcut icon" href="./css/assets/favicon.ico" /> 
        <link rel="stylesheet" href="./css/bootstrap.min.css" /> 
        <link rel="stylesheet" href="./css/font-awesome.min.css" /> 
        <link rel="stylesheet" href="./css/vs.min.css" /> 
        <link rel="stylesheet" type="text/css" href="./css/screen.css" /> 
        <meta name="referrer" content="origin" /> 

        @yield('linkcss')
    </head>
    <body>
        @yield('content')
            <div class="copyright"> 
   <div class="container"> 
    <div class="row"> 
     <div class="col-sm-12"> 
      <span>Copyright &copy; <a href="http://www.ihelpi.cn/">博客群社区</a></span> 
     </div> 
    </div> 
   </div> 
  </div> 
    </body>
  <script src="./js/jquery.min.js"></script> 
  <script src="./js/bootstrap.min.js"></script> 
  <script src="./js/jquery.fitvids.min.js"></script> 
  <script src="./js/highlight.min.js"></script> 


</html>