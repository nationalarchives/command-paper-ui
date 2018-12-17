<?php

include 'data.php';
$data = data( $_GET );

?>
<div class="content-area">
	<form>
		<fieldset>
			<legend><?php echo $data['legend'] ?></legend>
			<?php echo $data['message'] ?>
			<input type="hidden" id="cmd_prefix" name="cmd_prefix" value="<?php echo $data['code'] ?>" disabled>
			<div class="form-row">
				<label for="number">Number</label>
				<input type="text" id="number" name="number" value="<?php echo $data['number'] ?>" disabled>
			</div>
			<?php if ( $user == 'tna' ) { ?>
			<div class="form-row">
				<label for="department">Department</label>
				<select id="department" name="department" aria-required="true" required <?php echo $data['disabled'] ?>>
					<option value="">Please select</option>
					<option value="1" <?php echo $data['selected'] ?>>Attorney General's Office</option>
					<option value="2">Competition and Markets Authority</option>
					<option value="3">Insolvency Service</option>
					<option value="4">Other</option>
				</select>
			</div>
			<div class="form-row">
				<label for="requester">Requester</label>
				<input type="text" id="requester" name="requester" value="<?php echo $data['requester'] ?>" aria-required="true" required <?php echo $data['disabled'] ?>>
			</div>
			<?php } ?>
			<div class="form-row">
				<label for="title">Title</label>
				<textarea id="title" name="title" aria-required="true" required <?php echo $data['disabled'] ?>><?php echo $data['title'] ?></textarea>
			</div>
			<div class="form-row">
				<label for="pub_due_date">Publication due date</label>
				<input class="picker" type="date" id="PublicationDateDue" name="pub_due_date" value="<?php echo $data['pub_due_date'] ?>" aria-required="true" required <?php echo $data['disabled'] ?>>
			</div>
			<div class="form-row">
				<label for="requested">Date requested</label>
				<input type="date" id="requested" name="requested" value="<?php echo $data['requested'] ?>" disabled>
			</div>
			<?php if ( $user == 'tna' ) { ?>
			<div class="form-row">
				<label for="pub_date">Actual publication date <span class="optional">(optional)</span></label>
				<input class="picker" type="date" id="pub_date" name="pub_date" value="<?php echo $data['pub_date'] ?>" <?php echo $data['disabled'] ?>>
			</div>
			<div class="form-row checkbox">
				<input type="checkbox" id="received" name="received" value="received" <?php echo $data['checked'] ?> <?php echo $data['disabled'] ?>>
				<label for="received">Copy received</label>
			</div>
			<div class="form-row checkbox">
				<input type="checkbox" id="uploaded" name="uploaded" value="uploaded" <?php echo $data['disabled'] ?>>
				<label for="uploaded">Uploaded to TNA</label>
			</div>
			<div class="form-row">
				<label for="session">Parliamentary session <span class="optional">(optional)</span></label>
				<input type="text" id="session" name="session" value="<?php echo $data['session'] ?>" <?php echo $data['disabled'] ?>>
			</div>
			<?php } ?>
			<div class="form-row">
				<label for="comments">Comments <span class="optional">(optional)</span></label>
				<textarea id="comments" name="comments" <?php echo $data['disabled'] ?>><?php echo $data['comments'] ?></textarea>
			</div>
			<div class="form-row">
				<input type="submit" name="save" id="save" value="<?php echo $data['submit'] ?>" class="button">
				<a href="/?user=<?php echo $user ?>" class="button tertiary" role="button">Cancel</a>
			</div>
		</fieldset>
	</form>
</div>