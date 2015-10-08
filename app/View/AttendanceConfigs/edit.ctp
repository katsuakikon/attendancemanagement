<div class="attendanceConfigs form">
<?php echo $this->Form->create('AttendanceConfig'); ?>
	<fieldset>
		<legend><?php echo __('Edit Attendance Config'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('year');
		echo $this->Form->input('month');
		echo $this->Form->input('project_id');
		echo $this->Form->input('service_category_id');
		echo $this->Form->input('start_time');
		echo $this->Form->input('start_minutes');
		echo $this->Form->input('end_time');
		echo $this->Form->input('end_minutes');
		echo $this->Form->input('created_id');
		echo $this->Form->input('modified_id');
		echo $this->Form->input('item1_id');
		echo $this->Form->input('item2_id');
		echo $this->Form->input('closing_flg');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AttendanceConfig.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('AttendanceConfig.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Attendance Configs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mst Projects'), array('controller' => 'mst_projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'mst_projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mst Service Categories'), array('controller' => 'mst_service_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service Category'), array('controller' => 'mst_service_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendance Times'), array('controller' => 'attendance_times', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendance Time'), array('controller' => 'attendance_times', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendance Expenses'), array('controller' => 'attendance_expenses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendance Expense'), array('controller' => 'attendance_expenses', 'action' => 'add')); ?> </li>
	</ul>
</div>
