<?
// ------------------------->>
// 
// 
// FILE LOCATION: VIEW/INDEX/INDEX.CTP
// 
// 
// 
// <<-------------------------

?>
<div class="col-lg-12">

<h1 class='col-4 page-header'>Top 10 Bookmarks</h1>
<div class="col-lg-12">
	<div class="jumbotron">
		<!-- <div class="panel panel-default"> -->
			<table class="table">
		<tr class="col-lg-5">
			<th>Bookmarks</th>
			<th>Popularity</th>
		</tr>

		<?php foreach ($bookmarks as $bookmark): ?>
		<tr>
			<td>
				<?php
					echo $this->Html->link(
						$bookmark['Index']['title'],
						array('controller' => 'Bookmarks', 'action' => 'clickThrough', $bookmark['Index']['bookmark_id'])
					);
				?>
			</td>
			<td>
				<?php if(!isset($bookmark['Bookmark']['popularity'])){
					echo '0';
					}else
					echo $bookmark['Bookmark']['popularity']; ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
		</div>
	</div>
</div>
