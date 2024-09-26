<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this page show inserting</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<form method="post" action="insertbiosuccessa.php">
        <p>

            <label>รหัสนักแสดง</label>
            <input type="text" name="aid" id="aid">

        </p>
        <p>

            <label>ชื่อ</label>
            <input type="text" name="aname" id="aname">

        </p>

        <p>

            <label>นามสกุล</label>

            <input type="text" name="alastname" id="alastname">

        </p>

        <p>

            <label>จำนวนหนังที่เล่น</label>

            <input type="text" name="acount" id="acount">

        </p>

        <p>

            <label>เพศ</label>
        
            <input type="text" name="gender" id="gender">


        </p>
        <input id="bun"type="submit" value="บันทึก">
        
    </form>
    <a href='mainactor.php'><button> Main actor menu</button></a>

</body>
</html>