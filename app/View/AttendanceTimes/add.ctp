<div class="attendanceTimes form">
<?php echo $this->Form->create('AttendanceTime'); ?>
	<fieldset>
		<legend><?php echo __('Add Attendance Time'); ?></legend>
	<?php
		echo $this->Form->input('at_config_id');
		echo $this->Form->input('day');
		echo $this->Form->input('start_date');
		echo $this->Form->input('end_date');
		echo $this->Form->input('paid_holiday_flg');
		echo $this->Form->input('holiday_flg');
		echo $this->Form->input('remarks');
		echo $this->Form->input('created_id');
		echo $this->Form->input('modified_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Attendance Times'), array('action' => 'index')); ?></li>
	</ul>
</div>
