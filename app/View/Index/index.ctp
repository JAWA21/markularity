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
<!-- 	<div class="input-group">
		<input type="text" class="form-control">
		<span class="input-group-btn">
			<button class="btn btn-default" type="button">Go!</button>
		</span>
	</div> -->

	<? var_dump($bookmarks);?>
<h1 class='col-4'>Top 10 Bookmarks</h1>
<div class="col-lg-12">
	<div class="jumbotron">
		<div class="row">
			<table>
		<tr>
			<th>Bookmarks</th>
			<th>Visit</th>
			<th>Vote</th>
		</tr>

		<?php foreach ($bookmarks as $bookmark): ?>
		<tr>
			<td>
				<?php echo $bookmark['Index']['title']; ?>
			</td>
			<td>
				<?php
					echo $this->Html->link(
						'Visit',
						array('action' => 'clickThru')
					);
				?>
			</td>
			<td>
				<?php
					echo $this->Html->link(
						'Up',
						array('action' => 'thumbUp')
					);

					echo $this->Html->link(
						'Down',
						array('action' => 'thumbDown')
					);
				?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
		</div>
	</div>
</div>
