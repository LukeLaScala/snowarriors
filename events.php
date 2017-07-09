<html>
	<?php session_start(); ?>
	<?php include('includes/head.php'); ?>
	<?php include 'models/db_functions.php'; ?>
	<body>
		<?php include('includes/navbar.php') ?>
		<main>
		<div class="section"></div>
			<div class="container">
				<div class="row">
					<div class="col l12">
						<h4>Upcoming Events</h4>
					</div>
				</div>

				<table class="highlight">
			        <thead>
			          <tr>
			              <th>Event</th>
			              <th>Location</th>
			              <th>Time (24h)</th>
			              <th>Date</th>
			              <?php if($_SESSION['admin']){echo('<th>Delete</th>');} ?>
			          </tr>
			        </thead>
			        <tbody>
			        <?php foreach (get_events() as $event) { ?>
			       		<tr>
			          		<td><?php echo($event['name']); ?></td>
				            <td><?php echo($event['location']); ?></td>
				            <td><?php echo($event['time']); ?></td>
				            <td><?php echo($event['date']); ?></td>
				            <?php if($_SESSION['admin']){echo ('<td><a href="controller.php?action=delete_event&id=' . $event['id'] . '"' .'>delete </a></td>');} ?>
			          	</tr>
			       <?php } ?>
			            
			        </tbody>
			    </table>
			    <div class="section"></div>
			</div>
		</main>

			
		<?php include('includes/footer.php') ?>	
		<?php include 'includes/jsbottom.php';?>
	</body>
</html>