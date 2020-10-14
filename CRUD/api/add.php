<?php
    include_once "../base.php";
    
    $db=new DB("eng");
    $data=[];

    $data['en']=$_POST['en'];
    $data['cn']=$_POST['cn'];

    $db->save($data);

    to("../index.php");
?>