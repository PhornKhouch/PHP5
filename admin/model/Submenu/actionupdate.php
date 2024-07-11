<?php
include '../../connection/conect.php';
session_start();
if($_POST['actionName']=="Update"){
    $submenu=$_POST['submenu'];
    $Id=$_POST['id'];
    $sql="UPDATE `tbl_submenu` SET `submenu` = '$submenu', `submenukh` = 'KH123', `status` = 'I',
     `inorder` = '1', `menuid` = '13' 
    WHERE `tbl_submenu`.`id` ='$Id' ";
    $res=$con->query($sql);
    if($res){
        $_SESSION['msg']="Save completed.";
        $_SESSION['msg_type']="alert-warning";
    }
}

header("location:../../view/SubMenu/index.php");
?>