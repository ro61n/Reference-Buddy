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
					if (prefixArr[i] == "<"){
						prefixArr[i] = "&lt";
					}
					suffixArr[i] = document.getElementById("suffixV["+i+"]").value;
					if (suffixArr[i] == ">"){
						suffixArr[i] = "&gt";
					}
					if (placeholderArr[i] == "Author"){
					// -- Authors
			if (document.getElementsByName("Surname")[0] != undefined){
				var Surname = document.getElementsByName("Surname")[0].value;
			}
			else {
				var Surname = ""
			}
			if (document.getElementsByName("Name")[0] != undefined){
				var Name = document.getElementsByName("Name")[0].value;
			}
			else {
				var Name = ""
			}
			if (document.getElementsByName("Editor")[0] != undefined){
				var Editor = document.getElementsByName("Editor")[0].checked;
			}
			else {
				var Editor = ""
			}
			if (document.getElementsByName("Name2")[0] != undefined){
				var Name2 = document.getElementsByName("Name2")[0].value;
			}
			else {
				var Name2 = ""
			}
			if (document.getElementsByName("Surname2")[0] != undefined){
				var Surname2 = document.getElementsByName("Surname2")[0].value;
			}
			else {
				var Surname2 = ""
			}
			if (document.getElementsByName("Name3")[0] != undefined){
				var Name3 = document.getElementsByName("Name3")[0].value;
			}
			else {
				var Name3 = ""
			}
			if (document.getElementsByName("Surname3")[0] != undefined){
				var Surname3 = document.getElementsByName("Surname3")[0].value;
			}
			else {
				var Surname3 = ""
			}
			if (document.getElementsByName("Name4")[0] != undefined){
				var Name4 = document.getElementsByName("Name4")[0].value;
			}
			else {
				var Name4 = ""
			}
			if (document.getElementsByName("Surname4")[0] != undefined){
				var Surname4 = document.getElementsByName("Surname4")[0].value;
			}
			else {
				var Surname4 = ""
			}
			if (document.getElementsByName("Name5")[0] != undefined){
				var Name5 = document.getElementsByName("Name5")[0].value;
			}
			else {
				var Name5 = ""
			}
			if (document.getElementsByName("Surname5")[0] != undefined){
				var Surname5 = document.getElementsByName("Surname5")[0].value;
			}
			else {
				var Surname5 = ""
			}
			//var A1 = ""; var A2 = ""; var A3 = ""; var A4 = ""; var A5 = "";
			var AllAuthors = "";
			if (Editor == true){
				if ((Surname2 == "") && (Name2 == "")){
					Editor = "(Ed.)";
				}
				else{
					Editor = "(Eds.)";
				}
			}
			else {
				Editor = "";
			}
			if (Name == ""){
				Surname = Surname+" ";
			}
			else {
				Surname = Surname+", ";
				$Name = Name+" ";
			}
			if (Surname2 != ""){
				Surname2 = Surname2+", ";
				if (Surname3==""){
					Name = Name.replace(/,\s*$/, "")+" & ";
				}
				else{
		//			EName = EName+" ";
				}
			}
			//3rd Author
			if (Surname3 != ""){
				Surname3 = Surname3+", ";
				if (Surname4 ==""){
					Name2 = Name2.replace(/,\s*$/, "")+" & ";
					//Name = Name.slice(0,-1)+", ";
					Name = Name+", ";
				}
				if (Name2!=""){//new thing
					Name2 = Name2+" ";
				}
			}
			//4th Author
			if (Surname4 != ""){
				Surname4 = Surname4+", ";
				if (Surname5 == ""){
					Name3 = Name3.replace(/,\s*$/, "")+" & ";
					Name2 = Name2.slice(0,-1)+", ";//2
					Name = Name+", ";//1
				}
				if (Name3!=""){//new thing
					Name3 = Name3+" ";
				}
			}
			//5th Author
			if (Surname5 != ""){
				Surname5 = Surname5+", ";
				Name4 = Name4.replace(/,\s*$/, "")+" & ";
				Name3 = Name3.slice(0,-1)+", ";//3
				Name2 = Name2.slice(0,-1)+", ";//2
				//Name = Name.slice(0,-1)+", ";//1
				Name = Name+", ";//1
			}
			if (Name4!=""){//new thing
				Name4 = Name4+" ";
			}
			//AllAuthors = A1+A2+A3+A4+A5+Editor;	
			AllAuthors = Surname+Name+Surname2+Name2+Surname3+Name3+Surname4+Name4+Surname5+Name5+Editor;	
			// -- End of Authors
						variableArr[i] = AllAuthors;
					}
					if (placeholderArr[i] == "Editor"){
							//-- Start of Editors
			if (document.getElementsByName("ESurname")[0] != undefined){
				var ESurname = document.getElementsByName("ESurname")[0].value;
			}
			else {
				var ESurname = ""
			}
			if (document.getElementsByName("EName")[0] != undefined){
				var EName = document.getElementsByName("EName")[0].value;
			}
			else {
				var EName = ""
			}
			if (document.getElementsByName("EName2")[0] != undefined){
				var EName2 = document.getElementsByName("EName2")[0].value;
			}
			else {
				var EName2 = ""
			}
			if (document.getElementsByName("ESurname2")[0] != undefined){
				var ESurname2 = document.getElementsByName("ESurname2")[0].value;
			}
			else {
				var ESurname2 = ""
			}
			if (document.getElementsByName("EName3")[0] != undefined){
				var EName3 = document.getElementsByName("EName3")[0].value;
			}
			else {
				var EName3 = ""
			}
			if (document.getElementsByName("ESurname3")[0] != undefined){
				var ESurname3 = document.getElementsByName("ESurname3")[0].value;
			}
			else {
				var ESurname3 = ""
			}
			if (document.getElementsByName("EName4")[0] != undefined){
				var EName4 = document.getElementsByName("EName4")[0].value;
			}
			else {
				var EName4 = ""
			}
			if (document.getElementsByName("ESurname4")[0] != undefined){
				var ESurname4 = document.getElementsByName("ESurname4")[0].value;
			}
			else {
				var ESurname4 = ""
			}
			if (document.getElementsByName("EName5")[0] != undefined){
				var EName5 = document.getElementsByName("EName5")[0].value;
			}
			else {
				var EName5 = ""
			}
			if (document.getElementsByName("ESurname5")[0] != undefined){
				var ESurname5 = document.getElementsByName("ESurname5")[0].value;
			}
			else {
				var ESurname5 = ""
			}
			//var E1 = ""; var E2 = ""; var E3 = ""; var E4 = ""; var E5 = "";
			var AllEditors = "";
			var EEditor = "";
			
			if (ESurname !=""){
				if ((ESurname2 == "") && (EName2 == "")){
					EEditor = " (Ed.),";
				}
				else{
					EEditor = " (Eds.),";
				}
			}
			//else {
			//	Editor = "";
			//}
			//if ((ESurname2 == "") && (EName2 == "")){
			//		EEditor = "(Ed.)";
			//	}
			//	else{
			//		EEditor = "(Eds.)";
			//	}
			if (EName == ""){
				ESurname = ESurname+" ";
			}
			else {
				//ESurname = ESurname+", ";
				ESurname = ESurname+" ";
				EName = EName+" ";
			}
			
			if (ESurname2 != ""){
				//ESurname2 = ESurname2+", ";
				ESurname2 = ESurname2+" ";
				if (ESurname3==""){
					EName = EName.replace(/,\s*$/, "")+" & ";
				}
				else{
		//			EName = EName+" ";
				}
			}
			
			//3rd Author
			if (ESurname3 != ""){
				//ESurname3 = ESurname3+", ";
				ESurname3 = ESurname3+" ";
				if (ESurname4 ==""){
					EName2 = EName2.replace(/,\s*$/, "")+" & ";
					//Name = Name.slice(0,-1)+", ";
					EName = EName.slice(0,-1)+", ";
				}
				if (EName2!=""){//new thing
					EName2 = EName2+" ";
				}
			}
			//4th Author
			if (ESurname4 != ""){
				//ESurname4 = ESurname4+", ";
				ESurname4 = ESurname4+" ";
				if (ESurname5 == ""){
					EName3 = EName3.replace(/,\s*$/, "")+" & ";
					EName2 = EName2.slice(0,-1)+", ";//2
					EName = EName.slice(0,-1)+", ";
					//EName = EName+", ";//1
				}
				if (EName3!=""){//new thing
					EName3 = EName3+" ";
				}
			}
			//5th Author
			if (ESurname5 != ""){
				//ESurname5 = ESurname5+", ";
				ESurname5 = ESurname5+" ";
				EName4 = EName4.replace(/,\s*$/, "")+" & ";
				EName3 = EName3.slice(0,-1)+", ";//3
				EName2 = EName2.slice(0,-1)+", ";//2
				EName = EName.slice(0,-1)+", ";//1
				//EName = EName+", ";//1
			}
			if (EName4!=""){//new thing
				EName4 = EName4+" ";
			}
			//AllAuthors = A1+A2+A3+A4+A5+Editor;	
			AllEditors = ESurname+EName+ESurname2+EName2+ESurname3+EName3+ESurname4+EName4+ESurname5+EName5+EEditor;				
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
				exampleDiv.style.display = "block";
			}
		}
		function clear_all(){
			var exampleDiv = document.getElementsByName("example")[0];
			exampleDiv.style.display = "none";
		}
		
		function selectText(containerid) {
				if (document.selection) {
					var range = document.body.createTextRange();
					range.moveToElementText(document.getElementById(containerid));
					range.select();
			
				//Copied = text.createTextRange();
				//range.execCommand("Copy");
			
				//window.clipboardData.setData("text",document.body.innerHTML);
			
				} else if (window.getSelection) {
					var range = document.createRange();
					range.selectNode(document.getElementById(containerid));
					window.getSelection().addRange(range);	
				}
		}
		
	</script>		
</head>
<body style="background-size: 100% 100%; background-color:#0B2840;	background-position: center; margin:0; padding:0;"> 
	<?PHP
		//selected file:
		$selectedFile = $_POST["projectName"];
		//creates a new csv file if no file exists.
		$getContents = file_get_contents("LoggedInOrRemembered/login" . $ip . ".txt");
		if (!file_exists("Users/$getContents/APA/general.csv"))
		{
			$file = "Users/$getContents/APA/general.csv";
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
	<?php
		//counts number of files
		$countFiles = count(glob("Users/$getContents/APA/" . "*.csv" ));			
		print"
			<button  class='linkbarSmallButton' onclick=\"toggle_login_div('orange');\" style=' margin-top:0; cursor:pointer;' type='button'>Create new project</button>
			<button class='linkbarSmallButton' onclick=\" location.href = 'loggedInHomeSelectCategory.php'; \" style=' margin-top:4; cursor:pointer;' type='button'>  Change referencing style</button>
			<button class='linkbarSmallButton' onclick=\" location.href = 'loggedInHomeViewAllProjects.php'; \" style=' margin-top:4; cursor:pointer;' type='button'>Show all projects</button>
			<p class='subhead' align='center' style='margin-bottom:20;'><font color='#3D3C3A'>Your <b>APA</b> Projects ($countFiles)</font></p>
		";
	?>
	</div>
<hr/>
	<div id='small2' style='background-color:white; position:relative; top:0; border: 0px solid #B4CFEC; height:370px;'>
		<table align='left' width='210px'>
	<?php
		//counts number of files
		$countFiles = count(glob("Users/$getContents/APA/" . "*.csv" ));			
	?>
			<?PHP
				$file=glob("Users/$getContents/APA/" . "*.csv" );
				for ( $i = 0 ; $i < count(glob("Users/$getContents/APA/" . "*.csv" )); $i++)
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
	<div id="website" style=' display:none; position:fixed; height:34px; top:35px; border-top-left-radius:0; border-bottom-left-radius:25px; border-bottom-right-radius:25px; border-top-right-radius:0; background-color:#82CAFA; border-color:#82CAFA;'>
	<?php
					//THIs PHP code is for when a new user logs in and it creates and sets general.csv as default
				$generalDotCSV = file_get_contents("Users/$getContents/selectedFile.txt");	
					if (!file_exists("Users/$getContents/selectedFile.txt"))
				{
					$file = "Users/$getContents/selectedFile.txt";
					file_put_contents($file, "Users/$getContents/APA/general.csv");
				}
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
			<a style='position:relative; float:right; border-bottom-left-radius:0; border-bottom-right-radius:0; border-top-right-radius:0;' align="left" class="pageLinkC" href="loggedInHarvard.php">Harvard This!</a>
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
	<div id='orange'  style='display:none; position:fixed; top:0; left:0;  width:100%; height:100%; background-color: rgba(0,0,0, 0.7); border-color:rgba(130,202,255, 0);  z-index:10;'>
		<br/><br/>
		<div id="inputType" style='background-color:white; border-radius:3; margin-top:50px; z-index:20;'>
			<p style='margin-left:20%;' >
				<font style=" font-family:Century Gothic; font-size:45; color:rgba(209,208,206); color:#0F3955; " >
					Create New Project
				</font>
			</p>	
				<br/>
				<form action ="createFile.php" method="post">
							<input class='mainInputDesktop' type="text" name="NewFileName" placeholder="Project Name" size='20' style='height:35; font-size:35; width:75%;  padding-left:20px; color:#0F3955;' />
							<input type="submit" class='linkbarIndexButt' style='font-color:white; cursor: pointer; font-size:15; ' value="Create New Project"/>
							<br/><br/>
							<p style='float:left; padding-left:2%; ;' class='subhead'>Referencing style: <b>APA 6th Edition</b> [This project will only work with the APA 6th Edition style]</p>
							<a  align="left" class='linkbarIndexButt' style=' float:right; cursor: pointer; font-size:15;' href="loggedInHomeSelectCategory.php">Change referencing style</a>
				</form>
				<br/>
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
				<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='JournalArticle'><input class='sourceButtons' type='submit' value='Journal Article' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
				<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='Newspaper'><input class='sourceButtons' type='submit' value='Newspaper' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
				<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='Webpage'><input class='sourceButtons' type='submit' value='Webpage' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
				<a align="left" class="sourceButtons" onclick="toggle_login_div('bdlessInnerDiv'); toggle_login_div('bdlessMenu'); " style='border-top-right-radius: 32px;'>|Show All</a>
			</tr>
		</table>
	</div>
	<div id="bdlessInnerDiv" style='display:none;' align="center">
		<br/>
		<table align="center" width="100%">
			<tr>
			<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='AudioPodcast'><input class='sourceButtons' type='submit' value='Audio Podcast' style='border-top-left-radius: 32px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 32px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='Blog'><input class='sourceButtons' type='submit' value='Blog' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='Book'><input class='sourceButtons' type='submit' value='Book' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='BookChapter'><input class='sourceButtons' type='submit' value='Book (Chapter)' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='BookNoAuthor'><input class='sourceButtons' type='submit' value='Book (No Author)' style='border-top-left-radius: 0px; border-top-right-radius:32px; border-bottom-right-radius:32px; border-bottom-left-radius: 0px;'></form>
						<br/><br/>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='ConferencePaperUnpublished'><input class='sourceButtons' type='submit' value='Conference Paper (Unpublished)' style='border-top-left-radius: 32px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 32px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='ConferenceProceedingOnline'><input class='sourceButtons' type='submit' value='Conference Proceeding (Online)' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='ConferenceProceedingPrint'><input class='sourceButtons' type='submit' value='Conference Proceeding (Print)' style='border-top-left-radius: 0px; border-top-right-radius:32px; border-bottom-right-radius:32px; border-bottom-left-radius: 0px;'></form>
						<br/><br/>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='DiscussionForum'><input class='sourceButtons' type='submit' value='Discussion Forum' style='border-top-left-radius: 32px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 32px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='FactSheet'><input class='sourceButtons' type='submit' value='Fact Sheet' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='Film'><input class='sourceButtons' type='submit' value='Film' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='GovernmentReport'><input class='sourceButtons' type='submit' value='Government Report' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='Image'><input class='sourceButtons' type='submit' value='Image' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='JournalArticle'><input class='sourceButtons' type='submit' value='Journal Article' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<br/><br/>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='Libretto'><input class='sourceButtons' type='submit' value='Libretto' style='border-top-left-radius: 32px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 32px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='LinearNotesSoundRecording'><input class='sourceButtons' type='submit' value='Linear Notes (Sound Recording)' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='MailingList'><input class='sourceButtons' type='submit' value='Mailing List' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='MusicScore'><input class='sourceButtons' type='submit' value='Music Score' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='Newspaper'><input class='sourceButtons' type='submit' value='Newspaper' style='border-top-left-radius: 0px; border-top-right-radius:32px; border-bottom-right-radius:32px; border-bottom-left-radius: 0px;'></form>
						<br/><br/>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='NewspaperArticleNoAuthor'><input class='sourceButtons' type='submit' value='Newspaper Article (No Author)' style='border-top-left-radius: 32px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 32px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='Painting'><input class='sourceButtons' type='submit' value='Painting' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='Patent'><input class='sourceButtons' type='submit' value='Patent' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='PressRelease'><input class='sourceButtons' type='submit' value='Press Release' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='ReferenceBook'><input class='sourceButtons' type='submit' value='Reference Book' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='Report'><input class='sourceButtons' type='submit' value='Report' style='border-top-left-radius: 0px; border-top-right-radius:32px; border-bottom-right-radius:32px; border-bottom-left-radius: 0px;'></form>
						<br/><br/>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='Software'><input class='sourceButtons' type='submit' value='Software' style='border-top-left-radius: 32px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 32px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='SoundRecordingCD'><input class='sourceButtons' type='submit' value='Sound Recording CD' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='Standard'><input class='sourceButtons' type='submit' value='Standard' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='StandardOnline'><input class='sourceButtons' type='submit' value='Standard Online' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='TelevisionProgramme'><input class='sourceButtons' type='submit' value='Television Programme' style='border-top-left-radius: 0px; border-top-right-radius:32px; border-bottom-right-radius:32px; border-bottom-left-radius: 0px;'></form>
						<br/><br/>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='ThesisOnline'><input class='sourceButtons' type='submit' value='Thesis (Online)' style='border-top-left-radius: 32px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 32px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='ThesisPublished'><input class='sourceButtons' type='submit' value='Thesis (Published)' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='ThesisUnpublished'><input class='sourceButtons' type='submit' value='Thesis (Unpublished)' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='TrackSoundRecording'><input class='sourceButtons' type='submit' value='Track (Sound Recording)' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='Webpage'><input class='sourceButtons' type='submit' value='Webpage' style='border-top-left-radius: 0px; border-top-right-radius:32px; border-bottom-right-radius:32px; border-bottom-left-radius: 0px;'></form>
						<br/><br/>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='WebpageNoAuthor'><input class='sourceButtons' type='submit' value='Webpage (No Author)' style='border-top-left-radius: 32px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 32px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='Wiki'><input class='sourceButtons' type='submit' value='Wiki' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='YouTubeVideo'><input class='sourceButtons' type='submit' value='YouTubeVideo' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='eBook'><input class='sourceButtons' type='submit' value='eBook' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='eBookChapter'><input class='sourceButtons' type='submit' value='eBookChapter' style='border-top-left-radius: 0px; border-top-right-radius:0px; border-bottom-right-radius:0px; border-bottom-left-radius: 0px;'></form>
						<form action='changeReferenceNonUser.php' method='post'><input type='hidden' name='newReferenceType' value='eReferenceBook'><input class='sourceButtons' type='submit' value='eReferenceBook' style='border-top-left-radius: 0px; border-top-right-radius:32px; border-bottom-right-radius:32px; border-bottom-left-radius: 0px;'></form>
						<br/><br/>
						<a align="left" class="sourceButtons" onclick="toggle_login_div('bdlessInnerDiv'); toggle_login_div('bdlessMenu'); " style='border-top-left-radius: 32px; border-top-right-radius:32px; border-bottom-right-radius:32px; border-bottom-left-radius: 32px;'>| Show Less</a>
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
									<input type="text" name="Name" placeholder="Initials e.g. J. K. / Corporate Author" size="42" class="mainInputDesktop" style="height: 37; font-size:25; width:48%; padding-left:20px; float:right; color:#0F3955; " >
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
									<input type="text" name="EName" placeholder="Editor Surname" size="42" class="mainInputDesktop" style="height: 37; font-size:25; width:48%; padding-left:20px; float:left; color:#0F3955; " >
									<input type="text" name="ESurname" placeholder="Initials e.g. J. K." size="42" class="mainInputDesktop" style="height: 37; font-size:25; width:48%; padding-left:20px; float:right; color:#0F3955;" >
									<div id="bdlessInnerDiv' . $u . '" style="display:none;">
										<input type="text" name="EName2" placeholder="2nd Editor Last Name" size="42" class="mainInputDesktop" style="height: 37; font-size:25; width:48%; padding-left:20px; float:left; color:#0F3955; " >
										<input type="text" name="ESurname2" placeholder="2nd Editor Initials" size="42" class="mainInputDesktop" style="height: 37; font-size:25; width:48%; padding-left:20px; float:right; color:#0F3955;" >
										<input type="text" name="EName3" placeholder="3rd Editor Last Name" size="42" class="mainInputDesktop" style="height: 37; font-size:25; width:48%; padding-left:20px; float:left; color:#0F3955; " >
										<input type="text" name="ESurname3" placeholder="3rd Editor Initials" size="42" class="mainInputDesktop" style="height: 37; font-size:25; width:48%; padding-left:20px; float:right; color:#0F3955;" >
										<input type="text" name="EName4" placeholder="4th Editor Last Name" size="42" class="mainInputDesktop" style="height: 37; font-size:25; width:48%; padding-left:20px; float:left; color:#0F3955; " >
										<input type="text" name="ESurname4" placeholder="4th Editor Initials" class="mainInputDesktop" size="42" style="height: 37; font-size:25; width:48%; padding-left:20px; float:right; color:#0F3955;" >
										<input type="text" name="EName5" placeholder="5th Editor Last Name" size="42" class="mainInputDesktop" style="height: 37; font-size:25; width:48%; padding-left:20px; float:left; color:#0F3955; " >
										<input type="text" name="ESurname5" placeholder="5th Editor Initials" size="42" class="mainInputDesktop" style="height: 37; font-size:25; width:48%; padding-left:20px; float:right; color:#0F3955;" >
									</div>
									<a align="left" class="Button1" onclick=\'toggle_login_div("bdlessInnerDiv'. $u . '");\'>Add more editors</a>
		';
		}
		function multipleAuthorsOutput(){
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
										$Editor = "(Ed.)";
									}
									else{
										$Editor = "(Eds.)";
									}
								}
								if ($Name == ""){
										$Surname = $Surname . " ";
									}
									else {
										$Surname = $Surname . "~ ";
										$Name = "$Name ";
									}
									if ($Surname2 != ""){
										$Surname2 = $Surname2 . "~ ";
										if ($Surname3==""){
											$Name = rtrim("$Name", "~ ") . " & ";
										}
										else{
							//			$EName = $EName . " ";
										}
									}
								//3rd Author
									if ($Surname3 != ""){
										$Surname3 = $Surname3 . "~ ";
										if ($Surname4 ==""){
											$Name2 = rtrim("$Name2", "~ ") . " & ";
											$Name = substr($Name, 0, -1) . "~ ";
										}
										if ($Name2!=""){//new thing
											$Name2 = $Name2 . " ";
										}
									}
									//else if ($lineOfText[10] != "") {
									//	$lineOfText[10] = "$lineOfText[10].";
									//}
									//4th Author
									if ($Surname4 != ""){
										$Surname4 = $Surname4 . "~ ";
										if ($Surname5 == ""){
											$Name3 = rtrim("$Name3", "~ ") . " & ";
											$Name2 = substr($Name2, 0, -1) . "~ ";//2
											$Name = substr($Name, 0, -1) . "~ ";//1
										}
										if ($Name3!=""){//new thing
											$Name3 = $Name3 . " ";
										}
									}
									//else if ($lineOfText[12] != "") {
									//	$lineOfText[12] = $lineOfText[12] . ".";
									//}
									//5th Author
									if ($Surname5 != ""){
										$Surname5 = $Surname5 . "~ ";
										$Name4 = rtrim("$Name4", "~ ") . " & ";
										$Name3 = substr($Name3, 0, -1) . "~ ";//3
										$Name2 = substr($Name2, 0, -1) . "~ ";//2
										$Name = substr($Name, 0, -1) . "~ ";//1
									}
									if ($Name4!=""){//new thing
											$Name4 = $Name4 . " ";
									}
								//if ($Editor ==""){
								//	$BooksAuthor = "";	
								//}
								//else {
									$Author = "$Surname$Name$Surname2$Name2$Surname3$Name3$Surname4$Name4$Surname5$Name5$Editor";	
								//}	
			return $Author;
		}
		function multipleEditorsOutput(){
			$ESurname= checkForComma($_POST["ESurname"]);
								$EName = checkForComma($_POST["EName"]);
								$Editor = checkForComma($_POST["Editor"]);
								$EName2 = checkForComma($_POST["EName2"]);
								$ESurname2 = checkForComma($_POST["ESurname2"]);
								$EName3 = checkForComma($_POST["EName3"]);
								$ESurname3 = checkForComma($_POST["ESurname3"]);
								$EName4 = checkForComma($_POST["EName4"]);
								$ESurname4 = checkForComma($_POST["ESurname4"]);
								$EName5 = checkForComma($_POST["EName5"]);
								$ESurname5 = checkForComma($_POST["ESurname5"]);
								
								if ($ESurname != ""){	
									if (($ESurname2 == "") && ($EName2 == "")){
										$EEditor = "(Ed.)~";
									}
									else{
										$EEditor = "(Eds.)~";
									}
								}
								
								if ($EName == ""){
										$ESurname = $ESurname . " ";
									}
									else {
										//$ESurname = $ESurname . "~ ";
										$ESurname = $ESurname . " ";
										$EName = "$EName ";
									}
									if ($ESurname2 != ""){
										//$ESurname2 = $ESurname2 . "~ ";
										$ESurname2 = $ESurname2 . " ";
										$EName2 = $EName2 . " ";
										if ($ESurname3==""){
											//$EName = rtrim("$EName", "~ ") . " & ";
											$EName = "$EName& ";
										}
										else{
										$EName = rtrim("$EName", " ") . "~ ";
										//$EName = $EName . "~ ";
										}
									}
								//3rd Author
									if ($ESurname3 != ""){
										//$ESurname3 = $ESurname3 . "~ ";
										$ESurname3 = $ESurname3 . " ";
										$EName3 = $EName3 . " ";
										if ($ESurname4 ==""){
											//$EName2 = rtrim("$EName2", "~ ") . " & ";
											$EName2 = rtrim("$EName2", " ") . " & ";
											//$EName = substr($EName, 0, -1) . "~ ";
											$EName = substr($EName, 0, -1) . " ";
										}
										if ($EName2!=""){//new thing
											$EName2 = $EName2 . " ";
										}
									}
									//else if ($lineOfText[10] != "") {
									//	$lineOfText[10] = "$lineOfText[10].";
									//}
									//4th Author
									if ($ESurname4 != ""){
										//$ESurname4 = $ESurname4 . "~ ";
										$ESurname4 = $ESurname4 . " ";
										
										$EName2 = rtrim("$EName2", " ") . "~ ";
										if ($ESurname5 == ""){
											//$EName3 = rtrim("$EName3", "~ ") . " & ";
											$EName3 = rtrim("$EName3", " ") . " & ";
											//$EName2 = substr($EName2, 0, -1) . "~ ";//2
											//$EName2 = substr($EName2, 0, -1) . " ";//2
											//$EName = substr($EName, 0, -1) . "~ ";//1
											$EName = substr($EName, 0, -1) . " ";//1
										}
										if ($EName3!=""){//new thing
											$EName3 = $EName3 . " ";
										}
									}
									//else if ($lineOfText[12] != "") {
									//	$lineOfText[12] = $lineOfText[12] . ".";
									//}
									//5th Author
									if ($ESurname5 != ""){
										//$ESurname5 = $ESurname5 . " ";
										$ESurname5 = $ESurname5 . " ";
										$EName5 = $EName5 . " ";
										//$EName4 = rtrim("$EName4", "~ ") . " & ";
										$EName4 = rtrim("$EName4", " ") . " & ";
										//$EName3 = substr($EName3, 0, -1) . "~ ";//3
										//$EName3 = substr($EName3, 0, -1) . " ";//3
										$EName3 = rtrim("$EName3", " ") . "~ ";
										//$EName2 = substr($EName2, 0, -1) . "~ ";//2
										$EName2 = substr($EName2, 0, -1) . " ";//2
										//$EName = substr($EName, 0, -1) . "~ ";//1
										$EName = substr($EName, 0, -1) . " ";//1
									}
									if ($EName4!=""){//new thing
											$EName4 = $EName4 . " ";
									}
								//if ($Editor ==""){
								//	$BooksAuthor = "";	
								//}
								//else {
									$allEditors = "$ESurname$EName$ESurname2$EName2$ESurname3$EName3$ESurname4$EName4$ESurname5$EName5$EEditor";	
								//}	
			return $allEditors;
		}
		
		function intextFunction($givenLineOfText){
			
//----------------------------------InTEXT--------------------------									
									$intext = explode(", ", $givenLineOfText,-1);
									//print_r($intext);
									//print count($intext) . "<br/><br/>";
									$intextOutput = "$intext[0],";
									if (count($intext) == 1){
											$intext[0] = substr($intext[0],strrpos($intext[0],' ')); 	
											$intextOutput = "$intext[0],";			
									}
									else if (count($intext) == 2){
										$intext[1] = substr($intext[1],strrpos($intext[1],' ')); 	
											$intextOutput = "$intext[0] & $intext[1],";
									}
									else if (count($intext) == 4){
										$intext[2] = substr($intext[2],strrpos($intext[2],' ')); 	
										$intext[3] = substr($intext[3],strrpos($intext[3],' ')); 	
											$intextOutput = "$intext[0], $intext[2], & $intext[3],";
									}
									else if (count($intext) == 6){
										$intext[2] = substr($intext[2],strrpos($intext[2],' ')); 	
										$intext[4] = substr($intext[4],strrpos($intext[4],' ')); 	
										$intext[5] = substr($intext[5],strrpos($intext[5],' ')); 	
											$intextOutput = "$intext[0], $intext[2], $intext[4], & $intext[5],";
									}
									else if (count($intext) == 8){
										$intext[2] = substr($intext[2],strrpos($intext[2],' ')); 	
										$intext[4] = substr($intext[4],strrpos($intext[4],' ')); 	
										$intext[6] = substr($intext[6],strrpos($intext[6],' ')); 	
										$intext[7] = substr($intext[7],strrpos($intext[7],' ')); 	
											$intextOutput = "$intext[0], $intext[2], $intext[4], $intext[6], & $intext[7],";
									}									
//----------------------------------InTEXT--------------------------
			return $intextOutput;						
		}
		
		$goldMembership=true;
	?>
	<div id="inputType" style="background-color:white; border-radius:3;">
	<?php
	$typeOfSource = $_SESSION["referenceType"];
	if (  ($typeOfSource == "AudioPodcast")|| ($typeOfSource == "Blog")|| ($typeOfSource == "Book")|| ($typeOfSource == "BookChapter")|| ($typeOfSource == "BookNoAuthor")|| ($typeOfSource == "ConferencePaperUnpublished")|| ($typeOfSource == "ConferenceProceedingOnline")|| ($typeOfSource == "ConferenceProceedingPrint")|| ($typeOfSource == "DiscussionForum")|| ($typeOfSource == "FactSheet")|| ($typeOfSource == "Film")|| ($typeOfSource == "GovernmentReport")|| ($typeOfSource == "Image")|| ($typeOfSource == "JournalArticle")|| ($typeOfSource == "Libretto")|| ($typeOfSource == "LinearNotesSoundRecording")|| ($typeOfSource == "MailingList")|| ($typeOfSource == "MusicScore")|| ($typeOfSource == "Newspaper")|| ($typeOfSource == "NewspaperArticleNoAuthor")|| ($typeOfSource == "Painting")|| ($typeOfSource == "Patent")|| ($typeOfSource == "PressRelease")|| ($typeOfSource == "ReferenceBook")|| ($typeOfSource == "Report")|| ($typeOfSource == "Software")|| ($typeOfSource == "SoundRecordingCD")|| ($typeOfSource == "Standard")|| ($typeOfSource == "StandardOnline")|| ($typeOfSource == "TelevisionProgramme")|| ($typeOfSource == "ThesisOnline")|| ($typeOfSource == "ThesisPublished")|| ($typeOfSource == "ThesisUnpublished")|| ($typeOfSource == "TrackSoundRecording")|| ($typeOfSource == "Webpage")|| ($typeOfSource == "WebpageNoAuthor")|| ($typeOfSource == "Wiki")|| ($typeOfSource == "YouTubeVideo")|| ($typeOfSource == "eBook")|| ($typeOfSource == "eBookChapter")|| ($typeOfSource == "eReferenceBook") ){
		$resourceName = $_SESSION["referenceType"];
		$i = 0;
		$totalResources ="";
		for ($i=0; $i<$totalInputs; $i++){
			$resource[$i] = $_GET['entry' . $i];
			$totalResources = "$totalResources$resource[$i],";
		}
		if (!file_exists("APA/Resources/$resourceName.txt")){
				file_put_contents("APA/Resources/$resourceName.txt" , "$totalResources");
		}
		print "<p style='' align='center' ><font style=' font-family:Century Gothic; font-size:40; color:#3D3C3A; ' >$resourceName<br/></p></font>";
		$file_handle = fopen("APA/Resources/$resourceName.txt", "r") or die ("Error");
		$line_of_text = fgetcsv($file_handle, 1024);
		fclose($file_handle);//only difference
		//placeholder variables
		$file_handlePlaceholder = fopen("APA/Resources/Placeholders/$resourceName" . ".txt", "r") or die ("Error");
		//$line_of_textPlaceholder = json_decode($file_handleVar, true);
		$line_of_textPlaceholder = fgetcsv($file_handlePlaceholder, 1024);
		//example variables
		$file_handleVar = file_get_contents("APA/Resources/$resourceName" . "Var.json");
		$line_of_textVar = json_decode($file_handleVar, true);
		//Default Values
		$file_handleDefault = file_get_contents("APA/Resources/$resourceName" . "Default.json");
		$line_of_textDefault = json_decode($file_handleDefault, true);
		//Prefix Values
		$file_handlePrefix = file_get_contents("APA/Resources/$resourceName" . "Prefix.json");
		$line_of_textPrefix = json_decode($file_handlePrefix, true);
		//Suffix Values
		$file_handleSuffix = file_get_contents("APA/Resources/$resourceName" . "Suffix.json");
		$line_of_textSuffix = json_decode($file_handleSuffix, true);
		//HashTag Inputs
		$file_handleHashtagInput = file_get_contents("APA/Resources/$resourceName" . "HashtagInput.csv");
		$line_of_textHashtagInput = $file_handleHashtagInput;
		if ($_GET["totalInputs"] == null){
			$totalInputs = count($line_of_text) - 1;
		}		
		print "
				<input type='hidden' name='totalInputs' value=' . $totalInputs . '>
				<input type='hidden' name='resourceName' value=' . $resourceName . '>
				<form action='loggedInHomeAPA.php' method='post'>
				<input type='hidden' name='type' value='$resourceName'>
		";
		$show_Authors = "";
		$show_Editors = "";
		$floatChange =0;
		for ($i=0; $i<$totalInputs; $i++){
			if ($line_of_text[$i] == "Author"){
				$show_Authors = multipleAuthorsInput(2) . "
									<input type='checkbox' name='Editor' value='checked'> These are editors not authors.	
									";
				$floatChange++;	
			}
			if ($line_of_text[$i] == "Editor"){
				$show_Editors = multipleEditorsInput(3) . "
									";
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
				$break="<br/><br/>";
			}
			print "
					<input  $float $hiddenType class='mainInputDesktop'  id='$i' oninput='liveWrite()' name='$resourceName$line_of_text[$i]' placeholder='$line_of_textPlaceholder[$i]' $valueVar >	 
					<input type='hidden' name='lineOfTextPlaceholder$i' value='$line_of_text[$i]'>
					<input type='hidden' id='defaultV[$i]' $valueDefault style='display:$defaultStyle;' class='mainInput' oninput='liveWrite()' name='lineOfTextDefault$i' placeholder='Default empty value' size='30'>
					<input type='hidden' id='prefixV[$i]' $valuePrefix style='display:$prefixSuffixStyle;' class='mainInput' oninput='liveWrite()' name='lineOfTextPrefix$i' placeholder='Prefix' size='30' >
					<input type='hidden' id='suffixV[$i]' $valueSuffix style='display:$prefixSuffixStyle;' class='mainInput' oninput='liveWrite()' name='lineOfTextSuffix$i' placeholder='Suffix' size='30'>
				$break	
			";
			$hashTagTotalInputs = "$hashTagTotalInputs #$line_of_text[$i]";
		}//end of for loop
		print "<br/><br/><br/>";
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
	<div id="bdless" name="example" style="display:none;">
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
						if ($type == "eReferenceBook"){
							$eReferenceBookSource= checkForComma($_POST["eReferenceBookSource"]);
												$eReferenceBookBookTitle= checkForComma($_POST["eReferenceBookBookTitle"]);
												$eReferenceBookTitle= checkForComma($_POST["eReferenceBookTitle"]);
												$eReferenceBookYear= checkForComma($_POST["eReferenceBookYear"]);
												$eReferenceBookAuthor= checkForComma($_POST["eReferenceBookAuthor"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $Author . "," . $eReferenceBookYear . "," . $eReferenceBookTitle . "," . $eReferenceBookBookTitle . "," . $eReferenceBookSource. ",eReferenceBook";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "eBookChapter"){
							$eBookChapterSubtitle= checkForComma($_POST["eBookChapterSubtitle"]);
												$eBookChapterSource= checkForComma($_POST["eBookChapterSource"]);
												$eBookChapterPages= checkForComma($_POST["eBookChapterPages"]);
												$eBookChapterVolume= checkForComma($_POST["eBookChapterVolume"]);
												$eBookChapterEdition= checkForComma($_POST["eBookChapterEdition"]);
												$eBookChapterBookTitle= checkForComma($_POST["eBookChapterBookTitle"]);
												$eBookChapterChapterTitle= checkForComma($_POST["eBookChapterChapterTitle"]);
												$eBookChapterYear= checkForComma($_POST["eBookChapterYear"]);
												$eBookChapterEditor= checkForComma($_POST["eBookChapterEditor"]);
												$eBookChapterAuthor= checkForComma($_POST["eBookChapterAuthor"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $Author . "," . $allEditors . "," . $eBookChapterYear . "," . $eBookChapterChapterTitle . "," . $eBookChapterBookTitle . "," . $eBookChapterEdition . "," . $eBookChapterVolume . "," . $eBookChapterPages . "," . $eBookChapterSource . "," . $eBookChapterSubtitle. ",eBookChapter";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "eBook"){
							$eBookSubtitle= checkForComma($_POST["eBookSubtitle"]);
												$eBookSource= checkForComma($_POST["eBookSource"]);
												$eBookTitle= checkForComma($_POST["eBookTitle"]);
												$eBookYear= checkForComma($_POST["eBookYear"]);
												$eBookAuthor= checkForComma($_POST["eBookAuthor"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $Author . "," . $eBookYear . "," . $eBookTitle . "," . $eBookSource . "," . $eBookSubtitle. ",eBook";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "YouTubeVideo"){
							$YouTubeVideoURL= checkForComma($_POST["YouTubeVideoURL"]);
												$YouTubeVideoTitle= checkForComma($_POST["YouTubeVideoTitle"]);
												$YouTubeVideoDay= checkForComma($_POST["YouTubeVideoDay"]);
												$YouTubeVideoMonth= checkForComma($_POST["YouTubeVideoMonth"]);
												$YouTubeVideoYear= checkForComma($_POST["YouTubeVideoYear"]);
												$YouTubeVideoPublisher= checkForComma($_POST["YouTubeVideoPublisher"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $YouTubeVideoPublisher . "," . $YouTubeVideoYear . "," . $YouTubeVideoMonth . "," . $YouTubeVideoDay . "," . $YouTubeVideoTitle . "," . $YouTubeVideoURL. ",YouTubeVideo";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "Wiki"){
							$WikiURL= checkForComma($_POST["WikiURL"]);
												$WikiRetrievedYear= checkForComma($_POST["WikiRetrievedYear"]);
												$WikiRetrievedDay= checkForComma($_POST["WikiRetrievedDay"]);
												$WikiRetrievedMonth= checkForComma($_POST["WikiRetrievedMonth"]);
												$WikiTitle= checkForComma($_POST["WikiTitle"]);
												$WikiYear= checkForComma($_POST["WikiYear"]);
												$WikiAuthor= checkForComma($_POST["WikiAuthor"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $Author . "," . $WikiYear . "," . $WikiTitle . "," . $WikiRetrievedMonth . "," . $WikiRetrievedDay . "," . $WikiRetrievedYear . "," . $WikiURL. ",Wiki";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "WebpageNoAuthor"){
							$WebpageNoAuthorURL= checkForComma($_POST["WebpageNoAuthorURL"]);
												$WebpageNoAuthorYear= checkForComma($_POST["WebpageNoAuthorYear"]);
												$WebpageNoAuthorTitle= checkForComma($_POST["WebpageNoAuthorTitle"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $WebpageNoAuthorTitle . "," . $WebpageNoAuthorYear . "," . $WebpageNoAuthorURL. ",WebpageNoAuthor";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "Webpage"){
							$WebpageURL= checkForComma($_POST["WebpageURL"]);
												$WebpageSubtitle= checkForComma($_POST["WebpageSubtitle"]);
												$WebpageTitle= checkForComma($_POST["WebpageTitle"]);
												$WebpageYear= checkForComma($_POST["WebpageYear"]);
												$WebpageAuthor= checkForComma($_POST["WebpageAuthor"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $Author . "," . $WebpageYear . "," . $WebpageTitle . "," . $WebpageSubtitle . "," . $WebpageURL. ",Webpage";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "TrackSoundRecording"){
							$TrackSoundRecordingOnlineSource= checkForComma($_POST["TrackSoundRecordingOnlineSource"]);
												$TrackSoundRecordingPublisher= checkForComma($_POST["TrackSoundRecordingPublisher"]);
												$TrackSoundRecordingPlace= checkForComma($_POST["TrackSoundRecordingPlace"]);
												$TrackSoundRecordingAlbum= checkForComma($_POST["TrackSoundRecordingAlbum"]);
												$TrackSoundRecordingRecordedBy= checkForComma($_POST["TrackSoundRecordingRecordedBy"]);
												$TrackSoundRecordingTrackName= checkForComma($_POST["TrackSoundRecordingTrackName"]);
												$TrackSoundRecordingYear= checkForComma($_POST["TrackSoundRecordingYear"]);
												$TrackSoundRecordingAuthor= checkForComma($_POST["TrackSoundRecordingAuthor"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $Author . "," . $TrackSoundRecordingYear . "," . $TrackSoundRecordingTrackName . "," . $TrackSoundRecordingRecordedBy . "," . $TrackSoundRecordingAlbum . "," . $TrackSoundRecordingPlace . "," . $TrackSoundRecordingPublisher . "," . $TrackSoundRecordingOnlineSource. ",TrackSoundRecording";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "ThesisUnpublished"){
							$ThesisUnpublishedSubtitle= checkForComma($_POST["ThesisUnpublishedSubtitle"]);
												$ThesisUnpublishedMastersThesisOrDoctoralDissertation= checkForComma($_POST["ThesisUnpublishedMastersThesisOrDoctoralDissertation"]);
												$ThesisUnpublishedUniversity= checkForComma($_POST["ThesisUnpublishedUniversity"]);
												$ThesisUnpublishedTitle= checkForComma($_POST["ThesisUnpublishedTitle"]);
												$ThesisUnpublishedYear= checkForComma($_POST["ThesisUnpublishedYear"]);
												$ThesisUnpublishedAuthor= checkForComma($_POST["ThesisUnpublishedAuthor"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $Author . "," . $ThesisUnpublishedYear . "," . $ThesisUnpublishedTitle . "," . $ThesisUnpublishedUniversity . "," . $ThesisUnpublishedMastersThesisOrDoctoralDissertation . "," . $ThesisUnpublishedSubtitle. ",ThesisUnpublished";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "ThesisPublished"){
							$ThesisPublishedSubtitle= checkForComma($_POST["ThesisPublishedSubtitle"]);
												$ThesisPublishedPublisher= checkForComma($_POST["ThesisPublishedPublisher"]);
												$ThesisPublishedPlace= checkForComma($_POST["ThesisPublishedPlace"]);
												$ThesisPublishedTitle= checkForComma($_POST["ThesisPublishedTitle"]);
												$ThesisPublishedYear= checkForComma($_POST["ThesisPublishedYear"]);
												$ThesisPublishedAuthor= checkForComma($_POST["ThesisPublishedAuthor"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $Author . "," . $ThesisPublishedYear . "," . $ThesisPublishedTitle . "," . $ThesisPublishedPlace . "," . $ThesisPublishedPublisher . "," . $ThesisPublishedSubtitle. ",ThesisPublished";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "ThesisOnline"){
							$ThesisOnlineOnlineSource= checkForComma($_POST["ThesisOnlineOnlineSource"]);
												$ThesisOnlineMastersThesisOrDoctoralDissertation= checkForComma($_POST["ThesisOnlineMastersThesisOrDoctoralDissertation"]);
												$ThesisOnlineSubtitle= checkForComma($_POST["ThesisOnlineSubtitle"]);
												$ThesisOnlineTitle= checkForComma($_POST["ThesisOnlineTitle"]);
												$ThesisOnlineYear= checkForComma($_POST["ThesisOnlineYear"]);
												$ThesisOnlineAuthor= checkForComma($_POST["ThesisOnlineAuthor"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $Author . "," . $ThesisOnlineYear . "," . $ThesisOnlineTitle . "," . $ThesisOnlineSubtitle . "," . $ThesisOnlineMastersThesisOrDoctoralDissertation . "," . $ThesisOnlineOnlineSource. ",ThesisOnline";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "TelevisionProgramme"){
							$TelevisionProgrammePublisher= checkForComma($_POST["TelevisionProgrammePublisher"]);
												$TelevisionProgrammePlace= checkForComma($_POST["TelevisionProgrammePlace"]);
												$TelevisionProgrammeTitle= checkForComma($_POST["TelevisionProgrammeTitle"]);
												$TelevisionProgrammeDay= checkForComma($_POST["TelevisionProgrammeDay"]);
												$TelevisionProgrammeMonth= checkForComma($_POST["TelevisionProgrammeMonth"]);
												$TelevisionProgrammeYear= checkForComma($_POST["TelevisionProgrammeYear"]);
												$TelevisionProgrammeExecutiveProducer= checkForComma($_POST["TelevisionProgrammeExecutiveProducer"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $TelevisionProgrammeExecutiveProducer . "," . $TelevisionProgrammeYear . "," . $TelevisionProgrammeMonth . "," . $TelevisionProgrammeDay . "," . $TelevisionProgrammeTitle . "," . $TelevisionProgrammePlace . "," . $TelevisionProgrammePublisher. ",TelevisionProgramme";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "StandardOnline"){
							$StandardOnlineOnlineSource= checkForComma($_POST["StandardOnlineOnlineSource"]);
												$StandardOnlineCode= checkForComma($_POST["StandardOnlineCode"]);
												$StandardOnlineTitle= checkForComma($_POST["StandardOnlineTitle"]);
												$StandardOnlineYear= checkForComma($_POST["StandardOnlineYear"]);
												$StandardOnlineStandardHolder= checkForComma($_POST["StandardOnlineStandardHolder"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $StandardOnlineStandardHolder . "," . $StandardOnlineYear . "," . $StandardOnlineTitle . "," . $StandardOnlineCode . "," . $StandardOnlineOnlineSource. ",StandardOnline";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "Standard"){
							$StandardPlace= checkForComma($_POST["StandardPlace"]);
												$StandardCode= checkForComma($_POST["StandardCode"]);
												$StandardTitle= checkForComma($_POST["StandardTitle"]);
												$StandardYear= checkForComma($_POST["StandardYear"]);
												$StandardStandardHolder= checkForComma($_POST["StandardStandardHolder"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $StandardStandardHolder . "," . $StandardYear . "," . $StandardTitle . "," . $StandardCode . "," . $StandardPlace. ",Standard";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "SoundRecordingCD"){
							$SoundRecordingCDPublisher= checkForComma($_POST["SoundRecordingCDPublisher"]);
												$SoundRecordingCDPlace= checkForComma($_POST["SoundRecordingCDPlace"]);
												$SoundRecordingCDConductor= checkForComma($_POST["SoundRecordingCDConductor"]);
												$SoundRecordingCDBandName= checkForComma($_POST["SoundRecordingCDBandName"]);
												$SoundRecordingCDTitle= checkForComma($_POST["SoundRecordingCDTitle"]);
												$SoundRecordingCDYear= checkForComma($_POST["SoundRecordingCDYear"]);
												$SoundRecordingCDAuthor= checkForComma($_POST["SoundRecordingCDAuthor"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $Author . "," . $SoundRecordingCDYear . "," . $SoundRecordingCDTitle . "," . $SoundRecordingCDBandName . "," . $SoundRecordingCDConductor . "," . $SoundRecordingCDPlace . "," . $SoundRecordingCDPublisher. ",SoundRecordingCD";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "Software"){
							$SoftwareURLRetrieved= checkForComma($_POST["SoftwareURLRetrieved"]);
												$SoftwareVersionNumber= checkForComma($_POST["SoftwareVersionNumber"]);
												$SoftwareSoftwareName= checkForComma($_POST["SoftwareSoftwareName"]);
												$SoftwareYear= checkForComma($_POST["SoftwareYear"]);
												$SoftwareCompanyName= checkForComma($_POST["SoftwareCompanyName"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $SoftwareCompanyName . "," . $SoftwareYear . "," . $SoftwareSoftwareName . "," . $SoftwareVersionNumber . "," . $SoftwareURLRetrieved. ",Software";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "Report"){
							$ReportOnlineSource= checkForComma($_POST["ReportOnlineSource"]);
												$ReportSubtitle= checkForComma($_POST["ReportSubtitle"]);
												$ReportTitle= checkForComma($_POST["ReportTitle"]);
												$ReportYear= checkForComma($_POST["ReportYear"]);
												$ReportAuthor= checkForComma($_POST["ReportAuthor"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $Author . "," . $ReportYear . "," . $ReportTitle . "," . $ReportSubtitle . "," . $ReportOnlineSource. ",Report";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "ReferenceBook"){
							$ReferenceBookPublisher= checkForComma($_POST["ReferenceBookPublisher"]);
												$ReferenceBookPlace= checkForComma($_POST["ReferenceBookPlace"]);
												$ReferenceBookPages= checkForComma($_POST["ReferenceBookPages"]);
												$ReferenceBookVolume= checkForComma($_POST["ReferenceBookVolume"]);
												$ReferenceBookEdition= checkForComma($_POST["ReferenceBookEdition"]);
												$ReferenceBookBookTitle= checkForComma($_POST["ReferenceBookBookTitle"]);
												$ReferenceBookTitle= checkForComma($_POST["ReferenceBookTitle"]);
												$ReferenceBookYear= checkForComma($_POST["ReferenceBookYear"]);
												$ReferenceBookAuthor= checkForComma($_POST["ReferenceBookAuthor"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $Author . "," . $ReferenceBookYear . "," . $ReferenceBookTitle . "," . $ReferenceBookBookTitle . "," . $ReferenceBookEdition . "," . $ReferenceBookVolume . "," . $ReferenceBookPages . "," . $ReferenceBookPlace . "," . $ReferenceBookPublisher. ",ReferenceBook";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "PressRelease"){
							$PressReleaseOnlineSource= checkForComma($_POST["PressReleaseOnlineSource"]);
												$PressReleaseTitle= checkForComma($_POST["PressReleaseTitle"]);
												$PressReleaseDay= checkForComma($_POST["PressReleaseDay"]);
												$PressReleaseMonth= checkForComma($_POST["PressReleaseMonth"]);
												$PressReleaseYear= checkForComma($_POST["PressReleaseYear"]);
												$PressReleaseAuthor= checkForComma($_POST["PressReleaseAuthor"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $Author . "," . $PressReleaseYear . "," . $PressReleaseMonth . "," . $PressReleaseDay . "," . $PressReleaseTitle . "," . $PressReleaseOnlineSource. ",PressRelease";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "Patent"){
							$PatentOnlineSource= checkForComma($_POST["PatentOnlineSource"]);
												$PatentPatentNumber= checkForComma($_POST["PatentPatentNumber"]);
												$PatentTitle= checkForComma($_POST["PatentTitle"]);
												$PatentYear= checkForComma($_POST["PatentYear"]);
												$PatentAuthor= checkForComma($_POST["PatentAuthor"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $Author . "," . $PatentYear . "," . $PatentTitle . "," . $PatentPatentNumber . "," . $PatentOnlineSource. ",Patent";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "Painting"){
							$PaintingGallaryOrPublisher= checkForComma($_POST["PaintingGallaryOrPublisher"]);
												$PaintingPlace= checkForComma($_POST["PaintingPlace"]);
												$PaintingTitle= checkForComma($_POST["PaintingTitle"]);
												$PaintingYear= checkForComma($_POST["PaintingYear"]);
												$PaintingAuthor= checkForComma($_POST["PaintingAuthor"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $Author . "," . $PaintingYear . "," . $PaintingTitle . "," . $PaintingPlace . "," . $PaintingGallaryOrPublisher. ",Painting";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "NewspaperArticleNoAuthor"){
							$NewspaperArticleNoAuthorURL= checkForComma($_POST["NewspaperArticleNoAuthorURL"]);
												$NewspaperArticleNoAuthorPages= checkForComma($_POST["NewspaperArticleNoAuthorPages"]);
												$NewspaperArticleNoAuthorNewspaper= checkForComma($_POST["NewspaperArticleNoAuthorNewspaper"]);
												$NewspaperArticleNoAuthorDay= checkForComma($_POST["NewspaperArticleNoAuthorDay"]);
												$NewspaperArticleNoAuthorMonth= checkForComma($_POST["NewspaperArticleNoAuthorMonth"]);
												$NewspaperArticleNoAuthorYear= checkForComma($_POST["NewspaperArticleNoAuthorYear"]);
												$NewspaperArticleNoAuthorTitle= checkForComma($_POST["NewspaperArticleNoAuthorTitle"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $NewspaperArticleNoAuthorTitle . "," . $NewspaperArticleNoAuthorYear . "," . $NewspaperArticleNoAuthorMonth . "," . $NewspaperArticleNoAuthorDay . "," . $NewspaperArticleNoAuthorNewspaper . "," . $NewspaperArticleNoAuthorPages . "," . $NewspaperArticleNoAuthorURL. ",NewspaperArticleNoAuthor";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "Newspaper"){
							$NewspaperURL= checkForComma($_POST["NewspaperURL"]);
												$NewspaperPages= checkForComma($_POST["NewspaperPages"]);
												$NewspaperNewspaper= checkForComma($_POST["NewspaperNewspaper"]);
												$NewspaperTitle= checkForComma($_POST["NewspaperTitle"]);
												$NewspaperDay= checkForComma($_POST["NewspaperDay"]);
												$NewspaperMonth= checkForComma($_POST["NewspaperMonth"]);
												$NewspaperYear= checkForComma($_POST["NewspaperYear"]);
												$NewspaperAuthor= checkForComma($_POST["NewspaperAuthor"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $Author . "," . $NewspaperYear . "," . $NewspaperMonth . "," . $NewspaperDay . "," . $NewspaperTitle . "," . $NewspaperNewspaper . "," . $NewspaperPages . "," . $NewspaperURL. ",Newspaper";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "MusicScore"){
							$MusicScoreOnlineSource= checkForComma($_POST["MusicScoreOnlineSource"]);
												$MusicScorePublisher= checkForComma($_POST["MusicScorePublisher"]);
												$MusicScorePlace= checkForComma($_POST["MusicScorePlace"]);
												$MusicScoreTitle= checkForComma($_POST["MusicScoreTitle"]);
												$MusicScoreYear= checkForComma($_POST["MusicScoreYear"]);
												$MusicScoreAuthor= checkForComma($_POST["MusicScoreAuthor"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $Author . "," . $MusicScoreYear . "," . $MusicScoreTitle . "," . $MusicScorePlace . "," . $MusicScorePublisher . "," . $MusicScoreOnlineSource. ",MusicScore";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "MailingList"){
							$MailingListURL= checkForComma($_POST["MailingListURL"]);
												$MailingListTitle= checkForComma($_POST["MailingListTitle"]);
												$MailingListDay= checkForComma($_POST["MailingListDay"]);
												$MailingListMonth= checkForComma($_POST["MailingListMonth"]);
												$MailingListYear= checkForComma($_POST["MailingListYear"]);
												$MailingListAuthor= checkForComma($_POST["MailingListAuthor"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $Author . "," . $MailingListYear . "," . $MailingListMonth . "," . $MailingListDay . "," . $MailingListTitle . "," . $MailingListURL. ",MailingList";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "LinearNotesSoundRecording"){
							$LinearNotesSoundRecordingPublisher= checkForComma($_POST["LinearNotesSoundRecordingPublisher"]);
												$LinearNotesSoundRecordingPlace= checkForComma($_POST["LinearNotesSoundRecordingPlace"]);
												$LinearNotesSoundRecordingTitle= checkForComma($_POST["LinearNotesSoundRecordingTitle"]);
												$LinearNotesSoundRecordingYear= checkForComma($_POST["LinearNotesSoundRecordingYear"]);
												$LinearNotesSoundRecordingAuthor= checkForComma($_POST["LinearNotesSoundRecordingAuthor"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $Author . "," . $LinearNotesSoundRecordingYear . "," . $LinearNotesSoundRecordingTitle . "," . $LinearNotesSoundRecordingPlace . "," . $LinearNotesSoundRecordingPublisher. ",LinearNotesSoundRecording";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "Libretto"){
							$LibrettoPublisher= checkForComma($_POST["LibrettoPublisher"]);
												$LibrettoPlace= checkForComma($_POST["LibrettoPlace"]);
												$LibrettoTitle= checkForComma($_POST["LibrettoTitle"]);
												$LibrettoYear= checkForComma($_POST["LibrettoYear"]);
												$LibrettoAuthor= checkForComma($_POST["LibrettoAuthor"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $Author . "," . $LibrettoYear . "," . $LibrettoTitle . "," . $LibrettoPlace . "," . $LibrettoPublisher. ",Libretto";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "JournalArticle"){
							$JournalArticleOnlineSource= checkForComma($_POST["JournalArticleOnlineSource"]);
												$JournalArticlePages= checkForComma($_POST["JournalArticlePages"]);
												$JournalArticleIssue= checkForComma($_POST["JournalArticleIssue"]);
												$JournalArticleVolume= checkForComma($_POST["JournalArticleVolume"]);
												$JournalArticleJournalName= checkForComma($_POST["JournalArticleJournalName"]);
												$JournalArticleArticleTitle= checkForComma($_POST["JournalArticleArticleTitle"]);
												$JournalArticleYear= checkForComma($_POST["JournalArticleYear"]);
												$JournalArticleAuthor= checkForComma($_POST["JournalArticleAuthor"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $Author . "," . $JournalArticleYear . "," . $JournalArticleArticleTitle . "," . $JournalArticleJournalName . "," . $JournalArticleVolume . "," . $JournalArticleIssue . "," . $JournalArticlePages . "," . $JournalArticleOnlineSource. ",JournalArticle";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "Image"){
							$ImageURL= checkForComma($_POST["ImageURL"]);
												$ImageTitle= checkForComma($_POST["ImageTitle"]);
												$ImageYear= checkForComma($_POST["ImageYear"]);
												$ImageAuthor= checkForComma($_POST["ImageAuthor"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $Author . "," . $ImageYear . "," . $ImageTitle . "," . $ImageURL. ",Image";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "GovernmentReport"){
							$GovernmentReportOnlineSource= checkForComma($_POST["GovernmentReportOnlineSource"]);
												$GovernmentReportReportName= checkForComma($_POST["GovernmentReportReportName"]);
												$GovernmentReportYear= checkForComma($_POST["GovernmentReportYear"]);
												$GovernmentReportDepartment= checkForComma($_POST["GovernmentReportDepartment"]);
												$GovernmentReportRegion= checkForComma($_POST["GovernmentReportRegion"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $GovernmentReportRegion . "," . $GovernmentReportDepartment . "," . $GovernmentReportYear . "," . $GovernmentReportReportName . "," . $GovernmentReportOnlineSource. ",GovernmentReport";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "Film"){
							$FilmPublisher= checkForComma($_POST["FilmPublisher"]);
												$FilmPlace= checkForComma($_POST["FilmPlace"]);
												$FilmTitle= checkForComma($_POST["FilmTitle"]);
												$FilmYear= checkForComma($_POST["FilmYear"]);
												$FilmDirector= checkForComma($_POST["FilmDirector"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $FilmDirector . "," . $FilmYear . "," . $FilmTitle . "," . $FilmPlace . "," . $FilmPublisher. ",Film";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "FactSheet"){
							$FactSheetURL= checkForComma($_POST["FactSheetURL"]);
												$FactSheetTitle= checkForComma($_POST["FactSheetTitle"]);
												$FactSheetYear= checkForComma($_POST["FactSheetYear"]);
												$FactSheetCompany= checkForComma($_POST["FactSheetCompany"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $FactSheetCompany . "," . $FactSheetYear . "," . $FactSheetTitle . "," . $FactSheetURL. ",FactSheet";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "DiscussionForum"){
							$DiscussionForumURL= checkForComma($_POST["DiscussionForumURL"]);
												$DiscussionForumTitle= checkForComma($_POST["DiscussionForumTitle"]);
												$DiscussionForumDay= checkForComma($_POST["DiscussionForumDay"]);
												$DiscussionForumMonth= checkForComma($_POST["DiscussionForumMonth"]);
												$DiscussionForumYear= checkForComma($_POST["DiscussionForumYear"]);
												$DiscussionForumAuthor= checkForComma($_POST["DiscussionForumAuthor"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $Author . "," . $DiscussionForumYear . "," . $DiscussionForumMonth . "," . $DiscussionForumDay . "," . $DiscussionForumTitle . "," . $DiscussionForumURL. ",DiscussionForum";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "ConferenceProceedingPrint"){
							$ConferenceProceedingPrintPublisher= checkForComma($_POST["ConferenceProceedingPrintPublisher"]);
												$ConferenceProceedingPrintPlace= checkForComma($_POST["ConferenceProceedingPrintPlace"]);
												$ConferenceProceedingPrintPages= checkForComma($_POST["ConferenceProceedingPrintPages"]);
												$ConferenceProceedingPrintVolume= checkForComma($_POST["ConferenceProceedingPrintVolume"]);
												$ConferenceProceedingPrintEdition= checkForComma($_POST["ConferenceProceedingPrintEdition"]);
												$ConferenceProceedingPrintSubtitle= checkForComma($_POST["ConferenceProceedingPrintSubtitle"]);
												$ConferenceProceedingPrintConferenceName= checkForComma($_POST["ConferenceProceedingPrintConferenceName"]);
												$ConferenceProceedingPrintTitle= checkForComma($_POST["ConferenceProceedingPrintTitle"]);
												$ConferenceProceedingPrintYear= checkForComma($_POST["ConferenceProceedingPrintYear"]);
												$ConferenceProceedingPrintEditor= checkForComma($_POST["ConferenceProceedingPrintEditor"]);
												$ConferenceProceedingPrintAuthor= checkForComma($_POST["ConferenceProceedingPrintAuthor"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $Author . "," . $allEditors . "," . $ConferenceProceedingPrintYear . "," . $ConferenceProceedingPrintTitle . "," . $ConferenceProceedingPrintConferenceName . "," . $ConferenceProceedingPrintSubtitle . "," . $ConferenceProceedingPrintEdition . "," . $ConferenceProceedingPrintVolume . "," . $ConferenceProceedingPrintPlace . "," . $ConferenceProceedingPrintPublisher . "," . $ConferenceProceedingPrintPages. ",ConferenceProceedingPrint";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "ConferenceProceedingOnline"){
							$ConferenceProceedingOnlineURL= checkForComma($_POST["ConferenceProceedingOnlineURL"]);
												$ConferenceProceedingOnlineConferenceName= checkForComma($_POST["ConferenceProceedingOnlineConferenceName"]);
												$ConferenceProceedingOnlineTitle= checkForComma($_POST["ConferenceProceedingOnlineTitle"]);
												$ConferenceProceedingOnlineMonth= checkForComma($_POST["ConferenceProceedingOnlineMonth"]);
												$ConferenceProceedingOnlineYear= checkForComma($_POST["ConferenceProceedingOnlineYear"]);
												$ConferenceProceedingOnlineAuthor= checkForComma($_POST["ConferenceProceedingOnlineAuthor"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $Author . "," . $ConferenceProceedingOnlineYear . "," . $ConferenceProceedingOnlineMonth . "," . $ConferenceProceedingOnlineTitle . "," . $ConferenceProceedingOnlineConferenceName . "," . $ConferenceProceedingOnlineURL. ",ConferenceProceedingOnline";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "ConferencePaperUnpublished"){
							$ConferencePaperUnpublishedDateOfConference= checkForComma($_POST["ConferencePaperUnpublishedDateOfConference"]);
												$ConferencePaperUnpublishedPlace= checkForComma($_POST["ConferencePaperUnpublishedPlace"]);
												$ConferencePaperUnpublishedConferenceName= checkForComma($_POST["ConferencePaperUnpublishedConferenceName"]);
												$ConferencePaperUnpublishedSubtitle= checkForComma($_POST["ConferencePaperUnpublishedSubtitle"]);
												$ConferencePaperUnpublishedTitle= checkForComma($_POST["ConferencePaperUnpublishedTitle"]);
												$ConferencePaperUnpublishedYear= checkForComma($_POST["ConferencePaperUnpublishedYear"]);
												$ConferencePaperUnpublishedAuthor= checkForComma($_POST["ConferencePaperUnpublishedAuthor"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $Author . "," . $ConferencePaperUnpublishedYear . "," . $ConferencePaperUnpublishedTitle . "," . $ConferencePaperUnpublishedSubtitle . "," . $ConferencePaperUnpublishedConferenceName . "," . $ConferencePaperUnpublishedPlace . "," . $ConferencePaperUnpublishedDateOfConference. ",ConferencePaperUnpublished";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "BookNoAuthor"){
							$BookNoAuthorSubtitle= checkForComma($_POST["BookNoAuthorSubtitle"]);
												$BookNoAuthorPublisher= checkForComma($_POST["BookNoAuthorPublisher"]);
												$BookNoAuthorPlace= checkForComma($_POST["BookNoAuthorPlace"]);
												$BookNoAuthorYear= checkForComma($_POST["BookNoAuthorYear"]);
												$BookNoAuthorPages= checkForComma($_POST["BookNoAuthorPages"]);
												$BookNoAuthorVolume= checkForComma($_POST["BookNoAuthorVolume"]);
												$BookNoAuthorEdition= checkForComma($_POST["BookNoAuthorEdition"]);
												$BookNoAuthorTitle= checkForComma($_POST["BookNoAuthorTitle"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $BookNoAuthorTitle . "," . $BookNoAuthorEdition . "," . $BookNoAuthorVolume . "," . $BookNoAuthorPages . "," . $BookNoAuthorYear . "," . $BookNoAuthorPlace . "," . $BookNoAuthorPublisher . "," . $BookNoAuthorSubtitle. ",BookNoAuthor";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "BookChapter"){
							$BookChapterPublisher= checkForComma($_POST["BookChapterPublisher"]);
												$BookChapterPlace= checkForComma($_POST["BookChapterPlace"]);
												$BookChapterPage= checkForComma($_POST["BookChapterPage"]);
												$BookChapterVolume= checkForComma($_POST["BookChapterVolume"]);
												$BookChapterEdition= checkForComma($_POST["BookChapterEdition"]);
												$BookChapterSubtitle= checkForComma($_POST["BookChapterSubtitle"]);
												$BookChapterBookTitle= checkForComma($_POST["BookChapterBookTitle"]);
												$BookChapterChapterTitle= checkForComma($_POST["BookChapterChapterTitle"]);
												$BookChapterYear= checkForComma($_POST["BookChapterYear"]);
												$BookChapterEditor= checkForComma($_POST["BookChapterEditor"]);
												$BookChapterAuthor= checkForComma($_POST["BookChapterAuthor"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $Author . "," . $allEditors . "," . $BookChapterYear . "," . $BookChapterChapterTitle . "," . $BookChapterBookTitle . "," . $BookChapterSubtitle . "," . $BookChapterEdition . "," . $BookChapterVolume . "," . $BookChapterPage . "," . $BookChapterPlace . "," . $BookChapterPublisher. ",BookChapter";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "Book"){
							$BookSubtitle= checkForComma($_POST["BookSubtitle"]);
												$BookPages= checkForComma($_POST["BookPages"]);
												$BookVolume= checkForComma($_POST["BookVolume"]);
												$BookPublisher= checkForComma($_POST["BookPublisher"]);
												$BookPlace= checkForComma($_POST["BookPlace"]);
												$BookEdition= checkForComma($_POST["BookEdition"]);
												$BookTitle= checkForComma($_POST["BookTitle"]);
												$BookYear= checkForComma($_POST["BookYear"]);
												$BookAuthor= checkForComma($_POST["BookAuthor"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $Author . "," . $BookYear . "," . $BookTitle . "," . $BookEdition . "," . $BookPlace . "," . $BookPublisher . "," . $BookVolume . "," . $BookPages . "," . $BookSubtitle. ",Book";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "Blog"){
							$BlogURL= checkForComma($_POST["BlogURL"]);
												$BlogTitle= checkForComma($_POST["BlogTitle"]);
												$BlogDay= checkForComma($_POST["BlogDay"]);
												$BlogMonth= checkForComma($_POST["BlogMonth"]);
												$BlogYear= checkForComma($_POST["BlogYear"]);
												$BlogAuthor= checkForComma($_POST["BlogAuthor"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $Author . "," . $BlogYear . "," . $BlogMonth . "," . $BlogDay . "," . $BlogTitle . "," . $BlogURL. ",Blog";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
						if ($type == "AudioPodcast"){
							$AudioPodcastURL= checkForComma($_POST["AudioPodcastURL"]);
												$AudioPodcastTitle= checkForComma($_POST["AudioPodcastTitle"]);
												$AudioPodcastDay= checkForComma($_POST["AudioPodcastDay"]);
												$AudioPodcastMonth= checkForComma($_POST["AudioPodcastMonth"]);
												$AudioPodcastYear= checkForComma($_POST["AudioPodcastYear"]);
												$AudioPodcastAuthor= checkForComma($_POST["AudioPodcastAuthor"]);
							$Author = multipleAuthorsOutput();
							$allEditors = multipleEditorsOutput();
							$line =  $Author . "," . $AudioPodcastYear . "," . $AudioPodcastMonth . "," . $AudioPodcastDay . "," . $AudioPodcastTitle . "," . $AudioPodcastURL. ",AudioPodcast";
							file_put_contents("$file", $line . PHP_EOL, FILE_APPEND);
						}
	?>
	<br/>
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
			<p class='subhead' align='center'>Project Name:</p>
			<p class='divHeader' align='center'><font size='4.5' color='#3BB9FF'> $withoutNameB </font></p>";
					$iniSelectedFile = file_get_contents("Users/$getContents/selectedFile.txt");
					$eReferenceBookTable=false;
					$eBookChapterTable=false;
					$eBookTable=false;
					$YouTubeVideoTable=false;
					$WikiTable=false;
					$WebpageNoAuthorTable=false;
					$WebpageTable=false;
					$TrackSoundRecordingTable=false;
					$ThesisUnpublishedTable=false;
					$ThesisPublishedTable=false;
					$ThesisOnlineTable=false;
					$TelevisionProgrammeTable=false;
					$StandardOnlineTable=false;
					$StandardTable=false;
					$SoundRecordingCDTable=false;
					$SoftwareTable=false;
					$ReportTable=false;
					$ReferenceBookTable=false;
					$PressReleaseTable=false;
					$PatentTable=false;
					$PaintingTable=false;
					$NewspaperArticleNoAuthorTable=false;
					$NewspaperTable=false;
					$MusicScoreTable=false;
					$MailingListTable=false;
					$LinearNotesSoundRecordingTable=false;
					$LibrettoTable=false;
					$JournalArticleTable=false;
					$ImageTable=false;
					$GovernmentReportTable=false;
					$FilmTable=false;
					$FactSheetTable=false;
					$DiscussionForumTable=false;
					$ConferenceProceedingPrintTable=false;
					$ConferenceProceedingOnlineTable=false;
					$ConferencePaperUnpublishedTable=false;
					$BookNoAuthorTable=false;
					$BookChapterTable=false;
					$BookTable=false;
					$BlogTable=false;
					$AudioPodcastTable=false;
						$j = 0;
						$file_handle = fopen("$iniSelectedFile", "r") or die ("File can not be opened");
						while(!feof($file_handle)){
							$line_of_text = fgetcsv($file_handle, 1024);
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "eReferenceBook"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineeReferenceBook[$j] = $wholeLineeReferenceBook[$j] . "," . $line_of_text[$g];
						}
						$wholeLineeReferenceBook[$j] = substr($wholeLineeReferenceBook[$j], 1);
							$eReferenceBookTable = true;
					}
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "eBookChapter"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineeBookChapter[$j] = $wholeLineeBookChapter[$j] . "," . $line_of_text[$g];
						}
						$wholeLineeBookChapter[$j] = substr($wholeLineeBookChapter[$j], 1);
							$eBookChapterTable = true;
					}
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "eBook"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineeBook[$j] = $wholeLineeBook[$j] . "," . $line_of_text[$g];
						}
						$wholeLineeBook[$j] = substr($wholeLineeBook[$j], 1);
							$eBookTable = true;
					}
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "YouTubeVideo"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineYouTubeVideo[$j] = $wholeLineYouTubeVideo[$j] . "," . $line_of_text[$g];
						}
						$wholeLineYouTubeVideo[$j] = substr($wholeLineYouTubeVideo[$j], 1);
							$YouTubeVideoTable = true;
					}
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "Wiki"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineWiki[$j] = $wholeLineWiki[$j] . "," . $line_of_text[$g];
						}
						$wholeLineWiki[$j] = substr($wholeLineWiki[$j], 1);
							$WikiTable = true;
					}
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "WebpageNoAuthor"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineWebpageNoAuthor[$j] = $wholeLineWebpageNoAuthor[$j] . "," . $line_of_text[$g];
						}
						$wholeLineWebpageNoAuthor[$j] = substr($wholeLineWebpageNoAuthor[$j], 1);
							$WebpageNoAuthorTable = true;
					}
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "Webpage"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineWebpage[$j] = $wholeLineWebpage[$j] . "," . $line_of_text[$g];
						}
						$wholeLineWebpage[$j] = substr($wholeLineWebpage[$j], 1);
							$WebpageTable = true;
					}
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "TrackSoundRecording"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineTrackSoundRecording[$j] = $wholeLineTrackSoundRecording[$j] . "," . $line_of_text[$g];
						}
						$wholeLineTrackSoundRecording[$j] = substr($wholeLineTrackSoundRecording[$j], 1);
							$TrackSoundRecordingTable = true;
					}
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "ThesisUnpublished"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineThesisUnpublished[$j] = $wholeLineThesisUnpublished[$j] . "," . $line_of_text[$g];
						}
						$wholeLineThesisUnpublished[$j] = substr($wholeLineThesisUnpublished[$j], 1);
							$ThesisUnpublishedTable = true;
					}
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "ThesisPublished"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineThesisPublished[$j] = $wholeLineThesisPublished[$j] . "," . $line_of_text[$g];
						}
						$wholeLineThesisPublished[$j] = substr($wholeLineThesisPublished[$j], 1);
							$ThesisPublishedTable = true;
					}
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "ThesisOnline"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineThesisOnline[$j] = $wholeLineThesisOnline[$j] . "," . $line_of_text[$g];
						}
						$wholeLineThesisOnline[$j] = substr($wholeLineThesisOnline[$j], 1);
							$ThesisOnlineTable = true;
					}
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "TelevisionProgramme"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineTelevisionProgramme[$j] = $wholeLineTelevisionProgramme[$j] . "," . $line_of_text[$g];
						}
						$wholeLineTelevisionProgramme[$j] = substr($wholeLineTelevisionProgramme[$j], 1);
							$TelevisionProgrammeTable = true;
					}
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "StandardOnline"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineStandardOnline[$j] = $wholeLineStandardOnline[$j] . "," . $line_of_text[$g];
						}
						$wholeLineStandardOnline[$j] = substr($wholeLineStandardOnline[$j], 1);
							$StandardOnlineTable = true;
					}
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "Standard"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineStandard[$j] = $wholeLineStandard[$j] . "," . $line_of_text[$g];
						}
						$wholeLineStandard[$j] = substr($wholeLineStandard[$j], 1);
							$StandardTable = true;
					}
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "SoundRecordingCD"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineSoundRecordingCD[$j] = $wholeLineSoundRecordingCD[$j] . "," . $line_of_text[$g];
						}
						$wholeLineSoundRecordingCD[$j] = substr($wholeLineSoundRecordingCD[$j], 1);
							$SoundRecordingCDTable = true;
					}
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "Software"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineSoftware[$j] = $wholeLineSoftware[$j] . "," . $line_of_text[$g];
						}
						$wholeLineSoftware[$j] = substr($wholeLineSoftware[$j], 1);
							$SoftwareTable = true;
					}
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "Report"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineReport[$j] = $wholeLineReport[$j] . "," . $line_of_text[$g];
						}
						$wholeLineReport[$j] = substr($wholeLineReport[$j], 1);
							$ReportTable = true;
					}
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "ReferenceBook"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineReferenceBook[$j] = $wholeLineReferenceBook[$j] . "," . $line_of_text[$g];
						}
						$wholeLineReferenceBook[$j] = substr($wholeLineReferenceBook[$j], 1);
							$ReferenceBookTable = true;
					}
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "PressRelease"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLinePressRelease[$j] = $wholeLinePressRelease[$j] . "," . $line_of_text[$g];
						}
						$wholeLinePressRelease[$j] = substr($wholeLinePressRelease[$j], 1);
							$PressReleaseTable = true;
					}
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "Patent"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLinePatent[$j] = $wholeLinePatent[$j] . "," . $line_of_text[$g];
						}
						$wholeLinePatent[$j] = substr($wholeLinePatent[$j], 1);
							$PatentTable = true;
					}
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "Painting"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLinePainting[$j] = $wholeLinePainting[$j] . "," . $line_of_text[$g];
						}
						$wholeLinePainting[$j] = substr($wholeLinePainting[$j], 1);
							$PaintingTable = true;
					}
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "NewspaperArticleNoAuthor"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineNewspaperArticleNoAuthor[$j] = $wholeLineNewspaperArticleNoAuthor[$j] . "," . $line_of_text[$g];
						}
						$wholeLineNewspaperArticleNoAuthor[$j] = substr($wholeLineNewspaperArticleNoAuthor[$j], 1);
							$NewspaperArticleNoAuthorTable = true;
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
					if ($line_of_text[$totalInputs] == "MusicScore"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineMusicScore[$j] = $wholeLineMusicScore[$j] . "," . $line_of_text[$g];
						}
						$wholeLineMusicScore[$j] = substr($wholeLineMusicScore[$j], 1);
							$MusicScoreTable = true;
					}
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "MailingList"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineMailingList[$j] = $wholeLineMailingList[$j] . "," . $line_of_text[$g];
						}
						$wholeLineMailingList[$j] = substr($wholeLineMailingList[$j], 1);
							$MailingListTable = true;
					}
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "LinearNotesSoundRecording"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineLinearNotesSoundRecording[$j] = $wholeLineLinearNotesSoundRecording[$j] . "," . $line_of_text[$g];
						}
						$wholeLineLinearNotesSoundRecording[$j] = substr($wholeLineLinearNotesSoundRecording[$j], 1);
							$LinearNotesSoundRecordingTable = true;
					}
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "Libretto"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineLibretto[$j] = $wholeLineLibretto[$j] . "," . $line_of_text[$g];
						}
						$wholeLineLibretto[$j] = substr($wholeLineLibretto[$j], 1);
							$LibrettoTable = true;
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
					if ($line_of_text[$totalInputs] == "Image"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineImage[$j] = $wholeLineImage[$j] . "," . $line_of_text[$g];
						}
						$wholeLineImage[$j] = substr($wholeLineImage[$j], 1);
							$ImageTable = true;
					}
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "GovernmentReport"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineGovernmentReport[$j] = $wholeLineGovernmentReport[$j] . "," . $line_of_text[$g];
						}
						$wholeLineGovernmentReport[$j] = substr($wholeLineGovernmentReport[$j], 1);
							$GovernmentReportTable = true;
					}
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "Film"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineFilm[$j] = $wholeLineFilm[$j] . "," . $line_of_text[$g];
						}
						$wholeLineFilm[$j] = substr($wholeLineFilm[$j], 1);
							$FilmTable = true;
					}
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "FactSheet"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineFactSheet[$j] = $wholeLineFactSheet[$j] . "," . $line_of_text[$g];
						}
						$wholeLineFactSheet[$j] = substr($wholeLineFactSheet[$j], 1);
							$FactSheetTable = true;
					}
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "DiscussionForum"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineDiscussionForum[$j] = $wholeLineDiscussionForum[$j] . "," . $line_of_text[$g];
						}
						$wholeLineDiscussionForum[$j] = substr($wholeLineDiscussionForum[$j], 1);
							$DiscussionForumTable = true;
					}
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "ConferenceProceedingPrint"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineConferenceProceedingPrint[$j] = $wholeLineConferenceProceedingPrint[$j] . "," . $line_of_text[$g];
						}
						$wholeLineConferenceProceedingPrint[$j] = substr($wholeLineConferenceProceedingPrint[$j], 1);
							$ConferenceProceedingPrintTable = true;
					}
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "ConferenceProceedingOnline"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineConferenceProceedingOnline[$j] = $wholeLineConferenceProceedingOnline[$j] . "," . $line_of_text[$g];
						}
						$wholeLineConferenceProceedingOnline[$j] = substr($wholeLineConferenceProceedingOnline[$j], 1);
							$ConferenceProceedingOnlineTable = true;
					}
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "ConferencePaperUnpublished"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineConferencePaperUnpublished[$j] = $wholeLineConferencePaperUnpublished[$j] . "," . $line_of_text[$g];
						}
						$wholeLineConferencePaperUnpublished[$j] = substr($wholeLineConferencePaperUnpublished[$j], 1);
							$ConferencePaperUnpublishedTable = true;
					}
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "BookNoAuthor"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineBookNoAuthor[$j] = $wholeLineBookNoAuthor[$j] . "," . $line_of_text[$g];
						}
						$wholeLineBookNoAuthor[$j] = substr($wholeLineBookNoAuthor[$j], 1);
							$BookNoAuthorTable = true;
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
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "Blog"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineBlog[$j] = $wholeLineBlog[$j] . "," . $line_of_text[$g];
						}
						$wholeLineBlog[$j] = substr($wholeLineBlog[$j], 1);
							$BlogTable = true;
					}
					$totalInputs = count($line_of_text) - 1;
					if ($line_of_text[$totalInputs] == "AudioPodcast"){
						for ($g = 0; $g <= $totalInputs; $g++){
							$wholeLineAudioPodcast[$j] = $wholeLineAudioPodcast[$j] . "," . $line_of_text[$g];
						}
						$wholeLineAudioPodcast[$j] = substr($wholeLineAudioPodcast[$j], 1);
							$AudioPodcastTable = true;
					}
							$j++;
						}
				if($eReferenceBookTable == true){
					sort($wholeLineeReferenceBook);
				}
				if($eBookChapterTable == true){
					sort($wholeLineeBookChapter);
				}
				if($eBookTable == true){
					sort($wholeLineeBook);
				}
				if($YouTubeVideoTable == true){
					sort($wholeLineYouTubeVideo);
				}
				if($WikiTable == true){
					sort($wholeLineWiki);
				}
				if($WebpageNoAuthorTable == true){
					sort($wholeLineWebpageNoAuthor);
				}
				if($WebpageTable == true){
					sort($wholeLineWebpage);
				}
				if($TrackSoundRecordingTable == true){
					sort($wholeLineTrackSoundRecording);
				}
				if($ThesisUnpublishedTable == true){
					sort($wholeLineThesisUnpublished);
				}
				if($ThesisPublishedTable == true){
					sort($wholeLineThesisPublished);
				}
				if($ThesisOnlineTable == true){
					sort($wholeLineThesisOnline);
				}
				if($TelevisionProgrammeTable == true){
					sort($wholeLineTelevisionProgramme);
				}
				if($StandardOnlineTable == true){
					sort($wholeLineStandardOnline);
				}
				if($StandardTable == true){
					sort($wholeLineStandard);
				}
				if($SoundRecordingCDTable == true){
					sort($wholeLineSoundRecordingCD);
				}
				if($SoftwareTable == true){
					sort($wholeLineSoftware);
				}
				if($ReportTable == true){
					sort($wholeLineReport);
				}
				if($ReferenceBookTable == true){
					sort($wholeLineReferenceBook);
				}
				if($PressReleaseTable == true){
					sort($wholeLinePressRelease);
				}
				if($PatentTable == true){
					sort($wholeLinePatent);
				}
				if($PaintingTable == true){
					sort($wholeLinePainting);
				}
				if($NewspaperArticleNoAuthorTable == true){
					sort($wholeLineNewspaperArticleNoAuthor);
				}
				if($NewspaperTable == true){
					sort($wholeLineNewspaper);
				}
				if($MusicScoreTable == true){
					sort($wholeLineMusicScore);
				}
				if($MailingListTable == true){
					sort($wholeLineMailingList);
				}
				if($LinearNotesSoundRecordingTable == true){
					sort($wholeLineLinearNotesSoundRecording);
				}
				if($LibrettoTable == true){
					sort($wholeLineLibretto);
				}
				if($JournalArticleTable == true){
					sort($wholeLineJournalArticle);
				}
				if($ImageTable == true){
					sort($wholeLineImage);
				}
				if($GovernmentReportTable == true){
					sort($wholeLineGovernmentReport);
				}
				if($FilmTable == true){
					sort($wholeLineFilm);
				}
				if($FactSheetTable == true){
					sort($wholeLineFactSheet);
				}
				if($DiscussionForumTable == true){
					sort($wholeLineDiscussionForum);
				}
				if($ConferenceProceedingPrintTable == true){
					sort($wholeLineConferenceProceedingPrint);
				}
				if($ConferenceProceedingOnlineTable == true){
					sort($wholeLineConferenceProceedingOnline);
				}
				if($ConferencePaperUnpublishedTable == true){
					sort($wholeLineConferencePaperUnpublished);
				}
				if($BookNoAuthorTable == true){
					sort($wholeLineBookNoAuthor);
				}
				if($BookChapterTable == true){
					sort($wholeLineBookChapter);
				}
				if($BookTable == true){
					sort($wholeLineBook);
				}
				if($BlogTable == true){
					sort($wholeLineBlog);
				}
				if($AudioPodcastTable == true){
					sort($wholeLineAudioPodcast);
				}
						fclose($file_handle);	
						//print"<form action='deleteLine.php' method='post'>";
						$rowNumber =  0;
			$editFormSendTo = "";
			if ($editFormSendTo == ""){
				$editFormSendTo = "editThisLine.php";
			}
						if ($AudioPodcastTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">AudioPodcast</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLineAudioPodcast[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="AudioPodcast"){
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
									
									$intextOutput = intextFunction($lineOfText[0]);
									
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($intextOutput $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					URL<br/><br/>
								Title<br/><br/>
								Day<br/><br/>
								Month<br/><br/>
								Year<br/><br/>
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
						if ($BlogTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">Blog</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLineBlog[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="Blog"){
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
									
									$intextOutput = intextFunction($lineOfText[0]);
									
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($intextOutput $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					URL<br/><br/>
								Title<br/><br/>
								Day<br/><br/>
								Month<br/><br/>
								Year<br/><br/>
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
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
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

									//intextFunction($lineOfText[0]);
									$intextOutput = intextFunction($lineOfText[0]);
									
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($intextOutput $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					Subtitle<br/><br/>
								Pages<br/><br/>
								Volume<br/><br/>
								Publisher<br/><br/>
								Place<br/><br/>
								Edition<br/><br/>
								Title<br/><br/>
								Year<br/><br/>
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
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
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
									
									$intextOutput = intextFunction($lineOfText[0]);
									
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($intextOutput $lineOfText[2])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					Publisher<br/><br/>
								Place<br/><br/>
								Page<br/><br/>
								Volume<br/><br/>
								Edition<br/><br/>
								Subtitle<br/><br/>
								BookTitle<br/><br/>
								ChapterTitle<br/><br/>
								Year<br/><br/>
								Editor<br/><br/>
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
						if ($BookNoAuthorTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">BookNoAuthor</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLineBookNoAuthor[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="BookNoAuthor"){
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
									
									//$intextOutput = intextFunction($lineOfText[0]);
									
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>(<i>$lineOfText[0]</i>, $lineOfText[4])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					Subtitle<br/><br/>
								Publisher<br/><br/>
								Place<br/><br/>
								Year<br/><br/>
								Pages<br/><br/>
								Volume<br/><br/>
								Edition<br/><br/>
								Title<br/><br/>
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
						if ($ConferencePaperUnpublishedTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">ConferencePaperUnpublished</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLineConferencePaperUnpublished[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="ConferencePaperUnpublished"){
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
									
									$intextOutput = intextFunction($lineOfText[0]);
									
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($intextOutput $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					DateOfConference<br/><br/>
								Place<br/><br/>
								ConferenceName<br/><br/>
								Subtitle<br/><br/>
								Title<br/><br/>
								Year<br/><br/>
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
						if ($ConferenceProceedingOnlineTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">ConferenceProceedingOnline</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLineConferenceProceedingOnline[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="ConferenceProceedingOnline"){
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
									
									$intextOutput = intextFunction($lineOfText[0]);
									
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($intextOutput $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					URL<br/><br/>
								ConferenceName<br/><br/>
								Title<br/><br/>
								Month<br/><br/>
								Year<br/><br/>
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
						if ($ConferenceProceedingPrintTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">ConferenceProceedingPrint</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLineConferenceProceedingPrint[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="ConferenceProceedingPrint"){
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
									
									$intextOutput = intextFunction($lineOfText[0]);
									
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($intextOutput $lineOfText[2])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					Publisher<br/><br/>
								Place<br/><br/>
								Place<br/><br/>
								Volume<br/><br/>
								Edition<br/><br/>
								Subtitle<br/><br/>
								ConferenceName<br/><br/>
								Title<br/><br/>
								Year<br/><br/>
								Editor<br/><br/>
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
						if ($DiscussionForumTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">DiscussionForum</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLineDiscussionForum[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="DiscussionForum"){
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
									
									$intextOutput = intextFunction($lineOfText[0]);
									
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($intextOutput $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					URL<br/><br/>
								Title<br/><br/>
								Day<br/><br/>
								Month<br/><br/>
								Year<br/><br/>
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
						if ($FactSheetTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">FactSheet</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLineFactSheet[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="FactSheet"){
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
									
									$intextOutput = intextFunction($lineOfText[0]);
									
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($lineOfText[0], $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					URL<br/><br/>
								Title<br/><br/>
								Year<br/><br/>
								Company<br/><br/>
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
						if ($FilmTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">Film</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLineFilm[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="Film"){
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
									
									$intextOutput = intextFunction($lineOfText[0]);
									
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($lineOfText[0], $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					Publisher<br/><br/>
								Place<br/><br/>
								Title<br/><br/>
								Year<br/><br/>
								Director<br/><br/>
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
						if ($GovernmentReportTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">GovernmentReport</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLineGovernmentReport[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="GovernmentReport"){
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
									
									$intextOutput = intextFunction($lineOfText[0]);
									
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($lineOfText[0]. $lineOfText[1], lineOfText[2])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					OnlineSource<br/><br/>
								ReportName<br/><br/>
								Year<br/><br/>
								Department<br/><br/>
								Region<br/><br/>
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
						if ($ImageTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">Image</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLineImage[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="Image"){
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
									
									$intextOutput = intextFunction($lineOfText[0]);
									
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($intextOutput $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					URL<br/><br/>
								Title<br/><br/>
								Year<br/><br/>
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
													<td><p class="subhead" align="center"><!--Name / Title//--></p></td>
												<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
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
									
									$intextOutput = intextFunction($lineOfText[0]);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($intextOutput $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					OnlineSource<br/><br/>
								Pages<br/><br/>
								Issue<br/><br/>
								Volume<br/><br/>
								JournalName<br/><br/>
								ArticleTitle<br/><br/>
								Year<br/><br/>
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
																		<!--<input type='submit' class='deleteButton' style='background-color:Orange;' value='Edit'>//-->
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
												if ($LibrettoTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">Libretto</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLineLibretto[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="Libretto"){
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
									
									$intextOutput = intextFunction($lineOfText[0]);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($intextOutput $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					Publisher<br/><br/>
								Place<br/><br/>
								Title<br/><br/>
								Year<br/><br/>
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
						
						if ($LinearNotesSoundRecordingTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">LinearNotesSoundRecording</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLineLinearNotesSoundRecording[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="LinearNotesSoundRecording"){
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
									
									$intextOutput = intextFunction($lineOfText[0]);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($intextOutput $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					Publisher<br/><br/>
								Place<br/><br/>
								Title<br/><br/>
								Year<br/><br/>
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
						if ($MailingListTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">MailingList</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLineMailingList[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="MailingList"){
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
									
									$intextOutput = intextFunction($lineOfText[0]);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($intextOutput $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					URL<br/><br/>
								Title<br/><br/>
								Day<br/><br/>
								Month<br/><br/>
								Year<br/><br/>
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
						if ($MusicScoreTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">MusicScore</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLineMusicScore[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="MusicScore"){
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
									
									$intextOutput = intextFunction($lineOfText[0]);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($intextOutput $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					OnlineSource<br/><br/>
								Publisher<br/><br/>
								Place<br/><br/>
								Title<br/><br/>
								Year<br/><br/>
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
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
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
									
									$intextOutput = intextFunction($lineOfText[0]);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($lineOfText[0], $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					URL<br/><br/>
								Pages<br/><br/>
								Newspaper<br/><br/>
								Title<br/><br/>
								Day<br/><br/>
								Month<br/><br/>
								Year<br/><br/>
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
						if ($NewspaperArticleNoAuthorTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">NewspaperArticleNoAuthor</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLineNewspaperArticleNoAuthor[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="NewspaperArticleNoAuthor"){
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
									
									$intextOutput = intextFunction($lineOfText[0]);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($intextOutput $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					URL<br/><br/>
								Pages<br/><br/>
								Newspaper<br/><br/>
								Day<br/><br/>
								Month<br/><br/>
								Year<br/><br/>
								Title<br/><br/>
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
						if ($PaintingTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">Painting</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLinePainting[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="Painting"){
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
									
									$intextOutput = intextFunction($lineOfText[0]);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($intextOutput $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					GallaryOrPublisher<br/><br/>
								Place<br/><br/>
								Title<br/><br/>
								Year<br/><br/>
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
						if ($PatentTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">Patent</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLinePatent[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="Patent"){
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
									
									$intextOutput = intextFunction($lineOfText[0]);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($intextOutput $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					OnlineSource<br/><br/>
								PatentNumber<br/><br/>
								Title<br/><br/>
								Year<br/><br/>
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
						if ($PressReleaseTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">PressRelease</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLinePressRelease[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="PressRelease"){
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
									$intextOutput = intextFunction($lineOfText[0]);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($intextOutput $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					OnlineSource<br/><br/>
								Title<br/><br/>
								Day<br/><br/>
								Month<br/><br/>
								Year<br/><br/>
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
						if ($ReferenceBookTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">ReferenceBook</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLineReferenceBook[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="ReferenceBook"){
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
									$intextOutput = intextFunction($lineOfText[0]);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($intextOutput $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					Publisher<br/><br/>
								Place<br/><br/>
								Pages<br/><br/>
								Volume<br/><br/>
								Edition<br/><br/>
								BookTitle<br/><br/>
								Title<br/><br/>
								Year<br/><br/>
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
						if ($ReportTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">Report</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLineReport[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="Report"){
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
									$intextOutput = intextFunction($lineOfText[0]);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($intextOutput $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					OnlineSource<br/><br/>
								Subtitle<br/><br/>
								Title<br/><br/>
								Year<br/><br/>
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
						if ($SoftwareTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">Software</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLineSoftware[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="Software"){
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
									$intextOutput = intextFunction($lineOfText[0]);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($lineOfText[0], $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					URLRetrieved<br/><br/>
								VersionNumber<br/><br/>
								SoftwareName<br/><br/>
								Year<br/><br/>
								CompanyName<br/><br/>
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
						if ($SoundRecordingCDTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">SoundRecordingCD</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLineSoundRecordingCD[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="SoundRecordingCD"){
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
									$intextOutput = intextFunction($lineOfText[0]);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($intextOutput $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					Publisher<br/><br/>
								Place<br/><br/>
								Conductor<br/><br/>
								BandName<br/><br/>
								Title<br/><br/>
								Year<br/><br/>
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
						if ($StandardTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">Standard</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLineStandard[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="Standard"){
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
									$intextOutput = intextFunction($lineOfText[0]);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($lineOfText[0], $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					Place<br/><br/>
								Code<br/><br/>
								Title<br/><br/>
								Year<br/><br/>
								StandardHolder<br/><br/>
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
						if ($StandardOnlineTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">StandardOnline</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLineStandardOnline[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="StandardOnline"){
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
									$intextOutput = intextFunction($lineOfText[0]);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($lineOfText[0], $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					OnlineSource<br/><br/>
								Code<br/><br/>
								Title<br/><br/>
								Year<br/><br/>
								StandardHolder<br/><br/>
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
						if ($TelevisionProgrammeTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">TelevisionProgramme</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLineTelevisionProgramme[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="TelevisionProgramme"){
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
									$intextOutput = intextFunction($lineOfText[0]);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($lineOfText[0], $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					Publisher<br/><br/>
								Place<br/><br/>
								Title<br/><br/>
								Day<br/><br/>
								Month<br/><br/>
								Year<br/><br/>
								ExecutiveProducer<br/><br/>
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
						if ($ThesisOnlineTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">ThesisOnline</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLineThesisOnline[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="ThesisOnline"){
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
									$intextOutput = intextFunction($lineOfText[0]);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($intextOutput $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					OnlineSource<br/><br/>
								MastersThesisOrDoctoralDissertation<br/><br/>
								Subtitle<br/><br/>
								Title<br/><br/>
								Year<br/><br/>
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
						if ($ThesisPublishedTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">ThesisPublished</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLineThesisPublished[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="ThesisPublished"){
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
									$intextOutput = intextFunction($lineOfText[0]);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($intextOutput $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					Subtitle<br/><br/>
								Publisher<br/><br/>
								Place<br/><br/>
								Title<br/><br/>
								Year<br/><br/>
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
						if ($ThesisUnpublishedTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">ThesisUnpublished</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLineThesisUnpublished[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="ThesisUnpublished"){
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
									$intextOutput = intextFunction($lineOfText[0]);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($intextOutput $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					Subtitle<br/><br/>
								MastersThesisOrDoctoralDissertation<br/><br/>
								University<br/><br/>
								Title<br/><br/>
								Year<br/><br/>
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
						if ($TrackSoundRecordingTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">TrackSoundRecording</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLineTrackSoundRecording[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="TrackSoundRecording"){
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
									$intextOutput = intextFunction($lineOfText[0]);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($intextOutput $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					OnlineSource<br/><br/>
								Publisher<br/><br/>
								Place<br/><br/>
								Album<br/><br/>
								RecordedBy<br/><br/>
								TrackName<br/><br/>
								Year<br/><br/>
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
						if ($WebpageTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">Webpage</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLineWebpage[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="Webpage"){
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
									$intextOutput = intextFunction($lineOfText[0]);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($intextOutput $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					URL<br/><br/>
								Subtitle<br/><br/>
								Title<br/><br/>
								Year<br/><br/>
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
						if ($WebpageNoAuthorTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">WebpageNoAuthor</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLineWebpageNoAuthor[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="WebpageNoAuthor"){
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
									$intextOutput = intextFunction($lineOfText[0]);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>(\"$lineOfText[0]\", $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					URL<br/><br/>
								Year<br/><br/>
								Title<br/><br/>
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
						if ($WikiTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">Wiki</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLineWiki[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="Wiki"){
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
									$intextOutput = intextFunction($lineOfText[0]);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($intextOutput $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					URL<br/><br/>
								RetrievedYear<br/><br/>
								RetrievedDay<br/><br/>
								RetrievedMonth<br/><br/>
								Title<br/><br/>
								Year<br/><br/>
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
						if ($YouTubeVideoTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">YouTubeVideo</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLineYouTubeVideo[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="YouTubeVideo"){
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
									$intextOutput = intextFunction($lineOfText[0]);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($lineOfText[0], $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					URL<br/><br/>
								Title<br/><br/>
								Day<br/><br/>
								Month<br/><br/>
								Year<br/><br/>
								Publisher<br/><br/>
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
						if ($eBookTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">eBook</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLineeBook[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="eBook"){
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
									$intextOutput = intextFunction($lineOfText[0]);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($intextOutput $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					Subtitle<br/><br/>
								Source<br/><br/>
								Title<br/><br/>
								Year<br/><br/>
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
						if ($eBookChapterTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">eBookChapter</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLineeBookChapter[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="eBookChapter"){
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
									
									$intextOutput = intextFunction($lineOfText[0]);
									
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($intextOutput $lineOfText[2])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					Subtitle<br/><br/>
								Source<br/><br/>
								Pages<br/><br/>
								Volume<br/><br/>
								Edition<br/><br/>
								BookTitle<br/><br/>
								ChapterTitle<br/><br/>
								Year<br/><br/>
								Editor<br/><br/>
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
						if ($eReferenceBookTable == true){
								print'
										<table align="center" class="referenceTable" width="100%">
											<col width="10px">
											<col width="70px">
												<tr>
													<td colspan="3"><p align="center" class="pageText">eReferenceBook</p></td>
												</tr>
												<tr>
													<td><p class="subhead" align="center" width="10"> </td>
													<td><p class="subhead" align="center"><!--Title 1 //--></p></td>
													<td><p class="subhead"; align="center">In-text citation <br/><br/>Click once to select and copy. Paste as <b>\'keep text only\'</b>.</p></td>
												</tr>
								';
							for($r=0; $r < $j; $r++){
								$lineOfText = str_getcsv($wholeLineeReferenceBook[$r], ",");
								$countLOT = count($lineOfText) - 1;
								if($lineOfText[$countLOT] =="eReferenceBook"){
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
									
									$intextOutput = intextFunction($lineOfText[0]);
									//$deleteValues = checkForComma($deleteValues);
									//print $deleteValues . "<br/><br/>";
									print "<tr>
												<td><a class='linkbarSmall' onclick=\"toggle_login_div('dropDivResult[$rowNumber]');\"> + </a></td>
												<td bgcolor='lightblue'>" . $lineOfText[0] . "</td><td id='intext[$rowNumber]' onClick=\"selectText('intext[$rowNumber]')\" bgcolor='lightblue'>($intextOutput $lineOfText[1])</td>
											</tr>
											<tr>
												<td>
													<div id='dropDivResult[$rowNumber]' style='display:none;'>
														<table class='referenceTable' width='845px' cellspacing='0'>
														<col width='120px' align='right'>
															<tr>
																<td bgcolor='CFECEC'>
					Source<br/><br/>
								BookTitle<br/><br/>
								Title<br/><br/>
								Year<br/><br/>
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