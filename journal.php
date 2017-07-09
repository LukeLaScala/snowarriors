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
			<div class="col l12"><h3>Journal</h3></div>
		<?php foreach (get_journal_entries() as $entry) {
		echo '<div class="row">';
			echo "<div class=\"col l12 clickable\" onclick=\"window.location.href='" . "uploads/" . $entry['hash']  ."'\">";
			    echo '<div class="card horizontal valign-wrapper">';
			      echo '<div class="card-image">';
			        echo '<img style="padding-left: 20px;" src="static/img/logo.jpg" class="valign" height="100px">';
			      echo '</div>';
			      echo '<div class="card-stacked">';
			        echo '<div class="card-content">';
			          echo '<h4><span>' . htmlspecialchars($entry['title']) . '</span><span style="font-size: 20px;" class="right">' . date('M j Y g:i A', strtotime($entry['timestamp'])) . " ET"  . '</span></h4>';
			          if ($_SESSION['admin']){
			       	   echo '<a href="controller.php?action=delete_journal&jid=' . $entry['jid'] . '"' . '>Delete</a>';
			      	}
			        echo '</div>';
			      echo '</div>';
			    echo '</div>';
			echo '</div>';
		echo '</div>';

		} ?>
	  	
	  	<div class="section"></div>
  		</div>

		</main>

			
		<?php include('includes/footer.php') ?>	
		<?php include 'includes/jsbottom.php';?>
	</body>
</html>