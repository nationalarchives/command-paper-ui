<!doctype html>

<html lang="en" class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Command Paper Numbers</title>

	<meta name="description" content="Command Paper Numbers">
	<meta name="author" content="The National Archives">

	<link rel="stylesheet" id="tna-google-fonts"  href="https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C700%2C400italic%2C700italic%7CBitter&#038;ver=4.4.14" type="text/css" media="all" />
	<link rel="stylesheet" href="./css/tna-base.css?v=1.1" type="text/css" />
	<link rel="stylesheet" href="./css/command-paper.css?v=1.1" type="text/css" />
	<link rel="stylesheet" href="js/lib/jquery-ui/jquery-ui.min.css" type="text/css" />

	<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="img/favicon.ico">
	<link rel="icon" type="image/vnd.microsoft.icon" href="img/favicon.ico">

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
<div class="notification-banner clearfix">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="notice">
					<strong class="title">Beta</strong>
					<p><strong>This is a new service</strong></p>
				</div>
			</div>
		</div>
	</div>
</div>
<header>
	<div class="container">
		<div class="row" id="header">
			<div class="col-md-6">
				<img src="./img/logo-tna-white.png" class="img-responsive" alt="The National Archives - Command Papers">
			</div>
			<div class="col-md-6 text-right">

			</div>
		</div>
	</div>
</header>
<?php $user = $_GET['user'] ?>
<div class="account-controls">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-right">
				<?php if ( isset($_GET['user']) ) { ?>
				<ul>
					<li>Welcome, you are currently signed in as <span><?php echo strtoupper($user) ?></span></li>
					<li><a href="/">Sign out</a></li>
				</ul>
				<?php } else { ?>
					<ul>
						<li>Not Signed in</li>
					</ul>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div id="breadcrumb-holder" class="tna-breadcrumb">
				<div class="breadcrumbs">
					<span><a href="/">The National Archives</a></span>
					<?php if ( $_GET['page'] == 'edit' ) { ?>
						<span class="sep">&gt;</span> <span><a href="/?user=<?php echo $user ?>">Command Paper Numbers</a></span>
						<span class="sep">&gt;</span> <span>Edit</span>
					<?php } elseif ( $_GET['page'] == 'create' ) { ?>
						<span class="sep">&gt;</span> <span><a href="/?user=<?php echo $user ?>">Command Paper Numbers</a></span>
						<span class="sep">&gt;</span> <span>Create</span>
					<?php } elseif ( $_GET['page'] == 'delete' ) { ?>
						<span class="sep">&gt;</span> <span><a href="/?user=<?php echo $user ?>">Command Paper Numbers</a></span>
						<span class="sep">&gt;</span> <span>Delete</span>
					<?php } else { ?>
					<span class="sep">&gt;</span> <span>Command Paper Numbers</span>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
