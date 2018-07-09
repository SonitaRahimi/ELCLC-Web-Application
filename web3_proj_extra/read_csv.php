<?php
function read_csv($file){
		$f=fopen($file, 'r');
		$data=fgetcsv($f);
		return $data;
}

function read_csva($file){
		$f=fopen($file,'r');
		while (!feof($f)){
		$data[]=fgetcsv($f);
	}
		return $data;
}

$students= read_csva('student.csv');
		foreach($students as $student){
		echo "fname:".$student[0].";"."lname:".$student[1].";"."email:".$student[2].";"."pnumber:".$student[3]"<br />";

}


?>