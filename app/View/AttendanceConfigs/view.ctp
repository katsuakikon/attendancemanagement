<div class="attendanceConfigs view">
<h2><?php echo __('Attendance Config'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($attendanceConfig['AttendanceConfig']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($attendanceConfig['User']['id'], array('controller' => 'users', 'action' => 'view', $attendanceConfig['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo h($attendanceConfig['AttendanceConfig']['year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Month'); ?></dt>
		<dd>
			<?php echo h($attendanceConfig['AttendanceConfig']['month']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project'); ?></dt>
		<dd>
			<?php echo $this->Html->link($attendanceConfig['Project']['id'], array('controller' => 'mst_projects', 'action' => 'view', $attendanceConfig['Project']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Service Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($attendanceConfig['ServiceCategory']['id'], array('controller' => 'mst_service_categories', 'action' => 'view', $attendanceConfig['ServiceCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Time'); ?></dt>
		<dd>
			<?php echo h($attendanceConfig['AttendanceConfig']['start_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Minutes'); ?></dt>
		<dd>
			<?php echo h($attendanceConfig['AttendanceConfig']['start_minutes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Time'); ?></dt>
		<dd>
			<?php echo h($attendanceConfig['AttendanceConfig']['end_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Minutes'); ?></dt>
		<dd>
			<?php echo h($attendanceConfig['AttendanceConfig']['end_minutes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($attendanceConfig['AttendanceConfig']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Id'); ?></dt>
		<dd>
			<?php echo h($attendanceConfig['AttendanceConfig']['created_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($attendanceConfig['AttendanceConfig']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified Id'); ?></dt>
		<dd>
			<?php echo h($attendanceConfig['AttendanceConfig']['modified_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item1 Id'); ?></dt>
		<dd>
			<?php echo h($attendanceConfig['AttendanceConfig']['item1_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item2 Id'); ?></dt>
		<dd>
			<?php echo h($attendanceConfig['AttendanceConfig']['item2_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Closing Flg'); ?></dt>
		<dd>
			<?php echo h($attendanceConfig['AttendanceConfig']['closing_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Attendance Config'), array('action' => 'edit', $attendanceConfig['AttendanceConfig']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Attendance Config'), array('action' => 'delete', $attendanceConfig['AttendanceConfig']['id']), array(), __('Are you sure you want to delete # %s?', $attendanceConfig['AttendanceConfig']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendance Configs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendance Config'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Attendance Times'); ?></h3>
	<?php if (!empty($attendanceConfig['AttendanceTime'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('At Config Id'); ?></th>
		<th><?php echo __('Day'); ?></th>
		<th><?php echo __('Start Date'); ?></th>
		<th><?php echo __('End Date'); ?></th>
		<th><?php echo __('Paid Holiday Flg'); ?></th>
		<th><?php echo __('Holiday Flg'); ?></th>
		<th><?php echo __('Remarks'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created Id'); ?></th>
		<th><?php echo __('Modified Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($attendanceConfig['AttendanceTime'] as $attendanceTime): ?>
		<tr>
			<td><?php echo $attendanceTime['id']; ?></td>
			<td><?php echo $attendanceTime['at_config_id']; ?></td>
			<td><?php echo $attendanceTime['day']; ?></td>
			<td><?php echo $attendanceTime['start_date']; ?></td>
			<td><?php echo $attendanceTime['end_date']; ?></td>
			<td><?php echo $attendanceTime['paid_holiday_flg']; ?></td>
			<td><?php echo $attendanceTime['holiday_flg']; ?></td>
			<td><?php echo $attendanceTime['remarks']; ?></td>
			<td><?php echo $attendanceTime['created']; ?></td>
			<td><?php echo $attendanceTime['modified']; ?></td>
			<td><?php echo $attendanceTime['created_id']; ?></td>
			<td><?php echo $attendanceTime['modified_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'attendance_times', 'action' => 'view', $attendanceTime['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'attendance_times', 'action' => 'edit', $attendanceTime['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'attendance_times', 'action' => 'delete', $attendanceTime['id']), array(), __('Are you sure you want to delete # %s?', $attendanceTime['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Attendance Time'), array('controller' => 'attendance_times', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Attendance Expenses'); ?></h3>
	<?php if (!empty($attendanceConfig['AttendanceExpense'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('At Config Id'); ?></th>
		<th><?php echo __('Expenses Category Id'); ?></th>
		<th><?php echo __('Day'); ?></th>
		<th><?php echo __('Cost'); ?></th>
		<th><?php echo __('Specification'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created Id'); ?></th>
		<th><?php echo __('Modified Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($attendanceConfig['AttendanceExpense'] as $attendanceExpense): ?>
		<tr>
			<td><?php echo $attendanceExpense['id']; ?></td>
			<td><?php echo $attendanceExpense['at_config_id']; ?></td>
			<td><?php echo $attendanceExpense['expenses_category_id']; ?></td>
			<td><?php echo $attendanceExpense['day']; ?></td>
			<td><?php echo $attendanceExpense['cost']; ?></td>
			<td><?php echo $attendanceExpense['specification']; ?></td>
			<td><?php echo $attendanceExpense['created']; ?></td>
			<td><?php echo $attendanceExpense['modified']; ?></td>
			<td><?php echo $attendanceExpense['created_id']; ?></td>
			<td><?php echo $attendanceExpense['modified_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'attendance_expenses', 'action' => 'view', $attendanceExpense['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'attendance_expenses', 'action' => 'edit', $attendanceExpense['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'attendance_expenses', 'action' => 'delete', $attendanceExpense['id']), array(), __('Are you sure you want to delete # %s?', $attendanceExpense['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Attendance Expense'), array('controller' => 'attendance_expenses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
