<html>
	
	<?php 
	session_start();
	include('includes/head.php'); ?>
	
	<body>
		<main>
		<div class="section"></div>
		<div class="container">
			<div class="row">
        	<div style="padding-bottom: 10px;" class="col l8 push-l2">
            <h3>Admin Login</h3>
            <div class="section"></div>
            <form style="display: inline;" action="controller.php?action=admin_login" method="post">
                <label>Password: </label>
                <input type="password" name="password" required autocomplete="off">
                <br>
                <button type="submit" class="waves-effect waves-light btn orange">Login</button>
            </form>
        </div>
		</main>

			
		<?php include('includes/footer.php') ?>	
		<?php include 'includes/jsbottom.php';?>
				<?php echo(get_alerts()); ?>

	</body>
</html>