<?php
	include '../web3_project/data2/Crud.php';
	$crud=new Crud();
	$result=$crud->getData();
	$data=array(
	'karim','karimii','karimi@gmail.com','07943435465');

function write_csv($file,$da){
	$h=fopen($file,'w');
	fputcsv($h,$da);
}

//write_csv('test.csv',$data);

function write_csv_fromdb($file,$d){
	/*header("Content-Type:text/csv");
	header("Content-Disposition:attachment;filename=test2.csv");
	$file='php://output';
	*/
	$file='students.csv';
	$f=fopen($file,'w');
	foreach($d as $student){
	fputcsv($f,$student);
}
	fclose($f);
	$file='./Student.zip';
	$zip= new ZipArchive();
	$zip->open($file,ZipArchive::CREATE);
	//$zip->addfromString('student.txt',"this is a new file");
	$zip->addfile($file);
	$zip->close();
}
write_csv_fromdb('student2.csv',$student);
?>