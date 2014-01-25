<div class="bookmarks form">
<?php echo $this->Form->create('Bookmark'); ?>
	<fieldset>
		<legend><?php echo __('Edit Bookmark'); ?></legend>
	<?php
		echo $this->Form->input('bookmark_id');
		echo $this->Form->input('url');
		echo $this->Form->input('title');
		echo $this->Form->input('category');
		echo $this->Form->input('date_submitted');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
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
