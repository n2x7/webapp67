<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this webpage show editing data</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <?php
            require 'conn.php';
$sql_update="UPDATE movie SET mvname='$_POST[mvname]',mvyear='$_POST[mvyear]' ,mvactor='$_POST[mvactor]' ,mvtime='$_POST[mvtime]' WHERE mvid='$_POST[mvid]' ";

            $result= $conn->query($sql_update);

            if(!$result) {
                die("Error God Damn it : ". $conn->error);
            } else {

            echo "Edit Success <br>";
            header("refresh: 1; url=mainmovie.php");
            }

        ?>

</body>
</html>