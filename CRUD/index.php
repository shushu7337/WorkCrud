<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>文字轉換</title>
</head>
<body>
    <fieldset style="border:1px solid black">
        <legend>
            list
        </legend>
        <form action="api/edit.php" method="post">
        <table>
            <tr>
                <td>英</td>
                <td>中</td>
                <td>操作</td>
            </tr>

            <?php 
                include_once "base.php";
                $db=new DB("eng");
                $rows=$db->all();
                foreach($rows as $row){
            ?>
            <tr>
                <td><input type="text" name="en[]" value="<?=$row['en'];?>"></td>
                <td><input type="text" name="cn[]" value="<?=$row['cn'];?>"></td>
                <td><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
                <input type="hidden" name="id[]" value="<?=$row['id'];?>">
            </tr>
            
            <?php
                }
            ?>
        </table>
        <div>
            <input type="submit" value="確定修改">
        </div>
    </form>
</fieldset>
<a href="add.php">新增</a>
<br>
    Search Here!    
        <form action="search.php" method="post">
            <table>
                <tr>
                    <td><input type="text" name="en"></td>
                    <td><input type="button" value="send"></td>
                </tr>
            </table>
        </form>
</body>
</html>