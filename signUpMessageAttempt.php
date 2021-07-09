<?php
	session_start();
	
	$ip = $_SESSION["randomCode"];
	if ($ip == null){
		$_SESSION["randomCode"] = mt_rand();
		$ip = $_SESSION["randomCode"];
	}
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
</head>
<body style='background-color:rgba(255,255,255,1); 	background-attachment: fixed;	background-position: center;'>
	<?php
		//heading
		
		include('bar2.1.php');
	?>
	
	<div id="mainGrey2" style='position:relative; float:center; width:100%; height:100%; border-color:rgba(255,255,255,0); background-color:rgba(255,255,255,1);  border-radius:0px;'>
		<br/><br/>
		
		<?php
			$errorMessage=$_POST['errorMessage'];
			
			print "<br/><p class='divHeader' align='center'><font size= '10'>" . $errorMessage . "</font></p>";
		?>
		

			<p style='margin-left:20%;' >
				<font style=" font-family:Century Gothic; font-size:60; color:rgba(209,208,206); color:#0F3955; " >
					Create your <b>free</b> account!
				</font>
			</p>
		
		

		<div style='float:left; width:50%;' align='left'> 		
		<br/><br/><br/>
		<p class='subhead' align='left' style='padding-bottom:0px; padding-left:10%;'>
			<font color='#2C3539' size='5'>
				Perks of Signed Up Members:
			</font>
		</p>
		
		<br/><br/>
		
				<ul>
					<li><p class='pageHeader' align='left'> <font size='5' color='#2C3539'>Create an unlimited number of reference lists,</font></p></li>
					<li><p class='pageHeader' align='left'> <font size='5' color='#2C3539'>Save all their lists on our cloud</font></p></li>
					<li><p class='pageHeader' align='left'> <font size='5' color='#2C3539'>Access & update references lists easily & anywhere!</font></p></li>
				</ul>
			
		</div>	
			
			
		<div style='float:right; width:45%;' align='left'> 
			<form action = 'signUp.php' method='post'>
			
			<br/><br/>
				<input type='text' name='username' placeholder='Username' class='mainInputDesktop' style='height:35; font-size:35; width:75%;  padding-left:20px; color:#0F3955;' />
			
						
						<p><font style=" font-family:Century Gothic; font-size:15; padding:0; margin:0; color:black; " >
							Minimum of 5 Characters Required
						</font></p>
						
					
						<input type='password' name='password' placeholder='Password' class='mainInputDesktop' style='height:35; font-size:35; width:75%;  padding-left:20px; color:#0F3955;' />
					<br/>
					<br/>
						<input type='password' name='confirmPassword' placeholder='Confirm Password' class='mainInputDesktop' style='height:35; font-size:35; width:75%;  padding-left:20px; color:#0F3955;' />
					<br/>
					<br/>
						<input type='text' name='email' placeholder='Email Address' class='mainInputDesktop' style='height:35; font-size:35; width:75%;  padding-left:20px; color:#0F3955; ' />
						
						<p><font style=" font-family:Century Gothic; font-size:15; padding:0; margin:0; color:black; padding-left:20px; " >
							No Spam
						</font></p>
					
						
						
						<p><font style=" font-family:Century Gothic; font-size:15; padding:0; margin:0; color:black; " >
						<input type='checkbox' name='acceptPolicy' value='checked' target='_blank'> 	I have read through the <a href='policies.php'>Privacy Policy as well as the Terms of Use</a> and Accept it.
						</font></p>
					
						
						<input type='submit' class='linkbarIndexButt' style='cursor: pointer; ' value='Sign Up!'>
								
						
		</form>
			
			</div>
			
			
			
			
		
	</div>
	
	
</body>
</html>