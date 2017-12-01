<?php 
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(1);
include 'models/db_functions.php';
include 'functions.php';

if (isset($_GET['action']))
  $action = $_GET['action'];
else
  $action = "";

switch ($action){
	case 'show_admin_login':

		if($_SESSION['admin']){
			header("Location: controller.php?action=dashboard");
		}

		include 'admin_login.php';
		break;
	case 'admin_login':
		$pass = $_POST['password'];
		check_password($pass);
		
		if($_SESSION['admin']){
			header("Location: controller.php?action=dashboard");
		}

		else {
			$_SESSION['alerts'] = "Wrong password";
			header("Location: controller.php?action=show_admin_login");
		}
		break;

	case 'dashboard':
		require_admin();
		include 'dashboard.php';
		break;
	case 'add_pass':
		require_admin();
		add_password($_POST['password']);
		$_SESSION['alerts'] = "Successfully added";
		header("Location: controller.php?action=dashboard");
		break;
	case 'upload':
		require_admin();
		$rand = uniqid();
		$title = $_POST['title'];
		$target_dir = "uploads/";
		$target_file = basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

		// Check if file already exists
		if (file_exists($target_dir . md5($target_file . $rand) . ".pdf")) {
		    $_SESSION['alerts'] .= "Sorry, file already exists. ";
		    $uploadOk = 0;
		}
		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) {
		    $_SESSION['alerts'] .= "Sorry, your file is too large. ";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "pdf") {
		    $_SESSION['alerts'] .= "Sorry, only PDF files are allowed. ";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    $_SESSION['alerts'] .= "Sorry, your file was not uploaded. ";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir . md5($target_file . $rand) . ".pdf")) {
		        $_SESSION['alerts'] .= "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		    add_journal(md5($target_file . $rand) . ".pdf", $title);
		    } else {
		        $_SESSION['alerts'] .= "Sorry, there was an error uploading your file. ";
		    }

		}

		header("Location: controller.php?action=dashboard");
		break;
	case "delete_journal":
		require_admin();
		delete_journal($_GET['jid']);
		header("Location: journal.php");
		break;

	case "add_event":
		require_admin();
		
		$name = $_POST['name'];
		$location = $_POST['location'];
		$time = $_POST['time'];
		$date = $_POST['date'];
		add_event($name, $location, $time, $date);
		$_SESSION['alerts'] = "Successfully added";
		header("Location: controller.php?action=dashboard");
		break;

	case "delete_event":
		require_admin();
		delete_event($_GET['id']);
		header("Location: events.php");
		break;

	case "delete_media":
		require_admin();
		delete_media($_GET['mid']);
		header("Location: photosandvideos.php");
		break;

	case "add_news":
		require_admin();
		$news = $_POST['news'];
		$date = $_POST['date'];
		add_news($news, $date);
		$_SESSION['alerts'] = "Successfully added";
		header("Location: controller.php?action=dashboard");
		break;
	case "delete_news":
		require_admin();
		delete_news($_GET['nid']);
		header("Location: index.php");
		break;
	case "add_media":
		require_admin();

		$name = $_POST['name'];
		$date = $_POST['date'];

		$id = add_media($name, $date);

		$rand = uniqid();
		$total = count($_FILES['upload']['name']);
		for($i=0; $i<$total; $i++) {
  //Get the temp file path
  $tmpFilePath = $_FILES['upload']['tmp_name'][$i];
  		$imageFileType = pathinfo(basename($_FILES['upload']['name'][$i]),PATHINFO_EXTENSION);
  //Make sure we have a filepath

  if ($tmpFilePath != "" && (strtolower($imageFileType) == "png" || strtolower($imageFileType) == "jpg")){
    //Setup our new file path
    $path = md5($_FILES['upload']['name'][$i] . $rand) . ".". $imageFileType;
    $newFilePath = "uploads/" . md5($_FILES['upload']['name'][$i] . $rand) . ".". $imageFileType;

    //Upload the file into the temp dir
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {
    	add_picture($id, $path);
    	$_SESSION['alerts'] = "Success!";
    }
  	}

	}
	header("Location: controller.php?action=dashboard");
}