<html>
<head>
<meta name="viewport" content="width=device-width" intial-scale="1.0/">
<link rel="shortcut icon" href="img/logo.jpg"></link>
<title>ELCLC</title>
<link type="text/css" rel="stylesheet" href="CSS/registration.css">
</head>
<body>

		<div id="wrapper">
		<div id="header">
<!--img src="img/header.png"-->
</div>
<div id="nav">
<ul type="none" id="main_menu">
			<li><a href="index.html">Home|</a></li>
			<li><a href="departments.html" style="color:white" >Departments|</a>
			<ul id="sub_menu" type="none">
			<li><a href="Eng_Dep.html" style="color:white">English Department</a></li>
			<li><a href="Com_Dep.html" style="color:white" >Computer Department</a></li>
			</ul>
			</li>
			<li><a href="teachers.html" style="color:white">Teachers|</a>
			<ul id="sub_menu2" type="none">
			<li><a href="Eng_teacher.html" style="color:white">English Teachers</a></li>
			<li><a href="Com_teacher.html" style="color:white">Computer Teachers</a></li>
			</ul>
			</li>
			
			<li><a href="registration.php" style="color:white" id="active">Registration</a></li>
			<li><a href="data2/ViewResult.php" style="color:white">Followship</a></li>
			<li id="search"><input type="text"name="searching" placeholder="search..." maxlength="20px" 
			size="40px"></li>
			</ul>
</div>

<div id="aside">

			<img src="img/aside1.jpg"><h5>Workshop in ELCLC</h5>
			<img src="img/aside2.png"><h5>ELCLC Computer Class</h5>
			<img src="img/aside3.png"><H5>ELCLC Teachers and Staff</H5>
			<img src="img/aside4.png"><H5>PC Labs of ELCLC</H5>
			<img src="img/aside5.png"><H5>Graduation of ELCLC Students</H5>
</div>

<!--begin of main div-->
<div id="main">
<h3 style="text-align:center">Please Fill This Registration Form According Your Identities</h3>

<form action="" method="post" enctype="multipart/form-data">
<img src="icon/fname.png"><input type="text" name="fname" placeholder="First Name">
<img src="icon/fname.png"><input type="text" name="lname" placeholder="Last Name">
<img src="icon/Pn.png"><input type="text" name="pnumber" placeholder="Phone Number">
<img src="icon/email.png"><input type="email" name="email" placeholder="Email Address">
<img src="icon/password.png"><input type="password" name="password1" placeholder="Password">
<img src="icon/password.png"><input type="password" name="password2" placeholder="Confirm Password">
<input type="submit" name='submit' Value="SIGN UP" id="signup">



</form>

<?php
include_once("data2/Crud.php");
include_once("data2/Validation.php");

$crud=new Crud();
$validation=new Validation();

	if(isset($_POST['submit'])){
		$fname = $crud->escape_string($_POST['fname']);
		$lname = $crud->escape_string($_POST['lname']);
		$pnumber = $crud->escape_string($_POST['pnumber']);
		$email = $crud->escape_string($_POST['email']);
		$password1 = $crud->escape_string($_POST['password1']);
		$password2 = $crud->escape_string($_POST['password2']);
		
		$check_fname = $validation->is_fname_valid($_POST['fname']);
		$check_lname = $validation->is_lname_valid($_POST['lname']);
		$check_email = $validation->is_email_valid($_POST['email']);
		$check_pnumber = $validation->is_pnumber_valid($_POST['pnumber']);
		
    if (!$check_fname) {
        echo 'Please Enter Correct First Name.';
  
	}elseif (!$check_lname) {
        echo 'Please Enter Correct Last Name.';
	}
	elseif (!$check_email) {
        echo 'Please provide a Vlid Email Address.';
	}
	elseif (!$check_pnumber) {
        echo 'Please provide a Valid Phone Number.';
  
    }else { 
        //insert data into database    
        $result = $crud->execute("INSERT INTO student(fname,lname,pnumber,email,password1,password2) VALUES('$fname','$lname','$pnumber','$email','$password1','$password2')");
        //display success message
        echo "<font color='green' align='center' width='20px'>Data added successfully.";
        echo "<br/><a href='data2/ViewResult.php'>View Result</a>";
    
}
}
?>

</div><!--DIV BODY-->

<!--end of main part-->

<div id="footer">
<div id="links">
<a href="https://facebook.com"><img src="imG/FB.png"></a>
<a href="https://twitter.com"><img src="imG/TWITT.png"></a>
<a href="https://gmail.com"><img src="imG/GMAIL.jpg"></a>
<a href="https://google.com"><img src="imG/GO.JPG"></a>
</div>
<section id="details">
<h4>All Structure and Presentation Work Specified<br/> 
Copyright©1396-2017 HSS_CS_Collegians<br/>
All Rights Reserved in All Forms</h4>
</section>
</div>
</div>
</body>
</html>