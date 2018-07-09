<?php 
include_once("data2/Crud.php");
$result = new Crud();
$result = $res->execute();
//print_r($pos);
$xml = new DOMDocument();
$xml->formatOutput =TRUE;

$xml_file='Studentlist.xml';
$xml = new DOMDocument();
$xml_data=$xml->load($xml_file);
//echo $xml->saveXML();
$data = $xml->documentElement;
//echo "<pre>";
//print_r($data);
foreach ($data->childNodes as $child) {
	echo $child->nodeName .":". $child->nodeValue."<br />";
}
$xml = new DOMDocument();

 $xml->formatOutput =TRUE;
 $students=$xml->createElement('students');
 $student=$xml->createElement('student');
 $fname=$xml->createElement('fname','Parisa');
 $lname=$xml->createElement('lname','Amiri');
 $pnumber=$xml->createElement('pnumber','077324345');
 $email=$xml->createElement('email','amiri@gmail.com');
$xml->appendChild($students);
$student->appendChild($student);
$student->appendChild($fname);
$student->appendChild($lname);
$student->appendChild($pnumber);
$student->appendChild($email);
$xml->save('StudentsList.xml');


?>