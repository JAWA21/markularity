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


<h1 class='col-4 page-header'>Top 10 Bookmarks</h1>
<div class="col-lg-12">
	<div class="jumbotron">
		<!-- <div class="panel panel-default"> -->
			<table class="table">
		<tr class="col-lg-5">
			<th>Bookmarks</th>
			<th>Rank</th>
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
				<?php echo $bookmark['Index']['rank']; ?>
			</td>
			<!-- <td>

				<a class="glyphicon glyphicon-thumbs-up" href="#"></a> 
				<a class="glyphicon glyphicon-thumbs-down" href="#"></a> 
				
			</td> -->
		</tr>
		<?php endforeach; ?>
	</table>
		</div>
	</div>
</div>
