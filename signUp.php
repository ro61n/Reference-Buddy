<?PHP
	session_start();
	
	$ip = $_SESSION["randomCode"];
	if ($ip == null){
		$_SESSION["randomCode"] = mt_rand();
		$ip = $_SESSION["randomCode"];
	}
	
	include('password.php');
	
	$file ="LoggedInOrRemembered/login" . $ip . ".txt";
	
	$user = $_POST["username"];
	$password = $_POST["password"];
	$passwordC = password_hash($password, PASSWORD_BCRYPT, array("cost" => 10));
	$confirmPassword = $_POST["confirmPassword"];
	$email = $_POST['email'];
	$institution = $_POST["institution"];
		if ($institution == ""){
			$institution = $_SESSION["category"];
		}
	
	$acceptPolicy = $_POST['acceptPolicy'];
	
	$redirectDueToEmail = false;
	$redirectDueToUsername = false;
		
		//Checking if email exists within the database file
					$db_handle = mysql_connect("localhost", "f1424808_Admin", "86cba5b1") or die(mysql_error());
					//echo "Connected to MySQL<br/>";
	
					$db_found = mysql_select_db("f1424808_Users") or die(mysql_error());
					//echo "Connected to Database";
	
					if ($db_found){
						//$result = mysql_query("SELECT ID FROM members WHERE email = '$email'");
						
						//if (mysql_num_rows($result) != 0 ){
						//	$redirectDueToEmail = true;
						//}
						
						$result = mysql_query("SELECT ID FROM members WHERE username = '$user'");
						if (mysql_num_rows($result) != 0 ){
							$redirectDueToUsername = true;
						}
						
						$result = mysql_query("SELECT ID FROM signedUp WHERE username = '$user'"); //this was added due to the second database
						if (mysql_num_rows($result) != 0 ){
							$redirectDueToUsername = true;
						}
						
						
						mysql_close($db_handle);
					}
					else{
						print "Database NOT Found";
					}
		
		
		if ($redirectDueToUsername == true){
			print "
									<form id='errorForm' action = 'signUpMessageAttempt.php' method='post'>
										<input type='hidden' name='errorMessage' value='Sorry but this Username has already been taken..'>
										<input type='hidden' name='email' value='" . $email . "'>
										
									</form>
									<script type='text/javascript'>
									document.getElementById('errorForm').submit();
									</script>
			";
		}
		else if ($redirectDueToEmail == true){
			print "
									<form id='errorForm' action = 'signUpMessageAttempt.php' method='post'>
										<input type='hidden' name='errorMessage' value='The email you typed in already exists in our database..'>
					
										<input type='hidden' name='username' value='" . $user . "'>
										
									</form>
									<script type='text/javascript'>
									document.getElementById('errorForm').submit();
									</script>
			";
		}
		else if (($confirmPassword != $password) || ($password=='') || ($user=='') || ($email=='') || ($acceptPolicy!='checked') || ($institution=='default')){
			print "
				<form id='errorForm' action = 'signUpMessageAttempt.php' method='post'>
					<input type='hidden' name='errorMessage' value='Please make sure that all necessary information is correctly typed in'>
					
					<input type='hidden' name='username' value='" . $user . "'>
					<input type='hidden' name='email' value='" . $email . "'>
					
				</form>
				<script type='text/javascript'>
					document.getElementById('errorForm').submit();
				</script>
			";
		}
				
		else if ( (strlen($user) < 5) || strpos($user, '""') !== FALSE || strpos($user, '*') !== FALSE || strpos($user, '/') !== FALSE || strpos($user, ':') !== FALSE || strpos($user, '<') !== FALSE || strpos($user, '>') !== FALSE || strpos($user, '?') !== FALSE || strpos($user, '\\') !== FALSE || strpos($user, '|') !== FALSE || strpos($user, '\'') !== FALSE ||
					strpos($password, '""') !== FALSE || strpos($password, '*') !== FALSE || strpos($password, '/') !== FALSE || strpos($password, ':') !== FALSE || strpos($password, '<') !== FALSE || strpos($password, '>') !== FALSE || strpos($password, '?') !== FALSE || strpos($password, '\\') !== FALSE || strpos($password, '|') !== FALSE || strpos($password, '\'') !== FALSE ||
					strpos($confirmPassword, '""') !== FALSE || strpos($confirmPassword, '*') !== FALSE || strpos($confirmPassword, '/') !== FALSE || strpos($confirmPassword, ':') !== FALSE || strpos($confirmPassword, '<') !== FALSE || strpos($confirmPassword, '>') !== FALSE || strpos($confirmPassword, '?') !== FALSE || strpos($confirmPassword, '\\') !== FALSE || strpos($confirmPassword, '|') !== FALSE || strpos($confirmPassword, '\'') !== FALSE || 
					strpos($email, '""') !== FALSE || strpos($email, '*') !== FALSE || strpos($email, '/') !== FALSE || strpos($email, ':') !== FALSE || strpos($email, '<') !== FALSE || strpos($email, '>') !== FALSE || strpos($email, '?') !== FALSE || strpos($email, '\\') !== FALSE || strpos($email, '|') !== FALSE || strpos($email, '\'') !== FALSE)
			
		{
			print "
				<form id='errorForm' action = 'signUpMessageAttempt.php' method='post'>
					<input type='hidden' name='errorMessage' value='Please make sure that the username is at least 5 characters long and does not contain: * /	: < > ? \ |'>
					
					<input type='hidden' name='email' value='" . $email . "'>
					
				</form>
				<script type='text/javascript'>
					document.getElementById('errorForm').submit();
				</script>
			";
		}
		else {
				//Creates the Main Users Folder if it got deleted
			//	if (!file_exists("Users")){
			//		mkdir('Users' , 0777 , true);
			//		$message = "User Folder got replaced on the " . date("Y") . " " . date("F") . " " . date("d") . " " . date("l") . " at " . date("H") . ":" . date("i") . " " . date("s") . "seconds GMT";
			//		file_put_contents("Users/folderReplaced.txt", $message);
			//	}
		
				if (!file_exists('Membership')){
					mkdir('Membership', 0777 , true);
					$message = "User Folder got replaced on the " . date("Y") . " " . date("F") . " " . date("d") . " " . date("l") . " at " . date("H") . ":" . date("i") . " " . date("s") . "seconds GMT";
					file_put_contents("Membership/folderReplaced.txt", $message);
				}
				//This is to add the information to the membership file.
//				$time = date("Ymd.Hi");
//				$information = $user . "," . $time . "," . date("H") . ":" . date("i");
//				file_put_contents('Membership/Users.txt', $information. PHP_EOL, FILE_APPEND);
		
		
					
				if (file_exists('Users/$user')){
					print "
						<form id='errorForm' action = 'signUpMessageAttempt.php' method='post'>
							<input type='hidden' name='errorMessage' value='Eish... that username already exists, sorry!'>
							
							<input type='hidden' name='email' value='" . $email . "'>
							
						</form>
						<script type='text/javascript'>
							document.getElementById('errorForm').submit();
						</script>
					";
				}
				else{//else it creates the account
						mkdir('Users/' . $user);
						//$information = $user . " Joined on the " . date("Y") . " " . date("F") . " " . date("d") . " " . date("l") . " at " . date("H") . ":" . date("i") . " " . date("s") . "seconds GMT. Email:" . $email;
						//file_put_contents('Users/' . $user . '/joined.txt', $information);
						
						//email - not send but put into contact.txt
						//	if (file_exists("Membership/Users.txt")){
						//		$j = 0;
						//		$file_handle = fopen("Membership/Users.txt", "r") or die ("File can not be opened");
						//		while (!feof($file_handle)){
						//			$line_of_text = fgetcsv($file_handle, 1024);
						//			if ($line_of_text[0] == $user){
						//				file_put_contents("Users/$user/contact.txt", "$line_of_text[3]");
						//			}
						//		}
						//		fclose($file_handle);
						//	}
							
						//last seen .txt
						//$time = date("Ymd.Hi");
						//file_put_contents("Users/$user/lastAccessed.txt", $time);
						//file_put_contents("Users/$user/signedUp.txt", $time);
						
						
						
						
			//The data will now get added to the Database...
					$db_handle = mysql_connect("localhost", "f1424808_Admin", "86cba5b1") or die(mysql_error());
					//echo "Connected to MySQL<br/>";
	
					$db_found = mysql_select_db("f1424808_Users") or die(mysql_error());
					//echo "Connected to Database";
					
					$joined = date("Y-m-d H:i:s");
					$lastLogin = $joined;
					$noOfLogins = 1;
					
					//$freeExpires = date('Y-m-d H:i:s', strtotime("+3 months", strtotime($freeExpires))); NOT THIS ONE
					
					//$freeExpires = date("Y-m-d H:i:s", strtotime("+6 months")); THIS ONE
					//$freeExpires = "NULL";
					
					if ($db_found){
						//$SQL = "INSERT INTO signedUp(username, password, email, institution, joined, freeExpires, lastLogin, noOfLogins) 
						//				VALUES ('$user', '$passwordC', '$email', '$institution', '$joined', '$freeExpires', '$lastLogin', '$noOfLogins')";
										
									//	if ($institution == "highSchoolStudent"){
									//		$stream = "HS";
									//	}
									//	else {
									//		$stream = "UNI";
									//	}
										
								$SQL = "INSERT INTO signedUp(username, password, email, institution, joined, lastLogin, noOfLogins) 
										VALUES ('$user', '$passwordC', '$email', '$institution', '$joined', '$lastLogin', '$noOfLogins')";
										
										
						$result = mysql_query($SQL);
						mysql_close($db_handle);
					}
					else{
						print "Database NOT Found";
					}
						
			
			
			////////////////////////////////////--File Gets Saved--////////////////////////////////////
				$aDatabaseInstitution = $_SESSION["category"];
				
			if ($aDatabaseInstitution == 'tuksALL'){
				if (!file_exists("Users/$user/ALL")){
					mkdir("Users/$user/ALL");
					
					if (file_exists("QuickReference/$ip.csv")){
						rename("QuickReference/$ip.csv","Users/$user/ALL/general.csv");
					}
					
					if (!file_exists("Users/$getContents/selectedFile.txt")){
						$file = "Users/$getContents/selectedFile.txt";
						file_put_contents($file, "Users/$getContents/ALL/general.csv");
					}
					
				}
			}
			if ($aDatabaseInstitution == 'tuksVancouver'){
				if (!file_exists("Users/$user/Vancouver")){
					mkdir("Users/$user/Vancouver");
					
					if (file_exists("QuickReference/$ip.csv")){
						rename("QuickReference/$ip.csv","Users/$user/Vancouver/general.csv");
					}
					
					if (!file_exists("Users/$getContents/selectedFile.txt")){
						$file = "Users/$getContents/selectedFile.txt";
						file_put_contents($file, "Users/$getContents/Vancouver/general.csv");
					}
				}
			}
			if ($aDatabaseInstitution == 'tuksSWAC'){
				if (!file_exists("Users/$user/TuksSWAC")){
					mkdir("Users/$user/TuksSWAC");
					
					if (file_exists("QuickReference/$ip.csv")){
						rename("QuickReference/$ip.csv","Users/$user/TuksSWAC/general.csv");
					}
					
					if (!file_exists("Users/$getContents/selectedFile.txt")){
						$file = "Users/$getContents/selectedFile.txt";
						file_put_contents($file, "Users/$getContents/TuksSWAC/general.csv");
					}
					
				}
			}
			if ($aDatabaseInstitution == 'sky400'){
				if (!file_exists("Users/$user/Sky400")){
					mkdir("Users/$user/Sky400");
					
					if (file_exists("QuickReference/$ip.csv")){
						rename("QuickReference/$ip.csv","Users/$user/Sky400/general.csv");
					}
					//print "Copied from: QuickReference/$ip.csv <br/><br/>to: Users/$user/Sky400/general.csv ";
					
					if (!file_exists("Users/$getContents/selectedFile.txt")){
						$file = "Users/$getContents/selectedFile.txt";
						file_put_contents($file, "Users/$getContents/Sky400/general.csv");
					}
					
				}
			}
			if ($aDatabaseInstitution == 'tuksE'){
				if (!file_exists("Users/$user/TuksE")){
					mkdir("Users/$user/TuksE");
					
					if (file_exists("QuickReference/$ip.csv")){
						rename("QuickReference/$ip.csv","Users/$user/TuksE/general.csv");
					}
					
					if (!file_exists("Users/$getContents/selectedFile.txt")){
						$file = "Users/$getContents/selectedFile.txt";
						file_put_contents($file, "Users/$getContents/TuksE/general.csv");
					}
					
				}
			}
			if ($aDatabaseInstitution == 'stellenbosch'){
				if (!file_exists("Users/$user/Stellenbosch")){
					mkdir("Users/$user/Stellenbosch");
					
					if (file_exists("QuickReference/$ip.csv")){
						rename("QuickReference/$ip.csv","Users/$user/Stellenbosch/general.csv");
					}
					
					if (!file_exists("Users/$getContents/selectedFile.txt")){
						$file = "Users/$getContents/selectedFile.txt";
						file_put_contents($file, "Users/$getContents/Stellenbosch/general.csv");
					}
					
				}
			}
			if ($aDatabaseInstitution == 'unisa'){
				if (!file_exists("Users/$user/UNISA")){
					mkdir("Users/$user/UNISA");
					
					if (file_exists("QuickReference/$ip.csv")){
						rename("QuickReference/$ip.csv","Users/$user/UNISA/general.csv");
					}
					
					if (!file_exists("Users/$getContents/selectedFile.txt")){
						$file = "Users/$getContents/selectedFile.txt";
						file_put_contents($file, "Users/$getContents/UNISA/general.csv");
					}
					
				}
			}
			if ($aDatabaseInstitution == 'u'){
				if (!file_exists("Users/$user/U")){
					mkdir("Users/$user/U");
					
					if (file_exists("QuickReference/$ip.csv")){
						rename("QuickReference/$ip.csv","Users/$user/U/general.csv");
					}
					
					if (!file_exists("Users/$getContents/selectedFile.txt")){
						$file = "Users/$getContents/selectedFile.txt";
						file_put_contents($file, "Users/$getContents/U/general.csv");
					}
					
				}
			}
			if ($aDatabaseInstitution == 'australian'){
				if (!file_exists("Users/$user/Aus")){
					mkdir("Users/$user/Aus");
					
					if (file_exists("QuickReference/$ip.csv")){
						rename("QuickReference/$ip.csv","Users/$user/Aus/general.csv");
					}
					
					if (!file_exists("Users/$getContents/selectedFile.txt")){
						$file = "Users/$getContents/selectedFile.txt";
						file_put_contents($file, "Users/$getContents/Aus/general.csv");
					}
					
				}
			}
			else if ($aDatabaseInstitution == 'general'){
				if (!file_exists("Users/$user/HS")){
					mkdir("Users/$user/HS");
					
					if (file_exists("QuickReference/$ip.csv")){
						rename("QuickReference/$ip.csv","Users/$user/HS/general.csv");
					}
					
					if (!file_exists("Users/$getContents/selectedFile.txt")){
						$file = "Users/$getContents/selectedFile.txt";
						file_put_contents($file, "Users/$getContents/HS/general.csv");
					}
					
				}
			}	
						
						
						
						
						//if (file_exists("QuickReference/$ip.csv")){
						//rename("QuickReference/$ip.csv","Users/$user/general.csv");
						//}
		////////////////////////////////////--END--////////////////////////////////////
						
						for ($p = 1; $p < 3; $p++){
							if ($p ==1){
								//sends email
								$message = "$user has just created an account. \n\n Username: $user \n Email: $email";
							//	mail("rbn_t@hotmail.com", "New Account - Reference Buddy", $message);
							}
							if ($p == 2){
								//email the user
								if ($email !=""){
									if ($institution=="u"){
										$institution = "South African University Student";
									}
								$message = "Hi there $user!\n\nHope you are having a great day! This email is to inform you of your updated Reference Buddy account details.\n\n Username: $user \n Email: $email \n Password: $password \n Institution: $institution \n\nReference Buddy appreciates you using our services and promises to continuously improve your referencing experience by making it a less tedious activity. \n\n Kind Regards\n\n Your Reference Buddy\n referencebuddy.co.za";
							//	mail($email, "Reference Buddy Welcomes You!", $message);
								}
							}
						}
						
						if ($rememberMe!="checked"){
							if ($user == ""){
								$user = file_get_contents($file);
							}	
							$dontRememberMeFile = "LoggedInOrRemembered/dontRememberMe" . $ip . ".txt";
							file_put_contents($dontRememberMeFile, $user);
						}
						if ($user!= "" && !file_exists("Users/$user"))
						{
							if (file_exists($file)){
								unlink($file);
							}
							if (file_exists($dontRememberMeFile)){
								unlink($dontRememberMeFile);
							}
						}
						else if ($user!=""){
							$contents = $user;
							file_put_contents($file, $contents);
						}
						if (file_exists($file)){
							header("Location: loggedInHomeCheckStream.php");
						}
				}
		}	
?>