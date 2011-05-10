<div id="login_main_container_s">
    <div class="header_roundedcornr_top_370248"><div>&nbsp;</div></div>
    <div id = "pop_form">
    <div style="width=150px; height=0.5px"></div>
    <div id="denglu"><b>用户注册</b></div>
        <table>
          <?php echo $this->Form->create('User',array('id' => 'commentForm'));?>
            <tr>
                <td><?php echo $this->Form->input('login',array('label' => "帐号:"));?></td>
            </tr>
            <tr>
                <td><?php echo $this->Form->input('name',array('label' => "姓名:"));?></td>
            </tr>
            <tr>
                <td><?php echo $this->Form->input('email',array('label' => "邮箱:"));?></td>
            </tr>
            <tr>
                <?php
                  $options = array('男' => '男', '女' => '女');
                ?>
                <td>
                  <div id='sex'>
                    性别:
                    <?php echo $this->Form->select('sex',$options,array('escape' => false, 'deafult' => '男'));?>
                  </div>
                </td>
            </tr>
            <tr>
                <td><?php echo $this->Form->input('password',array('label' => "密码:", 'type' => 'password')); ?></td>
            </tr>
            <tr>
                <td><?php echo $this->Form->input('password_confirmation',array('label' => "密码确认:", 'type' => 'password')); ?></td>
            </tr>
        </table>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <?php echo $this->Form->button('确定');?>
    </div>
    <div style="clear: both"></div>
    <div class="footer_roundedcornr_bottom_850729"><div>&nbsp;</div></div>
</div>
