<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>
      <?php echo "HzuPlay电子竞技交流平台" ?>
    </title>
    <link rel="stylesheet" type="text/css" href="../../css/style_94.css">
    <link rel="stylesheet" type="text/css" href="../../css/menu_style.css">
    <link rel="stylesheet" type="text/css" href="../../css/jquery.jgrowl.css">
    <link rel="stylesheet" type="text/css" href="../../css/jquery.lightbox-0.5.css" media="screen" />
    
    <script type="text/javascript" src="../../js/jquery-1.3.2.js"></script>
    <script type="text/javascript" src="../../js/login.js"></script>
    <script type="text/javascript" src="../../js/menu.js"></script>
    <script type="text/javascript" src="../../js/clock.js"></script>
    <script type="text/javascript" src="../../js/jquery.jgrowl.js"></script>
    <script type="text/javascript" src="../../js/jquery.lightbox-0.5.js"></script>
    
  </head>

  <body>
    <ul id="navigation">
      <li class="home"><a href="../../homes" title="主页"></a></li>
      <li class="hot_games"><a href="../../games/hot_game" title="热门游戏"></a></li>
      <li class="expert_games"><a href="../../games/expert_game" title="期待游戏"></a></li>
      <li class="other_games"><a href="../../games/other_game" title="其他游戏"></a></li>
      <li class="contact"><a href="../../contacts/detail" title="开发成员"></a></li>
      <?php if($user): ?>
        <li class="setting"><a href="" title="个人设置"></a></li>
        <?php if($user["name"] == "林洪狮" ): ?>
          <li class="admin"><a href="../../games" title="管理"></a></li>
        <?php endif ?>
      <?php endif; ?>
    </ul>
   <div id="gdlogo"><div class="logo"></div></div>
    <div id="header">
      <div class="headerwarp">
        <div class="logo">
          <a target="_blank" href="" title="HzuPlay"><b>HzuPlay</b></a>
        </div>

        <! 时间动态显示(js实现) >
        <span id ='clock' style="float:left; margin-right:6px;"> 
          <script type=text/javascript>
              var clock = new Clock();
              clock.display(document.getElementById("clock"));
              $(function() {
                  $('#gallery a').lightBox();
              });
            </script>
        </span>

        <div class="nav_account">
          <div class="gd_sns_right  gd">
            <?php if($user): ?>
            <font color='#ffcc00' size=1>
              <b><?php echo $user['name'];?></b>
            </font>
              <b><a href="#" onclick='showjGrowl();'>(<font color='#ffcc00'>悄悄话</font>)</a></b>
            |
            <a href="../users/logout">退出</a>
            <?php
              else:
            ?>
              <a href="#" onclick="signupHandler();" class="notabs">注册</a>
              |
              <a href="#" onclick="loginHandler();">登录</a>
            <?php
              endif;
            ?>
          </div>
          <a class="login_thumb" href="#"><img src="../../img/noavatar_middle.jpg"></a>
        </div>
      </div>
    </div>
    <div id="page">
      <div id="bbs-header" class="clearfix"></div>
      <div id="t" class="clearfix">
        <div class="tc"></div>
        <div class="tr"></div>
        <div id="menu">
          <ul>
            <li>
              <a href="">搜索</a>
              |
            </li>
            <li id="plugin" class="dropmenu">
              <a href="">论坛应用</a>
              |
            </li>
          </ul>
        </div>
      </div>

  <!Mouse >
  <! 用来显示用户信息以及聊天窗口 >
<?php if($user): ?>
		<script type="text/javascript">
	  	(function($){
	  		$(document).ready(function(){
         jGrwol_type = 1;
         new_type = 1;
         new_type_all = 1;
         show_type = 1;
         showjGrowl();
	  		});
	  	})(jQuery);


    function showjGrowl(){ 
        if (show_type == 1){  
            show_type = 0;
  		      return $.jGrowl("当前在线用户: <br> <?php foreach( $on_line_users as $on_line_user ):?> <a href=# onclick=getjGrowl(<?php echo $on_line_user["User"]["id"];?>,'<?php echo $on_line_user["User"]["name"]?>')><font color=#ffcc00> <?php echo $on_line_user["User"]["name"];?> </font></a><br> <?php endforeach;?>",
            { 
            sticky: true,
            header: "欢迎 <font color=#ffcc00><?php echo $user['name']?> </font>| 当前在线用户人数: <?php
              echo count($on_line_users)
            ?> | <a href='#' onclick=getAlljGrowl() ><font color=#ffcc00> 群聊 </font></a> <br> <a href='#' onclick='shieldMessage()'><font color=#ffcc00>屏蔽信息接受</font></a> | <a href='#' onclick='openMessage()'><font color=#ffcc00>启动信息接受</font></a> ",
            position: "bottom-right",
            close: function(e,m,o){ 
                show_type = 1;
            }
            });
        };
    };

    //屏蔽单个信息接受
    function shieldMessage(){ 
      clearTimeout( single_message );
      alert('屏蔽信息接受成功!');
    };

    function openMessage(){ 
      getMessage();
      alert('启动信息接受成功!');
    };

    //获取点击之后聊天对话框
    function getjGrowl(id,name){ 
      user_id = id;
      jGrwol_type = 0;
      if(new_type == 1){ 
         var content = "<div id='new_content'></div><br>输入悄悄话(<font color=red>内容不能为空</font>):<br><input id='new' type='text' name='data[New][contnet]'> </input> <br> <button type='submit' onclick=postNew()>发送</button> <button type='submit' onclick=clearNew() >清空悄悄话</button> <button type='submit' onclick=clearContent()>清空屏幕</button>";
         new_type = 0; //为限制窗口弹出，目前暂时取消
         return $.jGrowl(content,{
           header: '悄悄话',
           sticky: true,
           close: function(e,m,o){ 
               new_type = 1;
               jGrwol_type = 1;
           }
         })
      }
    };

    //群聊窗口
    function getAlljGrowl(){ 
      if(new_type_all == 1){ 
      var content = "<div id='all_content'></div><br>输入信息(<font color=red>内容不能为空</font>):<br><input id='all_new' type='text'></input><br><button type='sumbit' onclick=postAllNew()>发送</button><button type='sumbit' onclick=clearAllNew()>清空信息</button>";
      new_type_all = 0;
      getAllMessage();
      return $.jGrowl(content,{ 
        header: '群聊',
        sticky: true,
        close: function(e,m,o){ 
          new_type_all = 1;
          clearTimeout( all_message_timeout ); //取消获取群聊信息
        }
      });
      }
    };

    //清空表格信息
    function clearAllNew(){ 
      document.getElementById("all_new").value = "";
    };

    //定时获取群聊信息
    function getAllMessage(){ 
      $.ajax({ 
        type: 'get',
        cache: false,
        contentType: "application/x-www-form-urlencoded; charset=utf-8", //必须添加这个后台才可以获取
        url: '../../messages/get_all_message',
        success: function(msg){ 
          if(msg){ 
            var all_content = $('#all_content');
              if(all_content[0] == undefined)
                clearTimeout(getAllMessage);
              else{  
                if (all_content[0].childElementCount >= 4)
                  all_content.html(msg); 
                else
                  all_content.append(msg);
              }
          }
        },
      });
      all_message_timeout = setTimeout(function() {getAllMessage();}, 2000);
    };


   //群聊向后台发送请求
    function postAllNew(){ 
        var news = document.getElementById("all_new").value;
        if (news != ""){  
           //获取时间
           var date = new Date();
	         var day = new Array("星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六")[date.getDay()];
	         var hour = date.getHours() < 10 ? "0" + date.getHours() : date.getHours();
           var minute = date.getMinutes() < 10 ? "0" + date.getMinutes() : date.getMinutes();
	         var second = date.getSeconds() < 10 ? "0" + date.getSeconds() : date.getSeconds();
           var date_time = day + hour + "-" + minute + "-" +  second;
           var all_content = $('#all_content');
           //注释掉直接显示内容 
           //-------------- 
          // var string = "<div><font color=#ffcc00><?php echo $user["name"]?></font>(" +  date_time + ")说:" + news + "</div>";
          // if (all_content[0].childElementCount >= 4)
          //   all_content.html(string); 
          // else
          //   all_content.append(string);
           $.ajax({ 
              type: 'post',
              cache: false,
              contentType: "application/x-www-form-urlencoded; charset=utf-8", //必须添加这个后台才可以获取
              url: '../../messages/all_message',
              failure: function(){ 
                alert('发送失败!');
              },
              data:  { 
                content: $("#all_new").val(),
                date_time: date_time,
                send_name: '<?php echo $user["name"]?>',
              },
           });
        }else{ 
          alert('内容不能为空')
        }
    };

    //悄悄话向后台发送请求
    function postNew(){ 
        var news = document.getElementById("new").value;
        if (news != ""){  
           //获取时间
           var date = new Date();
	         var day = new Array("星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六")[date.getDay()];
	         var hour = date.getHours() < 10 ? "0" + date.getHours() : date.getHours();
           var minute = date.getMinutes() < 10 ? "0" + date.getMinutes() : date.getMinutes();
	         var second = date.getSeconds() < 10 ? "0" + date.getSeconds() : date.getSeconds();
           var date_time = day + hour + "-" + minute + "-" +  second;
           var new_content = $('#new_content');
           //-------------- 
           var string = "<div><font color=#ffcc00>我</font>(" +  date_time + ")说:" + news + "</div>";
           if (new_content[0].childElementCount >= 4)
             new_content.html(string); 
           else
             new_content.append(string);

           $.ajax({ 
              type: 'post',
              cache: false,
              contentType: "application/x-www-form-urlencoded; charset=utf-8", //必须添加这个后台才可以获取
              url: '../../messages/add',
              failure: function(){ 
                alert('发送失败!');
              },
              data:  { 
                content: $("#new").val(),
                date_time: date_time,
                send_name: '<?php echo $user["name"]?>',
                user_id: user_id,
              },
           });
        }else{ 
          alert('内容不能为空')
        }
    };

    //用于清空文本框
    function clearNew(){ 
      document.getElementById("new").value = "";
    };

    //清空屏幕!
    function clearContent(){ 
      $('#new_content').html("");
    }

  //Mouse
  //用来定时获取后台数据，查看是否有信息
    function getMessage(){ 
       $.ajax({ 
         type: 'get',
         cache: false,
         contentType: "application/x-www-form-urlencoded; charset=utf-8", //必须添加这个后台才可以获取
         url: '../../messages/get_message',
         success: function(msg){ 
           if(msg){ 
             var id = msg.substr(msg.indexOf("id"));
             msg = msg.replace(id,"");
             id = parseInt( id.replace("id","") );
             if(jGrwol_type == 1)
               getjGrowl(id);
             setTimeout(function(){ 
                var new_content = $('#new_content');
                if(new_content[0] == undefined){  
                  new_content.html(msg);
                }
                else{  
                  if (new_content[0].childElementCount >= 4)
                    new_content.html(msg); 
                  else
                    new_content.append(msg);
                }
             },1000);
             clearTimeout(); //清除时间定时
           }
         },
       });
     //window.setTimeout(function() {getMessage();}, 3000);
     };
     getMessage();
	</script>
		<style type="text/css">
			div.jGrowl-notification {
        height:       190px;
			}
		</style>
<?php endif; ?>
<! 用户聊天窗口结束>

    <div id="two" class="jGrowl top-right"></div>
      <div id="content">
        <div class="inner">
          <div class="main-bd clearfix">
            <div class="wrap clearfix">
                <?php echo $content_for_layout ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="footer">
      <div id="b" class="clearfix">
        <div class="bl"></div>
        <div class="bc"></div>
        <div class="br"></div>
      </div>
      <div class="bd">
        <div id="footlinks">
          <p><span class="scrolltop" onclick="window.scrollTo(0,0);">TOP</span></p>
        </div>
        <p id="copyright">
          Copyright © 2011-2012
          <em>HzuPlay.com</em>
          [
          <a href="#" target="_blank"> HzuPlay电子竞技交流平台 </a>
          ]
        </p>
    </div>
  </body>
</html>
