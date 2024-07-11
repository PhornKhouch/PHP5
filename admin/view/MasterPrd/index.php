<?php
include '../../root/Header.php';
include '../../connection/conect.php';
session_start();

?>

<body>
    <div class="container-fludi mt-3">
        <div class="row">
            <div class="col-xl-12">
                <?php
                if (isset($_SESSION['msg']) != null) {
                ?>
                    <div class="alert <?php echo $_SESSION['msg_type'] ?>" role="alert">
                        <?php echo $_SESSION['msg'] ?>
                    </div>
                <?php
                    session_destroy();
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 bg-secondary p-2">
                <a href="create.php" class="btn btn-success mx-4">Add</a>
            </div>
        </div>
    </div>


    <div class="container  mt-4  ">
        <table id="example" class="table  table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category</th>
                    <th>BrandName</th>
                    <th>Prdname</th>
                    <th>StockDate</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>QTY</th>
                    <th>IsStock</th>
                    <th>Discount</th>
                    <th>picture</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $SQL = "SELECT 
                            MS.*,
                            M.menu as categoryDes,
                            S.submenu as brandDes
                        FROM tbl_prdmaster  MS
                        INNER join tbl_menu  M ON  MS.cateid=M.ID
                        INNER join tbl_submenu S ON MS.brandid=S.id";
                $result = $con->query($SQL);
                $i = 1;
                while ($row = $result->fetch_assoc()) {
                    $Isch= $row['isstock'];
                    if($Isch==1){
                        $Isch="checked";
                    }
                    else{
                        $Isch="unchecked";
                    }
                ?>
                    <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $row['categoryDes'] ?></td>
                        <td><?php echo $row['brandDes'] ?></td>
                        <td><?php echo $row['prdname'] ?></td>
                        <td><?php echo $row['stockdate'] ?></td>
                        <td><?php echo $row['unitprice'] ?></td>
                        <td><?php echo $row['discountprice'] ?></td>
                        <td><?php echo $row['qty'] ?></td>
                        <th>
                            <input type="checkbox" <?php echo $Isch;?>>
                        </th>
                        <td><?php echo $row['image'] ?></td>
                        <td>
                            <img alt='NULL' src="../../Upload//FeaturedPRD/<?php echo $row['image'] ?>" alt="" width="50px" height="60px">
                        </td>
                        <td>
                            <a class="btn btn-success" href="../../model/FeaturedPrd/actioncreate.php?id='<?php echo $row['id']?>'&&actionName=Delete">Delete</a>
                            <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Edit</a>
                        </td>
                    </tr>
                <?php

                }
                ?>
            </tbody>

        </table>
    </div>
</body>
<?php
include '../../root/DataTable.php';
?>

</html>