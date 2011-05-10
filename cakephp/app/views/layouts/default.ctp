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
    <script type="text/javascript" src="../../js/jquery-1.3.2.js"></script>
    <script type="text/javascript" src="../../js/login.js"></script>
    <script type="text/javascript" src="../../js/clock.js"></script>
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
          UserVoice.PopIn.show('600px', '300px', "/users/signup");
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
            <font color='#ffcc00' size=2>
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
