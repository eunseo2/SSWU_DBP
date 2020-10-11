<?php

$link= mysqli_connect("localhost","admin","admin","employees");
$filtered_id = mysqli_real_escape_string($link,$_POST['emp_no']);
	

$query="
   DELETE FROM employees
   WHERE
	emp_no ='{$filtered_id}'
	
	";

$result =mysqli_query($link,$query);
if($result==false){
	echo 'error';
	error_log(mysqli_error($link));
}else{

	echo'sucess <a href = "index.php"> back </a>';

}



?>


