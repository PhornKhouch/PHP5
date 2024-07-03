<?php
    include '../../connection/conect.php';
    session_start();
    if(isset($_POST['btnSave'])){
        $menu=$_POST['txtmenu'];
        $submenu=$_POST['txtsubmenu'];
        $submenukh=$_POST['txtsubmenukh'];
        $status=$_POST['txtstatus'];
        $inorder=$_POST['txtinorder'];
        $sql="INSERT INTO `tbl_submenu` (`id`, `submenu`, `submenukh`, `status`, `inorder`, `menuid`) 
        VALUES (NULL, '$submenu', '$submenukh', '$status', '$inorder', '$menu')";
        $res=$con->query($sql);
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

    header("location:../../view/SubMenu/index.php");
?>