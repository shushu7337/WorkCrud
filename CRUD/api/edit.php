<?php 
    include_once "../base.php";
    $db=new DB("eng");

    foreach($_POST['id'] as $key=>$id){
        if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
            $db->del($id);
        }else{
            $data=$db->find($id);
            $data['cn']=$_POST['cn'][$key];
            $data['en']=$_POST['en'][$key];
        }
        $db->save($data);
    }
    to('../index.php');
?>