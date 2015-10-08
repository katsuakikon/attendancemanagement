<div>
	<?php echo $year . '年' . $month . '月' . ':' . $project . '-' . $service; ?>
</div>
<div class="attendanceTimes form">
<?php echo $this->Form->create('AttendanceTime'); ?>
	<fieldset>
		<legend><?php echo __('Edit Attendance Time'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('start_date', array('type' => 'datetime', 'dateFormat' => '', 'timeFormat' => '24', 'label' => '開始時間'));
		echo $this->Form->input('end_date', array('type' => 'date', 'dateFormat' => 'D', 'label' => '終了日'));
		echo $this->Form->input('end_date', array('type' => 'datetime', 'dateFormat' => '', 'timeFormat' => '24', 'label' => '終了時間'));
		echo $this->Form->input('paid_holiday_flg', array('label' => '有給休暇申請'));
		echo $this->Form->input('remarks', array('label' => '備考'));
	?>
	<input type="hidden" name="AttendanceTime[start_date][year]" value="<?php echo $year; ?>">
	<input type="hidden" name="AttendanceTime[start_date][month]" value="<?php echo $month; ?>">
	<input type="hidden" name="AttendanceTime[start_date][day]" value="<?php echo $day; ?>">
	<input type="hidden" name="AttendanceTime[end_date][year]" value="<?php echo $year; ?>">
	<input type="hidden" name="AttendanceTime[end_date][month]" value="<?php echo $month; ?>">
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AttendanceTime.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('AttendanceTime.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Attendance Times'), array('action' => 'index')); ?></li>
	</ul>
</div>
