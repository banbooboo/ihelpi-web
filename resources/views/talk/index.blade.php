<!DOCTYPE html>
<html>
 <head> 
  <title>博客聊天室</title> 
  <link rel="stylesheet" href="{{ URL::asset('./css/talkroom.css') }} " /> 
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css" /> 
  <script type="text/javascript" src="./js/jquery.min.js"></script> 
  <script type="text/javascript" src="./js/bootstrap.min.js"></script> 
  <script src="./js/socket.io.js"></script> 
 </head> 
 <body> 
  <div id="inputName" class="form-group"> 
   <p>请填写昵称：</p> 
   <input id="u" placeholder="用户昵称" maxlength="20" class="form-control" /> 
   <p><button class="btn btn-primary" id="okname">进入聊天室</button></p> 
  </div> 
  <div id="chat"> 
   <h2>左边是聊天框，右边可点击选择密聊对象</h2> 
   <div id="msgContent"> 
    <ul id="messages"></ul> 
    <form class="form"> 
     <div id="sendContent"> 
      <select id="sel_obj"><option value="allpeople">所有人</option></select> 
      <input id="m" maxlength="200" /> 
      <button id="s">发射</button> 
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
          $('#messages').append($('<li class="msg mine "><p><b>我</b>：<span>(' + formatTime(data.time) + ')</span></p><div>' + data.msg + '</div></li>'))
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
            $('#online').html('当前在线人数：' + data.counter + "人.");
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