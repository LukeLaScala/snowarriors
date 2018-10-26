<?php session_start(); ?>
<html>
	<?php include('includes/head.php'); ?>
	<?php include 'models/db_functions.php'; ?>
	<body>
		<main>
		<?php include('includes/navbar.php') ?>	
		<div class="section"></div>
		<div class="container">
		<div class="row">
		<div class="col l12">
			<h3>Supporters</h3>
			<p>We would like to thank our supporters!</p>
			<p><a href="https://gofundme.com/snowarriors">Support The Indian Lake Snowarriors</a></p>
		</div>
        <?php $supporters = get_supporters(); $first = intdiv(sizeof($supporters), 2); $second = sizeof($supporters) - $first; $first_array = array_slice($supporters, 0, $first); $second_array = array_slice($supporters, -$second); ?>
		<div class="row">
			<div class="col l4 push-l1">
			<ul class="collection">
                <?php
                foreach($first_array as $supporter) {
                    $str = '<li class="collection-item">';
                    $str .= $supporter['name'];
                    if ($_SESSION['admin']){
                        $str .='<span class="right"><a href="controller.php?action=delete_supporter&id=' . $supporter['id'] . '">Delete</a></span>';
                    }
                    $str .= '</li>';
                    echo($str);
            } ?>
            </ul>
			</div>
			<div class="col l4 push-l2">
			 <ul class="collection">
                <?php
                foreach($second_array as $supporter) {
                    $str = '<li class="collection-item">';
                    $str .= $supporter['name'];
                    if ($_SESSION['admin']){
                        $str .='<span class="right"><a href="controller.php?action=delete_supporter&id=' . $supporter['id'] . '">Delete</a></span>';
                    }
                    $str .= '</li>';
                    echo($str);
            } ?>
            </ul>
			</div>
		</div>
	  	<div class="section"></div>
  		</div>

		</main>

			
		<?php include('includes/footer.php') ?>	
		<?php include 'includes/jsbottom.php';?>
	</body>
</html>
