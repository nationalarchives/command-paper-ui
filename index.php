<?php
include 'header.php';
?>

<main>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Command Papers</h1>
				<?php
				if ( $_GET['page'] == 'edit' ) {
					include 'form.php';
				} elseif ( $_GET['page'] == 'create' ) {
					include 'form.php';
				} elseif ( $_GET['page'] == 'delete' ) {
					include 'form.php';
				} elseif ( isset($_GET['user']) ) {
					include 'list.php';
				} else {
					include 'login.php';
				}
				?>
			</div>
		</div>
	</div>
</main>

<?php
include 'footer.php';
?>