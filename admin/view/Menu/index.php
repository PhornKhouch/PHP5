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
                    <th>Menu</th>
                    <th>Menu KH</th>
                    <th>Inorder</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $SQL = "select * from tbl_menu";
                $result = $con->query($SQL);
                $i=1;
                while ($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $i++?></td>
                        <td><?php echo $row['menu']?></td>
                        <td><?php echo $row['menukh']?></td>
                        <td><?php echo $row['inorder']?></td>
                        <td><?php echo $row['status']?></td>
                        <td>
                            <a href="../../model/Menu/actioncreate.php?id=<?php echo $row['ID']?>&&action=Delete" class="btn btn-secondary">Delete</a>
                            <a href="edit.php?id=<?php echo $row['ID']?>" class="btn btn-success">Edit</a>
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