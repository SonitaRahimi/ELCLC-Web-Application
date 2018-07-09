<?php 
$student = array('fname'=>'Karim','lname'=>'Karimi','email'=>'karimi@gmail.com','pnumber'=>'077348234');
$json_file = json_encode($student);
echo $json_file;
$file = fopen('json_Data.json', 'w');
fwrite($file, $json_file);
$file = fopen('json_Data.json', 'r');
$data = fread($file, 1024);
echo $data;
$js_data = json_decode($data,true);
echo$js_data['fname'];

include '../web3_project/data/Crud.php';
$crud = new Crud();
$result = $crud->getData();
print_r($result);
$json_file = json_encode($result);
$file = fopen('student_json.json', 'w');
fwrite($file, $json_file);