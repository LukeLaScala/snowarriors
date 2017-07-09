<html>
	
	<?php include('includes/head.php'); ?>
	
	<body>
		<main>
		<div class="section"></div>
		<div class="container">
			<div class="row">
        	<div style="padding-bottom: 10px;" class="col l8 push-l2">
            <h3>Admin Dashboard</h3>
            <div class="section"></div>
            <h3>Add password</h3>
            <p>This will allow multiple passwords to gain access to the admin dashboard.</p>
            <form style="display: inline;" action="controller.php?action=add_pass" method="post">
                <label>Password: </label>
                <input type="password" name="password" minlength="10" required autocomplete="off">
                <br>
                <button type="submit" class="waves-effect waves-light btn orange">Add</button>
            </form>

            <div class="section"></div>
            <h3>Add journal entry</h3>
            <p>This will add a journal entry (in the form of a pdf) to the journal tab</p>
            <form action="controller.php?action=upload" method="post" enctype="multipart/form-data">
			<label>Title: </label>
            <input type="text" name="title" maxlength="50" ="" required autocomplete="off">

    		Select PDF to upload:
    		<input type="file" name="fileToUpload" id="fileToUpload">
    		<button type="submit" value="Upload PDF" class="waves-effect waves-light btn orange" name="submit">Add entry</button>
			</form>	


			<div class="section"></div>
            <h3>Add event</h3>
            <p>This will add an event to the events page</p>
            <form action="controller.php?action=add_event" method="post">
			<label>Name of event: </label>
            <input type="text" name="name" maxlength="50" required autocomplete="off">

            <label>Location: </label>
            <input type="text" name="location" maxlength="100" required autocomplete="off">

            <label>Time: </label>
			<input type="time" name="time" required>

            <label>Date: </label>
            <input type="date" name="date" class="datepicker" required>





    		<button type="submit" class="waves-effect waves-light btn orange" name="submit">Add event</button>
			</form>	

			<div class="section"></div>
            <h3>Add media</h3>
            <p>This will add photos to the Photos tab</p>
			<form action="controller.php?action=add_media" method="post" enctype="multipart/form-data">
    			<input name="upload[]" type="file" multiple="multiple" />
    			<br>
    			<br>
    			<label>Name of event: </label>
            	<input type="text" name="name" maxlength="50" required autocomplete="off">
    			
            	<label>Date: </label>
            	<input type="date" name="date" class="datepicker" required>

    			<button type="submit" class="waves-effect waves-light btn orange" name="submit">Add media</button>

  			</form>
        </div>
		</main>

			
		<?php include('includes/footer.php'); ?>	
		<?php include 'includes/jsbottom.php';?>
		<?php echo(get_alerts()); ?>
	</body>
</html>