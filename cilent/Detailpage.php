<?php
    include '../Admin/connection/conect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($_GET['id']!=null){
            $NewsID=$_GET['id'];
            $select = "SELECT * from tbl_detailnews Where NewID='$NewsID'";
            $result=$con->query($select);
            if(!empty($result)){
                $DetaileNew=$result->fetch_assoc();
                echo $DetaileNew['des1'].$DetaileNew['des2'].$DetaileNew['des3'];
                echo $DetaileNew['photo1'].$DetaileNew['photo2'];
            }
            
        }
    ?>
</body>
</html>