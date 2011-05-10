<div id="foruminfo" class="clearfix">
  <div id="userinfo">
    <div id="nav">
      <a href="">HzuPlay电子竞技交流平台</a>
    </div>
  </div>
  <div style="float:right; width:610px; ">
    <form action="" name="quick_go_forum" style="float:right; height:37px">
      <input type="text" id="forum_name" name="forum_name" size="35" value="快速直达版块..."autocomplete="off" class="ac_input">&nbsp;
      <button type="button" value="提交">提交</button>
    </form>
  </div>
</div>

<div class="mainbox forumlist">
  <div class="hd">
    <h3>
      <a href="http://bbs.duowan.com/index.php?gid=59">热门游戏专区</a>
    </h3>
  </div>
</div>

<div class="bd">
  <! 最热门游戏 >
    <?php $time = 0 ?>
  	<?php
  	  foreach ($hot_games as $hot_game):
  	?>
    <?php if($time == 0){ 
      echo " <table id='category_59' summary='category59' cellspacing='0' cellpadding='0' style=''> <tbody> <tr>";
    } 
    ?>
        <th width="33%", class="new">
          <table>
            <tbody>
              <tr>
                <td align="left" valign="top" style="width:1px;">
                  <a href="#">
                    <img style="margin-right: 10px" src= "<?php echo $hot_game["Game"]["image_url"]?>.jpg" align="left" alt="" border="0">
                  </a>
                </td>
                <td align="left" valign="top">
                  <a href="#">
                    <b><?php echo $hot_game["Game"]["name"]?></b>
                  </a>
                  <br>
                  <span class="smalltxt">
                    <?php echo $hot_game["Game"]["introduce"] ?>！&nbsp;|&nbsp;
                    <a href="#">
                      <font color="blue">进入专区</font>
                    </a>
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
        </th>

    <?php if($time == 2){
      echo "</tr></tbody></table>";
    } ?>
    <?php $time +=1 ?>
    <?php if($time == 3){ $time = 0; }?>
 <?php endforeach; ?>
</div>

<div class="mainbox forumlist">
  <div class="hd">
    <h3>
      <a href="">
        最期待游戏专区
      </a>
    </h3>
  </div>
</div>

<div class="bd">
    <?php $time_s = 0 ?>
  	<?php
  	  foreach ($expert_games as $expert_game):
  	?>
    <?php if($time_s  == 0){ 
      echo ' <table id="category_1107" summary="category1107" cellspacing="0" cellpadding="0" style=""> <tbody> <tr>';
    } 
    ?>
        <th width="33%", class="new">
          <table>
            <tbody>
              <tr>
                <td align="left" valign="top" style="width:1px;">
                  <a href="#">
                    <img style="margin-right: 10px" src= "<?php echo $expert_game["Game"]["image_url"]?>.jpg" align="left" alt="" border="0">
                  </a>
                </td>
                <td align="left" valign="top">
                  <a href="#">
                    <b><?php echo $expert_game["Game"]["name"]?></b>
                  </a>
                  <br>
                  <span class="smalltxt">
                    <?php echo $expert_game["Game"]["introduce"] ?>！&nbsp;|&nbsp;
                    <a href="#">
                      <font color="blue">进入专区</font>
                    </a>
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
        </th>

    <?php if($time_s  == 2){
      echo "</tr></tbody></table>";
    } ?>
    <?php $time_s  +=1 ?>
    <?php if($time_s  == 3){ $time_s  = 0; }?>
 <?php endforeach; ?>
  </table>
</div>

<div class="mainbox forumlist">
  <div class="hd">
    <h3>
      <a href="http://bbs.duowan.com/index.php?gid=294">
        其他专区
      </a>
    </h3>
  </div>
</div>

<div class="bd">

    <?php $time_t = 0 ?>
  	<?php
  	  foreach ($other_games as $other_game):
  	?>
    <?php if($time_t  == 0){ 
      echo ' <table id="category_1107" summary="category1107" cellspacing="0" cellpadding="0" style=""> <tbody> <tr>';
    } 
    ?>
        <th width="33%", class="new">
          <table>
            <tbody>
              <tr>
                <td align="left" valign="top" style="width:1px;">
                  <a href="#">
                    <img style="margin-right: 10px" src= "<?php echo $other_game["Game"]["image_url"]?>.jpg" align="left" alt="" border="0">
                  </a>
                </td>
                <td align="left" valign="top">
                  <a href="#">
                    <b><?php echo $other_game["Game"]["name"]?></b>
                  </a>
                  <br>
                  <span class="smalltxt">
                    <?php echo $other_game["Game"]["introduce"] ?>！&nbsp;|&nbsp;
                    <a href="#">
                      <font color="blue">进入专区</font>
                    </a>
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
        </th>

    <?php if($time_t  == 2){
      echo "</tr></tbody></table>";
    } ?>
    <?php $time_t  +=1 ?>
    <?php if($time_t  == 3){ $time_t  = 0; }?>
 <?php endforeach; ?>
 </table>
</div>
