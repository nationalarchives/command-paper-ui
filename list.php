<div class="content-area">
	<p>Next available number: <strong>226</strong> <span class="create-new"><a href="/?user=<?php echo $user ?>&page=create" class="control-button" title="Create new request">Create new</a></span></p>

	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
			<tr>
				<th><a href="#">No.</a></th>
				<th><a href="#">Title</a></th>
				<?php if ( $user == 'tna' ) { ?>
				<th><a href="#">Dept.</a></th>
				<th><a href="#">Requester</a></th>
				<?php } ?>
				<th><a href="#">Date publication due</a></th>
				<?php if ( $user == 'tna' ) { ?>
				<th><a href="#">Date requested</a></th>
				<th>Parliamentary session</th>
				<?php } ?>
				<th>Comments</th>
				<th></th>
			</tr>
			</thead>
			<tbody>
			<?php for ($i = 225 ; $i >= 216; $i--) { ?>
			<tr>
				<td><strong><?php echo $i ?></strong></td>
				<td>Nouveau Matin encore</td>
				<?php if ( $user == 'tna' ) { ?>
				<td>Attorney General's Office</td>
				<td>snail1966@hotmail.com</td>
				<?php } ?>
				<td>2018-05-06</td>
				<?php if ( $user == 'tna' ) { ?>
				<td>2018-04-10</td>
				<td>2018-19</td>
				<?php } ?>
				<td>Test</td>
				<td>
					<a href="/?user=<?php echo $user ?>&page=edit&number=<?php echo $i ?>" class="control-button" title="Edit request number <?php echo $i ?>">Edit</a>
					<?php if ( $user == 'tna' ) { ?>
					<a href="/?user=<?php echo $user ?>&page=delete&number=<?php echo $i ?>" class="control-button" title="Delete request number <?php echo $i ?>">Delete</a>
					<?php } ?>
				</td>
			</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>

	<div class="clearfix">
		<ul id="menu-disc">
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li>..</li>
			<li><a href="#">19</a></li>
			<li><a href="#">&raquo;</a></li>
		</ul>
	</div>

</div>