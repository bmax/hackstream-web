<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<title>HackStream</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" >
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="jquery-ui/jquery-ui.css">
</head>
<body>
	<?php include "nav.php";?>
	<div class="content_wrap">
    <h3>Live activity from MHacks V</h3>
<div id="viewmoreText" class="activity">4 New Activities</div>
<div id="viewmoreContent">
<?php for($i=0;$i<5;$i++) { ?>
	<div class="activity">
		<div class="logo git">
			<img src="images/github.png" class="icon">
		</div>
		<div class="text">
		<img src="images/gitPic.jpg" class="icon userPic">
		<p><a href="">john3123</a> pushed to <a href="">mhacks-web: </a>  Lorem Ipsum Github dipsum</p>
		<p class="relTime">45 min ago</p>
		
	</div>
	<div class="votes">
			<img src="images/up.png">
			<p class="votesCount">0</p>
			<img src="images/down.png">
		</div>
	</div>
	<?php } ?>
</div>
<?php for($i=0;$i<5;$i++) { ?>
	<div class="activity">
		<div class="logo git">
			<img src="images/github.png" class="icon">
		</div>
		<div class="text">
		<img src="images/gitPic.jpg" class="icon userPic">
		<p><a href="">john3123</a> pushed to <a href="">mhacks-web: </a>  Lorem Ipsum Github dipsum</p>
		<p class="relTime">45 min ago</p>
		
	</div>
	<div class="votes">
			<img src="images/up.png">
			<p class="votesCount">0</p>
			<img src="images/down.png">
		</div>
	</div>
	<?php } ?>
</div>
</body>
</html>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="jquery-ui/jquery-ui.min.js"></script>
<script>
$(document).ready( function() {
	setTimeout(function(){
		$("#viewmoreText").slideDown(200);
	},2000);
});

$("#viewmoreText").click(function(event) {
	$("#viewmoreText").hide();
	$("#viewmoreContent").slideDown(600);
	$("#viewmoreContent .activity").effect("highlight",3000);
});

</script>
