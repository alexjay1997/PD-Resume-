<?php

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


	$query=mysqli_query($conn,"select * from user where id='".$_SESSION['id']."'");
	$row=mysqli_fetch_array($query);

?>

<!Doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<title>Pagedrop Resume Builder</title>

<style>
*{
	margin:0px;
}

	body{
		background-image:url("img/pexel.jpg");
	background-size:cover;
	max-width:1478px;margin:0 auto;
	}
	#user-header{
	
		padding:20px;

	}

	#first{color:#ffffff;}



.resume_header:hover{
		border:2px solid #77cc5f;
		padding:5px;
}
.resume_summary:hover{
		border:2px solid #77cc5f;
		padding:5px;
	
}

.resume_summary:active {
        cursor: grabbing;
        cursor: -moz-grabbing;
cursor: -webkit-grabbing;}

.resume_personal:hover{
			border:2px solid #77cc5f;
		padding:5px;
}
.resume_skills:hover{
	border:2px solid #77cc5f;
	padding:5px;
}
.resume_contact:hover{
	border:2px solid #77cc5f;
		padding:5px;
}
h2{
	
	font-size:26px;
	border:2px dashed #f212ab;margin-bottom:10px;
	padding:5px;
}

#summary{	font-size:18px;
	
border:2px  dashed grey;padding:10px;}

#personal_text{
	font-size:18px;
	border:2px  dashed grey;padding:10px;
	}
	
#skills_text{
	font-size:18px;
	border:2px  dashed grey;padding:10px;
	}
	
	#contact_text{
	font-size:18px;
	border:2px  dashed grey;padding:10px;
	}

#resume_container p{
	font-size:18px;
	
border:px  dashed red;padding:0px;
	
}
#resume_summary p {
	
	display:block;
}
.aside {
	font-family:calibri;
	cursor:pointer;
}
#img{
	
border:2px solid grey;max-width:50px;height:50px;
background-image:url("img/text_icon.png");
background-size:cover;

	
}

#img-personal{
	border:2px solid grey;max-width:50px;height:50px;
background-image:url("img/personal_icon.png");
background-size:cover;

}
#img-skills{
	border:2px solid grey;max-width:50px;height:50px;
background-image:url("img/skills_icon.png");
background-size:cover;

}
#img-contact{
	border:2px solid grey;max-width:50px;height:50px;
background-image:url("img/contact_icon.png");
background-size:cover;

}

.summary_icon{

	
}
</style>
<script>


function allowDrop(ev) {
  ev.preventDefault();
 

}

function drag(ev) {
  ev.dataTransfer.setData("data", ev.target.id);
  
 
}

function drop2(ev) {

document.getElementById("img").remove();
$(document).ready(function(){

    $('#summary_text_element').append('<div style="" id="summary2" draggable="true" ondragstart="drag(event)"   ondrop="drop(event)" ondragover="allowDrop(event)"  onblur ="saveText_summary()"><div  id="img" class="summary_icon" style="z-index:;" ></div><p>New Summary</p></div><br>');  


});
}

function drop_new_personal(ev){
document.getElementById("img-personal").remove();
$(document).ready(function(){
$('#personal_text_element').append('<div style="" id="personal" draggable="true" ondragstart="drag(event)"   ondrop="drop_new_personal(event)" ondragover="allowDrop(event)"  onblur ="saveText_personal()"><div  id="img_personal" class="personal_icon" style="z-index:;" ></div><p>New Personal</p></div>');

});
}


function drop_new_skills(ev){
document.getElementById("img-skills").remove();
$(document).ready(function(){
$('#skills_text_element').append('<div style="" id="skills" draggable="true" ondragstart="drag(event)"   ondrop="drop_new_personal(event)" ondragover="allowDrop(event)"  onblur ="saveText_skills()"><div  id="img_skills" class="skills_icon" style="z-index:;" ></div><p>New Skills</p></div>');

});
}

function drop_new_contact(ev){
document.getElementById("img-contact").remove();
$(document).ready(function(){
$('#contact_text_element').append('<div style="" id="contact" draggable="true" ondragstart="drag(event)"   ondrop="drop_new_contact(event)" ondragover="allowDrop(event)"  onblur ="saveText_contact()"><div  id="img_contact" class="contact_icon" style="z-index:;" ></div><p>New Contact</p></div>');

});
}







function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("data");
  ev.target.appendChild(document.getElementById(data));
 document.getElementById("img").remove();
 document.getElementById("img-personal").remove();
 document.getElementById("img-skills").remove();
 document.getElementById("img-contact").remove();
 
}
</script>

</head>
<body>


<div class="header" style="background:#1d1d1d;overflow:hidden;border-bottom:5px solid #f2129b ;">
	<div class="logo" style="width:55%;padding:0px;margin:0px auto;float:left;">
		<img src="img/logo.png" width="50" style="border:1px solid black;float:left;margin-left:30px;margin-top:8px;"><label style="line-height:70px;font-family:Lobster;text-align:center;color:white;padding-left:10px;font-size:24px;"> Pd Resume </label>
		
		</div>
		
		<!--logout button start-->
	<div class="user_logout_button" style="width:20%;float:right;line-height:70px;color:#ffffff;font-family:calibri;font-size:18px;">
	<?php echo $row['fname']; ?>&nbsp;&nbsp;<?php echo $row['lname']; ?>&nbsp;&nbsp;
	
	&nbsp;&nbsp;<a href="logout_function.php"style="font-size:16px;text-decoration:none;border:2px solid #f2129b;padding-left:18px;padding-right:18px;padding-top:7px;padding-bottom:7px;color:#ffffff;border-radius:0px;width:500px;">Logout</a>
	</div>
	<!--logout button end!!-->
	
			</div>

		
		<!--start aside navigations-->
			<div id="aside" class="aside" style="border-right:2px solid #cccc;min-height:1000px;max-width:8%;float:left;background:#ffffff;padding:20px;">
			<section id="summary_text_element" style="padding:0px;border-bottom:1px solid grey;max-width:100%;position:static;display:flex;">
			
					<div style="" id="summary2" draggable="true" ondragstart="drag(event)"   ondrop="drop2(event)"  ondragover="allowDrop(event)"  onblur ="saveText_summary()"><div  id="img" class="summary_icon" style="z-index:;" ></div><p>New Summary</p></div>
			
			</section>
			<br>

			<section id="personal_text_element" style="padding:0px;border-bottom:1px solid grey;max-width:100%;position:static;display:flex;">
			
			<div style="" id="personal" draggable="true" ondragstart="drag(event)"   ondrop="drop_new_personal(event)" ondragover="allowDrop(event)"  onblur ="saveText_personal()"><div  id="img-personal" class="personal_icon" style="z-index:;" ></div><p>New Personal</p></div>
	
	</section>
	<br>

	
	<section id="skills_text_element" style="padding:0px;border-bottom:1px solid grey;max-width:100%;position:static;display:flex;">
			
			<div style="" id="skills" draggable="true" ondragstart="drag(event)"   ondrop="drop_new_skills(event)" ondragover="allowDrop(event)"  onblur ="saveText_skills()"><div  id="img-skills" class="skills_icon" style="z-index:;" ></div><p>New Skills</p></div>
	
	</section>
	<br>

		
	<section id="contact_text_element" style="padding:0px;border-bottom:1px solid grey;max-width:100%;position:static;display:flex;">
			
			<div style="" id="contact" draggable="true" ondragstart="drag(event)"   ondrop="drop_new_contact(event)" ondragover="allowDrop(event)"  onblur ="saveText_contact()"><div  id="img-contact" class="contact_icon" style="z-index:;" ></div><p>New Contact</p></div>
	
	</section>
	<br>

			
			
		
			
			</div>
			<!---- end aside-------------------->
			
			
			<!--resume builder  wrapper container start here !!-->
			<div id="resume_container" class="resume_container" style="border:px solid green;max-width:100%;padding:40px;overflow:hidden;height:auto;background:#eeee;justify-content:center;display:flex;align-items:center;" >
				
					<div id="resume_wrapper" class="content_wrapper" style="border:px dashed grey;width:80%;margin:0 auto;height:auto;">
						
						
						<!-- start resume container -->
					
						<div id="resume_div" class="resume_div"  ondrop="drop(event)" ondragover="allowDrop(event)"   style="border:px solid blue;width:100%;height:900px;overflow:auto;background:#ffffff;">
						
								<div class="resume_header"   draggable="true" ondragstart="drag(event)"  style="padding:20px;text-align:center;background-color:black;font-family:Calibri;color:#ffffff;">
								
									<div id="user-header"><h1  style="padding:0px;line-height:0px;"> <?php echo $row['fname']?>&nbsp;&nbsp;<?php echo $row['lname']?></h1></div>
									<div><p> <?php echo $row['email']?></p></div>
									
								</div>
								
								
								<div id="resume_summary"  draggable="true" ondragstart="drag(event)"   ondrop="drop(event)" ondragover="allowDrop(event)" class="resume_summary" style="margin:20px;padding-left:30px;padding-right:30px;border:px solid red;font-family:calibri;">
								<h2 id= "summary_Title" contenteditable="true" onblur ="saveText_summary_Title()" onmouseout ="saveText_summary_Title()" ><?php echo $row['summary_title'];?></h2>
								<div id="summary" contenteditable="true" onblur ="saveText_summary()" onmouseout ="saveText_summary()" ><?php echo $row['summary'];?></div>
								</div>
								
								<div id="resume_personal"  draggable="true" ondragstart="drag(event)"   ondrop="drop(event)" ondragover="allowDrop(event)" class="resume_personal" style="margin:20px;padding-left:30px;padding-right:30px;border:px solid red;font-family:calibri;">
									<h2 id= "personal_Title" contenteditable="true" onblur ="saveText_personal_Title()" onmouseout ="saveText_personal_Title()"><?php echo $row['personal_title'];?></h2>
									<div id="personal_text" contenteditable="true" onblur ="saveText_personal()" onmouseout ="saveText_personal()"><?php echo $row['personal'];?></div>
								</div>
								
									<div id="resume_skills"  draggable="true" ondragstart="drag(event)"   ondrop="drop(event)" ondragover="allowDrop(event)"  class="resume_skills" style="margin:20px;padding-left:30px;padding-right:30px;border:px solid red;font-family:calibri;">
									<h2 id= "skills_Title" contenteditable="true" onblur ="saveText_skills_Title()" onmouseout ="saveText_skills_Title()"><?php echo $row['skills_title'];?></h2>
									<div id="skills_text" contenteditable="true" onblur ="saveText_skills()" onmouseout ="saveText_skills()" ><?php echo $row['skills'];?></div>
								</div>
								
									<div id="resume_contact"  draggable="true" ondragstart="drag(event)"  ondrop="drop(event)" ondragover="allowDrop(event)" class="resume_contact" style="margin:20px;padding-left:30px;padding-right:30px;border:px solid red;font-family:calibri;">
									<h2 id= "contact_Title" contenteditable="true" onblur ="saveText_contact_Title()" onmouseout ="saveText_contact_Title()"><?php echo $row['contact_title'];?></h2>
									<div id="contact_text" contenteditable="true" onblur ="saveText_contact()" onmouseout ="saveText_contact()"><?php echo $row['contact'];?></div>
								</div>
								
						
					
						</div >
						
						
						
						<!--<img src="img/export.png" onclick="Export2Doc('exportContent');" style="position:fixed ;top:200px;right:0;border-radius:200px;height:50px;cursor:pointer;"/>
						--><button  onclick="Export2Doc('exportContent');" style="position:fixed ;top:200px;right:5px;height:30px;cursor:pointer;border:none;background:#2da2d8;color:#ffffff;width:100px;">Print</button>
						<!-- end --->
					</div>
			
			
				</div>
			<!--resume builder  wrapper container  End!!--->



<script>

</script>

<script>
// function for printing --------------------------------------

function Export2Doc() {
 
	
	
	var content = document.getElementById("resume_div").outerHTML;
    var mywindow = window.open('', 'Print', 'height=600,width=800');

    mywindow.document.write('<html><head><title>Print</title>');
    mywindow.document.write('</head><body >');
    mywindow.document.write(content);
    mywindow.document.write('</body></html>');

    mywindow.document.close();
    mywindow.focus()
    mywindow.print();
    mywindow.close();
    return true;
	
	
	
}


//function Export2Doc()

//{
	
//	document.getElementById("resume_div").innerHTML.target="_blank";
	
	
//}

// function Export2Doc(element, filename = '#resume_div'){
    // var preHtml = "<html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns='http://www.w3.org/TR/REC-html40'><head><meta charset='utf-8'><title>Export HTML To Doc</title></head><body>";
    // var postHtml = "</body></html>";
    // var html = preHtml+document.getElementById("resume_div").innerHTML+postHtml;

    // var blob = new Blob(['\ufeff', html], {
        // type: 'application/msword'
    // });
    
    // // Specify link url
    // var url = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(html);
    
    // // Specify file name
    // filename = filename?filename+'.pdf':'document.pdf';
    
    // // Create download link element
    // var downloadLink = document.createElement("a");

    // document.body.appendChild(downloadLink);
    
    // if(navigator.msSaveOrOpenBlob ){
        // navigator.msSaveOrOpenBlob(blob, filename);
    // }else{
        // // Create a link to the file
        // downloadLink.href = url;
        
        // // Setting the file name
        // downloadLink.download = filename;
        
        // //triggering the function
        // downloadLink.click();
    // }
    
    // document.body.removeChild(downloadLink);
// }

















// start function of content editable update 

function saveText_summary_Title(){
	var xr = new XMLHttpRequest();
	var url = "update.php";
	var text = document.getElementById("summary_Title").innerHTML;
	
	var vars = "newSummary_Title="+text;
	xr.open("POST", url, true)
	xr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xr.send(vars);
	//window.location.reload();
	
	
	
	
}






function saveText_summary(){
	var xr = new XMLHttpRequest();
	var url = "update.php";
	var text = document.getElementById("summary").innerHTML;
	
	var vars = "newSummary="+text;
	xr.open("POST", url, true)
	xr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xr.send(vars);
	//window.location.reload();
	
	
	
	
}


function saveText_personal_Title(){
	var xr = new XMLHttpRequest();
	var url = "update.php";
	var text = document.getElementById("personal_Title").innerHTML;
	
	var vars = "newPersonal_Title="+text;
	xr.open("POST", url, true)
	xr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xr.send(vars);
	
	
	
	
}



function saveText_personal(){
	var xr = new XMLHttpRequest();
	var url = "update.php";
	var text = document.getElementById("personal_text").innerHTML;
	
	var vars = "newPersonal="+text;
	xr.open("POST", url, true)
	xr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xr.send(vars);
	
	
	
	
}
function saveText_skills_Title(){
	var xr = new XMLHttpRequest();
	var url = "update.php";
	var text = document.getElementById("skills_Title").innerHTML;
	
	var vars = "newSkills_Title="+text;
	xr.open("POST", url, true)
	xr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xr.send(vars);
	
	
	
	
}


function saveText_skills(){
	var xr = new XMLHttpRequest();
	var url = "update.php";
	var text = document.getElementById("skills_text").innerHTML;
	
	var vars = "newSkills="+text;
	xr.open("POST", url, true)
	xr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xr.send(vars);
	
	
	
	
}


function saveText_contact_Title(){
	var xr = new XMLHttpRequest();
	var url = "update.php";
	var text = document.getElementById("contact_Title").innerHTML;
	
	var vars = "newContact_Title="+text;
	xr.open("POST", url, true)
	xr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xr.send(vars);
	
	
	
	
}


function saveText_contact(){
	var xr = new XMLHttpRequest();
	var url = "update.php";
	var text = document.getElementById("contact_text").innerHTML;
	
	var vars = "newContact="+text;
	xr.open("POST", url, true)
	xr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xr.send(vars);
	
	
	
	
}// end function of content editable update 
</script>






</body>
</html>
