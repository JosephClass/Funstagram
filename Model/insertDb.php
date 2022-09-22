<?php

  // Create database connection
include 'connDb.php';

  // Initialize message variable
  $msg = "";



  // If upload button is clicked ...
  if (isset($_POST['upload'])) {

  	// Get image name

  	$image = $_FILES['image']['name'];



  	// image file directory

  	$target = "../View/Images/".basename($image);



  	$sql = "INSERT INTO images (filename,uploaded_on) VALUES ('$image',NOW())";

  	// execute query

  	mysqli_query($db, $sql);



  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {

  		$msg = "Image uploaded successfully";

  	}else{

  		$msg = "Failed to upload image";

  	}

  }

  $result = mysqli_query($db, "SELECT * FROM images");

  ?>