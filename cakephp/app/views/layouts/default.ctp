<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>
      <?php echo "HzuPlay电子竞技交流平台" ?>
    </title>
    <link rel="stylesheet" type="text/css" href="./css/style_94.css">
    <link rel="stylesheet" type="text/css" href="./css/menu_style.css">
    <script type="text/javascript" src="./js/jquery-1.3.2.js"></script>
  </head>

  <?php echo $scripts_for_layout ?>
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
    </script>
    <ul id="navigation">
      <li class="home"><a href="" title="Home"></a></li>
      <li class="about"><a href="" title="About"></a></li>
      <li class="search"><a href="" title="Search"></a></li>
      <li class="photos"><a href="" title="Photos"></a></li>
      <li class="rssfeed"><a href="" title="Rss Feed"></a></li>
      <li class="podcasts"><a href="" title="Podcasts"></a></li>
      <li class="contact"><a href="" title="Contact"></a></li>
    </ul>
   <div id="gdlogo"><div class="logo"></div></div>
    <div id="header">
      <div class="headerwarp">
        <div class="logo">
          <a target="_blank" href="" title="HzuPlay">HzuPlay</a>
        </div>
        <div class="nav_account">
          <div class="gd_sns_right  gd">
            <a href="" class="notabs">注册</a>
            |
            <a href="">登录</a>
          </div>
          <a class="login_thumb" href=""><img src="./img/noavatar_middle.jpg"></a>
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
            当前时区 GMT+8, 现在时间是 2011-4-27 17:08
            <a href="" target="_blank">
              <br>
            </a>
          </p>
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
