<?php
$file='Student.zip';
$zip= new ZipArchive();
$zip->open($file,ZipArchive::CREATE);
$zip->addfromString('Student.txt',"this is a new file");
$zip->close();

?>