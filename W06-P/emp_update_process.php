<?php

$link= mysqli_connect("localhost","admin","admin","employees");
$filtered =array (

	'emp_no' => mysqli_real_escape_string($link,$_POST['emp_no']),
	'birth_date' => mysqli_real_escape_string($link,$_POST['birth_date']),
	'first_name' => mysqli_real_escape_string($link,$_POST['first_name']),
	'last_name' => mysqli_real_escape_string($link,$_POST['last_name']),
	'gender' => mysqli_real_escape_string($link,$_POST['gender']),
	'hire_date' => mysqli_real_escape_string($link,$_POST['hire_date'])


);


$query="UPDATE employees
   SET
	

	birth_date = '{$filtered['birth_date']}',
	first_name = '{$filtered['first_name']}',
	last_name = '{$filtered['last_name']}',
	gender = '{$filtered['gender']}',
	hire_date =  '{$filtered['hire_date']}'
   WHERE
	emp_no ='{$filtered['emp_no']}'
	
	";

$result =mysqli_query($link,$query);
if($result==false){
	echo 'error';
	error_log(mysqli_error($link));
}else{

	echo'sucess <a href = "index.php"> back </a>';

}



?>


