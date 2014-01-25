<div class="bookmarks index">
	<h2><?php echo __('Top 10 Bookmarks'); ?></h2>
	
	<table>
		<tr>
			<th>Bookmark</th>
			<th>Category</th>
			<th>Rank</th>
			<th>Thumbs</th>
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
		</tr>
		<?php endforeach; ?>
	</table>

</div>


<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li>
			<?php echo $this->Html->link(__('View Bookmarks'), array('action' => 'view')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('New Bookmark'), array('action' => 'add')); ?>
		</li>
	</ul>
</div>
