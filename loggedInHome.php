<?php
	session_start();
	
	
	$ip = $_SESSION["randomCode"];
	
	$user = file_get_contents("LoggedInOrRemembered/login" . $ip . ".txt");

	$scenario = 0;
		//matching the password on sql
		$db_handle = mysql_connect("localhost", "f1424808_Admin", "*****") or die(mysql_error());
			//echo "Connected to MySQL<br/>";
		$db_found = mysql_select_db("f1424808_Users") or die(mysql_error());
			//echo "Connected to Database";
		if ($db_found){
			$SQL = "SELECT institution FROM members WHERE username='$user'";
			$result = mysql_query($SQL);
			$databaseInstitution = mysql_fetch_assoc($result);
			$aDatabaseInstitution = $databaseInstitution['institution']; //a -> because of array
			
			
			
			
			
			
			
			
			
			if ($aDatabaseInstitution == 'u'){
				$scenario = 3;
			}
			if ($aDatabaseInstitution == 'australia'){
				$scenario = 2;
			}
			else if (($aDatabaseInstitution == 'other') || ($aDatabaseInstitution == 'highSchoolStudent')){
				$scenario = 1;
			}	
			
//		mysql_close($db_handle);
		}
		else{
	//		print"couldn't connect";
		}
	
	if ($scenario == 1){
		header("Location: loggedInHomeHS.php");
	}
	else if ($scenario == 2){
		header("Location: loggedInHomeAus.php");
	}
	else if ($scenario == 3){
		header("Location: loggedInHomeU.php");
	}
	else {
	
	if ($db_found){
			$SQL = "SELECT * FROM signedUp WHERE username='$user'";
			$result = mysql_query($SQL);
			$databaseInstitution = mysql_fetch_assoc($result);
			$aDatabaseInstitution = $databaseInstitution['institution']; //a -> because of array
			
			if ($aDatabaseInstitution == 'tuksALL'){
				$scenario = 12;
			}
			if ($aDatabaseInstitution == 'tuksVancouver'){
				$scenario = 11;
			}
			if ($aDatabaseInstitution == 'tuksSWAC'){
				$scenario = 10;
			}
			if ($aDatabaseInstitution == 'sky400'){
				$scenario = 9;
			}
			if ($aDatabaseInstitution == 'comingSoon'){
				$scenario = 8;
			}
			if ($aDatabaseInstitution == 'tuksE'){
				$scenario = 7;
			}
			if ($aDatabaseInstitution == 'tuks'){
				$scenario = 6;
			}
			if ($aDatabaseInstitution == 'stellenbosch'){
				$scenario = 5;
			}
			if ($aDatabaseInstitution == 'unisa'){
				$scenario = 4;
			}
			if ($aDatabaseInstitution == 'u'){
				$scenario = 3;
			}
			if ($aDatabaseInstitution == 'australia'){
				$scenario = 2;
			}
			if ($aDatabaseInstitution == ''){
				$scenario = 0;
			}
			else if (($aDatabaseInstitution == 'other') || ($aDatabaseInstitution == 'highSchoolStudent') || ($aDatabaseInstitution == 'general') ){
				$scenario = 1;
			}
			else {
				//$aDatabaseInstitution
				$SQLB = "SELECT * FROM referencing_styles WHERE Style_Code='$aDatabaseInstitution'";
							$resultB = mysql_query($SQLB);
							if (mysql_num_rows($resultB) > 0 ){
								$scenario = 13;
							}
			}
			
		mysql_close($db_handle);
		}
		else{
	//		print"couldn't connect";
		}
	
			if ($scenario == 0){
				
				
				header("Location: loggedInHomeSelectCategory.php");
				//header("Location: loggedInHomeHSCheckStream.php");
			}
			else if ($scenario == 1){
				if (!file_exists("Users/$user/HS")){
					mkdir("Users/$user/HS");
				}
				
				header("Location: loggedInHomeHS.php");
				//header("Location: loggedInHomeHSCheckStream.php");
			}
			else if ($scenario == 2){

				if (!file_exists("Users/$user/Aus")){
					mkdir("Users/$user/Aus");
				}
				
				header("Location: loggedInHomeAus.php");
			}
			else if ($scenario == 4){
				
				if (!file_exists("Users/$user/UNISA")){
					mkdir("Users/$user/UNISA");
				}
				
				header("Location: loggedInHomeUNISA.php");
			}
			else if ($scenario == 5){
				
				if (!file_exists("Users/$user/Stellenbosch")){
					mkdir("Users/$user/Stellenbosch");
				}
				
				header("Location: loggedInHomeStellenbosch.php");
			}
			else if ($scenario == 6){
				
				//if (!file_exists("Users/$user/Stellenbosch")){
				//	mkdir("Users/$user/Stellenbosch");
				//}
				
				header("Location: loggedInHomeTuksSelect.php");
			}
			else if ($scenario == 7){
				
				if (!file_exists("Users/$user/TuksE")){
					mkdir("Users/$user/TuksE");
				}
				
				header("Location: loggedInHomeTuks.php");
			}
			else if ($scenario == 8){
			
				header("Location: loggedInHomeComingSoon.php");
				
			}
			else if ($scenario == 9){
				
				if (!file_exists("Users/$user/Sky400")){
					mkdir("Users/$user/Sky400");
				}
				
				header("Location: loggedInHomeSky400.php");
			}
			else if ($scenario == 10){
				
				if (!file_exists("Users/$user/TuksSWAC")){
					mkdir("Users/$user/TuksSWAC");
				}
				
				header("Location: loggedInHomeTuksSWAC.php");
			}
			else if ($scenario == 11){
				
				if (!file_exists("Users/$user/Vancouver")){
					mkdir("Users/$user/Vancouver");
				}
				
				header("Location: loggedInHomeVancouver.php");
			}
			else if ($scenario == 12){
				
				if (!file_exists("Users/$user/ALL")){
					mkdir("Users/$user/ALL");
				}
				
				header("Location: loggedInHomeALL.php");
			}
			else if ($scenario == 13){
				
				if (!file_exists("Users/$user/$aDatabaseInstitution")){
					mkdir("Users/$user/$aDatabaseInstitution");
				}
				
				header("Location: loggedInHome$aDatabaseInstitution.php");
			}
			else if ($scenario == 3){
				
				if (!file_exists("Users/$user/U")){
					mkdir("Users/$user/U");
				}
				
				header("Location: loggedInHomeU.php");
			}
			else {
				header("Location: index.php");
				//print $scenario
			}
}
?>

