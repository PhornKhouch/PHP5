<?php
    include("header.php");
?>
</head>
<body style="background-color: black;">
    <div class="box">

    </div>
    <div class="menu">
        <br>
        <ul class="list-unstyled components ">
            <li>
                <a href="../Dasborad/IndexDasbord.php" target="content"><i class="fa-solid fa-gauge" style="margin-right: 10px;"></i>Dasborad</a>
            </li>
            
            <!-- Set Up -->
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-cog" aria-hidden="true" style="margin-right: 10px;"></i> Set Up</a>
                <ul class="collapse list-unstyled" id="homeSubmenu" style="margin-left: 20px;">
                    <li>
                        <a href="../view/Menu/index.php" target="content"><i class="fa fa-chevron-circle-right" aria-hidden="true" style="margin-right: 10px;"></i>Menu</a>
                    </li>
                    <li>
                        <a href="../view/Submenu/index.php" target="content"><i class="fa fa-chevron-circle-right" aria-hidden="true" style="margin-right: 10px;"></i>Submenu</a>
                    </li>
                   
                </ul>
            </li>

            <!-- Product management -->
            <li class="active">
                <a href="#Order" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa-solid fa-cart-plus" style="margin-right: 10px;"></i>Product Management</a>
                <ul class="collapse list-unstyled" id="Order" style="margin-left: 20px;">
                    <li>
                        <a href="../view/NewsHomepage/index.php" target="content"><i class="fa fa-chevron-circle-right" aria-hidden="true" style="margin-right: 10px;"></i>Category</a>
                    </li>
                    <li>
                        <a href="../view/NewsCategory/index.php" target="content"><i class="fa fa-chevron-circle-right" aria-hidden="true" style="margin-right: 10px;"></i>Brand</a>
                    </li>
                   
                    <li>
                        <a href="../view/DetailNews/index.php" target="content"><i class="fa fa-chevron-circle-right" aria-hidden="true" style="margin-right: 10px;"></i>Feature Product</a>
                    </li>
                    <li>
                        <a href="../view/NewsHomepage/index.php" target="content"><i class="fa fa-chevron-circle-right" aria-hidden="true" style="margin-right: 10px;"></i>Product Master</a>
                    </li>
                    <li>
                        <a href="../view/NewsCategory/index.php" target="content"><i class="fa fa-chevron-circle-right" aria-hidden="true" style="margin-right: 10px;"></i>Product Detail</a>
                    </li>
                   
                    
                </ul>
            </li>

            <!-- Manage User -->
            <li class="active">
                <a href="#User" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Manage User</a>
                <ul class="collapse list-unstyled" id="User" style="margin-left: 20px;">
                    <li>
                        <a href="../AddUserAdmin/index.php" target="content">User Admin</a>
                    </li>
                    <li>
                        <a href="../AddNormalUser/index.php" target="content">User</a>
                    </li>
                </ul>
            </li>

            <!-- Report -->
            <li class="active">
                <a href="#Report" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Report</a>
                <ul class="collapse list-unstyled" id="Report" style="margin-left: 20px;">
                    <li>
                        <a href="Customer/index.php" target="content">Sale Product</a>
                    </li>
                    <li>
                        <a href="Customer/index.php" target="content">Stock Product</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
   
</body>
<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        // $('#sidebarCollapse').on('click', function () {
        //     $('#sidebar, #content').toggleClass('active');
        //     $('.collapse.in').toggleClass('in');
        //     $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        // });
    });
</script>
</html>