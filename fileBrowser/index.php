<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<title>Droperino - Domain</title>
    <link href='https://fonts.googleapis.com/css?family=Raleway:300,200' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- Include our stylesheet -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="assets/css/styles.css" rel="stylesheet"/>

</head>

<body onload="myFunction()">
<div class="col-md-6 offset-md-3" id="notification" style="display: none;">
    <span class="dismiss"><a title="dismiss this notification">x</a></span>
</div>

<?php
include("modals/uploadModal.php");
include("modals/folderModal.php");
?>
<!-- Loading animation -->
<div class="col-12" id="beforeLoad">
<div class="sk-cube-grid" >
    <div class="sk-cube sk-cube1"></div>
    <div class="sk-cube sk-cube2"></div>
    <div class="sk-cube sk-cube3"></div>
    <div class="sk-cube sk-cube4"></div>
    <div class="sk-cube sk-cube5"></div>
    <div class="sk-cube sk-cube6"></div>
    <div class="sk-cube sk-cube7"></div>
    <div class="sk-cube sk-cube8"></div>
    <div class="sk-cube sk-cube9"></div>
</div>
</div>

<div  style="display:none;" id="afterLoad">
	<div class="filemanager">
		<!-- Seach button -->
	<div class="search">
		<img src="assets/loupe.png">
		<input type="search" placeholder="I'm looking for?" />
	</div>
		<!-- upload button -->
		<div class="upload">
		<button class="uploadbutton" id="myBtnUpload"><img src="assets/file.png"></button>
		</div>

		<!-- new folder button -->
		<div class="newfolder">
            <button class="folderButton" id="myBtnFolder"><img src="assets/new-add-folder.png"></button>
		</div>

		<div class="breadcrumbs"></div>

		<ul class="data"></ul>
		<div class="nothingfound">
			<div class="nofiles"></div>
			<span>No files here.</span>
		</div>

	</div>
</div>
	<!-- Include our script files -->
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="assets/js/script.js"></script>
	<script src="assets/js/upload.js"></script>

</body>
</html>