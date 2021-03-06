<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<title>HackStream</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" >
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="jquery-ui/jquery-ui.css">
	<link rel="stylesheet" href="css/locations.css">
</head>
<body>
	<?php include "nav.php";?>
	<div class="content_wrap" style="text-align:center;">
	<div id="map">
		<img src="images/map.png">	
		<!--rooms-->
		<!--bbb and dow-->
		<div id="wearables" class="room"><div class="percents"><p id="init">No commits yet :(</p></div></div>
		<div id="vr" class="room"><div class="percents"><p id="init">No commits yet :(</p></div></div>
		<div id="wozniak" class="room"><div class="percents"><p id="init">No commits yet :(</p></div></div>
		<div id="asimov" class="room"><div class="percents"><p id="init">No commits yet :(</p></div></div>
		<div id="tesla" class="room"><div class="percents"><p id="init">No commits yet :(</p></div></div>
		<div id="turing" class="room"><div class="percents"><p id="init">No commits yet :(</p></div></div>
		<div id="hopper" class="room"><div class="percents"><p id="init">No commits yet :(</p></div></div>
		<div id="ios" class="room"><div class="percents"><p id="init">No commits yet :(</p></div></div>
		<div id="swartz" class="room"><div class="percents"><p id="init">No commits yet :(</p></div></div>
		<!--eecs-->
		<div id="lovelace" class="room"><div class="percents"><p id="init">No commits yet :(</p></div></div>
		<div id="torvalds" class="room"><div class="percents"><p id="init">No commits yet :(</p></div></div>
		<div id="web_dev" class="room"><div class="percents"><p id="init">No commits yet :(</p></div></div>
		<div id="gates" class="room"><div class="percents"><p id="init">No commits yet :(</p></div></div>
		<div id="design" class="room"><div class="percents"><p id="init">No commits yet :(</p></div></div>
		<div id="hardware" class="room"><div class="percents"><p id="init">No commits yet :(</p></div></div>
		<div id="ar" class="room"><div class="percents"><p id="init">No commits yet :(</p></div></div>
		<div id="android" class="room"><div class="percents"><p id="init">No commits yet :(</p></div></div>
		<!--end rooms-->
	</div>
</div>
</body>
</html>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script>

$(document).ready(function() {

	$(".room").hover(function(event) {
		$(this).children(".percents").show();
	}, function() {
		$(this).children(".percents").hide();
	});

	var colors = [];
	$.ajax({
		dataType:"json",
		url:"json/langColors.json",
		success: function(gitcolors) {
			colors = gitcolors;
				console.log(colors);	
			$.ajax({
				url:"json/locationdata.json",
				dataType: "json",
				success: function(response) {
		   			for(room in response) {
		   				if(response.hasOwnProperty(room)) {
		   					var languages = response[room];
		   					for(language in languages) {
		   						if(languages.hasOwnProperty(language)) {
		   							percent = languages[language];
		   							if(!colors[language]) {
		   								hexCode = "#333";
		   							}
		   							else {
		   								hexCode = colors[language]["color"];
		   							}
		   							$("#"+room+" .percents").children("#init").remove();
		   							$("#"+room+" .percents").append("<p style='background:"+hexCode+";width:calc( "+percent+"% - 20px );'>"+language+": "+percent+"%</p>");

		   						}
		   					}
		   				}
		   			}
		   			
		   		}

			});
		}

   	});

});

</script>