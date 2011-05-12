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
    <script type="text/javascript" src="../../js/jquery-1.3.2.js"></script>
    <script type="text/javascript" src="../../js/login.js"></script>
    <script type="text/javascript" src="../../js/clock.js"></script>
    <script type="text/javascript" src="../../js/jquery.jgrowl.js"></script>

    <script type="text/javascript" src="../../js/ext-base-debug.js"></script>
    <script type="text/javascript" src="../../js/ext-all-debug.js"></script>

  </head>

  <body>
  <! 导航 >
    <script type="text/javascript">
      $(function() {
        $('#navigation a').stop().animate({
          'marginLeft': '-85px'
        },
        1000);

        $('#navigation > li').hover(function() {
          $('a', $(this)).stop().animate({
            'marginLeft': '-2px'
          },
          200);
        },
        function() {
          $('a', $(this)).stop().animate({
            'marginLeft': '-85px'
          },
          200);
        });
      });

      function loginHandler() { 
          UserVoice.PopIn.show('600px', '300px', "/users/login");
      };

      function signupHandler() { 
          UserVoice.PopIn.show('600px', '400px', "/users/signup");
      }
    </script>
    <ul id="navigation">
      <li class="home"><a href="../homes" title="主页"></a></li>
      <li class="hot_games"><a href="../games/hot_game" title="热门游戏"></a></li>
      <li class="expert_games"><a href="../games/expert_game" title="期待游戏"></a></li>
      <li class="other_games"><a href="../games/other_game" title="其他游戏"></a></li>
      <li class="contact"><a href="" title="联系我们"></a></li>
      <?php
        if($user):
      ?>
      <li class="setting"><a href="" title="个人设置"></a></li>
      <li class="admin"><a href="" title="管理"></a></li>
      <?php
        endif;
      ?>
    </ul>
   <div id="gdlogo"><div class="logo"></div></div>
    <div id="header">
      <div class="headerwarp">
        <div class="logo">
          <a target="_blank" href="" title="HzuPlay"><b>HzuPlay</b></a>
        </div>

        <! 时间动态显示(js实现) >
        <span id ='clock' style="float:left; margin-right:6px;"> 
          <SCRIPT type=text/javascript>
              var clock = new Clock();
              clock.display(document.getElementById("clock"));
            </SCRIPT>
        </span>

        <div class="nav_account">
          <div class="gd_sns_right  gd">
            <?php if($user): ?>
            <font color='#ffcc00' size=1>
              <b><?php echo $user['name'];?></b>
            </font>
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
            <li id="plugin" class="dropmenu" onmouseover="showMenu(this.id)">
              <a href="">论坛应用</a>
              |
            </li>
          </ul>
        </div>
      </div>

<?php
  if($user):
?>
  <!Mouse >
  <! 用来显示用户信息以及聊天窗口 >
		<script type="text/javascript">
      new_type = 1;
	  	(function($){
	  		$(document).ready(function(){
	  			$.jGrowl("当前在线用户: <br> <?php foreach( $on_line_users as $on_line_user ):?> <a href=# onclick=getjGrowl(<?php echo $on_line_user["User"]["id"];?>,'<?php echo $on_line_user["User"]["name"]?>')><font color=#ffcc00> <?php echo $on_line_user["User"]["name"];?> </font></a><br> <?php endforeach;?>",
            { 
            sticky: true,
            header: "欢迎 <font color=#ffcc00><?php echo $user['name']?> </font>| 当前在线用户人数: <?php
              echo count($on_line_users)
            ?> ",
            position: "bottom-right",
          });
	  		});
	  	})(jQuery);

    //获取点击之后聊天对话框
    function getjGrowl(id,name){ 
      if(new_type == 1){ 
         var content = "<div id='new_content'></div><br>输入悄悄话(<font color=red>内容不能为空</font>):<input id='new' type='text' name='data[New][contnet]'> </input> <br> <button type='submit' onclick=postNew()>发送</button> <button type='submit' onclick=clearNew() >清空悄悄话</button> <button type='submit' onclick=clearContent()>清空屏幕</button>";
         new_type = 0;
         return $.jGrowl(content,{
           header: '悄悄话(对' +'<font color=#ffcc00>' + name + '</font>)',
           sticky: true,
           close: function(e,m,o){ 
               new_type = 1;
           }
         })
      }
    };

    //向后台发送请求
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
           //string += "<font color=#ffcc00><?php echo $user['name']?></font>  说:";
           if (new_content[0].childElementCount == 6)
             new_content.html(string); 
           else
             new_content.append(string);
           $.ajax({ 
              type: 'post',
              url: 'messages/add',
              dataType: 'json',
              data:  'id = 10'  ,
           })
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

		</script>
		<style type="text/css">
			div.jGrowl-notification {
        height:       230px;
			}
		</style>
<?php
  endif;
?>
<! 用户聊天窗口结束>

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
        <div class="bl">
        </div>
        <div class="bc">
        </div>
        <div class="br">
        </div>
      </div>
      <div class="bd">
        <div id="footlinks">
          <p>
            <span class="scrolltop" onclick="window.scrollTo(0,0);">
              TOP
            </span>
          </p>
        </div>
        <p id="copyright">
          Copyright © 2011-2012
          <em>
            HzuPlay.com
          </em>
          [
          <a href="#" target="_blank">
            HzuPlay电子竞技交流平台
          </a>
          ]
        </p>
    </div>
  </body>
</html>
