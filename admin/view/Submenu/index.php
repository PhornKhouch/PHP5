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
                    <th>SubMenu</th>
                    <th>SubMenu KH</th>
                    <th>Inorder</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $SQL = "SELECT 
                            S.*,
                            M.menu
                        from 
                        tbl_submenu  S
                        INNER JOIN tbl_menu M ON S.menuid=M.ID";
                $result = $con->query($SQL);
                $i = 1;
                while ($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $row['menu'] ?></td>
                        <td><?php echo $row['submenu'] ?></td>
                        <td><?php echo $row['submenukh'] ?></td>
                        <td><?php echo $row['inorder'] ?></td>
                        <td><?php echo $row['status'] ?></td>
                        <td>
                            <input type="button" id="myLink" data-id="<?php echo $row['id']?>" class="btn btn-success" value="Delete">
                            <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-success">Edit</a>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
   document.getElementById('myLink').addEventListener('click', function(event) {
        // Prevent the default action of the link
        event.preventDefault();

        var id = event.currentTarget.getAttribute('data-id');
        // Call SweetAlert
        Swal.fire({
            title: "Are you sure?",
            text: "Do you want to delete this record ?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ok"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../../model/SubMenu/actioncreate.php?id=' + id + '&&actionName=Delete';
            }
        });
    });
</script>

</html>