<?php
include_once("Crud.php");
$crud = new Crud();
 
//getting id of the data from url
$id = $crud->escape_string($_GET['id']);
 
//deleting the row from table
//$result = $crud->execute("DELETE FROM users WHERE id=$id");
$result = $crud->delete($id, 'student');
 
if ($result) {
    //redirecting to the display page (index.php in our case)
    header("Location:ViewResult.php");
}
?>