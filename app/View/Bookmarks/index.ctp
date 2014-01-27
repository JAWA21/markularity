<div class="bookmarks index">
<h1>Welcome <?php echo $_SESSION['Auth']['User']['firstname'];?>!</h1>
<?php var_dump($_SESSION);?>
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
				<?php echo $this->Html->link('Thumbs up', array('controller' => 'thumbs',
					'action' => 'thumbsup')); ?>
				|
				<?php echo $this->Html->link('Thumbs down', array('controller' => 'thumbs',
					'action' => 'thumbsdown')); ?>
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
