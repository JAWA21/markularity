<div class="bookmarks index">
	<h2><?php echo __('Bookmarks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('bookmark_id'); ?></th>
			<th><?php echo $this->Paginator->sort('url'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('category'); ?></th>
			<th><?php echo $this->Paginator->sort('date_submitted'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($bookmarks as $bookmark): ?>
	<tr>
		<td><?php echo h($bookmark['Bookmark']['bookmark_id']); ?>&nbsp;</td>
		<td><?php echo h($bookmark['Bookmark']['url']); ?>&nbsp;</td>
		<td><?php echo h($bookmark['Bookmark']['title']); ?>&nbsp;</td>
		<td><?php echo h($bookmark['Bookmark']['category']); ?>&nbsp;</td>
		<td><?php echo h($bookmark['Bookmark']['date_submitted']); ?>&nbsp;</td>
		<td><?php echo h($bookmark['Bookmark']['user_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bookmark['Bookmark']['bookmark_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bookmark['Bookmark']['bookmark_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bookmark['Bookmark']['bookmark_id']), null, __('Are you sure you want to delete # %s?', $bookmark['Bookmark']['bookmark_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Bookmark'), array('action' => 'add')); ?></li>
	</ul>
</div>
