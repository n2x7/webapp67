<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mainmenu for movie</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<?php
    require 'conn.php';
    $sql = "SELECT * FROM actor";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
?>
<h1>Actoc/Actress Information</h1><br>
        <table>
            <thead>
                <tr>
                    <th>รหัสนักแสดง</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>จำนวนหนังที่เล่น</th>
                    <th>เพศ</th>
                    <th>แก้ไข</th>
                </tr>
            </thead>
            <tbody>
                <?php // show data by fetch from database
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo"<tr><td>".$row["aid"]."</td>"."<td>".$row["aname"]." ".$row["alastname"]."</td>"."<td>".$row["acount"]."</td>"."<td>".$row["gender"]."</td>"."<td>"."<a href='editactor.php?aid=".$row["aid"]."'><button> Edit </button></a>"."<a href='deletea.php?aid=".$row["aid"]."'><button> Delete </button></a>"."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table> 
        <br>
        <a href='insertactor.php'><button> Insert Actor/Actress</button></a>
        <a href='main.php'><button>Main Menu</button></a>
</html>