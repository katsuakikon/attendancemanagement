<div class="container">
	<h1>アカウント登録</h1>
	<?php echo $this->Form->create('User'); ?>
	<table class="table table-bordered table-striped">
		<tbody>
			<tr>
				<th>ログインID</th>
				<td>
					<?php echo $this->Form->input('username', array('class' => 'form-control', 'label' => false, 'div' => false, 'error' => false, 'required' => false )); ?>
				</td>
			</tr>
			<tr>
				<th>パスワード</th>
				<td>
					<?php echo $this->Form->input('password', array('class' => 'form-control', 'label' => false, 'div' => false, 'error' => false, 'required' => false )); ?>
				</td>
			</tr>
			<tr>
				<th>権限</th>
				<td>
					<?php echo $this->Form->input('role', array('options' => array('admin' => '管理者', 'user' => 'ユーザー'), 'class' => 'form-control', 'label' => false, 'div' => false, 'error' => false, 'required' => false )); ?>
				</td>
			</tr>
		</tbody>
	</table>
	<button type="submit" class="btn btn-primary btn-lg btn-block">登録する</button>
</form>
</div>
