<?php $weekjp = Configure::read("week_jp"); ?>
<div>
	<h2><?php echo __('Attendance Times');?></h2>
	<?php echo $this->Form->create('AttendanceConfig', array('class' => 'search')); ?>
	<fieldset>
		<legend><?php echo __('勤務表選択'); ?></legend>
	<div class='out-set'>
		<div class='in-set-s'>
	<?php
		echo $this->Form->input('year', array(
			'label' => '年',
			'dateFormat' => 'Y',
            'minYear' => date('Y')-3,
            'maxYear' => date('Y'),
            'selected' => $year,
            'required' => false,
            'div' => false,
			)
		);
	?>
		</div>
		<div class='in-set-s'>
	<?php
		echo $this->Form->input('month', array(
			'label' => '月',
			'dateFormat' => 'm',
			'monthNames' => false,
       		'selected'=>$month,
       		'required' => false,
            'div' => false,
       		)
		);
	?>
		</div>
		<div class='in-set'>
	<?php
		echo $this->Form->input('project_id', array('label' => 'プロジェクト名', 'div' => false, 'required' => false));
	?>
		</div>
		<div class='in-set'>
	<?php
		echo $this->Form->input('service_category_id', array('label' => '業務区分', 'div' => false, 'required' => false));
	?>
		</div>
	</div>
	</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
		<th><?php echo __('プロジェクト'); ?></th>
		<th><?php echo __('日付'); ?></th>
		<th><?php echo __('開始時刻'); ?></th>
		<th><?php echo __('終了時刻'); ?></th>
		<th><?php echo __('備考'); ?></th>
		<th><?php echo __('有給'); ?></th>
		<th><?php echo __('その他明細額'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($VAtTimes as $attendanceTime): ?>
	<?php if ($attendanceTime['VAtTime']['holiday_flg']): ?>
	<tr class="holiday_line">
	<?php else: ?>
	<tr>
	<?php endif; ?>
		<td><?php echo h($attendanceTime['VAtTime']['project_name'] . '-' . $attendanceTime['VAtTime']['service_category_name']); ?>&nbsp;</td>
		<td><?php
			$day = $attendanceTime['VAtTime']['day'];
			echo h($day);
			echo '(' . $weekjp[date('w', strtotime($year . '-' . $month . '-' . $day))] . ')';
			?>&nbsp;
		</td>
		<td><?php if ($attendanceTime['VAtTime']['start_date']) { echo  h(date('H:i', strtotime($attendanceTime['VAtTime']['start_date']))); } ?>&nbsp;</td>
		<td><?php if ($attendanceTime['VAtTime']['end_date']) { echo h(date('H:i', strtotime($attendanceTime['VAtTime']['end_date']))); } ?>
			&nbsp;
			<?php
				$renkin = date('d', strtotime($attendanceTime['VAtTime']['end_date'])) - $attendanceTime['VAtTime']['day'];
				if($renkin > 0) {
					echo '(翌)';
				}
			?>
		</td>
		<td><?php echo h($attendanceTime['VAtTime']['remarks']); ?>&nbsp;</td>
		<td><?php echo h($attendanceTime['VAtTime']['paid_holiday_flg']); ?>&nbsp;</td>
		<td><?php echo h($attendanceTime['VAtTime']['cost']); ?>&nbsp;</td>

		<td class="actions">
			<form id="AttendanceTimeEditForm" accept-charset="utf-8" method="post" action="/attendancemanagement/AttendanceTimes/edit">
				<input type="hidden" name="id" value="<?php echo $attendanceTime['VAtTime']['id']; ?>">
				<input type="hidden" name="project_name" value="<?php echo $attendanceTime['VAtTime']['project_name']; ?>">
				<input type="hidden" name="service_category_name" value="<?php echo $attendanceTime['VAtTime']['service_category_name']; ?>">
				<input type="hidden" name="year" value="<?php echo $attendanceTime['VAtTime']['year']; ?>">
				<input type="hidden" name="month" value="<?php echo $attendanceTime['VAtTime']['month']; ?>">
				<input type="hidden" name="day" value="<?php echo $attendanceTime['VAtTime']['day']; ?>">
				<input type="hidden" name="edit" value="1">
				<div class="submit">
				<input type="submit" value="編集">
				</div>
			</form>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>
<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Attendance Time'), array('action' => 'add')); ?></li>
	</ul>
</div> -->
