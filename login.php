<?PHP
	session_start();
	
	//testing is password
	$ip = $_SESSION["randomCode"];
//	$passwordSession = $_SESSION['passwordSession'];
	
	$file ="LoggedInOrRemembered/login" . $ip . ".txt";
	//$file2 ="m/LoggedInOrRemembered/login" . $ip . ".txt";
	$user = $_POST["username"];
	$password = $_POST["password"];
	
	$email="";//for new database
	$institution="";
	$joined="";
	$lastLogin="";
	$noOfLogins=0;
	
	$scenario = 0;
	
	include('password.php');
	
	///print "Username: $user <br/>Password: $password <br/>";
	
				//checking for the 50 users (scenario 1.1)
					$db_handle = mysql_connect("localhost", "f1424808_Admin", "*****") or die(mysql_error());
					//echo "Connected to MySQL<br/>";
	
					$db_found = mysql_select_db("f1424808_Users") or die(mysql_error());
					//echo "Connected to Database";
					
					if ($db_found){
						$SQL = "SELECT * FROM members WHERE username='$user'";
						$result = mysql_query($SQL);
						//print "Number of Rows:" . mysql_num_rows($result);
						if (mysql_num_rows($result) == 0 ){
							//$scenario = 1.1;
						}
						else {
							$db_field = mysql_fetch_assoc($result);
							$email = $db_field['email'];
							$institution = $db_field['institution'];
							$joined = $db_field['joined'];
							$lastLogin = $db_field['lastLogin'];
							$noOfLogins = $db_field['noOfLogins'];
							//print "noOfLogins: $noOfLogins <br/>";
						}
						
						
						$SQLA = "SELECT * FROM members WHERE username='$user'";
						$resultA = mysql_query($SQLA);
						
						$SQLB = "SELECT * FROM signedUp WHERE username='$user'";
						$resultB = mysql_query($SQLB);
						
						if ((mysql_num_rows($resultA) == 0 )&&(mysql_num_rows($resultB) == 0 )){
							$scenario = 1.1;
						}
						
						$db_field = mysql_fetch_assoc($resultB);
							$ID = $db_field['ID'];
							$email = $db_field['email'];
							$institution = $db_field['institution'];
							$joined = $db_field['joined'];
							$lastLogin = $db_field['lastLogin'];
							$noOfLogins = $db_field['noOfLogins'];
							$stream = $db_field['stream'];
							$faculty = $db_field['faculty'];
						
						mysql_close($db_handle);
					}
	
	if ($ip == null){
			//header("Location: index.php");
		///	print "1<br/>";
			$scenario = 1;
	}
	else if ((//specialusers before 07/03 
		($user == "aaaaa") || ($user == "anono123") || ($user == "Ashleyvl") || ($user == "brent") || ($user == "Celia") || ($user == "CronjeO") || ($user == "Daneskar") || ($user == "daniteix") || ($user == "DarkGhostL") || ($user == "Darkghostl") || ($user == "denzelmakombe") || ($user == "Dewald") || ($user == "egostor") || ($user == "elnavanaarde") || ($user == "ernstw") || ($user == "h3istdyer") || ($user == "Handre1") || ($user == "Henno") ||
		($user == "Henu12") || ($user == "Hlatse") || ($user == "janremeyer") || ($user == "jhnhsbrk") || ($user == "JwM_123") || ($user == "jwmeyer") || ($user == "Kar.des") || ($user == "Karyn Desouza") || ($user == "Keanu") || ($user == "keanu144") || ($user == "Lauren") || ($user == "LOllie_linda") || ($user == "Madeleine") || ($user == "Marco") || ($user == "Matti") || ($user == "Megan-Leigh") || ($user == "Micayla") || ($user == "Monique") ||
		($user == "Nontokozo_m") || ($user == "nontokozo_m") || ($user == "paige_sparkle") || ($user == "Petro S") || ($user == "Reneilwe") || ($user == "Samuel") || ($user == "StephanGTBOY") || ($user == "Sunkenbean") || ($user == "tafy_nicole") || ($user == "taylor") || ($user == "Tracey") || ($user == "Tristan Lawrence") || ($user == "Tshego") 
	) && ($scenario == 1.1)) {
		$scenario = 1.5;
	}
	else if (($user =="") || strpos($user, '"') !== FALSE || strpos($user, '*') !== FALSE || strpos($user, '/') !== FALSE || strpos($user, ':') !== FALSE || strpos($user, '<') !== FALSE || strpos($user, '>') !== FALSE || strpos($user, '?') !== FALSE || strpos($user, '\\') !== FALSE || strpos($user, '|') !== FALSE || strpos($user, "\'") !== FALSE ||
			 ($password=="")||strpos($password, '""') !== FALSE || strpos($password, '*') !== FALSE || strpos($password, '/') !== FALSE || strpos($password, ':') !== FALSE || strpos($password, '<') !== FALSE || strpos($password, '>') !== FALSE || strpos($password, '?') !== FALSE || strpos($password, '\\') !== FALSE || strpos($password, '|') !== FALSE || strpos($password, "\'") !== FALSE){
		///	print "2<br/>";
			$scenario = 2;
			header("Location: loginAttempt.php");
	}
	else if (!file_exists("Users/$user")){
			if (file_exists($file)){
				unlink($file);
			}
			if (file_exists($dontRememberMeFile)){
				unlink($dontRememberMeFile);
			}
			$scenario = 3;
		///	print "3<br/>";
	}
	else {
	
	
	
	
	
		//matching the password on sql
		$db_handle = mysql_connect("localhost", "f1424808_Admin", "86cba5b1") or die(mysql_error());
			//echo "Connected to MySQL<br/>";
		$db_found = mysql_select_db("f1424808_Users") or die(mysql_error());
			//echo "Connected to Database";
		if ($db_found){
			$SQL = "SELECT password FROM members WHERE username='$user'";
			$result = mysql_query($SQL);
			$databasePassword = mysql_fetch_assoc($result);
			$aDatabasePass = $databasePassword['password']; //a -> because of array
		///	print"Result: $aDatabasePass <br/>";
			
			
			
			
			//if (crypt($password, $storedPassword) == $storedPassword){
			if (crypt($password, $aDatabasePass) == $aDatabasePass){
				$correctPassword = true;
		///		print "correct password <br/>";
				
				
				//last seen .txt -- still part of database
					$lastLogin = date("Y-m-d H:i:s");
					//$noOfLogins = 1;
					
					$SQL = "UPDATE members SET lastLogin='$lastLogin', noOfLogins=noOfLogins + 1 WHERE username='$user'";
					$result = mysql_query($SQL);
					//print "Update Result: $result";
					
				//not database
				//login/remembered file
				$contents = $user;
				file_put_contents($file, $contents);
				//file_put_contents($file2, $contents);
				if ($rememberMe!="checked"){
			
					if ($user == ""){
						$user = file_get_contents($file);
					}
					$dontRememberMeFile = "LoggedInOrRemembered/dontRememberMe" . $ip . ".txt";
					file_put_contents($dontRememberMeFile, $user);
				}
			}
			else{
				$correctPassword = false;
		///		print "incorrect password <br/>";
			}
		
		
		
		///print "4<br/>";
		mysql_close($db_handle);
		}
		else{
	//		print"couldn't connect";
		}
	}
	
if ($scenario == 1){
	header("Location: index.php");
//print "6";
}
else if ($scenario == 1.5){
	header("Location: resetDataSignUpMessageAttempt.php");
//print "5";
}
else if ($scenario == 2){
	header("Location: loginAttempt.php");
//print "4";
}
else if (($correctPassword == true) && (file_exists($file))){

//print "3";

	$passwordC = password_hash($password, PASSWORD_BCRYPT, array("cost" => 10));
	//$passwordC = password_hash($password, PASSWORD_BCRYPT, array("cost" => 10));

//The data will now get added to the Database...
					$db_handle = mysql_connect("localhost", "f1424808_Admin", "86cba5b1") or die(mysql_error());
					//echo "Connected to MySQL<br/>";
	
					$db_found = mysql_select_db("f1424808_Users") or die(mysql_error());
					//echo "Connected to Database";
					
					if ($db_found){
						$SQL = "INSERT INTO signedUp(username, password, email, institution, joined, lastLogin, noOfLogins) 
										VALUES ('$user', '$passwordC', '$email', '$institution', '$joined', '$lastLogin', '$noOfLogins')";
						$result = mysql_query($SQL);
						
						$SQL = "DELETE FROM members WHERE username='$user'";
						$result = mysql_query($SQL);
						
						mysql_close($db_handle);
					}
					else{
						print "Database NOT Found";
					}
					
					




		
	//header("Location: loggedInHome.php"); -- CHANGED
				header("Location: loggedInHomeCheckStream.php");

}
else if (($correctPassword == false) && (file_exists("Users/$user"))){



//quickly checks new database

//matching the password on sql
		$db_handle = mysql_connect("localhost", "f1424808_Admin", "86cba5b1") or die(mysql_error());
			//echo "Connected to MySQL<br/>";
		$db_found = mysql_select_db("f1424808_Users") or die(mysql_error());
			//echo "Connected to Database";
		if ($db_found){
			$SQL = "SELECT password FROM signedUp WHERE username='$user'";
			$result = mysql_query($SQL);
			$databasePassword = mysql_fetch_assoc($result);
			$aDatabasePass = $databasePassword['password']; //a -> because of array
		///	print"Result: $aDatabasePass <br/>";
			
			//if (crypt($password, $storedPassword) == $storedPassword){
			//if (crypt($password, $aDatabasePass) == $aDatabasePass){
			if (password_verify($password, $aDatabasePass)) {
				$correctPassword = true;
		///		print "correct password <br/>";
				
				
				//last seen .txt -- still part of database
					$lastLogin = date("Y-m-d H:i:s");
					
					
					$SQL = "UPDATE signedUp SET lastLogin='$lastLogin', noOfLogins=noOfLogins + 1 WHERE username='$user'";
					$result = mysql_query($SQL);
					//print "Update Result: $result";
					
					$SQL = "INSERT INTO loggedIn(ID, Institution, Joined, Date, Stream, Faculty) 
										VALUES ('$ID', '$institution', '$joined', '$lastLogin', '$stream', '$faculty')";
					$result = mysql_query($SQL);					
					
					
				//not database
				//login/remembered file
				$contents = $user;
				file_put_contents($file, $contents);
				//file_put_contents($file2, $contents);
				if ($rememberMe!="checked"){
			
					if ($user == ""){
						$user = file_get_contents($file);
					}
					$dontRememberMeFile = "LoggedInOrRemembered/dontRememberMe" . $ip . ".txt";
					file_put_contents($dontRememberMeFile, $user);
				}
				//header("Location: loggedInHome.php"); -- CHANGED
				header("Location: loggedInHomeCheckStream.php");
			}
			else{
				$correctPassword = false;
		///		print "incorrect password <br/>";
				header("Location: loginAttempt.php");
			}
		
		///print "4<br/>";
		mysql_close($db_handle);
		
		}
		else{
			header("Location: loginAttempt.php");
		}




//end of database check

//header("Location: loginAttemptIncorrect.php");

}
else {
	header("Location: loginAttempt.php");
//print "1";
}
	
?>
