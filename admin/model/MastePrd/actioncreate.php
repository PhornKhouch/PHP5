<?php
    include '../../connection/conect.php';
    session_start();
    if($_POST['btnSave']){
        $cate=$_POST['txtcate'];
    $brand=$_POST['txtbrand'];
    $postdate=$_POST['txtpostdate'];
    $prdname=$_POST['txtprdname'];
    $remark=$_POST['txtremark'];
    $des=$_POST['txtdes'];
    $inorder=$_POST['txtInorder'];
    $uc=$_POST['txtunitcost'];
    $up=$_POST['txtunitprice'];
    $qty=$_POST['txtqty'];
    $status=$_POST['txtstatus'];
    $dis=$_POST['txtdis'];
    $Isstock= $_POST['chkIsstock'];
    if($Isstock=='on'){
        $Isstock=1;
    }
    else{
        $Isstock=0;
    }
    //upload picture
    $img_name=$_FILES['upload']['name'];
    $tmp=$_FILES['upload']['tmp_name'];
    $path='../../Upload/PrdMaster/';
    move_uploaded_file($tmp,$path.$img_name);

    $sql="INSERT INTO `tbl_prdmaster`
        (`id`, `cateid`, `brandid`, `prdname`, `des`, `unitcost`, `qty`, `isstock`, `stockdate`, `status`, `remark`, `unitprice`, `discountprice`, `image`) 
    VALUES (NULL, '$cate', '$brand', '$prdname', '$des', '$uc', '$qty', '$Isstock', '$postdate', '$status', '$remark', '$up', '$dis', '$img_name')";
    $res=$con->query($sql);
        if($res){
            $_SESSION['msg']="Save completed.";
            $_SESSION['msg_type']="alert-warning";
        }
    }
    header("location:../../view/MasterPrd/index.php");
?>