<div class="bookmarks view">
	<h2><?php echo __('Your Bookmarks'); ?></h2>
	
	<table class="table">
		<thead>
			<tr>
				<th>Bookmark</th>
				<th>Category</th>
				<th>Rank</th>
				<th>Thumbs</th>
				<th>Actions</th>
			</tr>
		</thead>

		<?php foreach ($bookmarks as $bookmark): ?>
		<tr>
			<td>
				<?php 
					echo $this->Html->link($bookmark['Bookmark']['title'], $bookmark['Bookmark']['url']);
				?>
			</td>

			<td>
				<?php echo $bookmark['Bookmark']['category']; ?>
			</td>

			<td>
				<?php echo $bookmark['Bookmark']['rank']; ?>
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
