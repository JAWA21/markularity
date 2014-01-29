<div class="bookmarks index">
<h1>Welcome <?php echo $_SESSION['Auth']['User']['firstname'];?>!</h1>

	<h2><?php echo __('Top 10 Bookmarks'); ?></h2>
	<table class="table">
		<thead>
			<tr>
				<th>Bookmark</th>
				<th>Category</th>
				<th>Rank</th>
				<th>Thumbs</th>
			</tr>
		<thead>

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
				<?php echo $bookmark['Bookmark']['rank']; ?>
			</td>

			<td>
				<?php 
					echo $this->Html->link(
						'',
						array('action' => 'thumbUp', $bookmark['Bookmark']['bookmark_id']),
						array('class' => 'glyphicon glyphicon-thumbs-up')
					);

					echo $this->Html->link(
						'',
						array('controller' => 'Bookmarks', 'action' => 'thumbDown', $bookmark['Bookmark']['bookmark_id']),
						array('class' => 'glyphicon glyphicon-thumbs-down')
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
			<?php echo $this->Html->link(__('Top 10'), array('action' => 'index'), array('class' => 'btn btn-primary btn-block')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('Your Bookmarks'), array('action' => 'view'), array('class' => 'btn btn-primary btn-block')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('Add Bookmark'), array('action' => 'add'), array('class' => 'btn btn-primary btn-block')); ?>
		</li>
	</ul>
</div>
