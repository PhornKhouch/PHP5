<?php
    include '../../root/Header.php';
    include '../../connection/conect.php';
    $ID=$_GET['id'];
    if($ID !=null){
        $Sql="SELECT 
                F.*,
                M.menu as categoryDes,
                S.submenu as brandDes
            FROM `tbl_prdfeature`  F 
            INNER join tbl_menu  M ON  F.cate=M.ID
            INNER join tbl_submenu S ON F.brand=S.id
            WHERE F.id='$ID'";
        $result=$con->query($Sql);
        $data=$result->fetch_assoc();
        $cateName=$data['categoryDes'];
        $cateCode=$data['cate'];
        $branddes=$data['brandDes'];
        $brand=$data['brand'];
        $postdate=$data['postdate'];
        $price=$data['price'];
        $disc=$data['discount'];
        $des=$data['des'];
        $inorder=$data['inorder'];
        $status=$data['status'];
        $Img=$data['image'];
        if($status=="A"){
            $status="Active";
            $stCode='A';
        }
        else{
            $status="InActive";
            $stCode='I';
        }

        if($Img==null || $Img==""){
            $Img='https://t4.ftcdn.net/jpg/04/96/47/13/360_F_496471319_DbtjoUvKqyy2e9OfgBnK5mm2AXhKpa9m.jpg';
        }
        else{
            $Img='../../Upload/FeaturedPRD/'.$Img;
            
        }
       
    }
?>
</head>
<body>
<div class="container-fludi mt-3" style="margin-left: 10px;">
        <form action="../../model/FeaturedPrd/actionEdit.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-xl-12 bg-secondary p-2">
                    <a href="index.php" class="btn btn-success" style="margin-left: 15px;">Back</a>
                    <input type="submit" name="btnSave" value="Save" class="btn btn-success">
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 ">
                    <label for="">Category</label>
                    <select name="txtcate" class="form-control">
                        <option value="<?php echo $cateCode?>" selected><?php echo $cateName?></option>
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
                    <label for="">Brand</label>
                    <select name="txtbrand" class="form-control">
                        <option value="<?php echo $brand?>" selected><?php echo $branddes?></option>
                        <?php
                            $selectmenu="Select * from tbl_submenu Where status='A'";
                            $res=$con->query($selectmenu);
                            while($menu=$res->fetch_assoc()){
                                ?>
                                    <option value="<?php echo $menu['id']?>"><?php echo $menu['submenu']?></option>
                                <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="col-xl-4">

                </div>
                <div class="col-xl-4 ">
                    <label for="">PostDate</label>
                    <input type="date" name="txtpostdate" class="form-control" value="<?php echo $postdate?>">
                </div>
              
                <div class="col-xl-4 ">
                    <label for="">Price</label>
                    <input type="number" class="form-control" name="txtprice" value="<?php echo $price?>">
                </div>
                <div class="col-xl-4">

                </div>
                <div class="col-xl-4 ">
                    <label for="">Discount</label>
                    <input type="number" name="txtdis" class="form-control" value="<?php echo $disc?>">
                </div>
                <div class="col-xl-4 ">
                    <label for="">Status</label>
                    <select name="txtstatus" class="form-control">
                        <option value="<?php echo $stCode?>" selected><?php echo $status?></option>
                        <option value="I">InActive</option>
                        <option value="A">Active</option>
                    </select>
                </div>
                <div class="col-xl-4 ">
                    
                    </div>
                <div class="col-xl-4 ">
                    <label for="">Inorder</label>
                    <input type="text" name="txtInorder" class="form-control" value="<?php echo $inorder?>">
                </div>
                <div class="col-xl-4 ">
                    
                    </div>
                <div class="col-xl-8">
                    <label for="">Description</label>
                    <textarea name="txtdes" id="" class="form-control"><?php echo $des?></textarea>
                </div>
                <div class="col-xl-4 ">
                    
                </div>
                <div class="col-xl-4">
                    <label for="">Please select photo</label>
                    <input type="file" name="upload" class="form-control" id="photo">
                </div>
                <div class="col-xl-8">

                </div>
                <div class="col-xl-4">
                    <img src="<?php echo $Img?>" alt="" width="100%" height="100%" id="previewIMG">
                </div>
                <div class="col-xl-4" style="display: none;">
                    <input type="text" name="txtID" class="form-control" value="<?php echo $ID?>">
                </div>
            </div>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    var file= document.getElementById('photo');
    var previewIMG= document.getElementById('previewIMG');

    file.addEventListener('change',function(){
        // catch srcfile from input 
        var srcfile= this.files[0]; 
        var reader= new FileReader();
        reader.addEventListener('load',function(){
            //link srcfile to img 
            previewIMG.src=reader.result;
        })
        //return src to dispay
        reader.readAsDataURL(srcfile);
    })
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