
	
		<?php
	session_start();
	
	$ip = $_SESSION["randomCode"];
	if (($ip == null) || (!file_exists("LoggedInOrRemembered/login$ip.txt"))){
			header("Location: index.php");
	}
	
	if ($_SESSION["referenceType"] == null){
		$_SESSION["referenceType"] = "stillChoose";
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

function liveWrite(){
			var x = document.getElementById("liveInput").value;
			
			var variableArr = [];
			var defaultArr = [];
			var placeholderArr = [];
			var prefixArr = [];
			var suffixArr = [];
			var j = 0;
			var r = 0;
			var outputString = "";
			
			//This is where it used to be
			
			
			//end
			while (document.getElementById([j])) {
					j++;
			}

			for (var i = 0; i < j; i++){
					variableArr[i] = document.getElementById([i]).value;
					//placeholderArr[i] = document.getElementById([i]).placeholder;
					placeholderArr[i] = document.getElementsByName("lineOfTextPlaceholder"+i)[0].value;
					
					defaultArr[i] = document.getElementById("defaultV["+i+"]").value;
					
					prefixArr[i] = document.getElementById("prefixV["+i+"]").value;
					suffixArr[i] = document.getElementById("suffixV["+i+"]").value;
					
					if (placeholderArr[i] == "Author"){
						// -- Authors
			var Surname = document.getElementsByName("Surname")[0].value;
			var Name = document.getElementsByName("Name")[0].value;
			var Editor = document.getElementsByName("Editor")[0].checked;
			
			var Name2 = document.getElementsByName("Name2")[0].value;
			var Surname2 = document.getElementsByName("Surname2")[0].value;
			var Name3 = document.getElementsByName("Name3")[0].value;
			var Surname3 = document.getElementsByName("Surname3")[0].value;
			var Name4 = document.getElementsByName("Name4")[0].value;
			var Surname4 = document.getElementsByName("Surname4")[0].value;
			var Name5 = document.getElementsByName("Name5")[0].value;
			var Surname5 = document.getElementsByName("Surname5")[0].value;
			
			var A1 = "";
			var A2 = "";
			var A3 = "";
			var A4 = "";
			var A5 = "";
			
			var AllAuthors = "";
			
			if (Editor == true){
				if ((Surname2 == "") && (Name2 == "")){
					Editor = ", editor";
				}
				else{
					Editor = ", editors";
				}
			}
			else {
				Editor = "";
			}
			
			if ((Name != "") || (Surname !="")){
									if ((Name2 != "") || (Surname2 !="")){
										A1 = Surname+" "+Name+",";
									}
									else {
										A1 = Surname+" "+Name;
									}
								}
								
								if ((Name2 != "") || (Surname2 !="")){
									if ((Name3 != "") || (Surname3 !="")){
										A2 = " "+Surname2+" "+Name2+",";
									}
									else {
										A2 = " "+Surname2+" "+Name2;
									}
								}
								
								if ((Name3 != "") || (Surname3 !="")){
									if ((Name4 != "") || (Surname4 !="")){
										A3 = " "+Surname3+" "+Name3+",";
									}
									else {
										A3 = " "+Surname3+" "+Name3;
									}
								}
								
								if ((Name4 != "") || (Surname4 !="")){
									if ((Name5 != "") || (Surname5 !="")){
										A4 = " "+Surname4+" "+Name4+",";
										A5 = " "+Surname5+" "+Name5;
									}
									else {
										A4 = " "+Surname4+" "+Name4;
									}
								}
									
			AllAuthors = A1+A2+A3+A4+A5+Editor;	
			
			// -- End of Authors
					
						variableArr[i] = AllAuthors;
					}
					
					if (placeholderArr[i] == "Editor"){
					
						//-- Start of Editors
			var ESurname = document.getElementsByName("ESurname")[0].value;
			var EName = document.getElementsByName("EName")[0].value;
			
			var EName2 = document.getElementsByName("EName2")[0].value;
			var ESurname2 = document.getElementsByName("ESurname2")[0].value;
			var EName3 = document.getElementsByName("EName3")[0].value;
			var ESurname3 = document.getElementsByName("ESurname3")[0].value;
			var EName4 = document.getElementsByName("EName4")[0].value;
			var ESurname4 = document.getElementsByName("ESurname4")[0].value;
			var EName5 = document.getElementsByName("EName5")[0].value;
			var ESurname5 = document.getElementsByName("ESurname5")[0].value;
			
			var E1 = "";
			var E2 = "";
			var E3 = "";
			var E4 = "";
			var E5 = "";
			
			var AllEditors = "";
			var EEditor = "";
			
			if ((EName != "") || (ESurname !="")){
									
									if ((ESurname2 == "") && (EName2 == "")){
										EEditor = ", editor";
									}
									else{
										EEditor = ", editors";
									}
									
									if ((EName2 != "") || (ESurname2 !="")){
										E1 = ESurname+" "+EName+",";
									}
									else {
										E1 = ESurname+" "+EName;
									}
								}
								
								if ((EName2 != "") || (ESurname2 !="")){
									if ((EName3 != "") || (ESurname3 !="")){
										E2 = " "+ESurname2+" "+EName2+",";
									}
									else {
										E2 = " "+ESurname2+" "+EName2;
									}
								}
								
								if ((EName3 != "") || (ESurname3 !="")){
									if ((EName4 != "") || (ESurname4 !="")){
										E3 = " "+ESurname3+" "+EName3+",";
									}
									else {
										E3 = " "+ESurname3+" "+EName3;
									}
								}
								
								if ((EName4 != "") || (ESurname4 !="")){
									if ((EName5 != "") || (ESurname5 !="")){
										E4 = " "+ESurname4+" "+EName4+",";
										E5 = " "+ESurname5+" "+EName5;
									}
									else {
										E4 = " "+ESurname4+" "+EName4;
									}
								}
								
								
								AllEditors = E1+E2+E3+E4+E5+EEditor;	
								
			
						//-- End of Editors
					
						variableArr[i] = AllEditors;
					}
					
					if (!variableArr[i]){
						x = x.replace("#"+placeholderArr[i]+"", defaultArr[i]); //it replaces 
						variableArr[i] = defaultArr[i];//makes the placeholding var = default var if the placeholding var is empty
						
					}
					else{
						variableArr[i] = prefixArr[i]+variableArr[i]+suffixArr[i];//adds suffix and prefix to the variableArr
					}
					

					
					
			}
			
			for (var k = 0; k < j; k++){
				x = x.replace("#"+placeholderArr[k]+"", variableArr[k]);
			}	
			
			//NBNBNB ---- the output hashtag problem
			document.getElementById("liveOutput").innerHTML = x;
			
			outputString = document.getElementById("liveOutput").innerHTML;
			for (var m = 0; m < j; m++){
				outputString = outputString.replace("#"+placeholderArr[m], "");
			}
			document.getElementById("liveOutput").innerHTML = outputString;
			
			var exampleDiv = document.getElementsByName("example")[0];
			if (outputString != ""){
				exampleDiv.style.display = 'block';
			}
			
		}
		
		function clear_all(){
			var exampleDiv = document.getElementsByName("example")[0];
			exampleDiv.style.display = 'none';
		}

		
			
	</script>		
	
	
	
</head>
<body style='background-size: 100% 100%; background-color:#0B2840;	background-position: center; margin:0; padding:0;'> 

	<?PHP
		//selected file:
		$selectedFile = $_POST["projectName"];
		
		//creates a new csv file if no file exists.

		
		$getContents = file_get_contents("LoggedInOrRemembered/login" . $ip . ".txt");
		if (!file_exists("Users/$getContents/Vancouver/general.csv"))
		{
			//print $passwordSession;
			
			$file = "Users/$getContents/Vancouver/general.csv";
			file_put_contents($file, "");
		}
	?>
	
	


<div id='bossDiv'>
<div style='position: relative; z-index: 2;'>

		<?php
		include('bar2.2C.php');
		?>
</div>	


<div id='menuButton' align='center' style='  background-color:#13476B; box-shadow: 5px 2px 5px rgba(0,0,0,0.5); border-top-right-radius:5px; border-bottom-right-radius:5px; position:fixed; top:200px; left:0px; '>	
	
	<a onclick="toggle_login_div('menuButton'); toggle_login_div('leftAd');"><img src='graphics/menuHiRes3.png' alt='menu' style='float:right;' width='50px'></a>
</div>



<div id='leftAd' align='center' style='display:none; box-shadow: 5px 2px 5px rgba(0,0,0,0.5); background-color:white; position:fixed; top:70px; left:0px; height:540px; width:236px; border-top-right-radius:10px; border-bottom-right-radius:10px;'>	
	
	
	<div id='' style='position:relative; top:15; left:5;'>
		<!--<a class="pageLinkC" onclick="toggle_login_div('orange');">Create New Project</a>//-->
	
	<?php
		//counts number of files
		$countFiles = count(glob("Users/$getContents/Vancouver/" . "*.csv" ));			
		
		print"
			
			
			<button  class='linkbarSmallButton' onclick=\"toggle_login_div('orange');\" style=' margin-top:0; cursor:pointer;' type='button'>Create new project</button>
			<button class='linkbarSmallButton' onclick=\" location.href = 'loggedInHomeSelectCategory.php'; \" style=' margin-top:4; cursor:pointer;' type='button'>  Change referencing style</button>
			<button class='linkbarSmallButton' onclick=\" location.href = 'loggedInHomeViewAllProjects.php'; \" style=' margin-top:4; cursor:pointer;' type='button'>Show all projects</button>
			
			<p class='subhead' align='center' style='margin-bottom:20;'><font color='#3D3C3A'>Your <b>Vancouver</b> Projects ($countFiles)</font></p>
			
		";
	?>
		
		
		
	</div>
<hr/>
	
	<div id='small2' style='background-color:white; position:relative; top:0; border: 0px solid #B4CFEC; height:370px;'>
	<!--<div id='small2' style='background-color:white; position:relative; top:0; border: 0px solid #B4CFEC; height:55%;'>//-->
		<table align='left' width='210px'>
			
	<?php
		//counts number of files
		$countFiles = count(glob("Users/$getContents/Vancouver/" . "*.csv" ));			
	?>
			
			
			
			<?PHP
				$file=glob("Users/$getContents/Vancouver/" . "*.csv" );
				
				for ( $i = 0 ; $i < count(glob("Users/$getContents/Vancouver/" . "*.csv" )); $i++)
					{
						$iniSelectedFile = $file[$i];
						$withoutUserFolder = substr($iniSelectedFile, strpos($iniSelectedFile, "/")+1);
						$substringPart = substr($withoutUserFolder, 0, -4);
						$withoutName = substr($substringPart, strpos($substringPart, "/")+1);
						$withoutNameB = substr($withoutName, strpos($withoutName, "/")+1);
						
						
						$shortened = substr($withoutNameB, 0 , 20);
						
						print"
						
						<tr>
							<td><form action='changeFile.php' method='post'><input type='hidden' name='projectName' value='$withoutName'><input type='submit' value='$shortened' style=' background-color :transparent; color:grey;'></form></td>
							<td><form action='changeAndDelete.php' method='post'><input type ='hidden' name='projectName' value='$withoutName'><input type='submit' value='X' style=' background-color :transparent; color:red;'></form></td>
						</tr>	
						";
					}
			
			?>
			
	
		</table>
	</div>
	<button onclick="toggle_login_div('menuButton'); toggle_login_div('leftAd');"  class='linkbarSmallButton' style=' margin-top:8; border-bottom-left-radius:0; border-bottom-right-radius:0; cursor:pointer;' type='button'>Hide</button>
</div>	


<div id='centerMain' >
	<div id="website" style=' display:none; position:fixed; height:34px; top:35px; border-top-left-radius:0; border-bottom-left-radius:25px; border-bottom-right-radius:25px; border-top-right-radius:0; background-color:#82CAFA; border-color:#82CAFA; '>
	
	<?php
					//THIs PHP code is for when a new user logs in and it creates and sets general.csv as default
					
					$generalDotCSV = file_get_contents("Users/$getContents/selectedFile.txt");
					if ((!file_exists("Users/$getContents/selectedFile.txt")) || ($generalDotCSV == "Users/$getContents/general.csv"))
				{
					
					$file = "Users/$getContents/selectedFile.txt";
					file_put_contents($file, "Users/$getContents/Vancouver/general.csv");
				}
					//$file = "$getContents/selectedFile.txt";
					//file_put_contents($file, $iniContents);
		
					
		$iniSelectedFile = file_get_contents("Users/$getContents/selectedFile.txt");
		$withoutUserFolder = substr($iniSelectedFile, strpos($iniSelectedFile, "/")+1);
		$substringPart = substr($withoutUserFolder, 0, -4);
		$withoutName = substr($substringPart, strpos($substringPart, "/")+1);
		print "
			<p class='subhead' style='position:relative; float:left;'><font color='white'>Selected Project: </font></p>
			<p style='position:relative; float:left; padding-left:1em;' class='divHeader'><font size='4.5' color='white'> $withoutName </font></p>
		";
	?>
	
			<a style='position:relative; float:right; border-top-right-radius:0; border-bottom-left-radius:0; border-top-left-radius:0;' align="right" class="pageLinkC" href="renameProjectMessage.php">Rename Project</a>
			<a style='position:relative; float:right; border-bottom-left-radius:0; border-top-left-radius:0; border-bottom-right-radius:0; border-top-right-radius:0;' align="right" class="pageLinkC" href="deleteFileMessage.php">Delete Project?</a>
			<a style='position:relative; float:right; border-bottom-left-radius:0; border-bottom-right-radius:0; border-top-right-radius:0;' align="left" class="pageLinkC" href="loggedInHarvard.php">Reference This!</a>
	</div>

	<div id="bdless">
		
			
		
			
			<br/><br/><br/>
		
		
		
	<div/>
	<?php
		if ((file_exists("Users/$getContents/dmReply.txt"))){
			$style = "style='background-color:E0FFFF;'";
		}
		else{
			$style = "style='display:none;'";
		}
	print" 
	<div id='dropDiv2' $style>
	";
	?>
		<br/>
		<a href='dmDelete.php' class='pageLinkC'>Delete Message</a></td>
		<p class='pageHeader' align='center'><font color='50EBEC'>Message from Reference Buddy</font></p>
		
		<?php
			if (file_exists("Users/$getContents/dmSend.txt")){
				$message = file_get_contents("Users/$getContents/dmSend.txt");
				$msg = str_replace("~", ",", $message);
				$messageNewLine = str_replace("\n", "<br/>", $msg);
				print "
					<p class='subhead' align='center'>  You asked:</p>
					<p class='divHeader' align='center'>$messageNewLine</p>
				";
			}
		
		//reply
		if (file_exists("Users/$getContents/dmReply.txt")){
			$message = file_get_contents("Users/$getContents/dmReply.txt");
			$msg = str_replace("~", ",", $message);
			//$messageNewLine = str_replace("\", "<br/>", $msg);
			$messageNewLine = $msg;
			print "
				<p class='divHeader' align='center'><font color='008080'>$messageNewLine</font></p>
			";
		}
		?>
	</div>
	<div id='dropDiv' style='display:none; background-color:E0FFFF;'>
	<br/>
		<a class='pageLinkC' onclick="toggle_login_div('dropDiv');">Close</a></td>
		<p class='pageHeader' align='center'><font color='50EBEC'>How can we help you?</font></p>
		<p class='divHeader' align='center'>All you really need to do is...</p>
		<p class='subhead' align='left'>  1. Type in the entries where it says 'Reference a 'website, book, etc.' then click Add.
									<br/> 2. Click on 'Harvard This'.
									<br/> 3. Then copy and paste the <b>alphabetically</b> ordered references into your document.
		</p>
		<br/>
		<p class='divHeader' align='center'>Have a question, DM (Direct Message) us here. </p>
		<form action = "dm.php" method="post">
			<input type='text' name='message' size='90' placeholder='Message'>
			<input type='submit' class='linkbar' value='Send'>
		</form>
	</div>
	
	
	
	
	
	<div id="orange2" style='display:none; background-color:FFFFCC;'>
		<p class='pageHeader' align='center'><font color='50EBEC'>Create New Project</font></p>
		<p class='subhead'>Please make sure that the project name contains at least 3 characters and does not include the following characters: ' "* /: < > ? \ |'</p>
		<form action = "createFile.php" method="post">
			<table align="center">
				<tr>
				<td><input type="text" name="NewFileName" placeholder="Project Name" size="80"/>
				</td>
				<td><input type="submit" class='pageLinkC' style='font-color:white;' value="Create New Project"/>
				</td>
				</tr>
			</table>
		</form>
	</div>
	
	<div id='orange'  style='display:none; position:fixed; top:0; left:0;  width:100%; height:100%; background-color: rgba(0,0,0, 0.7); border-color:rgba(130,202,255, 0);  z-index:10;'>
		<br/><br/>
		<div id="inputType" style='background-color:white; border-radius:3; margin-top:50px; z-index:20;'>
		
			
		
			<!--<p class='pageText' align='left' style='padding-left:4em;'>Create New Project</p>//-->
			<p style='margin-left:20%;' >
				<font style=" font-family:Century Gothic; font-size:45; color:rgba(209,208,206); color:#0F3955; " >
					Create New Project
				</font>
			</p>	
				<br/>
				<form action ="createFile.php" method="post">
				
							<input class='mainInputDesktop' type="text" name="NewFileName" placeholder="Project Name" size='20' style='height:35; font-size:35; width:75%;  padding-left:20px; color:#0F3955;' />
							<!--<input type='text' name='username' placeholder='Username' class='mainInputDesktop' style='height:35; font-size:35; width:75%;  padding-left:20px; color:#0F3955;' />//-->
						
							<input type="submit" class='linkbarIndexButt' style='font-color:white; cursor: pointer; font-size:15; ' value="Create New Project"/>
						
							<br/><br/>
							<p style='float:left; padding-left:2%; ;' class='subhead'>Referencing style: <b>Vancouver</b> [This project will only work with the Vancouver style]</p>
						
							
							<a  align="left" class='linkbarIndexButt' style=' float:right; cursor: pointer; font-size:15;' href="loggedInHomeSelectCategory.php">Change referencing style</a>
						
				</form>
				<br/>
				
				
		
			<!--<p style='margin-left:2%; margin-right:2%; margin-top:25px;'>
				<font style=" font-family:Century Gothic; font-size:15; padding:0; margin:0; color:black; " >
					Please make sure that the project name contains at least 3 characters and does not include the following characters: ' "* /: < > ? \ |'
				</font>
			</p>//-->
			
			<br/>
			
			
			<a align="right" class="linkbar" onclick="toggle_login_div('orange');" style='padding-left: 15px; background-color: red; padding-right: 15px;'>Close</a>
			<br/><br/>
		</div>
	</div>
	
	
	<div id="bdlessMenu" align="center">
		<br/>
		<table align='center' width='100%'>
			<tr>
				
				<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='Book'><input class='sourceButtons' type='submit' value='Book' style='border-top-left-radius: 32px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
				<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='Internet'><input class='sourceButtons' type='submit' value='Internet' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
				<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='Conference'><input class='sourceButtons' type='submit' value='Conference' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
				<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='JournalArticle'><input class='sourceButtons' type='submit' value='Journal Article' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
				<a align="left" class='sourceButtons' onclick="toggle_login_div('bdlessInnerDiv'); toggle_login_div('bdlessMenu'); " style='border-top-right-radius: 32px;'>|Show All</a>
			</tr>
		</table>
	</div>
	
	
	<div id="bdlessInnerDiv" style='display:none;' align="center">
		<br/>
		<table align="center" width="100%">
			<tr>
			<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='Book'><input class='sourceButtons' type='submit' value='Book' style='border-top-left-radius: 32px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 32px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='BookChapter'><input class='sourceButtons' type='submit' value='Book Chapter' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='CDRom'><input class='sourceButtons' type='submit' value='CD-ROM' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='CochraneReview'><input class='sourceButtons' type='submit' value='Cochrane Review' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='Conference'><input class='sourceButtons' type='submit' value='Conference' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='Dictionary'><input class='sourceButtons' type='submit' value='Dictionary' style='border-top-left-radius: 0px; border-top-right-radius:32px; border-bottom-right-radius:32px; border-bottom-left-radius: 0px;'></form>
						<br/><br/>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='Encyclopaedia'><input class='sourceButtons' type='submit' value='Encyclopaedia' style='border-top-left-radius: 32px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 32px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='Internet'><input class='sourceButtons' type='submit' value='Internet' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='JournalArticle'><input class='sourceButtons' type='submit' value='Journal Article' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='Newspaper'><input class='sourceButtons' type='submit' value='Newspaper' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='PackageInsert'><input class='sourceButtons' type='submit' value='Package Insert' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='Pamphet'><input class='sourceButtons' type='submit' value='Pamphlet' style='border-top-left-radius: 0px; border-top-right-radius:32px; border-bottom-right-radius:32px; border-bottom-left-radius: 0px;'></form>
						<br/><br/>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='Thesis'><input class='sourceButtons' type='submit' value='Thesis' style='border-top-left-radius: 32px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 32px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='UnpublishedMaterial'><input class='sourceButtons' type='submit' value='Unpublished Material' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='VideoRecording'><input class='sourceButtons' type='submit' value='Video Recording' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<a align="left" class='sourceButtons' onclick=" toggle_login_div('bdlessMenu'); toggle_login_div('bdlessInnerDiv');" style='border-top-left-radius: 0px; border-top-right-radius:32px; border-bottom-right-radius:32px; border-bottom-left-radius: 0px;'>|Show less</a>
						<br/><br/>
			</tr>
		</table>
	</div>
	
	
	
	
	<?php
	
		function hashTagFunc(){
		$ip = $_SESSION["randomCode"];
		$getContents = file_get_contents("LoggedInOrRemembered/login" . $ip . ".txt");
		
		$iniSelectedFile = file_get_contents("Users/$getContents/selectedFile.txt");
		$withoutUserFolder = substr($iniSelectedFile, strpos($iniSelectedFile, "/")+1);
		$substringPart = substr($withoutUserFolder, 0, -4);
		$withoutName = substr($substringPart, strpos($substringPart, "/")+1);
		$withoutSpaces = str_replace(' ', '', $withoutName);
			
				print"
					<p class='subhead' align='left'>#tag (optional - this will add the reference entry to #Tag Buddy)</p>
					<!--<input type='text' name='hashTag' value='#" . $withoutSpaces . " #'  size='90'>//-->
					<input type='text' name='hashTag' placeholder='eg. #sport #tennis' size='90'>
					<input type='checkbox' name='dontShare' value='checked' > Don't share to #Tag Buddy
					";
		}
		
		function multipleAuthorsInput($u){
		return '
									<input type="text" name="Surname" placeholder="Author Surname" size="42" class="mainInputDesktop" style="height: 37; font-size:25; width:48%; padding-left:20px; float:left; color:#0F3955; " >
									<input type="text" name="Name" placeholder="Initials e.g. JK / Corporate Author" size="42" class="mainInputDesktop" style="height: 37; font-size:25; width:48%; padding-left:20px; float:right; color:#0F3955; " >
									<div id="bdlessInnerDiv' . $u . '" style="display:none;">
										
										<input type="text" name="Surname2" placeholder="2nd Author Last Name" size="42" class="mainInputDesktop" style="height: 37; font-size:25; width:48%; padding-left:20px; float:left; color:#0F3955;" >
										<input type="text" name="Name2" placeholder="2nd Author Initials" size="42" class="mainInputDesktop" style="height: 37; font-size:25; width:48%; padding-left:20px; float:right; color:#0F3955; " >
										
										<input type="text" name="Surname3" placeholder="3rd Author Last Name" size="42" class="mainInputDesktop" style="height: 37; font-size:25; width:48%; padding-left:20px; float:left; color:#0F3955;" >
										<input type="text" name="Name3" placeholder="3rd Author Initials" size="42" class="mainInputDesktop" style="height: 37; font-size:25; width:48%; padding-left:20px; float:right; color:#0F3955; " >
										
										<input type="text" name="Surname4" placeholder="4th Author Last Name" size="42" class="mainInputDesktop" style="height: 37; font-size:25; width:48%; padding-left:20px; float:left; color:#0F3955;" >
										<input type="text" name="Name4" placeholder="4th Author Initials" size="42" class="mainInputDesktop" style="height: 37; font-size:25; width:48%; padding-left:20px; float:right; color:#0F3955; " >
										
										<input type="text" name="Surname5" placeholder="5th Author Last Name" size="42" class="mainInputDesktop" style="height: 37; font-size:25; width:48%; padding-left:20px; float:left; color:#0F3955;" >
										<input type="text" name="Name5" placeholder="5th Author Initials" size="42" class="mainInputDesktop" style="height: 37; font-size:25; width:48%; padding-left:20px; float:right; color:#0F3955; " >
									</div>
									<a align="left" class="Button1" onclick=\'toggle_login_div("bdlessInnerDiv'. $u . '");\'>Add more authors</a>
									
									
		';
		}
		
		function multipleEditorsInput($u){
		return '
									<input type="text" name="ESurname" placeholder="Editor Surname" size="42" style="height: 37; font-size:25; width:48%; padding-left:20px; float:left; color:#0F3955;" >
									<input type="text" name="EName" placeholder="Initials e.g. JK" size="42" style="height: 37; font-size:25; width:48%; padding-left:20px; float:right; color:#0F3955; " >
									<div id="bdlessInnerDiv2' . $u . '" style="display:none;">
										
										<input type="text" name="ESurname2" placeholder="2nd Editor Last Name" size="42" class="mainInputDesktop" style="height: 37; font-size:25; width:48%; padding-left:20px; float:left; color:#0F3955;" >
										<input type="text" name="EName2" placeholder="2nd Editor Initials" size="42" class="mainInputDesktop" style="height: 37; font-size:25; width:48%; padding-left:20px; float:right; color:#0F3955; " >
										
										<input type="text" name="ESurname3" placeholder="3rd Editor Last Name" size="42" class="mainInputDesktop" style="height: 37; font-size:25; width:48%; padding-left:20px; float:left; color:#0F3955;" >
										<input type="text" name="EName3" placeholder="3rd Editor Initials" size="42" class="mainInputDesktop" style="height: 37; font-size:25; width:48%; padding-left:20px; float:right; color:#0F3955; " >
										
										<input type="text" name="ESurname4" placeholder="4th Editor Last Name" class="mainInputDesktop" size="42" style="height: 37; font-size:25; width:48%; padding-left:20px; float:left; color:#0F3955;" >
										<input type="text" name="EName4" placeholder="4th Editor Initials" size="42" class="mainInputDesktop" style="height: 37; font-size:25; width:48%; padding-left:20px; float:right; color:#0F3955; " >
										
										<input type="text" name="ESurname5" placeholder="5th Editor Last Name" size="42" class="mainInputDesktop" style="height: 37; font-size:25; width:48%; padding-left:20px; float:left; color:#0F3955;" >
										<input type="text" name="EName5" placeholder="5th Editor Initials" size="42" class="mainInputDesktop" style="height: 37; font-size:25; width:48%; padding-left:20px; float:right; color:#0F3955; " >
									</div>
									<a align="left" class="Button1" onclick=\'toggle_login_div("bdlessInnerDiv2'. $u . '");\'>Add more editors</a>
		';
		}
		
		function multipleAuthorsOutput(){
			
			//$BooksAuthor= checkForComma($_POST["BooksAuthor"]);
			
			$Surname= checkForComma($_POST["Surname"]);
								$Name = checkForComma($_POST["Name"]);
								
								$Editor = checkForComma($_POST["Editor"]);
								
								
											
								$Name2 = checkForComma($_POST["Name2"]);
								$Surname2 = checkForComma($_POST["Surname2"]);
								$Name3 = checkForComma($_POST["Name3"]);
								$Surname3 = checkForComma($_POST["Surname3"]);
								$Name4 = checkForComma($_POST["Name4"]);
								$Surname4 = checkForComma($_POST["Surname4"]);
								$Name5 = checkForComma($_POST["Name5"]);
								$Surname5 = checkForComma($_POST["Surname5"]);
								
								if ($Editor == "checked"){
									if (($Surname2 == "") && ($Name2 == "")){
										$Editor = "~ editor";
									}
									else{
										$Editor = "~ editors";
									}
								}
								
								
								if (($Name != "") || ($Surname !="")){
									if (($Name2 != "") || ($Surname2 !="")){
										$A1 = "$Surname $Name~";
									}
									else {
										$A1 = "$Surname $Name";
									}
								}
								
								if (($Name2 != "") || ($Surname2 !="")){
									if (($Name3 != "") || ($Surname3 !="")){
										$A2 = " $Surname2 $Name2~";
									}
									else {
										$A2 = " $Surname2 $Name2";
									}
								}
								
								if (($Name3 != "") || ($Surname3 !="")){
									if (($Name4 != "") || ($Surname4 !="")){
										$A3 = " $Surname3 $Name3~";
									}
									else {
										$A3 = " $Surname3 $Name3";
									}
								}
								
								if (($Name4 != "") || ($Surname4 !="")){
									if (($Name5 != "") || ($Surname5 !="")){
										$A4 = " $Surname4 $Name4~";
										$A5 = " $Surname5 $Name5";
									}
									else {
										$A4 = " $Surname4 $Name4";
									}
								}
									
			$Author = "$A1$A2$A3$A4$A5$Editor";	
									
			return $Author;
		}
		
		function multipleEditorsOutput(){
			
			//$BooksAuthor= checkForComma($_POST["BooksAuthor"]);
			
			$ESurname= checkForComma($_POST["ESurname"]);
								$EName = checkForComma($_POST["EName"]);
								
								//$EEditor = "checked";
								
								
											
								$EName2 = checkForComma($_POST["EName2"]);
								$ESurname2 = checkForComma($_POST["ESurname2"]);
								$EName3 = checkForComma($_POST["EName3"]);
								$ESurname3 = checkForComma($_POST["ESurname3"]);
								$EName4 = checkForComma($_POST["EName4"]);
								$ESurname4 = checkForComma($_POST["ESurname4"]);
								$EName5 = checkForComma($_POST["EName5"]);
								$ESurname5 = checkForComma($_POST["ESurname5"]);
								
								//if ($EEditor == "checked"){
								//	if (($ESurname2 == "") && ($EName2 == "")){
								//		$EEditor = "~ editor";
								//	}
								//	else{
								//		$EEditor = "~ editors";
								//	}
								//}
								
								
								if (($EName != "") || ($ESurname !="")){
									
									if (($ESurname2 == "") && ($EName2 == "")){
										$EEditor = "~ editor";
									}
									else{
										$EEditor = "~ editors";
									}
									
									if (($EName2 != "") || ($ESurname2 !="")){
										$E1 = "$ESurname $EName~";
									}
									else {
										$E1 = "$ESurname $EName";
									}
								}
								
								if (($EName2 != "") || ($ESurname2 !="")){
									if (($EName3 != "") || ($ESurname3 !="")){
										$E2 = " $ESurname2 $EName2~";
									}
									else {
										$E2 = " $ESurname2 $EName2";
									}
								}
								
								if (($EName3 != "") || ($ESurname3 !="")){
									if (($EName4 != "") || ($ESurname4 !="")){
										$E3 = " $ESurname3 $EName3~";
									}
									else {
										$E3 = " $ESurname3 $EName3";
									}
								}
								
								if (($EName4 != "") || ($ESurname4 !="")){
									if (($EName5 != "") || ($ESurname5 !="")){
										$E4 = " $ESurname4 $EName4~";
										$E5 = " $ESurname5 $EName5";
									}
									else {
										$E4 = " $ESurname4 $EName4";
									}
								}
								
								
								$allEditors = "$E1$E2$E3$E4$E5$EEditor";	
								
								
								//if (substr("$allEditors", -1) == " "){
								//	$allEditors = substr("$allEditors", 0, -1);
								//}
			return $allEditors;
		}
		
		$goldMembership=true;
	?>
	
	<!--//-->
	<div id="inputType" style='background-color:white; border-radius:3;'>
	<?php
	
	$typeOfSource = $_SESSION["referenceType"];
	
	if ( ($typeOfSource == "Book") || ($typeOfSource == "BookChapter") || ($typeOfSource == "CDRom") || ($typeOfSource == "CochraneReview") || ($typeOfSource == "Conference") || ($typeOfSource == "Dictionary") || ($typeOfSource == "Encyclopaedia") || ($typeOfSource == "Internet") || ($typeOfSource == "JournalArticle") || ($typeOfSource == "Newspaper") || ($typeOfSource == "PackageInsert") || ($typeOfSource == "Pamphet") || ($typeOfSource == "Thesis") || ($typeOfSource == "UnpublishedMaterial") || ($typeOfSource == "VideoRecording") ){
		
		$resourceName = $_SESSION["referenceType"];
		
		$i = 0;
		$totalResources ="";
		
		for ($i=0; $i<$totalInputs; $i++){
			$resource[$i] = $_GET['entry' . $i];
			$totalResources = "$totalResources$resource[$i],";
		}
		
		if (!file_exists("Vancouver/Resources/$resourceName.txt")){
				file_put_contents("Vancouver/Resources/$resourceName.txt" , "$totalResources");
		}
		
		print "<p style='' align='center' ><font style=' font-family:Century Gothic; font-size:40; color:#3D3C3A; ' >$resourceName<br/></p></font>";
		
		$file_handle = fopen("Vancouver/Resources/$resourceName.txt", "r") or die ("Error");
		$line_of_text = fgetcsv($file_handle, 1024);
		fclose($file_handle);//only difference
		
		//placeholder variables
		//$file_handlePlaceholder = file_get_contents("Vancouver/Resources/$resourceName" . "PlaceHolder.txt");
		$file_handlePlaceholder = fopen("Vancouver/Resources/$resourceName" . "Placeholder.txt", "r") or die ("Error");
		//$line_of_textPlaceholder = json_decode($file_handleVar, true);
		$line_of_textPlaceholder = fgetcsv($file_handlePlaceholder, 1024);
		
		
		//example variables
		$file_handleVar = file_get_contents("Vancouver/Resources/$resourceName" . "Var.json");
		$line_of_textVar = json_decode($file_handleVar, true);
		
		//Default Values
		$file_handleDefault = file_get_contents("Vancouver/Resources/$resourceName" . "Default.json");
		$line_of_textDefault = json_decode($file_handleDefault, true);
		
		//Prefix Values
		$file_handlePrefix = file_get_contents("Vancouver/Resources/$resourceName" . "Prefix.json");
		$line_of_textPrefix = json_decode($file_handlePrefix, true);
		
		//Suffix Values
		$file_handleSuffix = file_get_contents("Vancouver/Resources/$resourceName" . "Suffix.json");
		$line_of_textSuffix = json_decode($file_handleSuffix, true);
		
		//HashTag Inputs
		$file_handleHashtagInput = file_get_contents("Vancouver/Resources/$resourceName" . "HashtagInput.csv");
		$line_of_textHashtagInput = $file_handleHashtagInput;

		if ($_GET['totalInputs'] == null){
			$totalInputs = count($line_of_text) - 1;
		}		
		print "
				<input type='hidden' name='totalInputs' value=" . $totalInputs . ">
				<input type='hidden' name='resourceName' value=" . $resourceName . ">
				
				<form action='loggedInHomeVancouver.php' method='post'>
				<input type='hidden' name='type' value='$resourceName'>
				
		";

		$show_Authors = "";
		$show_Editors = "";
		
		$floatChange =0;
		
		for ($i=0; $i<$totalInputs; $i++){
			
			if ($line_of_text[$i] == "Author"){
				$show_Authors = multipleAuthorsInput(2) . "
									<input type='checkbox' name='Editor' value='checked'> These are editors not authors.	
									<br/><br/>";
									
				$floatChange++;						
			}
			
			if ($line_of_text[$i] == "Editor"){
				$show_Editors = multipleEditorsInput(2) . "
									<br/><br/>";
									
				$floatChange++;						
			}
			
		}
			print "
				$show_Authors $show_Editors
			";
		
		
		for ($i=0; $i<$totalInputs; $i++){
			
			//Example Variables
			if ($line_of_textVar[$i] !=""){
			//	$valueVar = "value='$line_of_textVar[$i]' ";
			}
			else {
				$valueVar = "value='' ";
			}
			
			//Default variables
			if ($line_of_textDefault[$i] !=""){
				$valueDefault = "value='$line_of_textDefault[$i]' ";
			}
			else {
				$valueDefault = "value='' ";
			}
			
			//Prefix variables
			if ($line_of_textPrefix[$i] !=""){
				$valuePrefix = "value='$line_of_textPrefix[$i]' ";
			}
			else {
				$valuePrefix = "value='' ";
			}
			
			//Suffix variables
			if ($line_of_textSuffix[$i] !=""){
				$valueSuffix = "value='$line_of_textSuffix[$i]' ";
			}
			else {
				$valueSuffix = "value='' ";
			}
			
			$hiddenType = "";
			if (($line_of_text[$i] == "Author") || ($line_of_text[$i] == "Editor") ){
				$hiddenType = "type='hidden'";
			}
			else {
				$hiddenType = "type='text'";
			}
			
			$float="";
			$break="";
			
			if (($i-$floatChange)%2 == 0){
				$float = "style='height: 37; font-size:25; width:48%;  padding-left:20px; float:left; color:#0F3955; '";
			}
			else {
				$float = "style='height: 37; font-size:25; width:48%; padding-left:20px; float:right; color:#0F3955; '";
				$break="<br/>";
				
			}
		
			print "
					<input  $float $hiddenType class='mainInputDesktop'  id='$i' oninput='liveWrite()' name='$resourceName$line_of_text[$i]' placeholder='$line_of_textPlaceholder[$i]' $valueVar >	 <!--	<input type='checkbox' onchange=\"toggle_login_div('defaultV[$i]');\" name='' value='checked' $defaultCheck > May be empty?				<input type='checkbox' onchange=\"toggle_login_div('prefixV[$i]'); toggle_login_div('suffixV[$i]');\" name='' value='checked' $prefixSuffixCheck > Prefix/suffix? 				//-->
					
					<input type='hidden' name='lineOfTextPlaceholder$i' value='$line_of_text[$i]'>
					
					<input type='hidden' id='defaultV[$i]' $valueDefault style='display:$defaultStyle;' class='mainInput' oninput='liveWrite()' name='lineOfTextDefault$i' placeholder='Default empty value' size='30'>
					
					
					<input type='hidden' id='prefixV[$i]' $valuePrefix style='display:$prefixSuffixStyle;' class='mainInput' oninput='liveWrite()' name='lineOfTextPrefix$i' placeholder='Prefix' size='30' >
					<input type='hidden' id='suffixV[$i]' $valueSuffix style='display:$prefixSuffixStyle;' class='mainInput' oninput='liveWrite()' name='lineOfTextSuffix$i' placeholder='Suffix' size='30'>

					
				$break	
			";
			
			$hashTagTotalInputs = "$hashTagTotalInputs #$line_of_text[$i]";
		}//end of for loop
		
		print "<br/><br/><br/><br/>";
		
		//$hashTagTotalInputs = substr($hashTagTotalInputs, 1);
		
		//Hashtag Input Variables
			if ($line_of_textHashtagInput !=""){
				$hashTagTotalInputsValue = "$line_of_textHashtagInput' ";
			}
			else {
				$hashTagTotalInputsValue = substr($hashTagTotalInputs, 1);
			}
		
		
		
		
		
		
		
		
	}
	else{
				print "
						<p class='divHeader' align='center'><font color='#3D3C3A' size='4.5'>Please select a source from the top to get started</font></p>
					";
		
	}
	?>

	
	<div id='bdless' name='example' style='display:none;'>
	
	<?php
		print "
				<input type='hidden' id='liveInput' class='mainInput' name='hashtagInput' size='65' oninput='liveWrite()' value='$hashTagTotalInputsValue'>
				<p id='liveOutput' style='font-size:20px; padding-left:1em; padding-top:1em; padding-right:1em;'></p>
				<input type='submit' value='Add' class='linkbar' style='float:left;'><input type='reset' onClick='clear_all()' value='Clear' class='linkbar' float:right;'><a href='homeSelectCategory.php' class='linkbar' float:right;'>Change Referencing Style</a>
				<br/>

		</form>

		";
	?>
				
	</div>
	
	</div>
	<!--//-->
	
	
	
	
	
	
	

	
	<?PHP
		//$username = $_POST["username"];
		
		function checkForComma($change){
			if ($change !=""){
				if (strpos($change, ",")){
					$change = str_replace(",","~", $change);	
				}
				return ($change);
			}
		}
		
		function changeToComma($changeBack){
							if ($changeBack != ""){
								if (strpos($changeBack, "~")){
									$changeBack = str_replace("~",",", $changeBack);	
								}
								return ($changeBack);
							}
		}
		
		$iniSelectedFile = file_get_contents("Users/$getContents/selectedFile.txt");
		$file = "$iniSelectedFile";
		
		$dontShare = $_POST['dontShare'];
		$type = $_POST['type'];
		$hashTag = $_POST['hashTag'];
		if ($hashTag !=""){
			$hashTag = strtolower($hashTag);
		}
		if ($dontShare == 'checked'){
			$hashTag = '';
		}
		
	
		
		
	 
					
						
						if ($type == "VideoRecording"){
							$VideoRecordingYear= checkForComma($_POST["VideoRecordingYear"]);
												$VideoRecordingPublications= checkForComma($_POST["VideoRecordingPublications"]);
												$VideoRecordingPlace= checkForComma($_POST["VideoRecordingPlace"]);
												$VideoRecordingDetails= checkForComma($_POST["VideoRecordingDetails"]);
												$VideoRecordingTitle= checkForComma($_POST["VideoRecordingTitle"]);
												$VideoRecordingAuthor= checkForComma($_POST["VideoRecordingAuthor"]);
												
							
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							
							if ($Author == "" || $Author == " "){
								$Author = "$VideoRecordingTitle";
								$VideoRecordingTitle = "";
							}
							
							$line =  $Author . "," . $VideoRecordingTitle . "," . $VideoRecordingDetails . "," . $VideoRecordingPlace . "," . $VideoRecordingPublications . "," . $VideoRecordingYear. ",VideoRecording";
							
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
 
					
						
						if ($type == "UnpublishedMaterial"){
							$UnpublishedMaterialYear= checkForComma($_POST["UnpublishedMaterialYear"]);
												$UnpublishedMaterialOrganisation= checkForComma($_POST["UnpublishedMaterialOrganisation"]);
												$UnpublishedMaterialTitle= checkForComma($_POST["UnpublishedMaterialTitle"]);
												$UnpublishedMaterialAuthor= checkForComma($_POST["UnpublishedMaterialAuthor"]);
												
							
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							
							if ($Author == "" || $Author == " "){
								$Author = "$UnpublishedMaterialTitle";
								$UnpublishedMaterialTitle = "";
							}
							
							$line =  $Author . "," . $UnpublishedMaterialTitle . "," . $UnpublishedMaterialOrganisation . "," . $UnpublishedMaterialYear. ",UnpublishedMaterial";
							
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
 
					
						
						if ($type == "Thesis"){
							$ThesisYear= checkForComma($_POST["ThesisYear"]);
												$ThesisPublisher= checkForComma($_POST["ThesisPublisher"]);
												$ThesisPlace= checkForComma($_POST["ThesisPlace"]);
												$ThesisTitle= checkForComma($_POST["ThesisTitle"]);
												$ThesisAuthor= checkForComma($_POST["ThesisAuthor"]);
												
							
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							
							if ($Author == "" || $Author == " "){
								$Author = "$ThesisTitle";
								$ThesisTitle = "";
							}
							
							$line =  $Author . "," . $ThesisTitle . "," . $ThesisPlace . "," . $ThesisPublisher . "," . $ThesisYear. ",Thesis";
							
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
 
					
						
						if ($type == "Pamphet"){
							$PamphetAdditionalInfo= checkForComma($_POST["PamphetAdditionalInfo"]);
												$PamphetYear= checkForComma($_POST["PamphetYear"]);
												$PamphetPublisher= checkForComma($_POST["PamphetPublisher"]);
												$PamphetTitle= checkForComma($_POST["PamphetTitle"]);
												$PamphetAuthor= checkForComma($_POST["PamphetAuthor"]);
												
							
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							
							if ($Author == "" || $Author == " "){
								$Author = "$PamphetTitle";
								$PamphetTitle = "";
							}
							
							$line =  $Author . "," . $PamphetTitle . "," . $PamphetPublisher . "," . $PamphetYear . "," . $PamphetAdditionalInfo. ",Pamphet";
							
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
 
					
						
						if ($type == "PackageInsert"){
							$PackageInsertYear= checkForComma($_POST["PackageInsertYear"]);
												$PackageInsertCompany= checkForComma($_POST["PackageInsertCompany"]);
												$PackageInsertPlace= checkForComma($_POST["PackageInsertPlace"]);
												$PackageInsertName= checkForComma($_POST["PackageInsertName"]);
												
							
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							
							$line =  $PackageInsertName . "," . $PackageInsertPlace . "," . $PackageInsertCompany . "," . $PackageInsertYear. ",PackageInsert";
							
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
 
					
						
						if ($type == "Newspaper"){
							$NewspaperColumn= checkForComma($_POST["NewspaperColumn"]);
												$NewspaperPage= checkForComma($_POST["NewspaperPage"]);
												$NewspaperSection= checkForComma($_POST["NewspaperSection"]);
												$NewspaperDay= checkForComma($_POST["NewspaperDay"]);
												$NewspaperMonth= checkForComma($_POST["NewspaperMonth"]);
												$NewspaperYear= checkForComma($_POST["NewspaperYear"]);
												$NewspaperNewspaper= checkForComma($_POST["NewspaperNewspaper"]);
												$NewspaperTitle= checkForComma($_POST["NewspaperTitle"]);
												$NewspaperAuthor= checkForComma($_POST["NewspaperAuthor"]);
												
							
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							
							if ($Author == "" || $Author == " "){
								if ($NewspaperTitle == ""){
									$NewspaperTitle = $NewspaperNewspaper;
									$NewspaperNewspaper = "";
								}
								$Author = $NewspaperTitle;
								$NewspaperTitle = "";
							}
							
							$line =  $Author . "," . $NewspaperTitle . "," . $NewspaperNewspaper . "," . $NewspaperYear . "," . $NewspaperMonth . "," . $NewspaperDay . "," . $NewspaperSection . "," . $NewspaperPage . "," . $NewspaperColumn. ",Newspaper";
							
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
 
					
						
						if ($type == "JournalArticle"){
							$JournalArticlePage= checkForComma($_POST["JournalArticlePage"]);
												$JournalArticleIssue= checkForComma($_POST["JournalArticleIssue"]);
												$JournalArticleVolume= checkForComma($_POST["JournalArticleVolume"]);
												$JournalArticleDay= checkForComma($_POST["JournalArticleDay"]);
												$JournalArticleMonth= checkForComma($_POST["JournalArticleMonth"]);
												$JournalArticleYear= checkForComma($_POST["JournalArticleYear"]);
												$JournalArticleJournalName= checkForComma($_POST["JournalArticleJournalName"]);
												$JournalArticleArticleTitle= checkForComma($_POST["JournalArticleArticleTitle"]);
												$JournalArticleAuthor= checkForComma($_POST["JournalArticleAuthor"]);
												
							
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							
							//if ($Author == "" || $Author == " "){
							//	$Author = "$JournalArticleArticleTitle";
							//	$JournalArticleArticleTitle = "";
							//}
							
							if ($Author == "" || $Author == " "){
								if ($JournalArticleArticleTitle == ""){
									$JournalArticleArticleTitle = $JournalArticleJournalName;
									$JournalArticleJournalName = "";
								}
								$Author = $JournalArticleArticleTitle;
								$JournalArticleArticleTitle = "";
							}
							
							
							$line =  $Author . "," . $JournalArticleArticleTitle . "," . $JournalArticleJournalName . "," . $JournalArticleYear . "," . $JournalArticleMonth . "," . $JournalArticleDay . "," . $JournalArticleVolume . "," . $JournalArticleIssue . "," . $JournalArticlePage. ",JournalArticle";
							
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
 
					
						
						if ($type == "Internet"){
							$InternetURL= checkForComma($_POST["InternetURL"]);
												$InternetCited= checkForComma($_POST["InternetCited"]);
												$InternetUpdated= checkForComma($_POST["InternetUpdated"]);
												$InternetPublisher= checkForComma($_POST["InternetPublisher"]);
												$InternetPlace= checkForComma($_POST["InternetPlace"]);
												$InternetTitle= checkForComma($_POST["InternetTitle"]);
												$InternetAuthor= checkForComma($_POST["InternetAuthor"]);
												
							
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							
							if ($Author == "" || $Author == " "){
								$Author = "$InternetTitle";
								$InternetTitle = "";
							}
							
							$line =  $Author . "," . $InternetTitle . "," . $InternetPlace . "," . $InternetPublisher . "," . $InternetUpdated . "," . $InternetCited . "," . $InternetURL. ",Internet";
							
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
							
							//if ($hashTag != ""){
				$date = date("j F Y");		
		//sql		
				$db_handle = mysql_connect("localhost", "f1424808_Admin", "86cba5b1") or die(mysql_error());
				$db_found = mysql_select_db("f1424808_Users") or die(mysql_error());
				if ($db_found){
				
					$result = mysql_query("SELECT URL, name, author FROM searchWeb WHERE URL = '$InternetURL' && name='$InternetTitle' && author='$Author'");
						
						if (mysql_num_rows($result) == 0 ){
							$SQL = "INSERT INTO searchWeb(style, type, URL, name, year, author, date, place, publisher) 
													VALUES ('logVancouver', '$type', '$InternetURL', '$InternetTitle', '$InternetYear', '$Author', '$date', '$InternetPlace', '$InternetPublisher')";
													
							$result = mysql_query($SQL);
						}
						else{
							$SQL = "UPDATE searchWeb 
									SET style='logVancouver', type='$type', author='$Author', URL='$InternetURL', name='$InternetTitle', year='$InternetYear', date='$date', place='$InternetPlace', publisher='$InternetPublisher', noOfReferences= noOfReferences + 1 
									WHERE URL='$InternetURL' AND name='$InternetTitle' AND author='$Author'";
							$result = mysql_query($SQL);
						}
				mysql_close($db_handle);
				}
							//} undo this -->//
							
						}
 
					
						
						if ($type == "Encyclopaedia"){
							$EncyclopaediaPages= checkForComma($_POST["EncyclopaediaPages"]);
												$EncyclopaediaVolume= checkForComma($_POST["EncyclopaediaVolume"]);
												$EncyclopaediaYear= checkForComma($_POST["EncyclopaediaYear"]);
												$EncyclopaediaPublisher= checkForComma($_POST["EncyclopaediaPublisher"]);
												$EncyclopaediaPlace= checkForComma($_POST["EncyclopaediaPlace"]);
												$EncyclopaediaTitle= checkForComma($_POST["EncyclopaediaTitle"]);
												$EncyclopaediaEditor= checkForComma($_POST["EncyclopaediaEditor"]);
												$EncyclopaediaArticleTitle= checkForComma($_POST["EncyclopaediaArticleTitle"]);
												$EncyclopaediaAuthor= checkForComma($_POST["EncyclopaediaAuthor"]);
												
							
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							
							if ($Author == "" || $Author == " "){
								$Author = "$EncyclopaediaArticleTitle";
								$EncyclopaediaArticleTitle = "";
							}
							
							$line =  $Author . "," . $EncyclopaediaArticleTitle . "," . $allEditors . "," . $EncyclopaediaTitle . "," . $EncyclopaediaPlace . "," . $EncyclopaediaPublisher . "," . $EncyclopaediaYear . "," . $EncyclopaediaVolume . "," . $EncyclopaediaPages. ",Encyclopaedia";
							
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
 
					
						
						if ($type == "Dictionary"){
							$DictionaryPage= checkForComma($_POST["DictionaryPage"]);
												$DictionaryWordLookedUp= checkForComma($_POST["DictionaryWordLookedUp"]);
												$DictionaryYear= checkForComma($_POST["DictionaryYear"]);
												$DictionaryPublisher= checkForComma($_POST["DictionaryPublisher"]);
												$DictionaryPlace= checkForComma($_POST["DictionaryPlace"]);
												$DictionaryEdition= checkForComma($_POST["DictionaryEdition"]);
												$DictionaryName= checkForComma($_POST["DictionaryName"]);
												
							
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							
							$line =  $DictionaryName . "," . $DictionaryEdition . "," . $DictionaryPlace . "," . $DictionaryPublisher . "," . $DictionaryYear . "," . $DictionaryWordLookedUp . "," . $DictionaryPage. ",Dictionary";
							
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
 
					
						
						if ($type == "Conference"){
							$ConferencePlaceOfPublication= checkForComma($_POST["ConferencePlaceOfPublication"]);
												$ConferenceCityOfConference= checkForComma($_POST["ConferenceCityOfConference"]);
												$ConferenceDay= checkForComma($_POST["ConferenceDay"]);
												$ConferenceMonth= checkForComma($_POST["ConferenceMonth"]);
												$ConferenceYear= checkForComma($_POST["ConferenceYear"]);
												$ConferenceNumberAndNameOfConference= checkForComma($_POST["ConferenceNumberAndNameOfConference"]);
												$ConferencePaperTitle= checkForComma($_POST["ConferencePaperTitle"]);
												$ConferenceAuthor= checkForComma($_POST["ConferenceAuthor"]);
												
							
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							
							if ($Author == "" || $Author == " "){
								$Author = "$ConferencePaperTitle";
								$ConferencePaperTitle = "";
							}
							
							$line =  $Author . "," . $ConferencePaperTitle . "," . $ConferenceNumberAndNameOfConference . "," . $ConferenceYear . "," . $ConferenceMonth . "," . $ConferenceDay . "," . $ConferenceCityOfConference . "," . $ConferencePlaceOfPublication. ",Conference";
							
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
 
					
						
						if ($type == "CochraneReview"){
							$CochraneReviewDOI= checkForComma($_POST["CochraneReviewDOI"]);
												$CochraneReviewArtNo= checkForComma($_POST["CochraneReviewArtNo"]);
												$CochraneReviewIssue= checkForComma($_POST["CochraneReviewIssue"]);
												$CochraneReviewJournalName= checkForComma($_POST["CochraneReviewJournalName"]);
												$CochraneReviewArticleTitle= checkForComma($_POST["CochraneReviewArticleTitle"]);
												$CochraneReviewAuthor= checkForComma($_POST["CochraneReviewAuthor"]);
												
							
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							
							if ($Author == "" || $Author == " "){
								$Author = "$CochraneReviewArticleTitle";
								$CochraneReviewArticleTitle = "";
							}
							
							$line =  $Author . "," . $CochraneReviewArticleTitle . "," . $CochraneReviewJournalName . "," . $CochraneReviewIssue . "," . $CochraneReviewArtNo . "," . $CochraneReviewDOI. ",CochraneReview";
							
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
 
					
						
						if ($type == "CDRom"){
							$CDRomYear= checkForComma($_POST["CDRomYear"]);
												$CDRomPublisher= checkForComma($_POST["CDRomPublisher"]);
												$CDRomPlace= checkForComma($_POST["CDRomPlace"]);
												$CDRomTitle= checkForComma($_POST["CDRomTitle"]);
												$CDRomAuthor= checkForComma($_POST["CDRomAuthor"]);
												
							
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							
							if ($Author == "" || $Author == " "){
								$Author = "$CDRomTitle [CD-ROM]";
								$CDRomTitle = "";
							}
							
							$line =  $Author . "," . $CDRomTitle . "," . $CDRomPlace . "," . $CDRomPublisher . "," . $CDRomYear. ",CDRom";
							
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
 
					
						
						if ($type == "BookChapter"){
							$BookChapterPages= checkForComma($_POST["BookChapterPages"]);
												$BookChapterYear= checkForComma($_POST["BookChapterYear"]);
												$BookChapterPublisher= checkForComma($_POST["BookChapterPublisher"]);
												$BookChapterPlace= checkForComma($_POST["BookChapterPlace"]);
												$BookChapterEdition= checkForComma($_POST["BookChapterEdition"]);
												$BookChapterBookName= checkForComma($_POST["BookChapterBookName"]);
												$BookChapterEditor= checkForComma($_POST["BookChapterEditor"]);
												$BookChapterTitle= checkForComma($_POST["BookChapterTitle"]);
												$BookChapterAuthor= checkForComma($_POST["BookChapterAuthor"]);
												
							
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							
							if ($Author == "" || $Author == " "){
								$Author = "$BookChapterTitle";
								$BookChapterTitle = "";
							}
							
							$line =  $Author . "," . $BookChapterTitle . "," . $allEditors . "," . $BookChapterBookName . "," . $BookChapterEdition . "," . $BookChapterPlace . "," . $BookChapterPublisher . "," . $BookChapterYear . "," . $BookChapterPages. ",BookChapter";
							
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
 
					
						
						if ($type == "Book"){
							$BookYear= checkForComma($_POST["BookYear"]);
												$BookPublisher= checkForComma($_POST["BookPublisher"]);
												$BookPlace= checkForComma($_POST["BookPlace"]);
												$BookEdition= checkForComma($_POST["BookEdition"]);
												$BookTitle= checkForComma($_POST["BookTitle"]);
												$BookAuthor= checkForComma($_POST["BookAuthor"]);
												
							
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();

							
							if ($Author == "" || $Author == " "){
								$Author = "$BookTitle";
								$BookTitle = "";
							}
							
							
							$line =  $Author . "," . $BookTitle . "," . $BookEdition . "," . $BookPlace . "," . $BookPublisher . "," . $BookYear. ",Book";
							
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}

	
		

	?>
	
	<br/>
	<div id="output" style='background-color:white; border-radius:3;'>
	
		
		<?PHP
			//Display name of the selected file.
			$iniSelectedFile = file_get_contents("Users/$getContents/selectedFile.txt");
		$withoutUserFolder = substr($iniSelectedFile, strpos($iniSelectedFile, "/")+1);
		$substringPart = substr($withoutUserFolder, 0, -4);
		$withoutName = substr($substringPart, strpos($substringPart, "/")+1);
		$withoutNameB = substr($withoutName, strpos($withoutName, "/")+1);
			print "
			<p class='subhead' align='center'><font color='#3D3C3A'>Project Name:</font></p>
			<p class='divHeader' align='center'><font size='4.5' color='#3D3C3A'> $withoutNameB </font></p>";
			
		
		
		
					$iniSelectedFile = file_get_contents("Users/$getContents/selectedFile.txt");
						
					$VideoRecordingTable=false;

					$UnpublishedMaterialTable=false;

					$ThesisTable=false;

					$PamphetTable=false;

					$PackageInsertTable=false;

					$NewspaperTable=false;

					$JournalArticleTable=false;

					$InternetTable=false;

					$EncyclopaediaTable=false;

					$DictionaryTable=false;

					$ConferenceTable=false;

					$CochraneReviewTable=false;

					$CDRomTable=false;

					$BookChapterTable=false;

					$BookTable=false;

						
						$j = 0;
						$file_handle = fopen("$iniSelectedFile", "r") or die ("Oops... Something went wrong. Please click on one of your projects on the left such as the one titled 'General'.");
						while(!feof($file_handle)){
							
							$line_of_text = fgetcsv($file_handle, 1024);
												
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "VideoRecording"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineVideoRecording[$j] = $wholeLineVideoRecording[$j] . "," . $line_of_text[$g];
						}
						$wholeLineVideoRecording[$j] = substr($wholeLineVideoRecording[$j], 1);
							$VideoRecordingTable = true;
					}
					
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "UnpublishedMaterial"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineUnpublishedMaterial[$j] = $wholeLineUnpublishedMaterial[$j] . "," . $line_of_text[$g];
						}
						$wholeLineUnpublishedMaterial[$j] = substr($wholeLineUnpublishedMaterial[$j], 1);
							$UnpublishedMaterialTable = true;
					}
					
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "Thesis"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineThesis[$j] = $wholeLineThesis[$j] . "," . $line_of_text[$g];
						}
						$wholeLineThesis[$j] = substr($wholeLineThesis[$j], 1);
							$ThesisTable = true;
					}
					
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "Pamphet"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLinePamphet[$j] = $wholeLinePamphet[$j] . "," . $line_of_text[$g];
						}
						$wholeLinePamphet[$j] = substr($wholeLinePamphet[$j], 1);
							$PamphetTable = true;
					}
					
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "PackageInsert"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLinePackageInsert[$j] = $wholeLinePackageInsert[$j] . "," . $line_of_text[$g];
						}
						$wholeLinePackageInsert[$j] = substr($wholeLinePackageInsert[$j], 1);
							$PackageInsertTable = true;
					}
					
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "Newspaper"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineNewspaper[$j] = $wholeLineNewspaper[$j] . "," . $line_of_text[$g];
						}
						$wholeLineNewspaper[$j] = substr($wholeLineNewspaper[$j], 1);
							$NewspaperTable = true;
					}
					
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "JournalArticle"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineJournalArticle[$j] = $wholeLineJournalArticle[$j] . "," . $line_of_text[$g];
						}
						$wholeLineJournalArticle[$j] = substr($wholeLineJournalArticle[$j], 1);
							$JournalArticleTable = true;
					}
					
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "Internet"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineInternet[$j] = $wholeLineInternet[$j] . "," . $line_of_text[$g];
						}
						$wholeLineInternet[$j] = substr($wholeLineInternet[$j], 1);
							$InternetTable = true;
					}
					
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "Encyclopaedia"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineEncyclopaedia[$j] = $wholeLineEncyclopaedia[$j] . "," . $line_of_text[$g];
						}
						$wholeLineEncyclopaedia[$j] = substr($wholeLineEncyclopaedia[$j], 1);
							$EncyclopaediaTable = true;
					}
					
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "Dictionary"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineDictionary[$j] = $wholeLineDictionary[$j] . "," . $line_of_text[$g];
						}
						$wholeLineDictionary[$j] = substr($wholeLineDictionary[$j], 1);
							$DictionaryTable = true;
					}
					
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "Conference"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineConference[$j] = $wholeLineConference[$j] . "," . $line_of_text[$g];
						}
						$wholeLineConference[$j] = substr($wholeLineConference[$j], 1);
							$ConferenceTable = true;
					}
					
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "CochraneReview"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineCochraneReview[$j] = $wholeLineCochraneReview[$j] . "," . $line_of_text[$g];
						}
						$wholeLineCochraneReview[$j] = substr($wholeLineCochraneReview[$j], 1);
							$CochraneReviewTable = true;
					}
					
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "CDRom"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineCDRom[$j] = $wholeLineCDRom[$j] . "," . $line_of_text[$g];
						}
						$wholeLineCDRom[$j] = substr($wholeLineCDRom[$j], 1);
							$CDRomTable = true;
					}
					
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "BookChapter"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineBookChapter[$j] = $wholeLineBookChapter[$j] . "," . $line_of_text[$g];
						}
						$wholeLineBookChapter[$j] = substr($wholeLineBookChapter[$j], 1);
							$BookChapterTable = true;
					}
					
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "Book"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineBook[$j] = $wholeLineBook[$j] . "," . $line_of_text[$g];
						}
						$wholeLineBook[$j] = substr($wholeLineBook[$j], 1);
							$BookTable = true;
					}

							
							$j++;
						}
						

				if($VideoRecordingTable == true){
					sort($wholeLineVideoRecording);
				}

				if($UnpublishedMaterialTable == true){
					sort($wholeLineUnpublishedMaterial);
				}

				if($ThesisTable == true){
					sort($wholeLineThesis);
				}

				if($PamphetTable == true){
					sort($wholeLinePamphet);
				}

				if($PackageInsertTable == true){
					sort($wholeLinePackageInsert);
				}

				if($NewspaperTable == true){
					sort($wholeLineNewspaper);
				}

				if($JournalArticleTable == true){
					sort($wholeLineJournalArticle);
				}

				if($InternetTable == true){
					sort($wholeLineInternet);
				}

				if($EncyclopaediaTable == true){
					sort($wholeLineEncyclopaedia);
				}

				if($DictionaryTable == true){
					sort($wholeLineDictionary);
				}

				if($ConferenceTable == true){
					sort($wholeLineConference);
				}

				if($CochraneReviewTable == true){
					sort($wholeLineCochraneReview);
				}

				if($CDRomTable == true){
					sort($wholeLineCDRom);
				}

				if($BookChapterTable == true){
					sort($wholeLineBookChapter);
				}

				if($BookTable == true){
					sort($wholeLineBook);
				}

						fclose($file_handle);	
						//print"<form action='deleteLine.php' method='post'>";
						$rowNumber =  0;
						
						
						
			$editFormSendTo = "editThisLineVancouver.php";
			if ($editFormSendTo == ""){
				$editFormSendTo = "editThisLine.php";
			}
						

						if ($BookTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
				
												<tr>
													<td colspan="3"><p align="center" class="pageText">Book</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center">Title 1 </p></td>
													<td><p class="subhead"; align="center">Title 2</p></td>
												</tr>
								';
						
						
							for($r=0; $r < $j; $r++){
								
								$lineOfText = str_getcsv($wholeLineBook[$r], ",");
								
								$countLOT = count($lineOfText) - 1;
						
								if($lineOfText[$countLOT] =="Book"){
									$valuesOfTypes = "";
									$deleteValues = "";
									for ($i = 0; $i <= $countLOT; $i++){
										$deleteValues = $deleteValues . "," . $lineOfText[$i];
										$lineOfText[$i] = changeToComma($lineOfText[$i]);
										
									}
									for ($i = 0; $i < $countLOT; $i++){
										$valuesOfTypes = $lineOfText[$i] . "<br/><br/>
											" . $valuesOfTypes;
									}
									$deleteValues = substr($deleteValues,1);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									
								
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
									
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td bgcolor='lightblue'><a href='" . $lineOfText[1] . "' target='_blank'>" . $lineOfText[1] . "</a></td>
									
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>

															<tr>
																<td bgcolor='CFECEC'>
					Year<br/><br/>
								Publisher<br/><br/>
								Place<br/><br/>
								Edition<br/><br/>
								Title<br/><br/>
								Author<br/><br/>
								
																</td>
																<td  bgcolor='CFECEC'>
																	$valuesOfTypes
																</td>
															</tr>
															<tr>
																<td>
																	<form action='deleteThisLine.php' method='post'>
																		<input type='hidden' name='deleteThisLine' value='$deleteValues'> 
																		<input type='hidden' name='type' value='$lineOfText[$countLOT]'> 
																		<input type='submit' class='deleteButton' value='Delete'>
																	</form>
																</td>
																<td>
																	<form action='$editFormSendTo' method='get'>
																		<input type='hidden' name='deleteThisLine' value='$deleteValues'> 
																		<input type='hidden' name='type' value='$lineOfText[$countLOT]'> 
																		<input type='submit' class='deleteButton' style='background-color:Orange;' value='Edit'>
																	</form>
																</td>
															</tr>
														</table>
														<br/>
													
													</div>
												</td>
											</tr>
											";
									$rowNumber++;
								}
							}
							
						}

						if ($BookChapterTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
				
												<tr>
													<td colspan="3"><p align="center" class="pageText">BookChapter</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center">Title 1 </p></td>
													<td><p class="subhead"; align="center">Title 2</p></td>
												</tr>
								';
						
						
							for($r=0; $r < $j; $r++){
								
								$lineOfText = str_getcsv($wholeLineBookChapter[$r], ",");
								
								$countLOT = count($lineOfText) - 1;
						
								if($lineOfText[$countLOT] =="BookChapter"){
									$valuesOfTypes = "";
									$deleteValues = "";
									for ($i = 0; $i <= $countLOT; $i++){
										$deleteValues = $deleteValues . "," . $lineOfText[$i];
										$lineOfText[$i] = changeToComma($lineOfText[$i]);
										
									}
									for ($i = 0; $i < $countLOT; $i++){
										$valuesOfTypes = $lineOfText[$i] . "<br/><br/>
											" . $valuesOfTypes;
									}
									$deleteValues = substr($deleteValues,1);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									
								
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
									
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td bgcolor='lightblue'><a href='" . $lineOfText[1] . "' target='_blank'>" . $lineOfText[1] . "</a></td>
									
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>

															<tr>
																<td bgcolor='CFECEC'>
					Pages<br/><br/>
								Year<br/><br/>
								Publisher<br/><br/>
								Place<br/><br/>
								Edition<br/><br/>
								BookName<br/><br/>
								Editor<br/><br/>
								Title<br/><br/>
								Author<br/><br/>
								
																</td>
																<td  bgcolor='CFECEC'>
																	$valuesOfTypes
																</td>
															</tr>
															<tr>
																<td>
																	<form action='deleteThisLine.php' method='post'>
																		<input type='hidden' name='deleteThisLine' value='$deleteValues'> 
																		<input type='hidden' name='type' value='$lineOfText[$countLOT]'> 
																		<input type='submit' class='deleteButton' value='Delete'>
																	</form>
																</td>
																<td>
																	<form action='$editFormSendTo' method='get'>
																		<input type='hidden' name='deleteThisLine' value='$deleteValues'> 
																		<input type='hidden' name='type' value='$lineOfText[$countLOT]'> 
																		<input type='submit' class='deleteButton' style='background-color:Orange;' value='Edit'>
																	</form>
																</td>
															</tr>
														</table>
														<br/>
													
													</div>
												</td>
											</tr>
											";
									$rowNumber++;
								}
							}
							
						}

						if ($CDRomTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
				
												<tr>
													<td colspan="3"><p align="center" class="pageText">CDRom</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center">Title 1 </p></td>
													<td><p class="subhead"; align="center">Title 2</p></td>
												</tr>
								';
						
						
							for($r=0; $r < $j; $r++){
								
								$lineOfText = str_getcsv($wholeLineCDRom[$r], ",");
								
								$countLOT = count($lineOfText) - 1;
						
								if($lineOfText[$countLOT] =="CDRom"){
									$valuesOfTypes = "";
									$deleteValues = "";
									for ($i = 0; $i <= $countLOT; $i++){
										$deleteValues = $deleteValues . "," . $lineOfText[$i];
										$lineOfText[$i] = changeToComma($lineOfText[$i]);
										
									}
									for ($i = 0; $i < $countLOT; $i++){
										$valuesOfTypes = $lineOfText[$i] . "<br/><br/>
											" . $valuesOfTypes;
									}
									$deleteValues = substr($deleteValues,1);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									
								
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
									
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td bgcolor='lightblue'><a href='" . $lineOfText[1] . "' target='_blank'>" . $lineOfText[1] . "</a></td>
									
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>

															<tr>
																<td bgcolor='CFECEC'>
					Year<br/><br/>
								Publisher<br/><br/>
								Place<br/><br/>
								Title<br/><br/>
								Author<br/><br/>
								
																</td>
																<td  bgcolor='CFECEC'>
																	$valuesOfTypes
																</td>
															</tr>
															<tr>
																<td>
																	<form action='deleteThisLine.php' method='post'>
																		<input type='hidden' name='deleteThisLine' value='$deleteValues'> 
																		<input type='hidden' name='type' value='$lineOfText[$countLOT]'> 
																		<input type='submit' class='deleteButton' value='Delete'>
																	</form>
																</td>
																<td>
																	<form action='$editFormSendTo' method='get'>
																		<input type='hidden' name='deleteThisLine' value='$deleteValues'> 
																		<input type='hidden' name='type' value='$lineOfText[$countLOT]'> 
																		<input type='submit' class='deleteButton' style='background-color:Orange;' value='Edit'>
																	</form>
																</td>
															</tr>
														</table>
														<br/>
													
													</div>
												</td>
											</tr>
											";
									$rowNumber++;
								}
							}
							
						}

						if ($CochraneReviewTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
				
												<tr>
													<td colspan="3"><p align="center" class="pageText">CochraneReview</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center">Title 1 </p></td>
													<td><p class="subhead"; align="center">Title 2</p></td>
												</tr>
								';
						
						
							for($r=0; $r < $j; $r++){
								
								$lineOfText = str_getcsv($wholeLineCochraneReview[$r], ",");
								
								$countLOT = count($lineOfText) - 1;
						
								if($lineOfText[$countLOT] =="CochraneReview"){
									$valuesOfTypes = "";
									$deleteValues = "";
									for ($i = 0; $i <= $countLOT; $i++){
										$deleteValues = $deleteValues . "," . $lineOfText[$i];
										$lineOfText[$i] = changeToComma($lineOfText[$i]);
										
									}
									for ($i = 0; $i < $countLOT; $i++){
										$valuesOfTypes = $lineOfText[$i] . "<br/><br/>
											" . $valuesOfTypes;
									}
									$deleteValues = substr($deleteValues,1);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									
								
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
									
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td bgcolor='lightblue'><a href='" . $lineOfText[1] . "' target='_blank'>" . $lineOfText[1] . "</a></td>
									
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>

															<tr>
																<td bgcolor='CFECEC'>
					DOI<br/><br/>
								ArtNo<br/><br/>
								Issue<br/><br/>
								JournalName<br/><br/>
								ArticleTitle<br/><br/>
								Author<br/><br/>
								
																</td>
																<td  bgcolor='CFECEC'>
																	$valuesOfTypes
																</td>
															</tr>
															<tr>
																<td>
																	<form action='deleteThisLine.php' method='post'>
																		<input type='hidden' name='deleteThisLine' value='$deleteValues'> 
																		<input type='hidden' name='type' value='$lineOfText[$countLOT]'> 
																		<input type='submit' class='deleteButton' value='Delete'>
																	</form>
																</td>
																<td>
																	<form action='$editFormSendTo' method='get'>
																		<input type='hidden' name='deleteThisLine' value='$deleteValues'> 
																		<input type='hidden' name='type' value='$lineOfText[$countLOT]'> 
																		<input type='submit' class='deleteButton' style='background-color:Orange;' value='Edit'>
																	</form>
																</td>
															</tr>
														</table>
														<br/>
													
													</div>
												</td>
											</tr>
											";
									$rowNumber++;
								}
							}
							
						}

						if ($ConferenceTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
				
												<tr>
													<td colspan="3"><p align="center" class="pageText">Conference</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center">Title 1 </p></td>
													<td><p class="subhead"; align="center">Title 2</p></td>
												</tr>
								';
						
						
							for($r=0; $r < $j; $r++){
								
								$lineOfText = str_getcsv($wholeLineConference[$r], ",");
								
								$countLOT = count($lineOfText) - 1;
						
								if($lineOfText[$countLOT] =="Conference"){
									$valuesOfTypes = "";
									$deleteValues = "";
									for ($i = 0; $i <= $countLOT; $i++){
										$deleteValues = $deleteValues . "," . $lineOfText[$i];
										$lineOfText[$i] = changeToComma($lineOfText[$i]);
										
									}
									for ($i = 0; $i < $countLOT; $i++){
										$valuesOfTypes = $lineOfText[$i] . "<br/><br/>
											" . $valuesOfTypes;
									}
									$deleteValues = substr($deleteValues,1);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									
								
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
									
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td bgcolor='lightblue'><a href='" . $lineOfText[1] . "' target='_blank'>" . $lineOfText[1] . "</a></td>
									
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>

															<tr>
																<td bgcolor='CFECEC'>
					PlaceOfPublication<br/><br/>
								CityOfConference<br/><br/>
								Day<br/><br/>
								Month<br/><br/>
								Year<br/><br/>
								NumberAndNameOfConference<br/><br/>
								PaperTitle<br/><br/>
								Author<br/><br/>
								
																</td>
																<td  bgcolor='CFECEC'>
																	$valuesOfTypes
																</td>
															</tr>
															<tr>
																<td>
																	<form action='deleteThisLine.php' method='post'>
																		<input type='hidden' name='deleteThisLine' value='$deleteValues'> 
																		<input type='hidden' name='type' value='$lineOfText[$countLOT]'> 
																		<input type='submit' class='deleteButton' value='Delete'>
																	</form>
																</td>
																<td>
																	<form action='$editFormSendTo' method='get'>
																		<input type='hidden' name='deleteThisLine' value='$deleteValues'> 
																		<input type='hidden' name='type' value='$lineOfText[$countLOT]'> 
																		<input type='submit' class='deleteButton' style='background-color:Orange;' value='Edit'>
																	</form>
																</td>
															</tr>
														</table>
														<br/>
													
													</div>
												</td>
											</tr>
											";
									$rowNumber++;
								}
							}
							
						}

						if ($DictionaryTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
				
												<tr>
													<td colspan="3"><p align="center" class="pageText">Dictionary</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center">Title 1 </p></td>
													<td><p class="subhead"; align="center">Title 2</p></td>
												</tr>
								';
						
						
							for($r=0; $r < $j; $r++){
								
								$lineOfText = str_getcsv($wholeLineDictionary[$r], ",");
								
								$countLOT = count($lineOfText) - 1;
						
								if($lineOfText[$countLOT] =="Dictionary"){
									$valuesOfTypes = "";
									$deleteValues = "";
									for ($i = 0; $i <= $countLOT; $i++){
										$deleteValues = $deleteValues . "," . $lineOfText[$i];
										$lineOfText[$i] = changeToComma($lineOfText[$i]);
										
									}
									for ($i = 0; $i < $countLOT; $i++){
										$valuesOfTypes = $lineOfText[$i] . "<br/><br/>
											" . $valuesOfTypes;
									}
									$deleteValues = substr($deleteValues,1);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									
								
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
									
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td bgcolor='lightblue'><a href='" . $lineOfText[1] . "' target='_blank'>" . $lineOfText[1] . "</a></td>
									
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>

															<tr>
																<td bgcolor='CFECEC'>
					Page<br/><br/>
								WordLookedUp<br/><br/>
								Year<br/><br/>
								Publisher<br/><br/>
								Place<br/><br/>
								Edition<br/><br/>
								Name<br/><br/>
								
																</td>
																<td  bgcolor='CFECEC'>
																	$valuesOfTypes
																</td>
															</tr>
															<tr>
																<td>
																	<form action='deleteThisLine.php' method='post'>
																		<input type='hidden' name='deleteThisLine' value='$deleteValues'> 
																		<input type='hidden' name='type' value='$lineOfText[$countLOT]'> 
																		<input type='submit' class='deleteButton' value='Delete'>
																	</form>
																</td>
																<td>
																	<form action='$editFormSendTo' method='get'>
																		<input type='hidden' name='deleteThisLine' value='$deleteValues'> 
																		<input type='hidden' name='type' value='$lineOfText[$countLOT]'> 
																		<input type='submit' class='deleteButton' style='background-color:Orange;' value='Edit'>
																	</form>
																</td>
															</tr>
														</table>
														<br/>
													
													</div>
												</td>
											</tr>
											";
									$rowNumber++;
								}
							}
							
						}

						if ($EncyclopaediaTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
				
												<tr>
													<td colspan="3"><p align="center" class="pageText">Encyclopaedia</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center">Title 1 </p></td>
													<td><p class="subhead"; align="center">Title 2</p></td>
												</tr>
								';
						
						
							for($r=0; $r < $j; $r++){
								
								$lineOfText = str_getcsv($wholeLineEncyclopaedia[$r], ",");
								
								$countLOT = count($lineOfText) - 1;
						
								if($lineOfText[$countLOT] =="Encyclopaedia"){
									$valuesOfTypes = "";
									$deleteValues = "";
									for ($i = 0; $i <= $countLOT; $i++){
										$deleteValues = $deleteValues . "," . $lineOfText[$i];
										$lineOfText[$i] = changeToComma($lineOfText[$i]);
										
									}
									for ($i = 0; $i < $countLOT; $i++){
										$valuesOfTypes = $lineOfText[$i] . "<br/><br/>
											" . $valuesOfTypes;
									}
									$deleteValues = substr($deleteValues,1);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									
								
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
									
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td bgcolor='lightblue'><a href='" . $lineOfText[1] . "' target='_blank'>" . $lineOfText[1] . "</a></td>
									
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>

															<tr>
																<td bgcolor='CFECEC'>
					Pages<br/><br/>
								Volume<br/><br/>
								Year<br/><br/>
								Publisher<br/><br/>
								Place<br/><br/>
								Title<br/><br/>
								Editor<br/><br/>
								ArticleTitle<br/><br/>
								Author<br/><br/>
								
																</td>
																<td  bgcolor='CFECEC'>
																	$valuesOfTypes
																</td>
															</tr>
															<tr>
																<td>
																	<form action='deleteThisLine.php' method='post'>
																		<input type='hidden' name='deleteThisLine' value='$deleteValues'> 
																		<input type='hidden' name='type' value='$lineOfText[$countLOT]'> 
																		<input type='submit' class='deleteButton' value='Delete'>
																	</form>
																</td>
																<td>
																	<form action='$editFormSendTo' method='get'>
																		<input type='hidden' name='deleteThisLine' value='$deleteValues'> 
																		<input type='hidden' name='type' value='$lineOfText[$countLOT]'> 
																		<input type='submit' class='deleteButton' style='background-color:Orange;' value='Edit'>
																	</form>
																</td>
															</tr>
														</table>
														<br/>
													
													</div>
												</td>
											</tr>
											";
									$rowNumber++;
								}
							}
							
						}

						if ($InternetTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
				
												<tr>
													<td colspan="3"><p align="center" class="pageText">Internet</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center">Title 1 </p></td>
													<td><p class="subhead"; align="center">Title 2</p></td>
												</tr>
								';
						
						
							for($r=0; $r < $j; $r++){
								
								$lineOfText = str_getcsv($wholeLineInternet[$r], ",");
								
								$countLOT = count($lineOfText) - 1;
						
								if($lineOfText[$countLOT] =="Internet"){
									$valuesOfTypes = "";
									$deleteValues = "";
									for ($i = 0; $i <= $countLOT; $i++){
										$deleteValues = $deleteValues . "," . $lineOfText[$i];
										$lineOfText[$i] = changeToComma($lineOfText[$i]);
										
									}
									for ($i = 0; $i < $countLOT; $i++){
										$valuesOfTypes = $lineOfText[$i] . "<br/><br/>
											" . $valuesOfTypes;
									}
									$deleteValues = substr($deleteValues,1);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									
								
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
									
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td bgcolor='lightblue'><a href='" . $lineOfText[1] . "' target='_blank'>" . $lineOfText[1] . "</a></td>
									
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>

															<tr>
																<td bgcolor='CFECEC'>
					URL<br/><br/>
								Cited<br/><br/>
								Updated<br/><br/>
								Publisher<br/><br/>
								Place<br/><br/>
								Title<br/><br/>
								Author<br/><br/>
								
																</td>
																<td  bgcolor='CFECEC'>
																	$valuesOfTypes
																</td>
															</tr>
															<tr>
																<td>
																	<form action='deleteThisLine.php' method='post'>
																		<input type='hidden' name='deleteThisLine' value='$deleteValues'> 
																		<input type='hidden' name='type' value='$lineOfText[$countLOT]'> 
																		<input type='submit' class='deleteButton' value='Delete'>
																	</form>
																</td>
																<td>
																	<form action='$editFormSendTo' method='get'>
																		<input type='hidden' name='deleteThisLine' value='$deleteValues'> 
																		<input type='hidden' name='type' value='$lineOfText[$countLOT]'> 
																		<input type='submit' class='deleteButton' style='background-color:Orange;' value='Edit'>
																	</form>
																</td>
															</tr>
														</table>
														<br/>
													
													</div>
												</td>
											</tr>
											";
									$rowNumber++;
								}
							}
							
						}

						if ($JournalArticleTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
				
												<tr>
													<td colspan="3"><p align="center" class="pageText">JournalArticle</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center">Title 1 </p></td>
													<td><p class="subhead"; align="center">Title 2</p></td>
												</tr>
								';
						
						
							for($r=0; $r < $j; $r++){
								
								$lineOfText = str_getcsv($wholeLineJournalArticle[$r], ",");
								
								$countLOT = count($lineOfText) - 1;
						
								if($lineOfText[$countLOT] =="JournalArticle"){
									$valuesOfTypes = "";
									$deleteValues = "";
									for ($i = 0; $i <= $countLOT; $i++){
										$deleteValues = $deleteValues . "," . $lineOfText[$i];
										$lineOfText[$i] = changeToComma($lineOfText[$i]);
										
									}
									for ($i = 0; $i < $countLOT; $i++){
										$valuesOfTypes = $lineOfText[$i] . "<br/><br/>
											" . $valuesOfTypes;
									}
									$deleteValues = substr($deleteValues,1);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									
								
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
									
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td bgcolor='lightblue'><a href='" . $lineOfText[1] . "' target='_blank'>" . $lineOfText[1] . "</a></td>
									
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>

															<tr>
																<td bgcolor='CFECEC'>
					Page<br/><br/>
								Issue<br/><br/>
								Volume<br/><br/>
								Day<br/><br/>
								Month<br/><br/>
								Year<br/><br/>
								JournalName<br/><br/>
								ArticleTitle<br/><br/>
								Author<br/><br/>
								
																</td>
																<td  bgcolor='CFECEC'>
																	$valuesOfTypes
																</td>
															</tr>
															<tr>
																<td>
																	<form action='deleteThisLine.php' method='post'>
																		<input type='hidden' name='deleteThisLine' value='$deleteValues'> 
																		<input type='hidden' name='type' value='$lineOfText[$countLOT]'> 
																		<input type='submit' class='deleteButton' value='Delete'>
																	</form>
																</td>
																<td>
																	<form action='$editFormSendTo' method='get'>
																		<input type='hidden' name='deleteThisLine' value='$deleteValues'> 
																		<input type='hidden' name='type' value='$lineOfText[$countLOT]'> 
																		<input type='submit' class='deleteButton' style='background-color:Orange;' value='Edit'>
																	</form>
																</td>
															</tr>
														</table>
														<br/>
													
													</div>
												</td>
											</tr>
											";
									$rowNumber++;
								}
							}
							
						}

						if ($NewspaperTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
				
												<tr>
													<td colspan="3"><p align="center" class="pageText">Newspaper</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center">Title 1 </p></td>
													<td><p class="subhead"; align="center">Title 2</p></td>
												</tr>
								';
						
						
							for($r=0; $r < $j; $r++){
								
								$lineOfText = str_getcsv($wholeLineNewspaper[$r], ",");
								
								$countLOT = count($lineOfText) - 1;
						
								if($lineOfText[$countLOT] =="Newspaper"){
									$valuesOfTypes = "";
									$deleteValues = "";
									for ($i = 0; $i <= $countLOT; $i++){
										$deleteValues = $deleteValues . "," . $lineOfText[$i];
										$lineOfText[$i] = changeToComma($lineOfText[$i]);
										
									}
									for ($i = 0; $i < $countLOT; $i++){
										$valuesOfTypes = $lineOfText[$i] . "<br/><br/>
											" . $valuesOfTypes;
									}
									$deleteValues = substr($deleteValues,1);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									
								
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
									
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td bgcolor='lightblue'><a href='" . $lineOfText[1] . "' target='_blank'>" . $lineOfText[1] . "</a></td>
									
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>

															<tr>
																<td bgcolor='CFECEC'>
					Column<br/><br/>
								Page<br/><br/>
								Section<br/><br/>
								Day<br/><br/>
								Month<br/><br/>
								Year<br/><br/>
								Newspaper<br/><br/>
								Title<br/><br/>
								Author<br/><br/>
								
																</td>
																<td  bgcolor='CFECEC'>
																	$valuesOfTypes
																</td>
															</tr>
															<tr>
																<td>
																	<form action='deleteThisLine.php' method='post'>
																		<input type='hidden' name='deleteThisLine' value='$deleteValues'> 
																		<input type='hidden' name='type' value='$lineOfText[$countLOT]'> 
																		<input type='submit' class='deleteButton' value='Delete'>
																	</form>
																</td>
																<td>
																	<form action='$editFormSendTo' method='get'>
																		<input type='hidden' name='deleteThisLine' value='$deleteValues'> 
																		<input type='hidden' name='type' value='$lineOfText[$countLOT]'> 
																		<input type='submit' class='deleteButton' style='background-color:Orange;' value='Edit'>
																	</form>
																</td>
															</tr>
														</table>
														<br/>
													
													</div>
												</td>
											</tr>
											";
									$rowNumber++;
								}
							}
							
						}

						if ($PackageInsertTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
				
												<tr>
													<td colspan="3"><p align="center" class="pageText">PackageInsert</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center">Title 1 </p></td>
													<td><p class="subhead"; align="center">Title 2</p></td>
												</tr>
								';
						
						
							for($r=0; $r < $j; $r++){
								
								$lineOfText = str_getcsv($wholeLinePackageInsert[$r], ",");
								
								$countLOT = count($lineOfText) - 1;
						
								if($lineOfText[$countLOT] =="PackageInsert"){
									$valuesOfTypes = "";
									$deleteValues = "";
									for ($i = 0; $i <= $countLOT; $i++){
										$deleteValues = $deleteValues . "," . $lineOfText[$i];
										$lineOfText[$i] = changeToComma($lineOfText[$i]);
										
									}
									for ($i = 0; $i < $countLOT; $i++){
										$valuesOfTypes = $lineOfText[$i] . "<br/><br/>
											" . $valuesOfTypes;
									}
									$deleteValues = substr($deleteValues,1);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									
								
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
									
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td bgcolor='lightblue'><a href='" . $lineOfText[1] . "' target='_blank'>" . $lineOfText[1] . "</a></td>
									
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>

															<tr>
																<td bgcolor='CFECEC'>
					Year<br/><br/>
								Company<br/><br/>
								Place<br/><br/>
								Name<br/><br/>
								
																</td>
																<td  bgcolor='CFECEC'>
																	$valuesOfTypes
																</td>
															</tr>
															<tr>
																<td>
																	<form action='deleteThisLine.php' method='post'>
																		<input type='hidden' name='deleteThisLine' value='$deleteValues'> 
																		<input type='hidden' name='type' value='$lineOfText[$countLOT]'> 
																		<input type='submit' class='deleteButton' value='Delete'>
																	</form>
																</td>
																<td>
																	<form action='$editFormSendTo' method='get'>
																		<input type='hidden' name='deleteThisLine' value='$deleteValues'> 
																		<input type='hidden' name='type' value='$lineOfText[$countLOT]'> 
																		<input type='submit' class='deleteButton' style='background-color:Orange;' value='Edit'>
																	</form>
																</td>
															</tr>
														</table>
														<br/>
													
													</div>
												</td>
											</tr>
											";
									$rowNumber++;
								}
							}
							
						}

						if ($PamphetTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
				
												<tr>
													<td colspan="3"><p align="center" class="pageText">Pamphlet</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center">Title 1 </p></td>
													<td><p class="subhead"; align="center">Title 2</p></td>
												</tr>
								';
						
						
							for($r=0; $r < $j; $r++){
								
								$lineOfText = str_getcsv($wholeLinePamphet[$r], ",");
								
								$countLOT = count($lineOfText) - 1;
						
								if($lineOfText[$countLOT] =="Pamphet"){
									$valuesOfTypes = "";
									$deleteValues = "";
									for ($i = 0; $i <= $countLOT; $i++){
										$deleteValues = $deleteValues . "," . $lineOfText[$i];
										$lineOfText[$i] = changeToComma($lineOfText[$i]);
										
									}
									for ($i = 0; $i < $countLOT; $i++){
										$valuesOfTypes = $lineOfText[$i] . "<br/><br/>
											" . $valuesOfTypes;
									}
									$deleteValues = substr($deleteValues,1);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									
								
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
									
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td bgcolor='lightblue'><a href='" . $lineOfText[1] . "' target='_blank'>" . $lineOfText[1] . "</a></td>
									
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>

															<tr>
																<td bgcolor='CFECEC'>
					AdditionalInfo<br/><br/>
								Year<br/><br/>
								Publisher<br/><br/>
								Title<br/><br/>
								Author<br/><br/>
								
																</td>
																<td  bgcolor='CFECEC'>
																	$valuesOfTypes
																</td>
															</tr>
															<tr>
																<td>
																	<form action='deleteThisLine.php' method='post'>
																		<input type='hidden' name='deleteThisLine' value='$deleteValues'> 
																		<input type='hidden' name='type' value='$lineOfText[$countLOT]'> 
																		<input type='submit' class='deleteButton' value='Delete'>
																	</form>
																</td>
																<td>
																	<form action='$editFormSendTo' method='get'>
																		<input type='hidden' name='deleteThisLine' value='$deleteValues'> 
																		<input type='hidden' name='type' value='$lineOfText[$countLOT]'> 
																		<input type='submit' class='deleteButton' style='background-color:Orange;' value='Edit'>
																	</form>
																</td>
															</tr>
														</table>
														<br/>
													
													</div>
												</td>
											</tr>
											";
									$rowNumber++;
								}
							}
							
						}

						if ($ThesisTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
				
												<tr>
													<td colspan="3"><p align="center" class="pageText">Thesis</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center">Title 1 </p></td>
													<td><p class="subhead"; align="center">Title 2</p></td>
												</tr>
								';
						
						
							for($r=0; $r < $j; $r++){
								
								$lineOfText = str_getcsv($wholeLineThesis[$r], ",");
								
								$countLOT = count($lineOfText) - 1;
						
								if($lineOfText[$countLOT] =="Thesis"){
									$valuesOfTypes = "";
									$deleteValues = "";
									for ($i = 0; $i <= $countLOT; $i++){
										$deleteValues = $deleteValues . "," . $lineOfText[$i];
										$lineOfText[$i] = changeToComma($lineOfText[$i]);
										
									}
									for ($i = 0; $i < $countLOT; $i++){
										$valuesOfTypes = $lineOfText[$i] . "<br/><br/>
											" . $valuesOfTypes;
									}
									$deleteValues = substr($deleteValues,1);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									
								
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
									
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td bgcolor='lightblue'><a href='" . $lineOfText[1] . "' target='_blank'>" . $lineOfText[1] . "</a></td>
									
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>

															<tr>
																<td bgcolor='CFECEC'>
					Year<br/><br/>
								Publisher<br/><br/>
								Place<br/><br/>
								Title<br/><br/>
								Author<br/><br/>
								
																</td>
																<td  bgcolor='CFECEC'>
																	$valuesOfTypes
																</td>
															</tr>
															<tr>
																<td>
																	<form action='deleteThisLine.php' method='post'>
																		<input type='hidden' name='deleteThisLine' value='$deleteValues'> 
																		<input type='hidden' name='type' value='$lineOfText[$countLOT]'> 
																		<input type='submit' class='deleteButton' value='Delete'>
																	</form>
																</td>
																<td>
																	<form action='$editFormSendTo' method='get'>
																		<input type='hidden' name='deleteThisLine' value='$deleteValues'> 
																		<input type='hidden' name='type' value='$lineOfText[$countLOT]'> 
																		<input type='submit' class='deleteButton' style='background-color:Orange;' value='Edit'>
																	</form>
																</td>
															</tr>
														</table>
														<br/>
													
													</div>
												</td>
											</tr>
											";
									$rowNumber++;
								}
							}
							
						}

						if ($UnpublishedMaterialTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
				
												<tr>
													<td colspan="3"><p align="center" class="pageText">UnpublishedMaterial</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center">Title 1 </p></td>
													<td><p class="subhead"; align="center">Title 2</p></td>
												</tr>
								';
						
						
							for($r=0; $r < $j; $r++){
								
								$lineOfText = str_getcsv($wholeLineUnpublishedMaterial[$r], ",");
								
								$countLOT = count($lineOfText) - 1;
						
								if($lineOfText[$countLOT] =="UnpublishedMaterial"){
									$valuesOfTypes = "";
									$deleteValues = "";
									for ($i = 0; $i <= $countLOT; $i++){
										$deleteValues = $deleteValues . "," . $lineOfText[$i];
										$lineOfText[$i] = changeToComma($lineOfText[$i]);
										
									}
									for ($i = 0; $i < $countLOT; $i++){
										$valuesOfTypes = $lineOfText[$i] . "<br/><br/>
											" . $valuesOfTypes;
									}
									$deleteValues = substr($deleteValues,1);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									
								
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
									
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td bgcolor='lightblue'><a href='" . $lineOfText[1] . "' target='_blank'>" . $lineOfText[1] . "</a></td>
									
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>

															<tr>
																<td bgcolor='CFECEC'>
					Year<br/><br/>
								Organisation<br/><br/>
								Title<br/><br/>
								Author<br/><br/>
								
																</td>
																<td  bgcolor='CFECEC'>
																	$valuesOfTypes
																</td>
															</tr>
															<tr>
																<td>
																	<form action='deleteThisLine.php' method='post'>
																		<input type='hidden' name='deleteThisLine' value='$deleteValues'> 
																		<input type='hidden' name='type' value='$lineOfText[$countLOT]'> 
																		<input type='submit' class='deleteButton' value='Delete'>
																	</form>
																</td>
																<td>
																	<form action='$editFormSendTo' method='get'>
																		<input type='hidden' name='deleteThisLine' value='$deleteValues'> 
																		<input type='hidden' name='type' value='$lineOfText[$countLOT]'> 
																		<input type='submit' class='deleteButton' style='background-color:Orange;' value='Edit'>
																	</form>
																</td>
															</tr>
														</table>
														<br/>
													
													</div>
												</td>
											</tr>
											";
									$rowNumber++;
								}
							}
							
						}

						if ($VideoRecordingTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
				
												<tr>
													<td colspan="3"><p align="center" class="pageText">VideoRecording</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center">Title 1 </p></td>
													<td><p class="subhead"; align="center">Title 2</p></td>
												</tr>
								';
						
						
							for($r=0; $r < $j; $r++){
								
								$lineOfText = str_getcsv($wholeLineVideoRecording[$r], ",");
								
								$countLOT = count($lineOfText) - 1;
						
								if($lineOfText[$countLOT] =="VideoRecording"){
									$valuesOfTypes = "";
									$deleteValues = "";
									for ($i = 0; $i <= $countLOT; $i++){
										$deleteValues = $deleteValues . "," . $lineOfText[$i];
										$lineOfText[$i] = changeToComma($lineOfText[$i]);
										
									}
									for ($i = 0; $i < $countLOT; $i++){
										$valuesOfTypes = $lineOfText[$i] . "<br/><br/>
											" . $valuesOfTypes;
									}
									$deleteValues = substr($deleteValues,1);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									
								
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
									
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td bgcolor='lightblue'><a href='" . $lineOfText[1] . "' target='_blank'>" . $lineOfText[1] . "</a></td>
									
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>

															<tr>
																<td bgcolor='CFECEC'>
					Year<br/><br/>
								Publications<br/><br/>
								Place<br/><br/>
								Details<br/><br/>
								Title<br/><br/>
								Author<br/><br/>
								
																</td>
																<td  bgcolor='CFECEC'>
																	$valuesOfTypes
																</td>
															</tr>
															<tr>
																<td>
																	<form action='deleteThisLine.php' method='post'>
																		<input type='hidden' name='deleteThisLine' value='$deleteValues'> 
																		<input type='hidden' name='type' value='$lineOfText[$countLOT]'> 
																		<input type='submit' class='deleteButton' value='Delete'>
																	</form>
																</td>
																<td>
																	<form action='$editFormSendTo' method='get'>
																		<input type='hidden' name='deleteThisLine' value='$deleteValues'> 
																		<input type='hidden' name='type' value='$lineOfText[$countLOT]'> 
																		<input type='submit' class='deleteButton' style='background-color:Orange;' value='Edit'>
																	</form>
																</td>
															</tr>
														</table>
														<br/>
													
													</div>
												</td>
											</tr>
											";
									$rowNumber++;
								}
							}
							
						}
						
						
						print "
								<input type='hidden' name='totalRows' value=" . $rowNumber . ">
								
							"; 
						
						
//						if (($websiteTable == false) && ($bookTable == false) && ($journalTable == false) && ($newspaperTable == false) && ($conferenceTable == false) && ($thesisTable == false) && ($lectureNoteTable == false)){
//							print"
//								<table align='center' class='referenceTable' width='100%'>
//									<tr>
//										<td bgcolor='lightblue' colspan='3'> No Data Yet</td>
//									</tr>
//							";
	//							$showDeleteBtn = false;
//						}
	//						else{
//							$showDeleteBtn = true;
	//						}
						
//					?>
				
			
		</table>
		<?php
//			if ($showDeleteBtn == true){
//				print"
//					<br/>
//				<!--<input type='submit' value='Delete Selected (Function is a bit faulty)'>//-->
//					<a href='#' class='subhead'>Delete Selected (function coming soon)</a>
//				";
//			}
//		
		
		
		?>
			</form>
			<br/>
			<a align="left" class="pageLinkC" href="loggedInHarvard.php">Reference This!</a>
			<a align="right" class="pageLinkC" href="deleteFileMessage.php">Delete Project?</a>
			<a align="right" class="pageLinkC" href="renameProjectMessage.php">Rename Project</a>
			<br/>
			<br/>
	</div>
	
	</div>
</div>



</div>

	


</div>

</body>
</html>
	