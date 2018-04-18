<div class="content-area">
	<p>Next available number: <strong>226</strong> <span class="create-new"><a href="/?user=<?php echo $user ?>&page=create" class="control-button">Create new</a></span></p>

	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
			<tr>
				<th><a href="#">No.</a></th>
				<th><a href="#">Title</a></th>
				<th><a href="#">Dept.</a></th>
				<th><a href="#">Requester</a></th>
				<th><a href="#">Date publication due</a></th>
				<th><a href="#">Date requested</a></th>
				<th>Parliamentary session</th>
				<th>Comments</th>
				<th></th>
			</tr>
			</thead>
			<tbody>
			<?php for ($i = 225 ; $i >= 216; $i--) { ?>
			<tr>
				<td><strong><?php echo $i ?></strong></td>
				<td>Nouveau Matin encore</td>
				<td>Attorney General's Office</td>
				<td>snail1966@hotmail.com</td>
				<td>2018-05-06</td>
				<td>2018-04-10</td>
				<td>2018-19</td>
				<td>Test</td>
				<td>
					<a href="/?user=<?php echo $user ?>&page=edit&number=<?php echo $i ?>" class="control-button">Edit</a>
					<a href="/?user=<?php echo $user ?>&page=delete&number=<?php echo $i ?>" class="control-button">Delete</a>
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