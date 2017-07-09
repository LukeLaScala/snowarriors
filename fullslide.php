  <html>
	
	<?php include('includes/head.php'); ?>
	<?php include 'models/db_functions.php'; ?>
	
	<body>
			<a href="photosandvideos.php" style="z-index: 999" class="green waves-effect waves-light btn">back</a>

  			<div class="slider fullscreen" style="z-index: 50">
    		<ul class="slides">

    		<?php echo(print_r(get_pictures($_GET['id']))) ?>
    	<?php foreach (get_pictures($_GET['id']) as $img) { ?>
		<li>
        	<img src="<?php echo('uploads/' . $img['path']); ?>"> <!-- random image -->        
      	</li>    	
      <?php } ?>	
    </ul>
    </div>
    <div class="section"></div>
    <div class="row">
    	<div class="col l12" style="z-index: 999; width: 100%;">
			
			<a style="z-index: 999" onclick="$('.slider').slider('prev');
					$('.slider').slider('pause');" class="green waves-effect waves-light btn">previous</a>
			<a style="z-index: 999" onclick="
					$('.slider').slider('next');
	        		$('.slider').slider('pause');" 
	        class="green waves-effect waves-light btn">next</a>
    	</div>
    </div>
	</main>

			
		<?php include 'includes/jsbottom.php';?>
		<script>
			$(document).keydown(function(e) {
	    		switch(e.which) {
	        		case 39: // left
	        		$('.slider').slider('next');
	        		$('.slider').slider('pause');

	        		break;

	        		case 37: // right
	        		$('.slider').slider('prev');
					$('.slider').slider('pause');
	        		break;

	        	default: return; // exit this handler for other keys
	    		}
	    		e.preventDefault(); // prevent the default action (scroll / move caret)
			});
		</script>
	</body>
</html>