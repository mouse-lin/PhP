<div class="mainbox forumlist">
  <div class="hd">
    <h3>
      <a href="../../games">
        游戏专区查看
      </a>
      <a href="../../games/add">
        游戏添加
      </a>
    </h3>
  </div>
<div class="games index">
	<h2><?php echo __('游戏');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('图片');?></th>
			<th><?php echo $this->Paginator->sort('游戏名');?></th>
			<th><?php echo $this->Paginator->sort('游戏介绍');?></th>
			<th><?php echo $this->Paginator->sort('创建时间');?></th>
			<th class="actions"><?php echo __('方法');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($games as $game):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo h($game['Game']['id']); ?>&nbsp;</td>
		<td><img src="<?php echo $game['Game']['image_url'];?>.jpg"</td>
		<td><?php echo h($game['Game']['name']); ?>&nbsp;</td>
		<td><?php echo h($game['Game']['introduce']); ?>&nbsp;</td>
		<td><?php echo h($game['Game']['created_at']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('编辑'), array('action' => 'edit', $game['Game']['id'])); ?>
			<?php echo $this->Form->postLink(__('删除'), array('action' => 'delete', $game['Game']['id']), null, __('是否确定需要删除 %s?', $game['Game']['name'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('页面 %page% of %pages%, 显示 %current% 记录在 %count%, 开始 %start%, 结束 %end%')
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('前一页'), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('下一页') . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
</div>
