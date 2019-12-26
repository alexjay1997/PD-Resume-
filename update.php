<?php
//start connection

//$conn=mysqli_connect("localhost","root","","insert");

//if(!$conn)
//{
//die("Connection failed: " . mysqli_connect_error());
//}
// end connection
session_start();
 
//	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
	//	header('location:main_page.php');
	//	exit();
	//}

	if (isset($_SESSION['id']) && $_SESSION['id'] == true) {
   
} else {
    header('Location: index.php');
}

$conn=mysqli_connect("localhost","root","","resume");

if(!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}



?>


	
	<!--// Update tbl info from person2 table------>
	
	  
	  <?php


	// Update summary title
	
$id = $_GET['id'];
     

	 
    	$newSummary_Title= $_POST['newSummary_Title'];
    
if($newSummary_Title !="") {
	
     // mysqli_query($conn,"UPDATE tbl_studentclass SET prelim = '$prelim' AND midterm = '$midterm' AND finals = '$finals' where student_class_id='$id'  ") ;
	 
	 mysqli_query($conn,"UPDATE user SET summary_title ='$newSummary_Title' WHERE id='".$_SESSION['id']."' ");
    	// mysqli_query("update tbl_studentclass set prelim='$prelim', midterm='$midterm', finals='$finals', where student_class_id='$id'");
    	header('location:builder.php');	 

	
	
}

//--------------------------- end
?>

	  
	  
	  
	  
	
	<?php


	// Update summary text
	
$id = $_GET['id'];
     

	 
    	$newSummary= $_POST['newSummary'];
    
if($newSummary !="") {
	
     // mysqli_query($conn,"UPDATE tbl_studentclass SET prelim = '$prelim' AND midterm = '$midterm' AND finals = '$finals' where student_class_id='$id'  ") ;
	 
	 mysqli_query($conn,"UPDATE user SET summary ='$newSummary' WHERE id='".$_SESSION['id']."' ");
    	// mysqli_query("update tbl_studentclass set prelim='$prelim', midterm='$midterm', finals='$finals', where student_class_id='$id'");
    	header('location:builder.php');	 

	
	
}
?>

<?php

	// Update personal title
	
$id = $_GET['id'];
     
	     	$newPersonal_Title= $_POST['newPersonal_Title'];
    
if($newPersonal_Title !="") {
	
     // mysqli_query($conn,"UPDATE tbl_studentclass SET prelim = '$prelim' AND midterm = '$midterm' AND finals = '$finals' where student_class_id='$id'  ") ;
	 
	 mysqli_query($conn,"UPDATE user SET personal_title ='$newPersonal_Title' WHERE id='".$_SESSION['id']."' ");
    	// mysqli_query("update tbl_studentclass set prelim='$prelim', midterm='$midterm', finals='$finals', where student_class_id='$id'");
    	header('location:builder.php');	 

	
	
}

//--------------------------- end
?>



	<?php


	// Update personal text ---------------------------------
	
$id = $_GET['id'];
     

	 
    	$newPersonal= $_POST['newPersonal'];
    
if($newPersonal !="") {
	
     // mysqli_query($conn,"UPDATE tbl_studentclass SET prelim = '$prelim' AND midterm = '$midterm' AND finals = '$finals' where student_class_id='$id'  ") ;
	 
	 mysqli_query($conn,"UPDATE user SET personal ='$newPersonal' WHERE id='".$_SESSION['id']."' ");
    	// mysqli_query("update tbl_studentclass set prelim='$prelim', midterm='$midterm', finals='$finals', where student_class_id='$id'");
    	header('location:builder.php');	 

	
	
}

// -------------------------------------end 
?>
		
		
	<?php


	// Update skills title ---------------------------------
	
$id = $_GET['id'];
     

	 
    	$newSkills_Title= $_POST['newSkills_Title'];
    
if($newSkills_Title !="") {
	
     // mysqli_query($conn,"UPDATE tbl_studentclass SET prelim = '$prelim' AND midterm = '$midterm' AND finals = '$finals' where student_class_id='$id'  ") ;
	 
	 mysqli_query($conn,"UPDATE user SET skills_title ='$newSkills_Title' WHERE id='".$_SESSION['id']."' ");
    	// mysqli_query("update tbl_studentclass set prelim='$prelim', midterm='$midterm', finals='$finals', where student_class_id='$id'");
    	header('location:builder.php');	 

	
	
}
?>	
		
		
		
		<?php


	// Update skills text---------------------------------
	
$id = $_GET['id'];
     

	 
    	$newSkills= $_POST['newSkills'];
    
if($newSkills !="") {
	
     // mysqli_query($conn,"UPDATE tbl_studentclass SET prelim = '$prelim' AND midterm = '$midterm' AND finals = '$finals' where student_class_id='$id'  ") ;
	 
	 mysqli_query($conn,"UPDATE user SET skills ='$newSkills' WHERE id='".$_SESSION['id']."' ");
    	// mysqli_query("update tbl_studentclass set prelim='$prelim', midterm='$midterm', finals='$finals', where student_class_id='$id'");
    	header('location:builder.php');	 

	
	
}
?>

	
		<?php


	// Update contact title ---------------------------------
	
$id = $_GET['id'];
     

	 
    	$newContact_Title= $_POST['newContact_Title'];
    
if($newContact_Title !="") {
	
     // mysqli_query($conn,"UPDATE tbl_studentclass SET prelim = '$prelim' AND midterm = '$midterm' AND finals = '$finals' where student_class_id='$id'  ") ;
	 
	 mysqli_query($conn,"UPDATE user SET contact_title ='$newContact_Title' WHERE id='".$_SESSION['id']."' ");
    	// mysqli_query("update tbl_studentclass set prelim='$prelim', midterm='$midterm', finals='$finals', where student_class_id='$id'");
    	header('location:builder.php');	 

	
	
}
?>	


		<?php


	// Update contact text---------------------------------
	
$id = $_GET['id'];
     

	 
    	$newContact= $_POST['newContact'];
    
if($newContact !="") {
	
     // mysqli_query($conn,"UPDATE tbl_studentclass SET prelim = '$prelim' AND midterm = '$midterm' AND finals = '$finals' where student_class_id='$id'  ") ;
	 
	 mysqli_query($conn,"UPDATE user SET contact ='$newContact' WHERE id='".$_SESSION['id']."' ");
    	// mysqli_query("update tbl_studentclass set prelim='$prelim', midterm='$midterm', finals='$finals', where student_class_id='$id'");
    	header('location:builder.php');	 

	
	
}
?>
	


	
	


 