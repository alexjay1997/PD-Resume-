<?php
header("Content-type: text/css");


$conn=mysqli_connect("localhost","root","","div_color");

if(!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}



?>

*{
		margin:0px;
		padding:0px;
		
	}
	h1{
		font-size:36px;
		
	}
	h2{
		font-size:32px;
		
	}
	#black{
		background-color:<?php $query=mysqli_query($conn,'select * from user_div '); $row=mysqli_fetch_assoc($query); echo $row['div_color'] ?>;
		height:400px;
	}
	
	#banner_text,h1{
		
	
	text-align:center;

	color:#ffffff;
	line-height:400px;
	font-family:<?php $query=mysqli_query($conn,'select * from user_div '); $row=mysqli_fetch_assoc($query); echo $row['font_face'] ?>;
	
}
