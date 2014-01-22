<div class="bookmarks view">
<h2><?php echo __('Bookmark'); ?></h2>
	<dl>
		<dt><?php echo __('Bookmark Id'); ?></dt>
		<dd>
			<?php echo h($bookmark['Bookmark']['bookmark_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($bookmark['Bookmark']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($bookmark['Bookmark']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo h($bookmark['Bookmark']['category']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Submitted'); ?></dt>
		<dd>
			<?php echo h($bookmark['Bookmark']['date_submitted']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($bookmark['Bookmark']['user_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bookmark'), array('action' => 'edit', $bookmark['Bookmark']['bookmark_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bookmark'), array('action' => 'delete', $bookmark['Bookmark']['bookmark_id']), null, __('Are you sure you want to delete # %s?', $bookmark['Bookmark']['bookmark_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bookmarks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bookmark'), array('action' => 'add')); ?> </li>
	</ul>
</div>
