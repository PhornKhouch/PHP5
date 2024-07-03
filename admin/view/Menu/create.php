<?php
    include '../../root/Header.php';
?>
</head>
<body>
    <div class="container-fludi mt-3" style="margin-left: 10px;">
        <form action="../../model/Menu/actioncreate.php" method="post">
            <div class="row">
                <div class="col-xl-12 bg-secondary p-2">
                    <a href="index.php" class="btn btn-success" style="margin-left: 15px;">Back</a>
                    <input type="submit" name="btnSave" value="Save" class="btn btn-success">
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 ">
                    <label for="">MenuID</label>
                    <input type="text" disabled name="txtmenuid" class="form-control">
                </div>
                <div class="col-xl-4 ">
                    <label for="">Menu</label>
                    <input type="text" name="txtmenu" class="form-control">
                </div>
                <div class="col-xl-4 ">
                    
                </div>
                <div class="col-xl-4 ">
                    <label for="">MenuKH</label>
                    <input type="text" name="txtmenukh" class="form-control">
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
            </div>
        </form>
    </div>
</body>
</html>