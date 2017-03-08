@include('UEditor::head')
<!DOCTYPE html>
<html lang="zh">
 <head> 
  <meta charset="UTF-8" /> 
  <title>创作文章</title> 

  <link rel="stylesheet" href="./css/styles-4e2f1e29f3.css" /> 
 </head> 
 <body id="body" class="articles-create"> 
  <div style="display: none;" 　　document.getelementbyid("typediv1").style.display="none" ;=""> 
   <img src="https://dn-phphub.qbox.me/uploads/images/201701/29/1/pQimFCe1r5.png" /> 
  </div> 
  <div id="wrap"> 
   <div role="navigation" class="navbar navbar-default topnav"> 
    <div class="container"> 
     <div class="navbar-header"> 
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> 
     
     </div> 
     <div id="top-navbar-collapse" class="collapse navbar-collapse"> 
      <ul class="nav navbar-nav"> 
       <li class=""><a href="/topics">社区</a></li> 
       
      </ul> 
      <div class="navbar-right"> 
       <form method="GET" action="/search" accept-charset="UTF-8" class="navbar-form navbar-left"> 
        <div class="form-group"> 
         <input class="form-control search-input mac-style" placeholder="搜索" name="q" type="text" value="" /> 
        </div> 
       </form> 
       <ul class="nav navbar-nav github-login"> 
        <li>
         <ul class="dropdown-menu" aria-labelledby="dLabel"> 
          <li> <a class="button no-pjax" href="/articles/create"> <i class="fa fa-paint-brush text-md"></i> 创作文章 </a> </li> 
         </ul> </li> 
        
        <li> <a href="#" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dLabel"> <img class="avatar-topnav" alt="Summer" src="https://dn-phphub.qbox.me/uploads/avatars/12623_1488860425.jpeg?imageView2/1/w/100/h/100" /> 滔滔不绝9ing  </a> 
        
       </ul> 
      </div> 
     </div> 
    </div> 
   </div> 
   <div class="container main-container blog-container"> 
    <div class="blog-pages"> 
     <div class="col-md-12 panel"> 
      <div class="panel-body"> 
       <h2 class="text-center"> 创作文章</h2> 
       <hr /> 
       <form method="POST" action="/articles" accept-charset="UTF-8" id="article-create-form"> 
        <input type="hidden" name="_token" value="{{ csrf_token() }}" /> 
        <input name="category_id" type="hidden" value="8" /> 
        <div class="form-group"> 
         <input class="form-control" id="topic-title" placeholder="请填写标题" name="title" type="text" value="" required="require" /> 
        </div> 
        <textarea id="container" name="content">111</textarea>
        <div class="form-group status-post-submit"> 
         <button class="btn btn-primary" type="submit" name="subject" value="publish" id="">发 布</button>  
        </div>
       </form> 
      </div> 
     </div> 
    </div> 
   </div> 
   <link rel="stylesheet" href="./css/editor-7d149186af.css" /> 
  </div>
  <script type="text/javascript">  
    var ue = UE.getEditor('container', {
            initialFrameWidth : 890,
            initialFrameHeight : 350,
    });
    ue.ready(function() {
            //此处为支持laravel5 csrf ,根据实际情况修改,目的就是设置 _token 值. 
            ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');   
    });
</script>  
 </body>
</html>