<?php 

    include '../../connection/conect.php';
    session_start();

    $id=$_POST['txtmenuid'];
    $menu=$_POST['txtmenu'];
    $menukh=$_POST['txtmenukh'];
    $status=$_POST['txtstatus'];
    $inorder=$_POST['txtInorder'];
    $script="UPDATE `tbl_menu` 
    SET `menu` = '$menu', 
    `menukh` = '$menukh', 
    `status` = '$status', 
    `inorder` = '$inorder' 
    WHERE `tbl_menu`.`ID` ='$id'";
    $res=$con->query($script);
    if($res){
        $_SESSION['msg']="Date have been modified.";
        $_SESSION['msg_type']="alert-primary";
        header("location:../../view/Menu/index.php");
    }

?>