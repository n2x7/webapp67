<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this page show inserting</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<form method="post" action="insertbiosuccessmv.php">
        <p>

            <label>รหัสภาพยนตร์</label>
            <input type="text" name="mvid" id="mvid">

        </p>
        <p>

            <label>ชื่อภาพยนตร์</label>
            <input type="text" name="mvname" id="mmvname">

        </p>

        <p>

            <label>ปีที่ฉาย</label>

            <input type="text" name="mvyear" id="mvyear">

        </p>

        <p>

            <label>นักแสดงนำ</label>

            <input type="text" name="mvactor" id="mvactor">

        </p>

        <p>

            <label>ความยาวภาพยนตร์/นาที</label>

            <input type="text" name="mvtime" id="mvtime">

        </p>
        <input id="bun"type="submit" value="บันทึก">
        
    </form>
    <a href='mainmovie.php'><button> Main movie menu</button></a>

</body>
</html>