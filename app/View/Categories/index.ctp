<div class="categories index">
	<h2><?php echo __('Categories'); ?></h2>
	
	<table>
		<tr>
			<th>Category</th>
			<th>Action</th>
		</tr>

		<?php foreach ($categories as $category): ?>
		<tr>
			<td>
				<?php echo $category['Category']['category_name']; ?>
			</td>
			<td>
				<?php
					echo $this->Html->link(
						'Edit | ',
						array('action' => 'edit', $category['Category']['category_id'])
					);
					echo $this->Form->postLink(
						'Delete',
						array('action' => 'delete', $category['Category']['category_id']),
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
			<?php echo $this->Html->link(__('Top 10'), array('action' => 'index')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('Your Bookmarks'), array('action' => 'view')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('Add Bookmark'), array('action' => 'add')); ?>
		</li>
		<li>
			<h3>Categories</h3>
		</li>
		<li>
			<?php echo $this->Html->link(__('Categories'), array(
					'controller' => 'categories',
					'action' => 'index',
			)); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('Add Category'), array(
					'controller' => 'categories',
					'action' => 'add',
 			)); ?>
		</li>
	</ul>
</div>
