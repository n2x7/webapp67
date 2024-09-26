<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this webpage show insert data</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<?php
    require 'conn.php';
    $sql_update="INSERT INTO actor(aid,aname,alastname,acount,gender) VALUES ('$_POST[aid]','$_POST[aname]','$_POST[alastname]' ,'$_POST[acount]' ,'$_POST[gender]')";

    $result= $conn->query($sql_update);

    if(!$result) {
        die("Error God Damn it : ". $conn->error);
    } else {

    echo "Insert Success <br>";
    header("refresh: 1; url=mainactor.php");
    }

?> 

</body>
</html>