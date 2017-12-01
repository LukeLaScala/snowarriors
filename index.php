<?php session_start(); ?>
<html>
  
  <?php include('includes/head.php'); ?>

  <body>
    
    <?php include('includes/navbar.php'); ?>
    <?php include('models/db_functions.php'); ?>
    
    <div class="slider">
      <ul class="slides">
        <li>
          <img src="static/img/slider1.jpg">
          <div class="caption left-align">
            <h3>Indian Lake Snowarriors</h3>
            <h5 class="light grey-text text-lighten-3">The Tucker</h5>
          </div>
        </li>
        <li>
          <img src="static/img/slider2.jpg"> 
        </li>
      </ul>
    </div>
    <div class="section"></div>
    <div class="section"></div>

    <div class="container">
  
      <div class="row">
        <h2>News & Announcements</h2>
        <div class=" col l12 news">
        <?php foreach (get_news() as $news) { ?>
            <div class="card white">
            <div class="card-content black-text row">
              <div class="col l8">
                <p class="black-text">
                  <?php echo($news['news']); ?>
                </p>
              </div>
              <div class="col l4">
                <p class="black-text right">
                   Posted on <?php echo(date('n/j/Y', strtotime($news['timestamp']))); ?>
                </p>
              </div>
            </div>
            <?php if ($_SESSION['admin']){ ?>
            <div class="card-action">
              <p> 
                 <span class="right">
                        <?php  
                        echo '<a href="controller.php?action=delete_news&nid=' . $news['nid'] . '"' . '>Delete</a>'; ?>
                 </span>
                 <br>
             </p>
            </div>
            <?php } ?>
          </div>
        <?php } ?>
        </div>
      </div>

    </div>
    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/jsbottom.php';?>
  </body>
</html>
