<div class="categories form">
<?php echo $this->Form->create('Category'); ?>
	<fieldset>
		<legend><?php echo __('Add Category'); ?></legend>
	<?php
		echo $this->Form->input('category_name', array('label' => __('Category:')));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Add Category')); ?>
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
