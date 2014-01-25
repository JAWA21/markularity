<div class="categories form">
<?php echo $this->Form->create('Category'); ?>
	<fieldset>
		<legend><?php echo __('Edit Category'); ?></legend>
	<?php
		echo $this->Form->input('category_name', array('label' => __('Category:')));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Edit Category')); ?>
</div>


<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li>
			<?php echo $this->Html->link(__('Top 10'), array(
					'controller' => 'bookmarks',
					'action' => 'index'
			)); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('Your Bookmarks'), array(
					'controller' => 'bookmarks',
					'action' => 'view'
			)); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('New Bookmark'), array(
				'controller' => 'bookmarks',	
				'action' => 'add'
			)); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('Categories'), array('action' => 'index')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('Add Category'), array('action' => 'add')); ?>
		</li>
	</ul>
</div>
