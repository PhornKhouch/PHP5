<?php
    include '../../connection/conect.php';
    session_start();
    if(isset($_POST['btnSave'])){
        $menu=$_POST['txtmenu'];
        $menukh=$_POST['txtmenukh'];
        $status=$_POST['txtstatus'];
        $inorder=$_POST['txtInorder'];
        $SQL="INSERT INTO `tbl_menu` (`ID`, `menu`, `menukh`, `status`, `inorder`) 
        VALUES (NULL, '$menu', '$menukh', '$status', '$inorder');";
        $res=$con->query($SQL);
        if($res){
            $_SESSION['msg']="Save completed.";
            $_SESSION['msg_type']="alert-warning";
        }
    }   
   
    if(isset($_GET['action'])=="Delete"){
        $id=$_GET['id'];
        $Del="DELETE FROM tbl_menu WHERE ID=$id";
        $res=$con->query($Del);
        if($res){
            $_SESSION['msg']="Data have been deleted.";
            $_SESSION['msg_type']="alert-success";
        }
    }

    header("location:../../view/Menu/index.php");
?>