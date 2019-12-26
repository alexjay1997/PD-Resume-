<!-- <php -->
    	<!-- session_start(); -->
    	<!-- //start connection -->
<!-- $conn=mysqli_connect("localhost","root","","resume"); -->

<!-- if(!$conn) -->
<!-- { -->
<!-- die("Connection failed: " . mysqli_connect_error()); -->
<!-- } -->
<!-- // end connection -->
 <!-- ?> -->



<!DOCTYPE html>
<html lang ="En">
<head>
<title>
Pd Resume
</title>
<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
<script>
	function show(){
	document.getElementById("form-wrapper").style.display="block";
	documnet.html.style.overflow= "hidden";
	}
	
		function hide(){
	document.getElementById("form-wrapper").style.display="none";
	}
	</script>
<style>
*{
margin:0;
}
body{
		margin:0 auto;
	max-width:1998px;


}
.header{

width:100%;
height:auto;
z-index:1;
overflow:hidden;

border:px solid red;
margin-bottom:-100px;



}
h1{
font-size:32px;
color: #;
}
.banner{
position:relative;top:0;

width:100%;
height:768px;
background-image:url("img/banner1.png");
background-size:cover;
background-repeat:no-repeat;
}
section{
width:100%;
height:auto;
<!-- border:px solid blue; -->
}

.global-container{
width:80%;
height:auto;
padding:40px;
margin:0 auto;
 border:px solid green; 
overflow:hidden;

}
.global-container2{
	position:absolute;


border:px solid blue;
display:flex;
border:1px solid green; 
overflow:hidden;

}
.wrapper{
position:relative;top:100px;
height:auto;


}
.banner-left{
float:left;
width:34%;
height:300px;
text-align:;
color:#ffffff;



}
.wrapper{

overflow:hidden;
}
.form-wrapper{
z-index:1;
position:fixed;top:0px;

overflow:none;
width:100%;
background:rgba(0,0,0,0.8);
height:100%;
margin-top:;
}
.banner-left p{
font-family:Oswald,sans-serif;
font-size:28px;


}

.banner-right{
float:right;
width:50%;
height:500px;

}
.logo{
float:left;

margin-top:-20px;

}



.nav-top{



float:right;



}



.nav-top ul{
overflow:hidden;
border:px solid yellow;
}


.nav-top li{
list-style:none;
float:left;
width:100px;
line-height:40px;
font-family:calibri;
font-size:20px;
color:#9a0aae;
}
.nav-top ul li a{
	text-decoration:none;
}

#showform
{
background:#df06be;

}
#showform_bottom
{
background:rgba(255,255,255,0.2);
border-radius:300px;

}
#showform_bottom:hover
{
background:rgba(0,0,0,0.2);


}
#showform:hover
{
background:violet;
}
.about{
width:100%;

height:400px;
/*background-image:url("img/aboutbg.png");*/
background-size:cover;
background-repeat:no-repeat;	
	/* transform: rotate(180deg);*/
	 background:#ffffff;
}
.about .global-container{
	color:#1d1d1d;

	
}

#demo{
width:100%;

height:400px;
background-image:url("img/bottom_banner1.jpg");
background-size:cover;
background-repeat:no-repeat;	
	/* transform: rotate(180deg);*/
	
}
#demo .global-container{
	color:#ffffff;

	
}
.page-container{




	
}
</style>

</head>
<body >
	<div class="page-container" style="border:px solid red;height:780px;">
	
	
		
			<section class="banner" id="banner">
			
			
				<section class="header">
		
			<div class="global-container">
				<div class="logo">
				<img src="img/logo.png"width="60">
					<label style="font-family:Lobster;color:#ffffff;font-size:32px;font-weight:normal;">Pd Resume</label>
				</div>
				
				<div class="nav-top">
					<ul>
						<li>
						<a href="#banner">Home</a>
						</li>
						<li>
						<a href="#about">About</a>
						</li>
						<li>
						<a href="#demo">Demo</a>
						</li>
					</ul>
				</div>
			
		
			</div>
		</section>
			
							
			<div class="wrapper">
				<div class="global-container">
					<div class="banner-left">
					
						<h1 style="font-family:Oswald;font-size:46px;">PD Resume </h1><br>
						<p>Is a Basic Resume Builder with Drag and Drop feature for Anyone</p>
						
							<br><br>
							<button id="showform"onclick="show()"style="cursor:pointer;border:3px solid #ffffff;padding:12px;width:170px;color:white;border-radius:30px;font-size:20px;">Start</button>
					</div>
					<div class="banner-right">
						<img src="img/img1.png"/>
					</div>
				</div>
				
				
			
			</div>
			
		
			
				<div class="form-wrapper" id="form-wrapper" style="display:none;">
				
				<div class="auth-form" id="auth" style="background:#ffffff;width:400px;height:auto;padding:40px;border:px solid blue;margin:150px auto;justify-content:center;display:flex;"><br>
				<div>
				<button onclick="hide()"style="border:none;background:#ed4968;;padding:8px;color:white;width:30px;float:right;margin-top:-25px;margin-right:-50px;"><b>X</b> </button><br>
					<div>
					<form method="Post" action="login_function.php">
					
					<h1>Login</h1><br>
						<input type="text" name="username" placeholder="test" style="margin-bottom:5px;width:230px;padding:9px;border-radius:30px;border:2px solid violet;"/><br>
						<input type="password" name="password" placeholder="test" style="margin-bottom:5px;width:230px;padding:8px;border-radius:30px;border:2px solid violet;"/></a><br><br>
						<center><input type="submit" name="login" value="Login" style="cursor:pointer;border:2px solid violet;font-size:15px;font-family:calibri;border-radius:30px;padding:8px;width:130px;text-align:center;color:white;background:#a142e2;"/>&nbsp;<a href="register_page.php">No account yet? Signup here</a></center>
					
					</form>
				</div>
			</div>
				
		</section>
		
			<section class="about" id="about">
			
			<div class="global-container">
			<center>
			<h1 style="font-family:oswald;">About<h1><br>
			</center>	
					<p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-size:20px;color:;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<p style="font-family:calibri;font-size:20px;color:;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<p style="font-family:calibri;font-size:20px;color:;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							<br><br>									
			</div>
		</section>
		<section id="demo">
			
			<div class="global-container">
			<center>
			<h1 style="font-family:Oswald;">Demo<h1><br>
			</center>	
					<p style="font-family:calibri;font-size:20px;color:;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<p style="font-family:calibri;font-size:20px;color:;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<p style="font-family:calibri;font-size:20px;color:;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<center>
					<br>
					<br>
					<button id="showform_bottom"onclick="show()"style="cursor:pointer;border:2px solid #ffffff;padding:10px;width:160px;color:white;border-radius:px;font-size:18px;margin:0 auto;">Try it</button>		
					</center>								
			</div>
		</section>
		
		
		
		
			<section class="footer" style="width:100%;">
				<div style="padding:20px;color:grey;margin:0 auto; width:300px;text-align:center;">All Right Reserve &copy;2019 | PD Resume</div>
	
	</div>
	

</body>
</html>