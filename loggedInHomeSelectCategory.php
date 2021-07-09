<?php
	session_start();
	
	$ip = $_SESSION["randomCode"];
	if (($ip == null) || (!file_exists("LoggedInOrRemembered/login$ip.txt"))){
			header("Location: index.php");
	}
	
	//if ($_SESSION["referenceType"] == null){
		//$_SESSION["referenceType"] = "website";
	//}
	
?>
<html>
<head>
	<title>Reference Buddy</title>
	
	<?PHP
	include('styleNoShadow.html');
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
		<script src="scrollfix.js" type="text/javascript"></script>
</head>
<body onload="maybeMobile()" onresize="maybeMobile()" style='background-image: url("graphics/student3.jpg"); background-size: 100% 100%; 	background-attachment: fixed;	background-position: center; margin:0; padding:0;'> 

<div style='position:relative; top:33px; height:605px; width:165px; float:left; z-index:-1;'>

<!--Ad -->
	
</div>


<div id='leftAd'>
</div>	
<div id='bossDiv'>

<div id='leftAd' >
		
</div>	
</div>


<div id='centerMainWider' style='min-height:100%; width:100%; background-color:rgba(19,71,107,0.64);'>
	<?php
		include('bar2.3.php');
	?>
	<div id="bdless" style='width:100%;'>
		<br/><br/>
		<p align="center"><font face="Century Gothic" color='white' size='50'>Please select a style</font></p>
		
	</div>
	
	
	<div id="bdless2" align="center">
		
		<table align='center' width='100%'>
			<col width="60%">
			<col width="35%">
			
				<tr>
					<td colspan='2'>
						<p align="center"><font face="Century Gothic" color='white' style='font-size:25; margin:50'>Please note that your reference list will only work with the style you selected. If you want to change to another style later, you will have to create a new list.</font></p>
						<br/>
					</td>
				</tr>
			
			
			<?php
				$db_handle = mysql_connect("localhost", "f1424808_Admin", "***") or die(mysql_error());
				$db_found = mysql_select_db("f1424808_Users") or die(mysql_error());
				
						if ($db_found){
							$SQL = "SELECT Style_Name, Style_Code FROM referencing_styles ORDER BY Style_Name";
							$result = mysql_query($SQL);
				
							while ($db_field = mysql_fetch_assoc($result)){
								print "<tr>
											<td>
												<form action='" . $db_field['Style_Code'] . "/loggedIn.php' method='post'><input class='linkbarIndex' type='submit' value='" . $db_field['Style_Name'] . "' style='height:30%; width: 70%; white-space: normal; font-family: Arial; font-size: 30;'></form>
											</td>
											<td align='left'>
												<p class='subhead' align='left'><font color='white' size='5' face='Century Gothic'>
													Live referencing &#10004;
												</font></p>
											</td>
										</tr>
								";
							}	
							
				
							mysql_close($db_handle);
						}
						else{
							print "Database NOT Found";
						}
			?>	
			
			
			<tr>
				<td>
					<form action='Harvard/loggedIn.php' method='post'><input type='hidden' name='homeCategory' value='general'><input class='linkbarIndex' type='submit' value='British Harvard' style='height:30%; width: 70%; white-space: normal; font-family: Arial; font-size: 30;'></form>
				</td>
				<td align='left'>
						<p class='subhead' align='left'><font color='white' size='5' face='Century Gothic'>
							Live referencing &#10008;
						</font></p>
				</td>
				
			</tr>
			<tr>
				<td>
					<form action='HarvardAus/loggedIn.php' method='post'><input type='hidden' name='homeCategory' value='australian'><input class='linkbarIndex' type='submit' value='Australian Harvard' style='height:30%; width: 70%; white-space: normal; font-family: Arial; font-size: 30;'></form>
				</td>
				<td align='left'>
						<p class='subhead' align='left'><font color='white' size='5' face='Century Gothic'>
							Live referencing &#10008;
						</font></p>
				</td>
				
			</tr>
			
			<tr>
				<td>
					<form action='UNISA-CEMS/loggedIn.php' method='post'><input type='hidden' name='homeCategory' value='unisa'><input class='linkbarIndex' type='submit' value='UNISA - Harvard (CEMS)' style='height:30%; width: 70%; white-space: normal; font-family: Arial; font-size: 30;'></form>
					
				</td>
				<td align='left'>
						<p class='subhead' align='left'><font color='white' size='5' face='Century Gothic'>
							Live referencing: Not Yet
						</font></p>
				</td>
			</tr>
			<tr>
				<td>
					<form action='Stellenbosch/loggedIn.php' method='post'><input type='hidden' name='homeCategory' value='stellenbosch'><input class='linkbarIndex' type='submit' value='Stellenbosch University - Harvard' style='height:30%; width: 70%; white-space: normal; font-family: Arial; font-size: 30;'></form>
				</td>
				<td align='left'>
						<p class='subhead' align='left'><font color='white' size='5' face='Century Gothic'>
							Live referencing: Not Yet
						</font></p>
				</td>
			</tr>	
			<tr>
				<td>
					<form action='UCT/loggedIn.php' method='post'><input type='hidden' name='homeCategory' value='u'><input class='linkbarIndex' type='submit' value='University of Cape Town - Harvard' style='height:30%; width: 70%; white-space: normal; font-family: Arial; font-size: 30;'></form>
				</td>
				<td align='left'>
						<p class='subhead' align='left'><font color='white' size='5' face='Century Gothic'>
							Live referencing &#10008;
						</font></p>
				</td>
			</tr>
			
			
		</table>
	</div>
	
	
	
	
	
	
	
	
	
	
		
	
	

	</div>
	
</body>
</html>
