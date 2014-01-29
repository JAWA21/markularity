<div class="bookmarks view">
	<h2><?php echo __('Your Bookmarks'); ?></h2>
	
	<table class="table">
		<thead>
			<tr>
				<th>Bookmark</th>
				<th>Category</th>
				<th>Popularity</th>
				<th>Thumbs</th>
				<th>Actions</th>
			</tr>
		</thead>

		<?php foreach ($bookmarks as $bookmark): ?>
		<tr>
			<td>
				<?php 
					echo $this->Html->link($bookmark['Bookmark']['title'], array(
							'action' => 'clickThrough',
							$bookmark['Bookmark']['bookmark_id'],
					),
					array('target' => '_blank'));
				?>
			</td>

			<td>
				<?php echo $bookmark['Bookmark']['category']; ?>
			</td>

			<td>
				<?php if(!isset($bookmark['Bookmark']['popularity'])){
					echo '0';
					}else
					echo $bookmark['Bookmark']['popularity']; ?>
			</td>

			<td>
				<a href="/Bookmarks/thumbUp/<? echo $bookmark['Bookmark']['bookmark_id'];?>" class="glyphicon glyphicon-thumbs-up"></a>
				<a href="/Bookmarks/thumbDown/<? echo $bookmark['Bookmark']['bookmark_id'];?>" class="glyphicon glyphicon-thumbs-down"></a>
				
			</td>

			<td>
				<?php 
					echo $this->Html->link(
						'Edit | ',
						array('action' => 'edit', $bookmark['Bookmark']['bookmark_id'])
					);
					echo $this->Form->postLink(
						'Delete',
						array('action' => 'delete', $bookmark['Bookmark']['bookmark_id']),
						array('confirm' => 'Are you sure?')
					);
				?>	
			</td>
		</tr>
		<?php endforeach; ?>
	</table>

</div>


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
