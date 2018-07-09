<?php
include_once("Crud.php");
include_once("Validation.php");
 
$crud = new Crud();
$validation = new Validation();
 
if(isset($_POST['update']))    
    $id = $crud->escape_string($_POST['id']);
    $fname = $crud->escape_string($_POST['fname']);
    $lname = $crud->escape_string($_POST['lname']);
    $email = $crud->escape_string($_POST['email']);
    $pnumber = $crud->escape_string($_POST['pnumber']);
    $check_email = $validation->is_email_valid($_POST['email']);
    
		if (!$check_email) {
        echo 'Please provide a valid email address.';    
    } else {
    
        //updating the table
        $result = $crud->execute("UPDATE student SET fname='$fname',lname='$lname',pnumber='$pnumber',email='$email' WHERE id=$id");
        
        //redirectig to ViewResult.php page
        header("Location: Viewresult.php");
    }
?>