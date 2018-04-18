<?php

if (isset($_GET)) {
	if ($_GET['page']=='edit') {
		$legend = 'Edit';
		$message = '';
		$number = '224';
		$selected = 'selected';
		$requester = 'snail1966@hotmail.com';
		$title = 'Nouveau Matin encore';
		$pub_due_date = '2018-05-06';
		$requested = '2018-04-10';
		$pub_date = '2018-04-11';
		$checked = 'checked';
		$session = '2018-19';
		$comments = 'Testing 1 2 3 testing again';
		$disabled = '';
		$submit = 'Save';
	} elseif ($_GET['page']=='create') {
		$legend = 'Create new';
		$message = '';
		$number = '226';
		$selected = '';
		$requester = 'Admin';
		$title = '';
		$pub_due_date = '';
		$requested = '';
		$pub_date = '';
		$checked = '';
		$session = '';
		$comments = '';
		$disabled = '';
		$submit = 'Save';
	} else {
		$legend = 'Delete';
		$message = '<div class="form-row"><blockquote class="emphasis-alert"><p><strong>Are you sure you want to delete this?</strong></p></blockquote></div>';
		$number = '224';
		$selected = 'selected';
		$requester = 'snail1966@hotmail.com';
		$title = 'Nouveau Matin encore';
		$pub_due_date = '2018-05-06';
		$requested = '2018-04-10';
		$pub_date = '2018-04-11';
		$checked = 'checked';
		$session = '2018-19';
		$comments = 'Testing 1 2 3 testing again';
		$disabled = 'disabled';
		$submit = 'Delete';
	}
}

?>

<div class="content-area">
	<form>
		<fieldset>
			<legend><?php echo $legend ?></legend>
			<?php echo $message ?>
			<div class="form-row">
				<label for="number">Number</label>
				<input type="text" id="number" name="number" value="<?php echo $number ?>" disabled>
			</div>
			<div class="form-row">
				<label for="department">Department</label>
				<select id="department" name="department" <?php echo $disabled ?>>
					<option value="">Please select</option>
					<option value="" <?php echo $selected ?>>Attorney General's Office</option>
					<option value="">Competition and Markets Authority</option>
					<option value="">Insolvency Service</option>
					<option value="">Other</option>
				</select>
			</div>
			<div class="form-row">
				<label for="requester">Requester</label>
				<input type="text" id="requester" name="requester" value="<?php echo $requester ?>" disabled>
			</div>
			<div class="form-row">
				<label for="title">Title</label>
				<textarea id="title" name="title" <?php echo $disabled ?>><?php echo $title ?></textarea>
			</div>
			<div class="form-row">
				<label for="pub_due_date">Publication due date</label>
				<input type="date" id="pub_due_date" name="pub_due_date" value="<?php echo $pub_due_date ?>" <?php echo $disabled ?>>
			</div>
			<div class="form-row">
				<label for="requested">Date requested</label>
				<input type="date" id="requested" name="requested" value="<?php echo $requested ?>" disabled>
			</div>
			<div class="form-row">
				<label for="pub_date">Actual publication date</label>
				<input type="date" id="pub_date" name="pub_date" value="<?php echo $pub_date ?>" <?php echo $disabled ?>>
			</div>
			<div class="form-row checkbox">
				<input type="checkbox" id="received" name="received" value="received" <?php echo $checked ?> <?php echo $disabled ?>>
				<label for="received">Copy received</label>
			</div>
			<div class="form-row checkbox">
				<input type="checkbox" id="uploaded" name="uploaded" value="uploaded" <?php echo $disabled ?>>
				<label for="uploaded">Uploaded to TNA</label>
			</div>
			<div class="form-row">
				<label for="session">Parliamentary session</label>
				<input type="text" id="session" name="session" value="<?php echo $session ?>" <?php echo $disabled ?>>
			</div>
			<div class="form-row">
				<label for="comments">Comments</label>
				<textarea id="comments" name="comments" <?php echo $disabled ?>><?php echo $comments ?></textarea>
			</div>
			<div class="form-row">
				<input type="submit" name="save" id="save" value="<?php echo $submit ?>" class="button">
				<a href="/" class="button tertiary" role="button">Cancel</a>
			</div>
		</fieldset>
	</form>
</div>