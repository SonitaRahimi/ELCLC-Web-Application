<?php
include_once("Crud.php");
 
$crud = new Crud();
//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM student ORDER BY id DESC";
$result = $crud->getData($query);
//echo '<pre>'; print_r($result); exit;
?>
<html>
<head>
<meta name="viewport" content="width=device-width" intial-scale="1.0/">
<link rel="shortcut icon" href="../img/logo.jpg"></link>
<title>ELCLC</title>
<link type="text/css" rel="stylesheet" href="../CSS/ViewResult.css">
</head>
<body>

		<div id="wrapper">
		<div id="header">
<!--img src="img/header.png"-->
</div>
<div id="nav">
<ul type="none" id="main_menu">
			<li><a href="../index.html">Home|</a></li>
			<li><a href="../departments.html" style="color:white" >Departments|</a>
			<ul id="sub_menu" type="none">
			<li><a href="../Eng_Dep.html" style="color:white">English Department</a></li>
			<li><a href="../Com_Dep.html" style="color:white" >Computer Department</a></li>
			</ul>
			</li>
			<li><a href="../teachers.html" style="color:white">Teachers|</a>
			<ul id="sub_menu2" type="none">
			<li><a href="../Eng_teacher.html" style="color:white">English Teachers</a></li>
			<li><a href="../Com_teacher.html" style="color:white">Computer Teachers</a></li>
			</ul>
			</li>
			<li><a href="../registration.php" style="color:white">Registration|</a></li>	
			<li><a href="../ViewResult.php" style="color:white" id="active" >Followship</a></li>
			<li id="search"><input type="text"name="searching" placeholder="search..." maxlength="20px" 
			size="40px"></li>
			</ul>
</div>

<div id="aside">

			<img src="../img/aside1.jpg"><h5>Workshop in ELCLC</h5>
			<img src="../img/aside2.png"><h5>ELCLC Computer Class</h5>
			<img src="../img/aside3.png"><H5>ELCLC Teachers and Staff</H5>
			<img src="../img/aside4.png"><H5>PC Labs of ELCLC</H5>
			<img src="../img/aside5.png"><H5>Graduation of ELCLC Students</H5>
</div>

<!--begin of main div-->
<div id="main">
<h3 style="text-align:center"><a href="../registration.php" >Add New Data</a></h3><br/><br/>

    <table border='5'>
    <tr bgcolor='white'>
        <td width="25%">First Name</td>
        <td width="25%">last Name</td>
        <td width="25%">Email</td>
		<td width="20%">Phone Number</td>
        <td width="20%">Edit</td>
		<td width="20%">Delete</td>
    </tr>
    <?php
    foreach ($result as $key => $res) {
        echo "<tr>";
        echo "<td>".$res['fname']."</td>";
        echo "<td>".$res['lname']."</td>";
        echo "<td>".$res['email']."</td>";
		echo "<td>".$res['pnumber']."</td>"; 		
        echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> </td> 
		<td><a href=\"delete.php?id=$res[id]\"onClick=\"return 
		confirm('Are you sure you want to delete?')\">Delete</a></td>";        
    }
	
    ?>
    </table>
</div>	
	<div id="footer">
<div id="links">
<a href="https://facebook.com"><img src="../imG/FB.png"></a>
<a href="https://twitter.com"><img src="../imG/TWITT.png"></a>
<a href="https://gmail.com"><img src="../imG/GMAIL.jpg"></a>
<a href="https://google.com"><img src="../imG/GO.JPG"></a>
</div>
<section id="details">
<h4>All Structure and Presentation Work Specified<br/> 
Copyright©1396-2017 HSS_CS_Collegians<br/>
All Rights Reserved in All Forms</h4>
</section>
</div>


</body>
</html>