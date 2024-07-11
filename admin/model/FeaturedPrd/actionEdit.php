<?php 

    include '../../connection/conect.php';
    session_start();
    $ID=$_POST['txtID'];
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
    $script="UPDATE `tbl_prdfeature` 
    SET `des` = '$des', 
    `cate` = '$cate', 
    `brand` = '$brand', 
    `postdate` = '$postdate', 
    `price` = '$pirce', 
    `discount` = '$dis', 
    `status` = '$status', 
    `inorder` = '$inorder', 
    `image` = '$img_name' 
    WHERE `tbl_prdfeature`.`id` = '$ID';";
    $res=$con->query($script);
    if($res){
        $_SESSION['msg']="Date have been modified.";
        $_SESSION['msg_type']="alert-primary";
        header("location:../../view/FeaturedPrd/index.php");
    }

?>