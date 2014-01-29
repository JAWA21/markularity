<?php
$btn_options = array(
	'label' => 'Add Bookmark',
	'div' => 'form-group',
	'class' => 'btn btn-lg btn-primary btn-block'
);
?>

<div class="actions centered">
	<h3><?php echo __('Actions'); ?></h3>
	<ul class='btn nav nav-stacked bullets'>
		<li>
			<?php echo $this->Html->link(__('Top 10',true), array('action' => 'index'), array('class' => 'btn btn-primary btn-block')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('Your Bookmarks'), array('action' => 'view'), array('class' => 'btn btn-primary btn-block')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('Add Bookmark'), array('action' => 'add'), array('class' => 'btn btn-primary btn-block')); ?>
		</li>
	</ul>
</div>

<div class="bookmarks form">
	<div class="form-signin">
<?php echo $this->Form->create('Bookmark'); ?>
	<fieldset>
		<legend><?php echo __('Add Bookmark'); ?></legend>
		<div class="form-group">
			<?php echo $this->Form->input('title', array('label' => 'Title', 'id' => 'title','class'=>'form-control','autofocus'=>'autofocus')); ?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->input('url', array('label' => 'Url', 'id' => 'url','class'=>'form-control')); ?>
		</div>

		<div class="btn-group">
		  	<?echo $this->Form->input('category', array(
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
		));?>
		</div>

		<?echo $this->Form->input('date_submitted', array(
				//'type' => 'hidden',
				'disabled' => 'disabled',
				'value' => $this->Time->format('%F %jS, %Y %h:%i %A'),
			));

		//once reg/log working, how to get the user_id from session
		echo $this->Form->input('user_id', array(
				'type' => 'hidden',
				'value' => $_SESSION['Auth']['User']['user_id'],
			));
	?>
	</fieldset>
<?php echo $this->Form->end(($btn_options)); ?>
</div>

