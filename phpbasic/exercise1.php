<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        function test($str){
            $s = substr($str,strlen($str)-1);
            return $s.$str.$s;
        }
        echo test("Red")."\n" ;
        echo "<br>";
        echo test("Green")."\n" ;
        echo "<br>";
        echo test("1")."\n";
    ?>
</body>
</html>