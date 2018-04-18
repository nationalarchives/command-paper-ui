<?php

function data( $get ) {
	date_default_timezone_set('Europe/London');

	if ($get['page']=='edit') {

		$data = array(
			'legend' => 'Edit',
			'message' => '',
			'number' => $get['number'],
			'selected' => 'selected',
			'requester' => 'snail1966@hotmail.com',
			'title' => 'Nouveau Matin encore',
			'pub_due_date' => '2018-05-06',
			'requested' => '2018-04-10',
			'pub_date' => '2018-04-11',
			'checked' => 'checked',
			'session' => '2018-19',
			'comments' => 'Testing 1 2 3 testing again',
			'disabled' => '',
			'submit' => 'Save'
		);
	} elseif ($get['page']=='create') {

		$data = array(
			'legend' => 'Create new',
			'message' => '',
			'number' => '226',
			'selected' => '',
			'requester' => '',
			'title' => '',
			'pub_due_date' => '',
			'requested' => date('Y-m-d'),
			'pub_date' => '',
			'checked' => '',
			'session' => '',
			'comments' => '',
			'disabled' => '',
			'submit' => 'Save'
		);
	} else {

		$data = array(
			'legend' => 'Delete',
			'message' => '<div class="form-row"><blockquote class="emphasis-alert"><p><strong>Are you sure you want to delete this?</strong></p></blockquote></div>',
			'number' => $get['number'],
			'selected' => 'selected',
			'requester' => 'snail1966@hotmail.com',
			'title' => 'Nouveau Matin encore',
			'pub_due_date' => '2018-05-06',
			'requested' => '2018-04-10',
			'pub_date' => '2018-04-11',
			'checked' => 'checked',
			'session' => '2018-19',
			'comments' => 'Testing 1 2 3 testing again',
			'disabled' => 'disabled',
			'submit' => 'Delete'
		);
	}

	return $data;
}