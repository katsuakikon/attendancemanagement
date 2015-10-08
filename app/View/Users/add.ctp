<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('username', array('label' => 'アカウントID'));
		echo $this->Form->input('password', array('label' => 'パスワード'));
		echo $this->Form->input('no', array('label' => '社員番号'));
		echo $this->Form->input('family_name', array('label' => '姓'));
		echo $this->Form->input('first_name', array('label' => '名'));
		echo $this->Form->input('role', array('options' => array('admin' => '管理者', 'user' => 'ユーザー')));
		echo $this->Form->input('start_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
	</ul>
</div>