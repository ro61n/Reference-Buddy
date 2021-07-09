<?php
	session_start();
	header("Location: loggedInHarvardOptionOne.php");
	
	$ip = $_SESSION["randomCode"];
	if (($ip == null) || (!file_exists("LoggedInOrRemembered/login$ip.txt"))){
			header("Location: index.php");
	}
?>
<html>
<head>
	<title>Reference Buddy</title>
	<?PHP
	include('style.html');
	?>
	<script type="text/javascript">
			function toggle_login_div(id){
				var divChange = document.getElementById(id);
				
				if (divChange.style.display == 'none')
					divChange.style.display = 'block';
				else
					divChange.style.display = 'none';
			}
	</script>
</head>
<body style='background-image: url("bg.png"); background-size: 100% 100%; 	background-attachment: fixed;	background-position: center;'>
	<?php
		include('bar2.3.php');
	?>



	<div id="bdless">
	<br/>
		<p class="pageHeader" align="center"><font face="Arial" size='20' color='#2C3539'>Please select a Harvard format</font></p>
		<br/>
		<table align="center" height="80px" width='100%'>
				
				
				<tr height='50px'>
					<td>
						<a align="left" class="linkbarIndex" href="loggedInHarvardOptionOne.php" style=' padding-left: 20px; padding-right: 20px;'>Harvard: Australian Style</a>
						<!--<form action='home.php' method='post'><input type='hidden' name='homeCategory' value='general'><input class='linkbarIndex' type='submit' value='General / High School' style='height:30%; width: 70%; white-space: normal; font-family: Arial; font-size: 30;'></form>//-->
					</td>
				</tr>
				<tr height='50px'>
					<td>
						<br/>
						<p class='subhead' align='center' style='color:#2C3539; '><font size='5'>Other Styles (Change category to use these)</font></p>
						<br/>
					</td>
				</tr>
				<tr height='50px'>
					<td>
						<a align="left" class="linkbarIndex" href="#" style='padding-left: 30px; padding-right: 30px;'>Harvard: UCT</a>
						<br/>
						<br/>
					</td>
				</tr>
				
				<tr height='50px'>
					<td>
						<br/>
						<a align="left" class="linkbarIndex" href="#" style='padding-left: 30px; padding-right: 30px;'>Harvard: General</a>
						<br/>
					</td>
					
				</tr>
				
				<tr height='90px'>
					<td>
						<a align="left" class="linkbar" href="loggedInHome.php">Return to Editing</a>
					</td>
				</tr>
		</table>
	</div>
</body>
</html>