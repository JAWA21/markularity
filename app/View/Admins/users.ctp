<p>This is the users admin view</p>
<p>URL - admins/users</p>
<div class="admins index">
<table>
		<tr>
			<th>User</th>
			<th>Action</th>
		</tr>
<?php foreach ($users as $user): ?>
		<tr>
			<td>
				<?php echo $user['User']['username']; ?>
			</td>
			<td>
				<?php
					echo $this->Form->postLink(
						'Delete',
						array('action' => 'delete', $user['User']['user_id']),
						array('confirm' => 'Are you sure?')
					);
				?>
			</td>	
		</tr>
		<?php endforeach; ?>
	</table>

</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li>
			<?php echo $this->Html->link(__('Users'), array('action' => 'users')); ?>
			<?php echo $this->Html->link(__('Bookmarks'), array('action' => 'bookmarks')); ?>
		</li>
	</ul>
</div>