<?php include_once "base.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增</title>
</head>
<body>
    新增
    <form action="api/add.php" method="post">
        <table>
            <tr>
                <td><input type="text" name="en"></td>
                <td><input type="text" name="cn"></td>
            </tr>
        </table>
        <div>
            <input type="submit" value="確認新增">
            <input type="reset" value="清空選項">
        </div>
    </form>
</body>
</html>