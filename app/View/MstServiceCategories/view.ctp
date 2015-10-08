<div class="mstServiceCategories view">
<h2><?php echo __('Mst Service Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mstServiceCategory['MstServiceCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mst Name'); ?></dt>
		<dd>
			<?php echo h($mstServiceCategory['MstServiceCategory']['mst_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mst Service Category'), array('action' => 'edit', $mstServiceCategory['MstServiceCategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mst Service Category'), array('action' => 'delete', $mstServiceCategory['MstServiceCategory']['id']), array(), __('Are you sure you want to delete # %s?', $mstServiceCategory['MstServiceCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mst Service Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mst Service Category'), array('action' => 'add')); ?> </li>
	</ul>
</div>
