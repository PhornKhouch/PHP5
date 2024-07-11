<?php
include '../../root/Header.php';
include '../../connection/conect.php';
?>
</head>

<body>
    <form action="../../model/MastePrd/actioncreate.php" method="post" enctype="multipart/form-data">
        <div class="container-fludi mt-3" style="margin-left: 10px;">
            <div class="row">
                <div class="col-xl-12 bg-secondary p-2">
                    <a href="index.php" class="btn btn-success" style="margin-left: 15px;">Back</a>
                    <input type="submit" name="btnSave" value="Save" class="btn btn-success">
                </div>
            </div>
            <br>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true" style="font-weight: bold;">Product Information </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false" style="font-weight: bold;">Product Stock </button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">


                    <div class="row">
                        <div class="col-xl-4 ">
                            <label for="">Category</label>
                            <select name="txtcate" class="form-control">
                                <?php
                                $selectmenu = "Select * from tbl_menu Where status='A'";
                                $res = $con->query($selectmenu);
                                while ($menu = $res->fetch_assoc()) {
                                ?>
                                    <option value="<?php echo $menu['ID'] ?>"><?php echo $menu['menu'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-xl-4 ">
                            <label for="">Brand</label>
                            <select name="txtbrand" class="form-control">
                                <?php
                                $selectmenu = "Select * from tbl_submenu Where status='A'";
                                $res = $con->query($selectmenu);
                                while ($menu = $res->fetch_assoc()) {
                                ?>
                                    <option value="<?php echo $menu['id'] ?>"><?php echo $menu['submenu'] ?></option>
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
                            <label for="">PrdName</label>
                            <input type="text" class="form-control" name='txtprdname'>
                        </div>
                        <div class="col-xl-4 ">

                        </div>
                        <div class="col-xl-4 ">
                            <label for="">Remark</label>
                            <input type="text" class="form-control" name='txtremark'>
                        </div>
                        <div class="col-xl-4 ">
                            <label for="">Inorder</label>
                            <input type="text" name="txtInorder" class="form-control">
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
                        <div class="col-xl-4">
                            <label for="">Status</label>
                            <select name="txtstatus" id="" class="form-control">
                                <option value="I">Inactive</option>
                                <option value="A">Active</option>
                            </select>
                        </div>
                        <div class="col-xl-4">
                            
                        </div>
                        <div class="col-xl-4">
                            <img src="https://t4.ftcdn.net/jpg/04/96/47/13/360_F_496471319_DbtjoUvKqyy2e9OfgBnK5mm2AXhKpa9m.jpg" alt="" width="100%" height="100%" id="previewIMG">
                        </div>
                    </div>

                </div>


                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                   
                    <div class="row">
                        <div class="col-xl-4 ">
                            <label for="">UinitCost</label>
                            <input type="number" class="form-control" name="txtunitcost">
                        </div>
                        <div class="col-xl-4 ">
                            <label for="">Unit Price</label>
                            <input type="number" class="form-control" name="txtunitprice">
                        </div>
                        <div class="col-xl-4">

                        </div>
                        <div class="col-xl-4 ">
                            <label for="">QTY</label>
                            <input type="number" name="txtqty" class="form-control">
                        </div>


                        <div class="col-xl-4 ">
                            <label for="">DiscountPrice</label>
                            <input type="number" class="form-control" name='txtdis'>
                        </div>
                        <div class="col-xl-4 ">

                        </div>
                        <div class="col-xl-4" style="transform: translate(20px,20px);">
                           
                            <input type="checkbox" checked  name="chkIsstock" class="form-check-input" style="margin-right: 10px;"> IsStock
                        </div>



                        
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

<script>
    var file = document.getElementById('photo');
    var previewIMG = document.getElementById('previewIMG');

    file.addEventListener('change', function() {
        // catch srcfile from input 
        var srcfile = this.files[0];
        var reader = new FileReader();
        reader.addEventListener('load', function() {
            //link srcfile to img 
            previewIMG.src = reader.result;
        })
        //return src to dispay
        reader.readAsDataURL(srcfile);
    })
</script>

</html>