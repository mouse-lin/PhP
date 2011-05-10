<div id="login_main_container_f">
    <div class="header_roundedcornr_top_370248"><div>&nbsp;</div></div>
    <div id = "pop_form">
    <div style="width=250px; height=1px"></div>
    <div id="denglu"><b>用户登录</b></div>
      <?php if($error):?>
        <div id="error_flash">帐号或密码错误</div>
      <?php endif; ?>
        <table>
          <?php echo $this->Form->create('User', array('action' => 'login'));?>
            <tr>
                <td><?php echo $this->Form->input('login',array('label' => "帐号:"));?></td>
            </tr>
            <tr>
                <td><?php echo $this->Form->input('password',array('label' => "密码:", 'type' => 'password')); ?></td>
            </tr>
        </table>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <?php echo $this->Form->button('确定');?>
         <input name="cs" type="button" class="button" id="cs" value="清空" onClick="deleteDatas()">
    </div>
    <div style="clear: both"></div>
    <div class="footer_roundedcornr_bottom_850729"><div>&nbsp;</div></div>
</div>
