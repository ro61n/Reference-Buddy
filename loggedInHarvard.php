<?php
	session_start();
	
	$ip = $_SESSION["randomCode"];
	$user = file_get_contents("LoggedInOrRemembered/login" . $ip . ".txt");

	$scenario = 0;
		//matching the password on sql
		$db_handle = mysql_connect("localhost", "f1424808_Admin", "") or die(mysql_error());
			//echo "Connected to MySQL<br/>";
		$db_found = mysql_select_db("f1424808_Users") or die(mysql_error());
			//echo "Connected to Database";
		if ($db_found){
			$SQL = "SELECT institution FROM signedUp WHERE username='$user'";
			$result = mysql_query($SQL);
			$databaseInstitution = mysql_fetch_assoc($result);
			$aDatabaseInstitution = $databaseInstitution['institution']; //a -> because of array
			
			if ($aDatabaseInstitution == 'tuksALL'){
				$scenario = 10;
			}
			if ($aDatabaseInstitution == 'tuksVancouver'){
				$scenario = 9;
			}
			if ($aDatabaseInstitution == 'tuksSWAC'){
				$scenario = 8;
			}
			if ($aDatabaseInstitution == 'sky400'){
				$scenario = 7;
			}
			if ($aDatabaseInstitution == 'tuksE'){
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
			else if (($aDatabaseInstitution == 'other') || ($aDatabaseInstitution == 'highSchoolStudent')){
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
	
	if ($scenario == 1){
		header("Location: loggedInHarvardHS.php");
	}
	if ($scenario == 2){
		header("Location: loggedInHarvardAus.php");
	}
	if ($scenario == 3){
		header("Location: loggedInHarvardU.php");
	}
	if ($scenario == 4){
		header("Location: harvardUNISA.php");
	}
	if ($scenario == 5){
		header("Location: harvardStellenbosch.php");
	}
	if ($scenario == 6){
		header("Location: harvardTuks.php");
	}
	if ($scenario == 7){
		header("Location: referenceSky400.php");
	}
	if ($scenario == 8){
		header("Location: harvardTuksSWAC.php");
	}
	if ($scenario == 9){
		header("Location: referenceVancouver.php");
	}
	if ($scenario == 10){
		header("Location: harvardALL.php");
	}
	if ($scenario == 13){
				header("Location: reference$aDatabaseInstitution.php");
	}
	if ($scenario == 0){
		header("Location: index.php");
	}
?>

