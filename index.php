<?php session_start(); ?>
<html>
  
  <?php include('includes/head.php'); ?>

  <body>
    
    <?php include('includes/navbar.php'); ?>
    <?php include('models/db_functions.php'); ?>
    
    <i onclick="$('.slider').slider('next');" class="material-icons large white-text" style="position: absolute; z-index: 999; cursor: pointer; right: 0; bottom: 50%">keyboard_arrow_right</i>
    
    <i onclick="$('.slider').slider('prev');" class="material-icons large white-text" style="position: absolute; z-index: 999; cursor: pointer; left: 0; bottom: 50%">keyboard_arrow_left</i>
    
    <div class="slider fullscreen" style="position: relative;">
      <ul class="slides">
        <li>
          <img src="static/img/home3.JPG">
        </li>
        <li>
          <img src="static/img/home2.JPG"> 
        </li>
        <li>
          <img src="static/img/home5.JPG">
        </li>
        <li>
          <img src="static/img/home6.JPG"> 
        </li>
        <li>
          <img src="static/img/home7.JPG">
        </li>
        <li>
          <img src="static/img/home8.JPG"> 
        </li>
      </ul>
    </div>
    <div class="section"></div>
    <div class="section"></div>

    <div class="container" style="width: 90%">
  
      <div class="row">
        <h2>News & Announcements</h2>
        <div class="col l8 news">
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
        <div class="col l4">
          <div class="fb-page right" data-href="https://www.facebook.com/ILsnowarriors/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/ILsnowarriors/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ILsnowarriors/">Indian Lake Snowarriors</a></blockquote></div>
        </div>
      </div>

    </div>
    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/jsbottom.php';?>
  </body>
  <script type="text/javascript">
    $('#nav').css('position', 'absolute')
  </script>
</html>
