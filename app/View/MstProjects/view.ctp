<div class="mstProjects view">
<h2><?php echo __('Mst Project'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mstProject['MstProject']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mst Name'); ?></dt>
		<dd>
			<?php echo h($mstProject['MstProject']['mst_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mst Project'), array('action' => 'edit', $mstProject['MstProject']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mst Project'), array('action' => 'delete', $mstProject['MstProject']['id']), array(), __('Are you sure you want to delete # %s?', $mstProject['MstProject']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mst Projects'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mst Project'), array('action' => 'add')); ?> </li>
	</ul>
</div>
