<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        function test($temp1,$temp2){
            return $temp1 < 0 && $temp2 > 100 || $temp2 < 0 && $temp1 > 100;
        }
        var_dump(test(120,-1));
        echo "<br>";
        var_dump(test(-1,120));
        echo "<br>";
        var_dump(test(2,120));
    ?>
</body>
</html>