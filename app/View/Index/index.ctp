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
			<th>Visit</th>
			<th>Vote</th>
		</tr>

		<?php foreach ($bookmarks as $bookmark): ?>
		<tr>
			<td>
				<a href="#"> <!-- href="/Thumbs/clickThrough" -->
					<?php echo $bookmark['Index']['title']; ?>
				</a>
			</td>
			<td>
				<?php
					echo $this->Html->link(
						'Visit',
						array('action' => 'clickThrough')
					);
				?>
			</td>
			<td>

				<a class="glyphicon glyphicon-thumbs-up" href="#"></a> <!--href="#/Thumbs/thumUp"-->
				<a class="glyphicon glyphicon-thumbs-down" href="#"></a> <!--href="/Thumbs/thumDwn"-->
				
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
		</div>
	</div>
</div>
