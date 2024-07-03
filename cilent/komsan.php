<?php
    include '../Admin/connection/conect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
                    <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i></a>
                </li>
                <?php
                    $select="SELECT * FROM `tbl_menu` WHERE  status='A' ORDER by Inorder ASC";
                    $result=$con->query($select);
                    while($data=$result->fetch_assoc()){
                        ?>
                            <li>
                                <a href="<?php echo $data['link']?>"><?php echo $data['MenuKH']?></a>
                            </li>
                        <?php
                    }
                
                ?>
            </ul>
        </div>
    </section>


    <section class="container-all">
        <div class="left-news">
            <div class="box-title">
                <div class="title">
                    <p>កម្សាន្ត</p>
                </div>
            </div>
            <div class="row-news">
                <div class="top-contents">
                    <div class="new1">
                        <div class="picture">
                            <img src="img/4.jpg" alt="">
                        </div>
                        <div class="des">
                            <p>ម៉ាកយីហោល្បីលំដាប់ពិភពលោក New Balance ត្រៀមខ្លួនវាយលុកទីផ្សារកម្ពុជា!</p>
                        </div>
                    </div>
                    <div class="new1">
                        <div class="picture">
                            <img src="img/4.jpg" alt="">
                        </div>
                        <div class="des">
                            <p>ម៉ាកយីហោល្បីលំដាប់ពិភពលោក New Balance ត្រៀមខ្លួនវាយលុកទីផ្សារកម្ពុជា!</p>
                        </div>
                    </div>
                </div>



                <?php
                    $Select="SELECT * FROM `tbl_categorynews` WHERE STATUS='A' AND menuid='ENT' ORDER by postdate DESC ";
                    $rs=$con->query($Select);
                    while($data=$rs->fetch_assoc()){
                        ?>
                        <div class="Row-sub-news">
                            <div class="picture">
                                <a href="Detailpage.php?id=<?php echo $data['id']?>">
                                    <img src="../Admin/Upload/NewCatePhoto/<?php echo $data['photo']?>" alt="">
                                </a>
                            </div>
                            <div class="descrip">
                                <p>
                                    <?php echo $data['Description']?>
                                </p>
                            </div>
                        </div>
                        <?php

                    }
                ?>
                

            </div>
        </div>
    </section>

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