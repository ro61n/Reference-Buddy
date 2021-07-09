<?php
	session_start();
	
	$_SESSION["randomCode"] = $_COOKIE['randomCode'];
	
	$ip = $_SESSION["randomCode"];
	if ($ip == null){
		$_SESSION["randomCode"] = mt_rand();
		$ip = $_SESSION["randomCode"];
		
		setcookie("randomCode","$ip",time()+60*60*24*365);
	}
	
	//print "<br/><br/><br/><br/><br/><br/><br/><br/> $ip";
	
?>
<html>
<head>
	<title>Reference Buddy</title>
	
<!--	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<meta name="keywords" content="reference, harvard, bibliography, reference buddy" >
	<link rel="canonical" href="http://www.referencebuddy.co.za">
	<meta name="description" content="Create Harvard Referenced lists like a boss!">
	<link rel="author" href="https://plus.google.com/u/0/106224678594636177610/about/p/pub"/>
	<meta property="og:title" content="Reference Buddy"/>
	<meta property="og:type" content="website"/>
	<meta property="og:image" content="http://www.referencebuddy.co.za/logoSquareFB.png"/>
	<meta property="og:url" content="http://www.referencebuddy.co.za"/>
	<meta property="og:description" content"Create Harvard Referenced lists like a boss!"/>
	<meta name="twitter:card" content="summary">
	<meta name="twitter:url" content="http://www.referencebuddy.co.za">
	<meta name="twitter:title" content="Reference Buddy">
	<meta name="twitter:description" content"Create Harvard Referenced lists like a boss!">
	<meta name="twitter:image" content="http://www.referencebuddy.co.za/logoSquare.png">
	
	<meta itemprop="name" content="Reference Buddy">
	<meta itemprop="description" content="Create Harvard Referenced lists like a boss!">
	<meta itemprop="image" content="http://www.referencebuddy.co.za/logoSquare.php">
	//-->
	
<meta name="google-signin-scope" content="profile email">
<meta name="google-signin-client_id" content="284125557744-0crrk0elov8v7kklu5ucjjtahs94p0ik.apps.googleusercontent.com">
<script src="https://apis.google.com/js/platform.js" async defer></script>

	
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
		<!--<script type='text/javascript' src='imageGallary/shuffleScript.js'></script>		//-->
		
	<script type="text/javascript">
	
	if (screen.width <= 699){
			document.location = "http://m.referencebuddy.co.za";
	}
	
	function maybeMobile() {
		if (screen.width <= 699){
			document.location = "http://m.referencebuddy.co.za";
		}
		//if ((window.innerWidth <= 699) || (document.body.clientWidth <= 699) ) {
		//	document.location = "http://m.referencebuddy.co.za";
		//}
	}
	
	
	var timeOut;
	function scrollToTop(){
		if (document.body.scrollTop!=0 || document.documentElement.scrollTop!=0 ){
			window.scrollBy(0, -50);
			timeOut = setTimeout('scrollToTop()',10);
			
		}
		else {
			clearTimeout(timeOut);
		}
	}
	
	function scrolling(){
		//alert('test');
		//if (
		var doc = document.documentElement;
		var top = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);
		var percTop = top/document.body.offsetHeight*100;
		if (percTop > 12){
			//alert(percTop);
			 document.getElementById('status123').innerHTML ="<div style='z-index:100; position:fixed; top:80%; right:15px; '><button class='linkbarIndexButt' style='cursor: pointer; font-size:25; height:55px; width:55px; border-radius:50%; ' onclick='scrollToTop();return false;' type='button'>&#8679;</button></div>";
			  //document.getElementById('status123').innerHTML ='testing';
		}
		else {
			document.getElementById('status123').innerHTML ="";
		}
	}
	
	
	
	
	
	
	</script>	
		
</head>
<body onload="maybeMobile()" onresize="maybeMobile()" onscroll="scrolling()" style='background-image: url("graphics/student2.jpg"); background-size: 100% 100%; 	background-attachment: fixed;	background-position: center; margin:0; padding:0;'> 
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '200168827127560',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();   
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=200168827127560";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>




<div style='position: fixed; bottom:0; left:0; height:25px; width:100px; background-color:#D1D0CE; z-index:3; border-top-right-radius:15px;'>
	<table>
		<tr>
			<td>
				<a href="policies.php">Policies</a>
			</td>
		</tr>
	</table>
</div>

		<div id="status123">
			test
			
		</div>

<div id="links" style='position: fixed; top: 0; height:30px; min-width:800px; z-index:2;'>

					<h1 style='margin:0; padding:0; position: relative; float:left; padding-right:2em;'><a href='index.php' ><span style='background-color: #13476B;'><font color='white' size='6.5'> Reference </font></span><span style='background-color:white;'><font size='6.5' color='#13476B'> Buddy</font></span></a></h1>
					
			
	
	
			
			<!--<a class="pageLinkC"  href="home.php" style='float: left; padding: 2px 10px 2px 10px; border-bottom-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:0;'>Try It Out!</a>//-->
			<?php
					$file ="LoggedInOrRemembered/login" . $ip . ".txt";
					
					
					if (!file_exists("LoggedInOrRemembered")){
						mkdir("LoggedInOrRemembered" , 0777 , true);
					}
		
					if (file_exists($file)){
						$username = file_get_contents($file);
					
					if (strlen($username) > 15){
							$ellips = "...";
						}
						else {
							$ellips = "";
						}
							$maximumCharName = substr($username, 0 , 15) . $ellips;
						print"
							<!--<a class='pageLinkC' onclick=\"toggle_login_div('dropDivLoggedIn');\" style='float: left; padding: 2px 10px 2px 10px; border-bottom-left-radius:0; border-bottom-right-radius:0; '>$maximumCharName</a>//-->
						";
					}
					else{
						print"
							<!--<a class='pageLinkC'  href='#bdless1' style='float: left; padding: 2px 10px 2px 10px; border-top-left-radius:0; border-bottom-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:0; '>Log in</a>//-->
						";
					}
					?>
			<!--<a class="pageLinkC"  href="#bdless1" style=' float: left; padding: 2px 10px 2px 10px; border-bottom-left-radius:0; border-top-left-radius:0; border-top-right-radius:0; '>Create Account</a>//-->
			
					
					<!--<a class="linkbarTop" href="#mainGrey21" style=' float: right; padding: 2px 10px 2px 10px'>About | Contact</a>//-->
					
					
					
					
					
					
			
		
</div>

<div id='loginOrig' style='display:none; position:fixed; left:0; top:0; width:100%; height:100%; background-color: rgba(0,0,0, 0.7); border-color:rgba(130,202,255, 0);  z-index:10;'>
<br/><br/>
	<div id="inputType" style='background-color:white; border-radius:3; margin-top:50px; z-index:20; width:600px;' align='center'>
		
			<!--<p style='margin-left:20%;' >//-->
			<p>
				<font style=" font-family:Century Gothic; font-size:45; color:rgba(209,208,206); color:#0F3955; " >
					Welcome Back!
				</font>
			</p>	
		<br/>
		
		<form action='login.php' method='post'>
	<!--		<span style='padding-left:8em;'><input class='mainInput' type = 'text' name='username' placeholder='Username' size='35'></span>
			<br/>
			<span style='padding-left:8em;'><input class='mainInput' type = 'password' name='password' placeholder='Password' size='35'></span>
	//-->		
			<input type="text" name='username' placeholder='Username' size="18" class="mainInputDesktop" style="height: 37; font-size:40; padding-left:20px;  color:#0F3955; " >
			<br/><br/>
			<input type = 'password' name='password' placeholder="Password" size="18" class="mainInputDesktop" style="height: 37; font-size:40;  padding-left:20px;  color:#0F3955; " >
			
			
			<br/><br/><br/><br/>
			<!--<input type='submit' class='pageLinkC' value='Login'>//-->
			<input type="submit" class='linkbarIndexButt' style=' margin-left:10px; font-color:white; cursor: pointer; font-size:20; float:left; ' value="Login"/>
			
			<!--<a align="left" class="pageLinkC" href="loginForgotPassword.php">Forgot my Password</a>//-->
			<a  align="left" class='linkbarIndexButt' style=' margin-left:10px; cursor: pointer; font-size:20; float:left; ' href="loginForgotPassword.php">Forgot my Password</a>
			
			<!--<a align="left" class="pageLinkC" href="signUpMessage.php">Create an account!</a>//-->
			<a  align="left" class='linkbarIndexButt' style='margin-left:10px;  cursor: pointer; font-size:20; float:left; ' href="signUpMessage.php">Create an account!</a>
			
			<br/><br/><br/><br/>
			<a align="right" class="linkbar" onclick="toggle_login_div('loginOrig');" style='padding-left: 15px; background-color: red; padding-right: 15px;  '>Close</a>
		</form>
		
		<br/>
	</div>
</div>

<div id='dropDivLoggedIn' style=' display:none; padding-top:10px; position:fixed; left:0; right:0; background-color: #3090C7; z-index:1; top:40px;'>
	
	<a align="left" class="pageLinkC" href="loggedInHome.php">Take me to my Dashboard</a>
	<a align="right" class="pageLinkC" href="logout.php">Log me out!</a>
	<a align="right" class="pageLinkC" href="accountOptions.php">Account Options</a>
</div>










	<div id="bdless1" style='height:100%; width:100%; background-color:rgba(19,71,107,0.80);'>
	<br/>
	
		
		
	
		<div  style='height:570px; overflow-y: hidden; overflow-x: hidden; width:48%; background-color:rgba(19,71,107,0); float:left;' align='left'>
			<br/>
			
			<p style='margin-left:10%; margin-top:10%;' >
				<font style=" font-family:Century Gothic; font-size:50; color:white; " >
					Instantly create your Harvard, Vancouver, APA & other reference lists! 
				</font>
			</p>
			<p style='margin-left:10%; margin-top:10%;'>
				<font  style=" font-family:Century Gothic; font-size:20; color:white;  " >Then just copy and paste it into your projects and you're done! </font>
			</p>
			<br/><br/><br/>
			
			<p style='margin-left:10%; margin-bottom:10%;'>
				<font  style=" font-family:Century Gothic; font-size:15; color:white;  " > 
					<a style='color: inherit; margin-left:10px;' href='#mainGrey21'><u>About</u></a> 
					<a style='color: inherit; margin-left:10px; ' href='#mainGrey22'><u>How it works</u></a> 
					<a style='color: inherit; margin-left:10px; ' href='#bdless2'><u> New Referencing Styles</u></a> 
					<a style='color: inherit; margin-left:10px;' href='#mainGrey23'><u>Who uses Reference Buddy?</u></a>
					<a style='color: inherit; margin-left:10px;' href='#mainGrey23'><u>Advertise</u></a> 
					<a style='color: inherit; margin-left:10px;' href='#mainGrey21'><u>Contact</u></a> </font>
			</p>
			
		
	
		
		</div>
		
<div id="inputType" style='background-color:white; border-radius:3; margin-top:50px; margin-right:20px; z-index:20; width:40%; float:right' align='center'>
		
		<?php
			$file ="LoggedInOrRemembered/login" . $ip . ".txt";
					
			if (file_exists($file)){
				$username = file_get_contents($file);
				
				print"
					
					<p>
				<font style=' font-family:Century Gothic; font-size:45; color:rgba(209,208,206); color:#0F3955; ' >
					Welcome Back $username!
				</font>
			</p>	
			<br/>
			
			<a  align='left' class='linkbarIndexButt' style=' margin-left:10px; cursor: pointer; font-size:20; float:left; ' href='loggedInHome.php'>Continue as $username</a>
			<br/><br/><br/>
			<a  align='left' class='linkbarIndexButt' style=' margin-left:10px; cursor: pointer; font-size:20; float:left; ' href='logout.php'>Sign in with a different account</a>
			
			
			<br/><br/><br/>
			<p class='subhead' align='center'>
			<font color='#2C3539'>
				If you experience problems logging in, <a href='https://www.facebook.com/referencebuddy' target='_blank'>click here to DM us on our Facebook page.</a>
			</font>
			</p>
					
				";
			}
			else{
				print"
					
					<p>
				<font style=' font-family:Century Gothic; font-size:45; color:rgba(209,208,206); color:#0F3955; ' >
					Login
				</font>
			</p>	
			<br/>
			
			<form action='login.php' method='post'>	
				<input type='text' name='username' placeholder='Username' size='18' class='mainInputDesktop' style='height: 37; font-size:40; padding-left:20px;  color:#0F3955; ' >
				<br/><br/>
				<input type = 'password' name='password' placeholder='Password' size='18' class='mainInputDesktop' style='height: 37; font-size:40;  padding-left:20px;  color:#0F3955; ' >
				<br/>
				<p class='subhead'>If you don't want to be remembered, please log out once you are done!</p>
				
				<input type='submit' class='linkbarIndexButt' style=' margin-left:10px; font-color:white; cursor: pointer; font-size:20; float:left; ' value='Login'/>
				<a  align='left' class='linkbarIndexButt' style=' margin-left:10px; cursor: pointer; font-size:20; float:left; ' href='loginForgotPassword.php'>Forgot my Password</a>
			</form>
			
			<br/><br/><br/>
			<p class='subhead' align='center'>
			<font color='#2C3539'>
				If you experience problems logging in, <a href='https://www.facebook.com/referencebuddy' target='_blank'>click here to DM us on our Facebook page.</a>
			</font>
			</p>
			<hr/>
			<p align='center'>
			<font style=' font-family:Century Gothic; font-size:24; color:rgba(209,208,206); color:#0F3955; ' >
				<b>New to Reference Buddy?</b>
			</font>
			</p>
			<br/>
					<a class='linkbarIndexButt' style=' margin-left:10px; cursor: pointer; font-size:15; float:center; ' href='signUpMessage.php'>Create FREE account</a>
				<a href='home.php' class='linkbarIndexButt' style=' margin-left:10px; cursor: pointer; font-size:15; float:center; ' >Try It Out!</a>
		<br/><br/>
			
					
				";
			}
		
		?>
		
		
		
		
	</div>
		
		
		
		
		
		<!--<div id="bdless" style='width:50%; left:0; right:0;'>
		<script type="text/javascript" src="//ra.revolvermaps.com/0/0/7.js?i=0d3oaqunj9y&amp;m=0&amp;c=ff8a00&amp;cr1=ff8a00&amp;sx=0" async="async"></script>
		</div>//-->
		
<!--		<div id='bdless' style='background-color: rgba(182,182,180, 0.2); width:100%;'>
			<p class='pageHeader' align='center'><font face='Arial' color='#3B3131'>Try our <b>reference powered</b> search engine</font></p>
			<p class='pageHeader' align='center'><font face='Arial' color='#3B3131'>Relaunching soon!</font></p>
				<!--<form action = 'searchResults.php' method='get'>
				<span style='padding-left:10%;'>
					<input class='mainInput' type = 'text' name='search' placeholder='Search for anything' size='60'><input class='linkbar' style='border-bottom-left-radius: 0px; border-top-left-radius: 0px;'  type='submit' value='Search'>
				</span>
				</form>
					<a href='searchEngine.php' style='float:right;'>what do we mean by reference powered?</a>
	///
			<br/><br/>
		</div>	
/Undo!!!/-->
		
	</div>
	
	
	
	<div id="mainGrey22" style='position:relative; float:center; width:100%; height:100%; border-color:rgba(255,255,255,0); background-color:rgba(255,255,255,1);  border-radius:0px;'>
		
	<br/>
		

		<div style='float:left; width:50%;' align='left'> 		
		<br/><br/>
		<p >
				<font  style=" font-family:Century Gothic; font-size:40; color:rgba(209,208,206); color:#0F3955; " >
					How does it work?
				</font>
			</p>
			
			<br/>
			
			<p align='left'>
				<font style=" font-family:Century Gothic; font-size:20; color:#2C3539; ">
				
				First log in with your Facebook account or you can create a free Reference Buddy account. Thereafter you can:
				</font>
			</p>
			
		
		
				<ol>
					<li><p class='pageHeader' align='left' > <font size='5' color='#2C3539' >Choose a referencing style</font></p></li>
					<li><p class='pageHeader' align='left' > <font size='5' color='#2C3539' >Add sources (website, book journal article etc.)</font></p></li>
					<li><p class='pageHeader' align='left' > <font size='5' color='#2C3539' >Click on 'Reference This'</font></p></li>
					<li><p class='pageHeader' align='left' > <font size='5' color='#2C3539' >Copy and paste the list into your document</font></p></li>
				</ol>
				
			
		</div>	
			
			
		<div style='float:right; width:45%;' align='left'> 
			
		<p>
				<font style=" font-family:Century Gothic; font-size:40; color:rgba(209,208,206); color:#0F3955; " >
					Why we're the best online referencing generator?
				</font>
			</p>
		<br/>
		
		
				<ul>
					<li><p class='pageHeader' align='left' style="margin:10px;" > <font size='5' color='#2C3539'>Live Referencing (immediate output).</font></p></li>
					<li><p class='pageHeader' align='left' style="margin:10px;" > <font size='5' color='#2C3539'>Mobile Friendly.</font></p></li>
					<li><p class='pageHeader' align='left' style="margin:10px;" > <font size='5' color='#2C3539'>Create an unlimited number of reference lists.</font></p></li>
					<li><p class='pageHeader' align='left' style="margin:10px;" > <font size='5' color='#2C3539'>Save all your lists.</font></p></li>
					<li><p class='pageHeader' align='left' style="margin:10px;" > <font size='5' color='#2C3539'>Access & update references lists easily, anywhere & from any device!</font></p></li>
					<li><p class='pageHeader' align='left' style="margin:10px;" > <font size='5' color='#2C3539'>In-text citation available.</font></p></li>
					<li><p class='pageHeader' align='left' style="margin:10px;" > <font size='5' color='#2C3539'>New referencing styles can be immediately added to the website (as requested by users).</font></p></li>
			</ul>
			
			</div>
			
			
			
		
	</div>
	
	
	
	
	
	
	
	
<br/>		
<br/>	
	<br/>
	<div id="bdless" style='position:relative; float:center; width:90%; background-color: rgba(255,255,255, 0);'>
		<br/>
		<p style='margin-left:20%;' ><font style=" font-family:Century Gothic; font-size:60; color:white; " >Latest news! </font></p>
		
			<div align='center' width='70%'>
					<table align='center' width='20px'>
			<tr>
				<td>
					<!--/Facebook/-->
					<div class="fb-like" data-href="http://facebook.com/referencebuddy/" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
				</td>	
				<td>
					<div class="fb-share-button" data-href="http://www.referencebuddy.co.za/" data-layout="box_count" style="float:left;"></div>
				</td>
				<td>
					<style>.ig-b- { display: inline-block; }
.ig-b- img { visibility: hidden; }
.ig-b-:hover { background-position: 0 -60px; } .ig-b-:active { background-position: 0 -120px; }
.ig-b-32 { width: 32px; height: 32px; background: url(//badges.instagram.com/static/images/ig-badge-sprite-32.png) no-repeat 0 0; }
@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
.ig-b-32 { background-image: url(//badges.instagram.com/static/images/ig-badge-sprite-32@2x.png); background-size: 60px 178px; } }</style>
<a href="https://www.instagram.com/reference_buddy/?ref=badge" class="ig-b- ig-b-32"><img src="//badges.instagram.com/static/images/ig-badge-32.png" alt="Instagram" /></a>
				</td>
				<td>
					<!--/Google +/-->
					<div class="g-plus" data-action="share" data-annotation="vertical-bubble" data-height="60" data-href="http://www.referencebuddy.co.za"></div>
				</td>
				<td>
					<!--/Twitter/-->
					<a href="https://twitter.com/share" class="twitter-share-button"{count} data-via="referencebuddy_" data-size="large">Tweet</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				</td>
				<td>
					<!--/Twitter/-->
					<a href="https://twitter.com/referencebuddy_" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @referencebuddy_</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				</td>
		</table>
			</div>
		
		<table align='center' width='90%'>
			<tr>
				<td>
					<!--/Facebook cover page/-->
						<div class="fb-page" data-href="https://www.facebook.com/referencebuddy/" data-tabs="timeline" data-width="460" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/referencebuddy/"><a href="https://www.facebook.com/referencebuddy/">Reference Buddy</a></blockquote></div></div>
					<!--/Facebook cover page/-->
					
					
					
				</td>
				<td>
					            <a class="twitter-timeline" data-width="460" data-height="400" href="https://twitter.com/reference_buddy">Tweets by reference_buddy</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
				</td>
			</tr>
		</table>

		
		
	</div>
	
	
	
	<div id="mainGrey23" style='position:relative; top:30px; float:center; width:100%; height:100%; border-color:rgba(255,255,255,0); background-color:rgba(255,255,255,1);  border-radius:0px;'>
		
	<br/>
		

		<div style='float:left; width:50%;' align='left'> 		
		<br/>
		<p >
				<font  style=" font-family:Century Gothic; font-size:40; color:rgba(209,208,206); color:#0F3955; " >
					Who Uses Reference Buddy?
				</font>
			</p>
			
			<p align='left'>
				<font style=" font-family:Century Gothic; font-size:20; color:#2C3539; ">
				
				Our signed up users are from the following institutions (live data):
				</font>
			</p>
			
		
		<p class='pageHeader' align='left' > <font size='5' color='#2C3539' style="font-family:Century Gothic;">Universities (Faculties)</font></p>
		
		
				<ul>
		<?php
				$db_handle = mysql_connect("localhost", "f1424808_Admin", "86cba5b1") or die(mysql_error());
				$db_found = mysql_select_db("f1424808_Users") or die(mysql_error());
				
						if ($db_found){
							$SQL = "SELECT University, Faculty FROM universities ORDER BY University";
							$result = mysql_query($SQL);
				
							while ($db_field = mysql_fetch_assoc($result)){
								print "
												
<li><p  style='margin:5px;' > <font style='font-family:Century Gothic; font-size:18; color:#2C3539;  '>
	
				" . $db_field['University'] . " (" . $db_field['Faculty'] . ")
			
</font></p></li>
										
								";
							}	
							
				
							mysql_close($db_handle);
						}
						else{
							print "Database NOT Found";
						}
			?>	

					</ul>
							
		
		<p class='pageHeader' align='left' > <font size='5' color='#2C3539' style="font-family:Century Gothic;">High Schools (Provinces)</font></p>
					
						<ul>
		<?php
				$db_handle = mysql_connect("localhost", "f1424808_Admin", "86cba5b1") or die(mysql_error());
				$db_found = mysql_select_db("f1424808_Users") or die(mysql_error());
				
						if ($db_found){
							$SQL = "SELECT HighSchool, Province FROM highschools ORDER BY HighSchool";
							$result = mysql_query($SQL);
				
							while ($db_field = mysql_fetch_assoc($result)){
								print "
												
<li><p  style='margin:5px;' > <font style='font-family:Century Gothic; font-size:18; color:#2C3539;  '>
	
				" . $db_field['HighSchool'] . " (" . $db_field['Province'] . ")
			
</font></p></li>
										
								";
							}	
							
				
							mysql_close($db_handle);
						}
						else{
							print "Database NOT Found";
						}
			?>	

					</ul>
					
			
			
		</div>	
			
			
		<div style='float:right; width:45%;' align='left'> 
			<br/><br/>
		<p>
				<font style=" font-family:Century Gothic; font-size:40; color:rgba(209,208,206); color:#0F3955; " >
					Advertising Opportunities
				</font>
			</p>
		<br/>
		
		<p align='left'>
				<font style=" font-family:Century Gothic; font-size:20; color:#2C3539; ">
				
				An additional feature of Reference Buddy is the ability to offer advertising space aimed at specific target groups and or geographic region depending on the advertiser’s requirements (examples shown on left). 
				<br/><br/><br/>
				While we build this system, we're offering a free trial where you can market your business for six months after you sign up. 
				<br/><br/><br/>
				For more information, visit <a href="http://www.advertbuddy.com" target="_blank">www.advertbuddy.com</a>
				</font>
		</p>
		
				
			</div>
			
			
			
			
		
	</div>
	
	<div id="bdless2" style='position:relative; top:30px; float:center; width:100%; height:100%; background-color:rgba(19,71,107,0.70);' align='center'>
		<br/><br/><br/><br/>
			
		<div id="bdless" style='width:70%; left:0; right:0; background-color: rgba(255,255,255, 0.0);'>
			<p ><font style=" font-family:Century Gothic; font-size:60; color:white; " >New Referencing Styles</font></p>
			<br/><br/>
			<p >
				<font  style=" font-family:Century Gothic; font-size:30; color:white;  " >
					
					There are currently 11 referencing styles that users can create their reference lists with. 
					<br/><br/><br/>
					If there is a particular style that is not on Reference Buddy but that a user would like to use, then the user can email the style guide to referencebud@gmail.com and we'll upload that style onto our database within a week!
					
				</font>
			</p>
		</div>
		<br/>
	</div>
	
	
	
	<div id="bdless" style='position:relative; top:30px; float:center; width:100%; height:100%; background-color:rgba(19,71,107,0.70);' align='center'>
		<br/><br/>
			<p ><font style=" font-family:Century Gothic; font-size:50; color:white; " >Live Referencing (with immediate output as your type)</font></p>
			<br/>
			<img src='graphics/liveReferencing2.png' alt='Reference Buddy' width='50%' style='left:0; right:0;'>
		<br/>
	</div>
		
	
	
	<div id="mainGrey21" style='position:relative; top:30px; float:center; width:100%; height:100%; border-color:rgba(255,255,255,0); background-color:rgba(255,255,255,0.95);  border-radius:0px;'>
		<br/><br/><br/>
			<p style='margin-left:20%;' ><font style=" font-family:Century Gothic; font-size:60; color:rgba(209,208,206); " >About</font></p>
		<br/><br/>
			
		
			<div id="bdless" style='width:70%; left:0; right:0; background-color: rgba(255,255,255, 0.0);'>
				<p class='subhead' align='center'><font color='#2C3539' size='5'>
				Reference Buddy is a free online reference generating tool that university and high school students can use to create APA, Harvard, Vancouver and other reference lists for their projects. 
				Our goal is to make referencing a much quicker, easier and simpler task. 
				<br/><br/>We've been online since January 2015 (and has officially been established in 2014 by Robin Titus). 
				</br></br>
				Please feel free to make contact on social media for more info or to communicate! Alternatively, you can also send an email to: referencebud@gmail.com
			</font></p>
			
			
			<table align='center' width='20px'>
			<tr>
				<td>
					<!--/Facebook/-->
					<div class="fb-like" data-href="http://facebook.com/referencebuddy/" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
				</td>	
				<td>
					<div class="fb-share-button" data-href="http://www.referencebuddy.co.za/" data-layout="box_count" style="float:left;"></div>
				</td>
				<td>
					<style>.ig-b- { display: inline-block; }
.ig-b- img { visibility: hidden; }
.ig-b-:hover { background-position: 0 -60px; } .ig-b-:active { background-position: 0 -120px; }
.ig-b-32 { width: 32px; height: 32px; background: url(//badges.instagram.com/static/images/ig-badge-sprite-32.png) no-repeat 0 0; }
@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
.ig-b-32 { background-image: url(//badges.instagram.com/static/images/ig-badge-sprite-32@2x.png); background-size: 60px 178px; } }</style>
<a href="https://www.instagram.com/reference_buddy/?ref=badge" class="ig-b- ig-b-32"><img src="//badges.instagram.com/static/images/ig-badge-32.png" alt="Instagram" /></a>
				</td>
				<td>
					<!--/Google +/-->
					<div class="g-plus" data-action="share" data-annotation="vertical-bubble" data-height="60" data-href="http://www.referencebuddy.co.za"></div>
				</td>
				<td>
					<!--/Twitter/-->
					<a href="https://twitter.com/share" class="twitter-share-button"{count} data-via="referencebuddy_" data-size="large">Tweet</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				</td>
				<td>
					<!--/Twitter/-->
					<a href="https://twitter.com/referencebuddy_" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @referencebuddy_</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				</td>
		</table>
			
			<p class='pageText' align='left'><font color='black'> Copyright (c) 2017 referencebuddy.co.za</font></p>
			</div>
			
			
			<div id="mainGrey24" style='position:relative; top:32px; float:center; width:100%; border-color:rgba(240,240,240,0); background-color:rgba(240,240,240,0.95);  border-radius:0px;'>
			
			
			
	
	
			
			
			
				<div id="bdless" style='width:70%; left:0; right:0; background-color: rgba(255,255,255, 0.0);'>
					<p class='subhead' align='center'><font color='#2C3539' style='size:20;' >
			<br/><br/><b>The following applies to the 3rd party compatibility code we use for password hashing:</b>
			</font></p>
			<p class='subhead' align='left'><font color='#2C3539' style='size:15;' >
			<a href='https://github.com/ircmaxell/password_compat' target='_blank'>Link to the code</a>
			<br/><br/>Reference Buddy uses a compatible code package that allows Reference Buddy to safely deal with password security.
			<br/><br/>This specific compatible code package DOES NOT belong to Reference Buddy and it is protected by a MIT licence as described below:
			<br/><br/>Copyright (c) 2012 Anthony Ferrara
			<br/><br/>Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
			<br/><br/>The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
			<br/><br/>THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE. 
			<br/><br/>
</font></p>
				</div>
			</div>
			
	</div>
	

	
	


	
	
	
	
	
	
	
	
	<!--<div id="bdless" style=' position:relative; float:left; width:99%; top:10px;'>
		<p class='pageText' align='left'><font color='black'> Copyright 2017 referencebuddy.co.za</font></p>
		<br/><br/><br/>
	</div>
	<br/>
	//-->


</body>
</html>