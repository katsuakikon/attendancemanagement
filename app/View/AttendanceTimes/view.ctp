<div class="attendanceTimes view">
<h2><?php echo __('Attendance Time'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($attendanceTime['AttendanceTime']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('At Config Id'); ?></dt>
		<dd>
			<?php echo h($attendanceTime['AttendanceTime']['at_config_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Day'); ?></dt>
		<dd>
			<?php echo h($attendanceTime['AttendanceTime']['day']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($attendanceTime['AttendanceTime']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($attendanceTime['AttendanceTime']['end_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paid Holiday Flg'); ?></dt>
		<dd>
			<?php echo h($attendanceTime['AttendanceTime']['paid_holiday_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Holiday Flg'); ?></dt>
		<dd>
			<?php echo h($attendanceTime['AttendanceTime']['holiday_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($attendanceTime['AttendanceTime']['remarks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($attendanceTime['AttendanceTime']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($attendanceTime['AttendanceTime']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Id'); ?></dt>
		<dd>
			<?php echo h($attendanceTime['AttendanceTime']['created_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified Id'); ?></dt>
		<dd>
			<?php echo h($attendanceTime['AttendanceTime']['modified_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Attendance Time'), array('action' => 'edit', $attendanceTime['AttendanceTime']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Attendance Time'), array('action' => 'delete', $attendanceTime['AttendanceTime']['id']), array(), __('Are you sure you want to delete # %s?', $attendanceTime['AttendanceTime']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendance Times'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendance Time'), array('action' => 'add')); ?> </li>
	</ul>
</div>
