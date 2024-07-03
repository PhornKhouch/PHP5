<?php
include '../Admin/connection/conect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabay News</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Battambang:wght@300&family=Koulen&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Header page -->
    <section class="header-full-container">
        <div class="header-container">
            <div class="logo">
                <img src="img/logo.png" alt="">
            </div>
        </div>
    </section>

    <!-- menu news -->
    <section class="menu-full-container">
        <div class="menu-container">
            <ul>
                <li style="background-color: brown;">
                    <a href=""><i class="fa fa-home" aria-hidden="true"></i></a>
                </li>
                <?php
                $SELECT = "SELECT * FROM `tbl_menu` WHERE status='Active' ORDER BY Inorder ASC";
                $res = $con->query($SELECT);
                while ($Data = $res->fetch_assoc()) {
                ?>
                    <li>
                        <a href=""><?php echo $Data['MenuKH'] ?></a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </section>

    <!-- homepage news -->
    <section class="homepage-container">
        <div class="content-new">
            <?php
            $SELECT = "
            SELECT 
            C.title,C.SubTitle,m.MenuKH,c.photo
            from tbl_contenthomepage  C
            INNER join tbl_menu M ON C.MenuID=M.MenuID
            
            Where C.status='Active'  ORDER by postdate LIMIT 4
            ";
            $result1 = $con->query($SELECT);
            while ($dataRow = $result1->fetch_assoc()) {
            ?>
                <div class="content1 bg-img" style="width: 50%;background-image: url('../Admin/Upload/NewHomepage/<?php echo $dataRow['photo'] ?>')">
                    <div class="title">
                        <p><?php echo $dataRow['MenuKH'] ?></p>
                    </div>
                    <h3><?php echo $dataRow['title'] ?><br>
                        <span><?php echo $dataRow['SubTitle'] ?></span>
                    </h3>
                </div>
            <?php
            }
            ?>


        </div>
        <div class="ads">
            <div class="ads1">
                <img src="img/ads1.jpg" alt="">
            </div>
            <div class="ads2">
                <img src="img/ads1.jpg" alt="">
            </div>
        </div>
    </section>


    <!-- Vdo content-news -->
    <section class="vdo-container-new">
        <div class="content-title">
            <div class="title">
                <p>វិឌីអូ</p>
            </div>
        </div>
        <div class="content-news-vdo">
            <div class="content-new-top">
                <div class="box-new-items">
                    <div class="pic-news">
                        <img src="img/3.jpg" alt="">
                    </div>
                    <div class="des-news">
                        <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                    </div>
                </div>
                <div class="box-new-items">
                    <div class="pic-news">
                        <img src="img/3.jpg" alt="">
                    </div>
                    <div class="des-news">
                        <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                    </div>
                </div>
                <div class="box-new-items">
                    <div class="pic-news">
                        <img src="img/3.jpg" alt="">
                    </div>
                    <div class="des-news">
                        <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                    </div>
                </div>
            </div>
            <div class="content-new-bottom">
                <div class="left-news">
                    <div class="small-news">
                        <div class="pic">
                            <img src="img/3.jpg" alt="">
                        </div>
                        <div class="des">
                            <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                        </div>
                    </div>
                    <div class="small-news">
                        <div class="pic">
                            <img src="img/3.jpg" alt="">
                        </div>
                        <div class="des">
                            <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                        </div>
                    </div>
                    <div class="small-news">
                        <div class="pic">
                            <img src="img/3.jpg" alt="">
                        </div>
                        <div class="des">
                            <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                        </div>
                    </div>
                    <div class="small-news">
                        <div class="pic">
                            <img src="img/3.jpg" alt="">
                        </div>
                        <div class="des">
                            <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                        </div>
                    </div>
                    <div class="small-news">
                        <div class="pic">
                            <img src="img/3.jpg" alt="">
                        </div>
                        <div class="des">
                            <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                        </div>
                    </div>
                    <div class="small-news">
                        <div class="pic">
                            <img src="img/3.jpg" alt="">
                        </div>
                        <div class="des">
                            <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                        </div>
                    </div>
                    <div class="small-news">
                        <div class="pic">
                            <img src="img/3.jpg" alt="">
                        </div>
                        <div class="des">
                            <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                        </div>
                    </div>
                    <div class="small-news">
                        <div class="pic">
                            <img src="img/3.jpg" alt="">
                        </div>
                        <div class="des">
                            <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                        </div>
                    </div>
                </div>
                <div class="right-ads">

                </div>
            </div>
        </div>
    </section>


    <!-- komsan content-news -->
    <section class="komsan-container">
        <div class="content-title" ​ style="border-color: palevioletred;">
            <div class="title" style="background-color: palevioletred;">
                <p>កម្សាន្ត</p>
            </div>
        </div>
        <div class="content-komsan-news">
            <?php
            $select = "SELECT * FROM `tbl_categorynews` WHERE remark!='' ORDER BY postdate DESC LIMIT 1";
            $result = $con->query($select);
            while($dataNews = $result->fetch_assoc()){
                ?>
                <div class="big-news">
                    <div class="pic">
                        <a href="Detailpage.php">
                            <img src="../Admin/Upload/NewCatePhoto/<?php echo $dataNews['photo']?>" alt="">
                        </a>
                        
                    </div>
                    <div class="news-des">
                        <p><?php echo $dataNews['subtitle']?></p>
                    </div>
                </div>
                <?php
            }
            
            ?>

            <div class="small-news">
            <?php
            $select = "SELECT * FROM `tbl_categorynews` WHERE remark='' and status='A'  ORDER BY postdate DESC LIMIT 8";
            $result = $con->query($select);
            while($dataNews = $result->fetch_assoc()){
                ?>
                <div class="items">
                    <div class="pic">
                        <a href="Detailpage.php?id=<?php echo $dataNews['id']?>&&action=Detail">
                            <img src="../Admin/Upload/NewCatePhoto/<?php echo $dataNews['photo']?>" alt="">
                        </a>
                    </div>
                    <div class="des-item">
                        <p><?php echo $dataNews['subtitle']?></p>
                    </div>
                </div>
                <?php
            }
            
            ?>
            </div>
        </div>
    </section>

    <!-- komsan content-news -->
    <section class="komsan-container">
        <div class="content-title" ​ style="border-color: palevioletred;">
            <div class="title" style="background-color: palevioletred;">
                <p>កម្សាន្ត</p>
            </div>
        </div>
        <div class="content-komsan-news">
            <div class="big-news">
                <div class="pic">
                    <img src="img/2.jpg" alt="">
                </div>
                <div class="news-des">
                    <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                </div>
            </div>
            <div class="small-news">
                <div class="items">
                    <div class="pic">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div class="des-item">
                        <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                    </div>
                </div>
                <div class="items">
                    <div class="pic">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div class="des-item">
                        <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                    </div>
                </div>
                <div class="items">
                    <div class="pic">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div class="des-item">
                        <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                    </div>
                </div>
                <div class="items">
                    <div class="pic">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div class="des-item">
                        <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                    </div>
                </div>
                <div class="items">
                    <div class="pic">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div class="des-item">
                        <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                    </div>
                </div>
                <div class="items">
                    <div class="pic">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div class="des-item">
                        <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                    </div>
                </div>
                <div class="items">
                    <div class="pic">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div class="des-item">
                        <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                    </div>
                </div>
                <div class="items">
                    <div class="pic">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div class="des-item">
                        <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- komsan content-news -->
    <section class="komsan-container">
        <div class="content-title" ​ style="border-color: palevioletred;">
            <div class="title" style="background-color: palevioletred;">
                <p>កម្សាន្ត</p>
            </div>
        </div>
        <div class="content-komsan-news">
            <div class="big-news">
                <div class="pic">
                    <img src="img/2.jpg" alt="">
                </div>
                <div class="news-des">
                    <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                </div>
            </div>
            <div class="small-news">
                <div class="items">
                    <div class="pic">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div class="des-item">
                        <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                    </div>
                </div>
                <div class="items">
                    <div class="pic">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div class="des-item">
                        <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                    </div>
                </div>
                <div class="items">
                    <div class="pic">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div class="des-item">
                        <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                    </div>
                </div>
                <div class="items">
                    <div class="pic">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div class="des-item">
                        <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                    </div>
                </div>
                <div class="items">
                    <div class="pic">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div class="des-item">
                        <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                    </div>
                </div>
                <div class="items">
                    <div class="pic">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div class="des-item">
                        <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                    </div>
                </div>
                <div class="items">
                    <div class="pic">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div class="des-item">
                        <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                    </div>
                </div>
                <div class="items">
                    <div class="pic">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div class="des-item">
                        <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- komsan content-news -->
    <section class="komsan-container">
        <div class="content-title" ​ style="border-color: palevioletred;">
            <div class="title" style="background-color: palevioletred;">
                <p>កម្សាន្ត</p>
            </div>
        </div>
        <div class="content-komsan-news">
            <div class="big-news">
                <div class="pic">
                    <img src="img/2.jpg" alt="">
                </div>
                <div class="news-des">
                    <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                </div>
            </div>
            <div class="small-news">
                <div class="items">
                    <div class="pic">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div class="des-item">
                        <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                    </div>
                </div>
                <div class="items">
                    <div class="pic">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div class="des-item">
                        <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                    </div>
                </div>
                <div class="items">
                    <div class="pic">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div class="des-item">
                        <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                    </div>
                </div>
                <div class="items">
                    <div class="pic">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div class="des-item">
                        <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                    </div>
                </div>
                <div class="items">
                    <div class="pic">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div class="des-item">
                        <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                    </div>
                </div>
                <div class="items">
                    <div class="pic">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div class="des-item">
                        <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                    </div>
                </div>
                <div class="items">
                    <div class="pic">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div class="des-item">
                        <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                    </div>
                </div>
                <div class="items">
                    <div class="pic">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div class="des-item">
                        <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- komsan content-news -->
    <section class="komsan-container">
        <div class="content-title" ​ style="border-color: palevioletred;">
            <div class="title" style="background-color: palevioletred;">
                <p>កម្សាន្ត</p>
            </div>
        </div>
        <div class="content-komsan-news">
            <div class="big-news">
                <div class="pic">
                    <img src="img/2.jpg" alt="">
                </div>
                <div class="news-des">
                    <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                </div>
            </div>
            <div class="small-news">
                <div class="items">
                    <div class="pic">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div class="des-item">
                        <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                    </div>
                </div>
                <div class="items">
                    <div class="pic">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div class="des-item">
                        <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                    </div>
                </div>
                <div class="items">
                    <div class="pic">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div class="des-item">
                        <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                    </div>
                </div>
                <div class="items">
                    <div class="pic">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div class="des-item">
                        <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                    </div>
                </div>
                <div class="items">
                    <div class="pic">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div class="des-item">
                        <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                    </div>
                </div>
                <div class="items">
                    <div class="pic">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div class="des-item">
                        <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                    </div>
                </div>
                <div class="items">
                    <div class="pic">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div class="des-item">
                        <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                    </div>
                </div>
                <div class="items">
                    <div class="pic">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div class="des-item">
                        <p>វត្ថុសិល្បៈ​ក្វាត​ជិត ៧០០០គ្រាប់​ដែល​រកឃើញ​នៅ​ប្រាសាទ​កណ្តាល​ស្រះស្រង់ នឹង​ត្រូវដាក់តាំង​បង្ហាញ</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- footer  news-->
    <footer class="footer-news">
        <div class="footer-container">
            <div class="box1">
                <img src="img/footer-logo.png" alt="">
                <h5>​© រក្សា​សិទ្ធិ​គ្រប់​យ៉ាង​ដោយ​ Sabay ឆ្នាំ​២០២៤</h5>
                <small>គោលការណ៍​ភាព​ឯកជន | Privacy Policy</small>
                <small>អាសយដ្ឋាន <br>
                    អគារ​លេខ ៣០៨ មហាវិថីព្រះមុន្នីវង្ស <br>
                    សង្កាត់បឹងរាំង ខណ្ឌដូនពេញ</small>
            </div>
            <div class="box2">

            </div>
            <div class="box3">

            </div>
        </div>
    </footer>
</body>

</html>