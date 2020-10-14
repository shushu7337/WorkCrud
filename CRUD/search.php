<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Result</title>
</head>
<body>
    <?php 
        include_once "base.php";
        $db=new DB("eng");
        $data=$db->q($_POST['en']);
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
    ?>
    <table>
        <tr>
            <td><?=$data['en'];?></td>
            <td><?=$data['cn'];?></td>
        </tr>
    </table>
    <a href="index.php">返回</a>
</body>
</html>