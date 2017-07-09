


  <html>
	
	<?php 
		session_start();
		include('includes/head.php');
		include 'models/db_functions.php';
	 ?>
	
	<body>
		<?php include('includes/navbar.php') ?>	
		<main>
		<div class="section"></div>
		<div class="container">
		<div class="row">
			<div class="col l12"><h3>Media</h3><p>Click to view pictures from the event</p></div>
	  	</div>

	  	<?php foreach (get_media() as $media) { 
	  		echo '<div class="row">';
			echo "<div class=\"col l12 clickable\" onclick=\"window.location.href='" . "fullslide.php?id=" . $media['mid']  ."'\">";
			    echo '<div class="card horizontal valign-wrapper">';
			      echo '<div class="card-image">';
			        echo '<img style="padding-left: 20px;" src="static/img/logo.jpg" class="valign" height="100px">';
			      echo '</div>';
			      echo '<div class="card-stacked">';
			        echo '<div class="card-content">';
			          echo '<h4><span>' . htmlspecialchars($media['event']) . '</span><span style="font-size: 20px;" class="right">' . $media['date'] . '</span></h4>';
			          if ($_SESSION['admin']){
			       	   echo '<a href="controller.php?action=delete_media&mid=' . $media['mid'] . '"' . '>Delete</a>';
			      	}
			        echo '</div>';
			      echo '</div>';
			    echo '</div>';
			echo '</div>';
		echo '</div>';	# code...
	  	} ?>
	  	
		
	  	<div class="section"></div>
  		</div>

		</main>

			
		<?php include('includes/footer.php') ?>	
		<?php include 'includes/jsbottom.php';?>
	</body>
</html>