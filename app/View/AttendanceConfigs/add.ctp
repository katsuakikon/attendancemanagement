<div class="attendanceConfigs form">
<?php echo $this->Form->create('AttendanceConfig'); ?>
	<fieldset>
		<legend><?php echo __('勤怠設定'); ?></legend>
	<div class='out-set'>
		<div class='in-set'>
	<?php
		echo $this->Form->input('year', array(
			'label' => '年',
			'dateFormat' => 'Y',
            'minYear' => date('Y')-1,
            'maxYear' => date('Y')+1,
            'selected' => date('Y')
			)
		);
	?>
		</div>
		<div class='in-set'>
	<?php
		echo $this->Form->input('month', array(
			'label' => '月',
			'dateFormat' => 'm',
			'monthNames' => false,
       		'selected'=>date('m')));
	?>
		</div>
		<div class='in-set'>
	<?php
		echo $this->Form->input('project_id', array('label' => 'プロジェクト名'));
	?>
		</div>
		<div class='in-set'>
	<?php
		echo $this->Form->input('service_category_id', array('label' => '業務区分'));
	?>
		</div>
	</div>
	<div class='out-set'>
		<div class='in-set'>
	<?php
		echo $this->Form->input('start_time', array('label' => '開始時刻（時）', 'type'=>'select',
       'options'=>$times, 'selected'=>9));
    ?>
		</div>
		<div class='in-set'>
	<?php
		echo $this->Form->input('start_minutes', array('label' => '開始時刻（分）', 'type'=>'select',
       'options'=>$minutes));
	?>
		</div>
		<div class='in-set'>
	<?php
		echo $this->Form->input('end_time', array('label' => '終了時刻（時）', 'type'=>'select',
       'options'=>$times, 'selected'=>18));
	?>
		</div>
		<div class='in-set'>
	<?php
		echo $this->Form->input('end_minutes', array('label' => '終了時刻（分）', 'type'=>'select',
       'options'=>$minutes));
	?>
		</div>
	</div>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

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
