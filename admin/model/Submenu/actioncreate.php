<?php
    include '../../connection/conect.php';
    session_start();
    if(isset($_POST['btnSave'])){
        $menu=$_POST['txtmenu'];
        $submenu=$_POST['txtsubmenu'];
        $submenukh=$_POST['txtsubmenukh'];
        $status=$_POST['txtstatus'];
        $inorder=$_POST['txtInorder'];
        $sql="INSERT INTO `tbl_submenu` (`id`, `submenu`, `submenukh`, `status`, `inorder`, `menuid`) 
        VALUES (NULL, '$submenu', '$submenukh', '$status', '$inorder', '$menu')";
        $res=$con->query($sql);
        if($res){
            $_SESSION['msg']="Save completed.";
            $_SESSION['msg_type']="alert-warning";
        }
    }   
   
    if(isset($_GET['actionName'])=="Delete"){
        $id=$_GET['id'];
        $Del="DELETE FROM tbl_submenu WHERE ID=$id";
        $res=$con->query($Del);
        if($res){
            $_SESSION['msg']="Data have been deleted.";
            $_SESSION['msg_type']="alert-success";
        }
    }

    if(isset($_Get['actionName'])=="Update"){
        $sql="UPDATE `tbl_submenu` SET `submenu` = 'apple 123', `submenukh` = 'KH123', `status` = 'I', `inorder` = '1', `menuid` = '13' 
        WHERE `tbl_submenu`.`id` = 4;";
        $res=$con->query($sql);
    }

    header("location:../../view/SubMenu/index.php");
?>