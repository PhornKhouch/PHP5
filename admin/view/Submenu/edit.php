<?php
    include '../../root/Header.php';
    include '../../connection/conect.php';
    $ID=$_GET['id'];
    if($ID !=null){
        $Sql="SELECT 
                tbl_submenu.*,
                tbl_menu.menu
            FROM `tbl_submenu` 
            INNER JOIN tbl_menu ON tbl_submenu.menuid= tbl_menu.ID
            WHERE tbl_submenu.id='$ID'";
        $result=$con->query($Sql);
        $data=$result->fetch_assoc();
        $menu=$data['menu'];
        $submenu=$data['submenu'];
        $submenukh=$data['submenukh'];
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
        <form id="updateForm" action="../../model/SubMenu/actioncreate.php" method="post">
            <div class="row">
                <div class="col-xl-12 bg-secondary p-2">
                    <a href="index.php" class="btn btn-success" style="margin-left: 15px;">Back</a>
                    <input type="button" id="btnUpdate" name="btnUpdate" value="Update" class="btn btn-success">
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4" style="display: none;">
                    <label for="">ID</label>
                    <input type="text" name="txtsubmenuID" id="txtsubmenuID" value="<?php echo $ID?>" class="form-control">
                </div>
                <div class="col-xl-4 ">
                    <label for="">Menu</label>
                    <select name="txtmenu" class="form-control">
                        <option value="" selected><?php echo $menu?></option>
                        <?php
                            $selectmenu="Select * from tbl_menu Where status='A'";
                            $res=$con->query($selectmenu);
                            while($menu=$res->fetch_assoc()){
                                ?>
                                    <option value="<?php echo $menu['ID']?>"><?php echo $menu['menu']?></option>
                                <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="col-xl-4 ">
                    <label for="">Submenu</label>
                    <input type="text" name="txtsubmenu" id="txtsubmenu" value="<?php echo $submenu?>" class="form-control">
                </div>
                <div class="col-xl-4 ">
                    
                </div>
                <div class="col-xl-4 ">
                    <label for="">SubmenuKH</label>
                    <input type="text" name="txtsubmenukh" value="<?php echo $submenukh?>" class="form-control">
                </div>
                <div class="col-xl-4 ">
                    <label for="">Status</label>
                    <select name="txtstatus" class="form-control">
                        <option value="" selected><?php echo$status?></option>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
   document.getElementById('btnUpdate').addEventListener('click', function(event) {
        // Prevent the default action of the link
        event.preventDefault();

        var txtsubmenu=document.getElementById('txtsubmenu');
        var txtid=document.getElementById("txtsubmenuID");

        Swal.fire({
            title: "Are you sure?",
            text: "Do you want to update this record ?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ok"
        }).then((result) => {
            if (result.isConfirmed) {
                //window.location.href = '../../model/SubMenu/actionupdate.php?' + params.toString() + '&&actionName=Update';
                $.ajax({
                    url:'../../model/SubMenu/actionupdate.php',
                    type:'post',
                    data:{
                        id:txtid.value,
                        submenu:txtsubmenu.value,
                        actionName:"Update",
                    },
                    success:function(res){
                        window.location.href = 'index.php';
                        
                    }
                })
            }
        });
    });
</script>
<?php
    include "../../root/DataTable.php";
?>
</html>