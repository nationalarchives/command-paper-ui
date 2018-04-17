<?php

if (isset($_GET)) {
	if ($_GET['page']=='edit') {
		$legend = 'Edit';
		$number = '224';
		$requester = 'snail1966@hotmail.com';
		$title = 'Nouveau Matin encore';
		$pub_due_date = '2018-05-06';
		$requested = '2018-04-10';
		$pub_date = '2018-04-11';
		$session = '2018-19';
		$comments = 'Testing 1 2 3 testing again';
	} else {
		$legend = 'Create new';
		$number = '226';
		$requester = 'Admin';
		$title = '';
		$pub_due_date = '';
		$requested = '';
		$pub_date = '';
		$session = '';
		$comments = '';
	}
}

?>

<div class="content-area">
	<form>
		<fieldset>
			<legend><?php echo $legend ?></legend>
			<div class="form-row">
				<label for="number">Number</label>
				<input type="text" id="number" name="number" value="<?php echo $number ?>" disabled>
			</div>
			<div class="form-row">
				<label for="department">Department</label>
				<select id="department" name="department">
					<option value="">Please select</option>
					<option value="">Attorney General's Office</option>
				</select>
			</div>
			<div class="form-row">
				<label for="requester">Requester</label>
				<input type="text" id="requester" name="requester" value="<?php echo $requester ?>" disabled>
			</div>
			<div class="form-row">
				<label for="title">Title</label>
				<textarea id="title" name="title"><?php echo $title ?></textarea>
			</div>
			<div class="form-row">
				<label for="pub_due_date">Publication due date</label>
				<input type="date" id="pub_due_date" name="pub_due_date" value="<?php echo $pub_due_date ?>">
			</div>
			<div class="form-row">
				<label for="requested">Date requested</label>
				<input type="date" id="requested" name="requested" value="<?php echo $requested ?>" disabled>
			</div>
			<div class="form-row">
				<label for="pub_date">Actual publication date</label>
				<input type="date" id="pub_date" name="pub_date" value="<?php echo $pub_date ?>">
			</div>
			<div class="form-row checkbox">
				<input type="checkbox" id="received" name="received" value="received">
				<label for="received">Copy received</label>
			</div>
			<div class="form-row checkbox">
				<input type="checkbox" id="uploaded" name="uploaded" value="uploaded">
				<label for="uploaded">Uploaded to TNA</label>
			</div>
			<div class="form-row">
				<label for="session">Parliamentary session</label>
				<input type="text" id="session" name="session" value="<?php echo $session ?>">
			</div>
			<div class="form-row">
				<label for="comments">Comments</label>
				<textarea id="comments" name="comments"><?php echo $comments ?></textarea>
			</div>
			<div class="form-row">
				<input type="submit" name="save" id="save" value="Save" class="button">
				<a href="/" class="button tertiary" role="button">Cancel</a>
			</div>
		</fieldset>
	</form>
</div>