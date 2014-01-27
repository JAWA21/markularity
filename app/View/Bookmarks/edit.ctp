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
				'Sports' => 'Sports',
				'Tech' => 'Tech',
				'Psychology' => 'Psychology',
				'Health' => 'Health',
				'Fitnes' => 'Fitnes',
				'Humor' => 'Humor',
				'Gaming' => 'Gaming',
				'Design' =>'Design',
				'Food' => 'Food',
				'Inspiration' =>'Inspiration',
				'Geekery' => 'Geekery',
				'Code' => 'Code',
				'Travel' => 'Travel',
				'Liturature' => 'Liturature',
				'Automobiles' => 'Automobiles',
				'Motorcycles' => 'Motorcycles',
				'News' => 'News',
				'Mushy' => 'Mushy',
				'Insanity' => 'Insanity',
				'Music' => 'Music',
				'Movies' => 'Movies',
				'Art' => 'Art',
				'Educational' => 'Educational',
				'Fantasy' => 'Fantasy',
				'Events' => 'Events',
				'Misc' => 'Misc',
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
<?php echo $this->Form->end(__('Edit Bookmark')); ?>
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
	</ul>
</div>
