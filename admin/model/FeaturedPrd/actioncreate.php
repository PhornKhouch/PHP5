<?php
    include '../../connection/conect.php';
    session_start();
    if(isset($_POST['btnSave'])){
        $cate=$_POST['txtcate'];
        $brand=$_POST['txtbrand'];
        $postdate=$_POST['txtpostdate'];
        $pirce=$_POST['txtprice'];
        $dis=$_POST['txtdis'];
        $des=$_POST['txtdes'];
        $status=$_POST['txtstatus'];
        $inorder=$_POST['txtInorder'];

        //upload picture
        $img_name=$_FILES['upload']['name'];
        $tmp=$_FILES['upload']['tmp_name'];
        $path='../../Upload/FeaturedPRD/';
        move_uploaded_file($tmp,$path.$img_name);
        $SQL="INSERT INTO `tbl_prdfeature` (`id`, `des`, `cate`, `brand`, `postdate`, `price`, `discount`, `status`, `inorder`, `image`)
         VALUES (NULL, '$des', '$cate', '$brand', '$postdate', '$pirce', '$dis', '$status', '$inorder', '$img_name');";
        $res=$con->query($SQL);
        if($res){
            $_SESSION['msg']="Save completed.";
            $_SESSION['msg_type']="alert-warning";
        }
    }   
   
    if(isset($_GET['actionName'])=="Delete"){
        $id=$_GET['id'];
        $Del="DELETE FROM tbl_prdfeature WHERE ID=$id";
        $res=$con->query($Del);
        if($res){
            $_SESSION['msg']="Data have been deleted.";
            $_SESSION['msg_type']="alert-success";
        }
    }

    header("location:../../view/FeaturedPrd/index.php");
?>