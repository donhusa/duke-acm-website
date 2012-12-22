<!DOCTYPE html>
<!--Site Redesigned-->
<html>
	<head>
		<title>Duke University ACM Chapter</title>
		<meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" />
		<link href="<?php echo base_url(); ?>assets/css/format.css" rel="stylesheet" media="screen" /> 
		<?php if($csslink!==''): ?>
		<link href="<?php echo base_url(); ?>assets/css/<?php echo $csslink?>" rel="stylesheet" media="screen"></head>
		<?php endif?>
	</head>
	<body>
		<table class="pageFrame">
			<tr>
				<td id="header"><img src="<?php echo base_url(); ?>assets/images/<?php echo $imagelink?>" alt="Duke University Association for Computing Machinery" /></td>
			</tr>
			<tr>
				<td id="pagebody">
					<div id="navbar">
						<a href="index.php">&loz;&nbsp;Home</a><br />
						<a href="events.php">&loz;&nbsp;Events</a><br />
						<a href="members.php">&loz;&nbsp;Members</a><br />
						<a href="resources.php">&loz;&nbsp;Resources</a><br />
						<a href="contact.php">&loz;&nbsp;Contact Us</a><br />
					</div>
<!--Begin Page Content-->