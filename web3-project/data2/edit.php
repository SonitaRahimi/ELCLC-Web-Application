<?php
include_once("Crud.php");
 
$crud = new Crud();
$id = $crud->escape_string($_GET['id']);
$result = $crud->getData("SELECT * FROM student WHERE id=$id");
 
foreach ($result as $res) {
    $fname = $res['fname'];
	$lname = $res['lname'];
    $pnumber = $res['pnumber'];
    $email = $res['email'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
	<a href="registration.php">Registration Form</a>
    <br/><br/>
    <form name="form1" method="post" action="editaction.php">
        <table border="0">
            <tr>
                <td>First Name</td>
                <td><input type="text" name="fname" value="<?php echo $fname;?>"></td>
            </tr>
			<tr>
                <td>Last Name</td>
                <td><input type="text" name="lname" value="<?php echo $lname;?>"></td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td><input type="text" name="pnumber" value="<?php echo $pnumber;?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>