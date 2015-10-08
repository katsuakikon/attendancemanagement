<div class="attendanceConfigs index">
	<h2><?php echo __('Attendance Configs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
		<th><?php echo $this->Paginator->sort('year', '年'); ?></th>
		<th><?php echo $this->Paginator->sort('month', '月'); ?></th>
		<th>プロジェクト</th>
		<th>業務区分</th>
		<th>開始時間</th>
		<th>終了時間</th>
		<th>ステータス</th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($attendanceConfigs as $attendanceConfig): ?>
	<tr>
		<td><?php echo h($attendanceConfig['AttendanceConfig']['year']); ?>&nbsp;</td>
		<td><?php echo h($attendanceConfig['AttendanceConfig']['month']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($projects[$attendanceConfig['Project']['id']], array('controller' => 'mst_projects', 'action' => 'view', $attendanceConfig['Project']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($serviceCategories[$attendanceConfig['ServiceCategory']['id']], array('controller' => 'mst_service_categories', 'action' => 'view', $attendanceConfig['ServiceCategory']['id'])); ?>
		</td>
		<td><?php echo h($attendanceConfig['AttendanceConfig']['start_time'] . ':' . sprintf('%02d', $attendanceConfig['AttendanceConfig']['start_minutes'])); ?>&nbsp;</td>
		<td><?php echo h($attendanceConfig['AttendanceConfig']['end_time'] . ':' . sprintf('%02d', $attendanceConfig['AttendanceConfig']['end_minutes'])); ?>&nbsp;</td>
		<td><?php echo h($status[$attendanceConfig['AttendanceConfig']['closing_flg']]); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $attendanceConfig['AttendanceConfig']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $attendanceConfig['AttendanceConfig']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Attendance Config'), array('action' => 'add')); ?></li>
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
