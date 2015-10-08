<div class="mstProjects form">
<?php echo $this->Form->create('MstProject'); ?>
	<fieldset>
		<legend><?php echo __('Add Mst Project'); ?></legend>
	<?php
		echo $this->Form->input('mst_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Mst Projects'), array('action' => 'index')); ?></li>
	</ul>
</div>
