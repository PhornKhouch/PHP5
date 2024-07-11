<?php
    include '../../root/Header.php';
    include '../../connection/conect.php';
?>
</head>
<body>
    <div class="container-fludi mt-3" style="margin-left: 10px;">
        <form action="../../model/FeaturedPrd/actioncreate.php" method="post" enctype="multipart/form-data">
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
                    <input type="date" name="txtpostdate" class="form-control">
                </div>
              
                <div class="col-xl-4 ">
                    <label for="">Price</label>
                    <input type="number" class="form-control" name="txtprice">
                </div>
                <div class="col-xl-4">

                </div>
                <div class="col-xl-4 ">
                    <label for="">Discount</label>
                    <input type="number" name="txtdis" class="form-control">
                </div>
                <div class="col-xl-4 ">
                    <label for="">Status</label>
                    <select name="txtstatus" class="form-control">
                        <option value="I">InActive</option>
                        <option value="A">Active</option>
                    </select>
                </div>
                <div class="col-xl-4 ">
                    
                    </div>
                <div class="col-xl-4 ">
                    <label for="">Inorder</label>
                    <input type="text" name="txtInorder" class="form-control">
                </div>
                <div class="col-xl-4 ">
                    
                    </div>
                <div class="col-xl-8">
                    <label for="">Description</label>
                    <textarea name="txtdes" id="" class="form-control"></textarea>
                </div>
                <div class="col-xl-4 ">
                    
                </div>
                <div class="col-xl-4">
                    <label for="">Please select photo</label>
                    <input type="file" name="upload" class="form-control" id="photo">
                </div>
                <div class="col-xl8">

                </div>
                <div class="col-xl-4">
                    <img src="https://t4.ftcdn.net/jpg/04/96/47/13/360_F_496471319_DbtjoUvKqyy2e9OfgBnK5mm2AXhKpa9m.jpg" alt="" width="100%" height="100%" id="previewIMG">
                </div>
            </div>
        </form>
    </div>
</body>

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
</script>
</html>