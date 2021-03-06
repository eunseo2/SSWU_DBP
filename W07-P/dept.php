<?php
    $link = mysqli_connect('localhost', 'admin', 'admin', 'employees');

    if(mysqli_connect_errno()){
        echo "Failed to connect to MariaDB: " . mysqli_connect_error();
        exit();
    }    

    settype($_GET['emp_no'], 'integer');
    $filtered_number = mysqli_real_escape_string($link, $_GET['emp_no']);
    
    $query = "
       select e.emp_no, e.first_name, d.dept_name
  from dept_emp de
  inner join employees e on e.emp_no=de.emp_no
  inner join departments d on d.dept_no=de.dept_no
  where e.emp_no='{$filtered_number}'
    ";

    $result = mysqli_query($link, $query);  
    
    $article = '';    
    while($row = mysqli_fetch_array($result)){
         $article .= '<tr><th>';
        $article .= $row["emp_no"];
        $article .= '</th><th>';
        $article .= $row["first_name"];
        $article .= '</th><th>';
        $article .= $row["dept_name"];
        $article .= '</th><tr>';

    }
    
    mysqli_free_result($result);
    mysqli_close($link);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>부서 정보</title>
     <style>
        body {
            font-family: Consolas, monospace;
            font-family: 12px;
        }
        table {
            width: 100%;
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #dadada;
        }
    </style>

</head>

<body>
    <h2><a href="index.php">직원 관리 시스템</a> | 부서 정보</h2>
    <table>
        <tr>
            <th>emp_no</th>
            <th>first_name</th>
            <th>dept_name</th>
        </tr>        
        <?= $article ?>
    </table>
</body>

</html>
