<div class="bookmarks form">

<?php echo $this->Form->create('Bookmark'); ?>
	<fieldset>
		<legend><?php echo __('Add Bookmark'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('url');

		echo $this->Form->input('category', array(
			'type' => 'select',
			'options' => array(
					'Sports',
					'Tech',
					'Psychology',
					'Health',
					'Fitness',
					'Humor',
					'Gaming',
					'Design',
					'Food',
					'Inspiration',
					'Geekery',
					'Code',
					'Travel',
					'Liturature',
					'Automobiles',
					'Motorcycles',
					'News',
					'Mushy',
					'Insanity',
					'Music',
					'Movies',
					'Art',
					'Educational',
					'Fantasy',
					'Events',
					'Misc',
				),
		));

		echo $this->Form->input('date_submitted', array(
				'type' => 'hidden',
				'value' => $this->Time->format('%F %jS, %Y %h:%i %A', '2011-08-22 11:53:00'),
			));

		//once reg/log working, how to get the user_id from session
		echo $this->Form->input('user_id', array(
				'type' => 'hidden',
				'value' => 18,
			));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Add Bookmark')); ?>
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
