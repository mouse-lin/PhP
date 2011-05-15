<div class="mainbox forumlist">
  <div class="hd">
    <h3>
      <a href="../../games">
        游戏专区查看
      </a>
    </h3>
  </div>

<div class="games form">
<?php echo $this->Form->create('Game');?>
	<fieldset>
  <?php
    $options = array('hot_game' => '热门游戏', 'expert_game' => '期待游戏', 'other_game' => '其他游戏');
  ?>
 		<legend><?php __('Add Game'); ?></legend>
	<?php
		echo $this->Form->input('name',array('label' => '游戏名称'));
		echo $this->Form->input('introduce',array('label' => '游戏介绍'));
		echo $this->Form->input('image_url',array('label' => '图片地址'));
		echo $this->Form->input('created_at',array('label' => '创建时间'));
	?>
  游戏种类：
  <?php
    echo $this->Form->select('game_type',$options,array('escape' => false, 'deafult' => '男'));
  ?>
	</fieldset>
<?php echo $this->Form->end(__('保存'));?>
</div>
</div>
