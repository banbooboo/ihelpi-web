<!DOCTYPE html>
<html>
 <head> 
  <title>博客聊天室</title> 
  
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css" /> 
  <script type="text/javascript" src="./js/jquery.min.js"></script> 
  <script type="text/javascript" src="./js/bootstrap.min.js"></script> 
  <script src="./js/socket.io.js"></script> 
  <style type="text/css">
  body {
     padding: 0px;
     font: 20px "微软雅黑",Arial, sans-serif;
     margin:0;
     background-color: rgb(240,249,245);
     color:#666;
     }
     *{box-sizing: border-box;}
     html,body{height:100%;overflow: hidden;}
     form,input,p{padding:0;margin:0;box-sizing:border-box;}
     a {
     color: #00B7FF;
     }
     .form{position: fixed;bottom:0;width: 80%;}
     .form button{height:30px;line-height: 30px;display: inline-block;border:1px solid #ccc;margin:0;padding:0;}
     .form #u,.form #s{width:10%;height:30px;line-height: 30px;}

     .form #m{width: 76%;height:30px;line-height: 30px;}
     #u{width:240px;border:1px solid #ccc;height: 40px;line-height: 30px;border-radius: 4px;}
     #inputName{background-color: #eee; width:280px;height:160px;border:1px solid #f2f2f2;margin:0 auto;margin-top:15%;padding:20px 20px;border-radius: 10px;}
     #inputName button{margin:10px 0 0 50px;cursor: pointer;}
     #chat{display: none;} 
     ul,li,ol{list-style: none;}
     #messages{padding-right: 30px;overflow: auto;height: 100%;}
     li{height: 30px;line-height: 30px; word-break: break-all;clear: both;}
     li.msg span{color:#999;padding:0 3px;}
     li.msg div{background-color: rgb(221,229,228);float: left;margin-left: 20px;padding:5px 10px;border-radius: 5px;}
     #online{text-align: center;}
     li.mine div{background-color: rgb(221,229,228);float: right;}
     li.mine{text-align: right;}
     li.private div{background-color: rgb(255,158,111) ;color:#fff;}
     ol{margin: 0;line-height: 30px;padding: 0;}
     ol li{padding:0 5px;}
     ol li:hover{background-color: #f2f2f2;}
     #chat{height: 100%;padding-top: 10px;border-top:1px solid #ccc;}
     #msgContent{float:left;display: inline-block;width: 80%;overflow: hidden;height: 100%;padding-bottom:50px;background: rgb(240,249,245);border-top: 1px solid rgb(227,231,233)}
     #users{display: inline-block;width:20%;height:100%;overflow-x:hidden;overflow-y:auto;border-left:1px solid #ccc;background:rgb(240,249,245);border-top: 2px solid rgb(227,231,233)}
     .menu{position: absolute;top:0;width:100%; height:38px;background-color:#0F67A1;border-bottom-left-radius: 2px;border-bottom-right-radius: 2px;  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);margin:0;}
     .menu li{list-style:none;float:left;height:38px;line-height:38px;clear:none;}
     .menu li a{font-size:14px;color:white;font-weight:bold;padding:0 10px;}
     #msgContent img{max-height: 150px;max-width: 150px;}
     #sel_obj{width:10%;height: 32px;line-height: 30px;border-right: none;font-size: 12px;}
     .drawboard{position:absolute;bottom:0;right:63px;width:200px;height:250px;}
     #drawboard{width: 250px;height:200px;background-color: #f2f2f2;border:1px solid #ccc;cursor:url("pen.png"),crosshair;}
     #leave{display: none;margin-left: 10px;}
     #clear{display: none;margin-left: 10px;}
     #ems{position:absolute; z-index:5; display:none; top:0px; left:0px; max-width:230px; background-color:#F1F1F1; border:solid 1px #CCC; padding:5px;}
     #ems img{width:44px; height:44px; border:solid 1px #FFF; cursor:pointer;}
     #ems img:hover,#ems img:active{border-color:#A4B7E3;}
     #ems a{color:#069; border-radius:2px; display:inline-block; margin:2px 5px; padding:1px 8px; text-decoration:none; background-color:#D5DFFD;}
     #ems a:hover,#ems a:active,#ems a.ck{color:#FFF; background-color:#069;}
     .tc{text-align:center; margin-top:5px;}
     #userlist{margin-top: 30px;}

  </style>
 </head> 
 <body> 
  <div id="inputName" class="form-group"> 
   <p>请填写昵称：</p> 
   <input id="u" placeholder="用户昵称" maxlength="20" class="form-control" /> 
   <p><button class="btn btn-primary" id="okname">进入聊天室</button></p> 
  </div> 
  <div id="chat"> 
   <h2 class="text-center">聊天室</h2> 
   <h5 >左边是聊天框，右边可点击选择密聊对象</h5>
   <div id="msgContent"> 
    <ul id="messages"></ul> 
    <form class="form"> 
     <div id="sendContent"> 
      <select id="sel_obj"><option value="allpeople">所有人</option></select> 
      <span><img src="./img/sk/t.png" title="表情" id="imgbq"></span>
      <input id="m" maxlength="200" /> 
      <button id="s" class="btn-primary">发射</button> 
     </div> 
    </form> 
   </div> 
   <div id="users"> 
    <div id="online"></div> 
    <ol id="userlist"></ol> 
   </div>
   
 
  </div> 
  <script type="text/javascript">
   $(function(){
      var user = "";
      var socket = null;
      $("#u").keydown(function(e) {
         if (e.keyCode == 13) {
             $("#okname").click();
         }
      })
       $("#okname").click(function() {
        user = $.trim($("#u").val());
        if (user.length == 0) {
            alert('请填写昵称');
            $("#u").focus();
            return false;
        };
        socket = io.connect('http://192.168.33.11:8082');

        socket.emit('user join', {
            user: user
        });

        var nickExisted=0;
        socket.on('nickExisted', function(data) {
              alert('昵称已存在');
              window.location.href='/talk';
        });

        socket.on('chat message', function(data) {
          formatMsg(data);
        });
        socket.on(user+'send success',function(data){
         
          if(data.type==2){
            type = "我（悄悄话）";
            $('#messages').append($('<li class="msg mine "><p><b>'+type+'</b>：<span>(' + formatTime(data.time) + ')</span></p><div>' + data.msg + '</div></li>'))
          }else{
             type = "我";
            $('#messages').append($('<li class="msg mine "><p><b>'+type+'</b>：<span>(' + formatTime(data.time) + ')</span></p><div>' + data.msg + '</div></li>'))
          }
       

          
        });
        socket.on('user coming',function(data){
          formatMsg(data);
         });
        $('#inputName').hide();
        $('#chat').show();
        

      });

      $('#users').on('click', 'li', function() {
        var v = $(this).html();
        if ($('#sel_obj option[value="' + v + '"]').size()) {
            $('#sel_obj').val(v)
        } else {
            $('#sel_obj').append('<option value="' + v + '">' + v + '</option>');
            $('#sel_obj').val(v);
        }
      });

      $('form').submit(function() {

        if ($("#m").val().length == 0) {
            alert('内容不能为空!');
            return false;
        }
        if($("#sel_obj").val()=='allpeople'){
            socket.emit('chat message', {
            msg: $('#m').val(),
            user: user,
            to: $('#sel_obj').val(),
            type:1
          });
        }
        else{
            socket.emit('chat message', {
            msg: $('#m').val(),
            user: user,
            to: $('#sel_obj').val(),
            type:2
        });
        }
        $('#m').val('');
        return false;
    });

    function formatMsg(data) {
        if (data.type === 0) {
            $('#messages').append($('<li class="notice">系统通知：' + data.msg + '</li>'))
        }else if(data.type === 3){

         $('#messages').append($('<li class="notice">系统通知：' + data.msg + '</li>'))

        }else{
            var cls = '',
                type = "";
            if (data.user == user) {
                cls += ' mine ';
            }
            if (data.type == 2) {
                cls += " private ";
                type = "（悄悄话）"
            }
            $('#messages').append($('<li class="msg ' + cls + '"><p><b>' + data.user + type + '</b>：<span>(' + formatTime(data.time) + ')</span></p><div>' + data.msg + '</div></li>'))
        };
        if (data.counter) {
            $('#online').html('当前在线人数：' + data.counter + "人.<br /><br />用户列表");
            if (data.users) {
                var html = '';
                for (var i in data.users) {
                    html += '<li title="' + i + '">' + data.users[i]+ '</li>';
                }
                $('#userlist').html(html);
            }
        }
        $('#messages').scrollTop(99999);
    }

    function formatTime(time) {
        var d = new Date(parseInt(time));
        var str = "";
        str += d.getFullYear() + '/' + (d.getMonth() + 1) + '/' + d.getDate() + " " + d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
        return str;
    }
   });



 </script>  
 </body>
</html>