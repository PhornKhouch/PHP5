<?php
    include '../../root/Header.php';
    include '../../connection/conect.php';
    $ID=$_GET['id'];
    if($ID !=null){
        $Sql="Select * from tbl_menu Where ID='$ID'";
        $result=$con->query($Sql);
        $data=$result->fetch_assoc();
        $menu=$data['menu'];
        $menukh=$data['menukh'];
        $inorder=$data['inorder'];
        $status=$data['status'];
        if($status=="A"){
            $status="Active";
        }
        else{
            $status="InActive";
        }
       
    }
?>
</head>
<body>
    <div class="container-fludi mt-3" style="margin-left: 10px;">
        <form action="../../model/Menu/actionEdit.php" method="post">
            <div class="row">
                <div class="col-xl-12 bg-secondary p-2">
                    <a href="index.php" class="btn btn-primary" style="margin-left: 15px;">Back</a>
                    <input type="submit" name="btnUpdate" value="Update" class="btn btn-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 ">
                    <label for="">MenuID</label>
                    <input type="text" name="txtmenuid" class="form-control" value="<?php echo $ID?>">
                </div>
                <div class="col-xl-4 ">
                    <label for="">Menu</label>
                    <input type="text" name="txtmenu" class="form-control" value="<?php echo $menu?>">
                </div>
                <div class="col-xl-4 ">
                    
                </div>
                <div class="col-xl-4 ">
                    <label for="">MenuKH</label>
                    <input type="text" name="txtmenukh" class="form-control" value="<?php echo $menukh?>">
                </div>
                <div class="col-xl-4 ">
                    <label for="">Status</label>
                    <select name="txtstatus" class="form-control">
                        <option value="" selected><?php echo $status?></option>
                        <option value="I">InActive</option>
                        <option value="A">Active</option>
                    </select>
                </div>
                <div class="col-xl-4 ">
                    
                    </div>
                <div class="col-xl-4 ">
                    <label for="">Inorder</label>
                    <input type="text" name="txtInorder" value="<?php echo $inorder?>" class="form-control">
                </div>
            </div>
        </form>
    </div>
</body>
</html>