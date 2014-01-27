<p>This is the index admin view</p>

<div class="admins view">
	<h2><?php echo __('All Bookmarks'); ?></h2>
	
	<table>
		<tr>
			<th>Bookmark</th>
			<th>Category</th>
			<th>Rank</th>
			<th>Thumbs</th>
			<th>Delete</th>
		</tr>

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
				thumb images
				<img src="img/thumbsup.png">
				<img src="img/thumbsdown.png">
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
			<?php echo $this->Html->link(__('Users'), array('action' => 'users')); ?>
			<?php echo $this->Html->link(__('Bookmarks'), array('action' => 'bookmarks')); ?>
		</li>
	</ul>
</div>
