<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> employess system </title>
</head>

<body>
    <h1>  employess system  </h1>
    <a href="emp_select.php">(1) select employess</a><br>
    <a href="emp_insert.php">(2) new employess</a><br>
    <form action="emp_update.php" method="POST">
        (3) update employess:
        <input type="text" name="emp_no" placeholder="emp_no">
        <input type="submit" value="Search">
    </form>
    <form action="emp_delete.php" method="POST">
        (4) delete employess:
        <input type="text" name="emp_no" placeholder="emp_no">
        <input type="submit" value="Delete">
    </form>
    
</body>

</html>
