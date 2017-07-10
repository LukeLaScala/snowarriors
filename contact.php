<?php session_start(); ?>
<html>
	<?php include('includes/head.php'); ?>
	<?php include 'models/db_functions.php'; ?>
	<body>
		<?php include('includes/navbar.php') ?>	
		<main>
		<div class="section"></div>
		<div class="container">
		<div class="row">
		<div class="col l12">
			<h3>Contact Us</h3>
		</div>
		<?php
$to      = 'lascala.luke@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?> 
	  	<div class="section"></div>
  		</div>

		</main>

			
		<?php include('includes/footer.php') ?>	
		<?php include 'includes/jsbottom.php';?>
	</body>
</html>