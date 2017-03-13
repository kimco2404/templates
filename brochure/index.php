<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>  

    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/brochure.less', 'css/brochure.css');
    $less->compileFile('less/343.less', 'css/343.css');
    $less->compileFile('less/300.less', 'css/300.css');
    $less->compileFile('less/337.less', 'css/337.css');

    $less->compileFile('less/341.less', 'css/341.css');
    ?>
    <link href="css/brochure.css" rel="stylesheet" type="text/css"/>
    <link href="css/343.css" rel="stylesheet" type="text/css"/>
    <link href="css/300.css" rel="stylesheet" type="text/css"/>
    <link href="css/337.css" rel="stylesheet" type="text/css"/>  
    <link href="css/341.css" rel="stylesheet" type="text/css"/>  
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>   
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/turn.min.js" type="text/javascript"></script>

</head>

<body>
    <!--    Menu 342-->
    <div class="type-342">
        <div class="container top-menu">
            <!--TOP MENU-->
            <!--BUTTON MENU-->
            <div class="">
                <span class="fa fa-navicon btn-menu" data-toggle="collapse" data-target=".collapse-top-menu"></span>
                <div class="clear"></div>
            </div>

            <!--END BUTTON MENU-->            
            <!--MENU-->
            <div class="menu">
                <ul class="nav-menu collapse collapse-top-menu">
                    <li class="item active"><a href="../trangchu/"> Trang Chủ </a></li>
                    <li class="item"><a href="../gioithieu/"> Giới Thiệu </a></li>
                    <li class="item"><a href="../tuyensinh/"> Tuyển Sinh </a></li>
                    <li class="item"><a href="../brochure/"> Brochure </a></li>
                    <li class="item"><a href="../lienhe/"> Liên Hệ </a></li>
                    <div class="clear"></div>
                </ul>
                <div class="clear"></div>
            </div>
            <!--END MENU-->
            <!--END TOP MENU-->

        </div>
    </div>

    <!--    Menu 343-->
    <div class="type-343">
        <div class="container top-menu" style="position: relative">
            <!--MENU-->
            <div class="left-bg">&nbsp;</div>
            <!--END MENU-->
            <div class="container top-menu">
                <!--LOGO-->
                <div class="logo">
                    <a href="#">
                        <img alt="TDC-Khoa CNTT logo" src="images/logo.png">
                    </a>
                    <span class="triangle-arrow">&nbsp;</span>
                </div>
                <!--END LOGO-->
                <!--MAIN MENU-->
                <div class="">
                    <span class="fa fa-navicon btn-menu" data-toggle="collapse" data-target=".collapse-top-menu"></span>
                    <div class="clear"></div>
                </div>
                <div class="navbar-collapse ">
                    <ul class="nav navbar-nav navbar-right collapse collapse-top-menu"> 
                        <li class="item active"><a href="../tintuc/">TIN TỨC</a></li>
                        <li class="item"><a href="../giangvien/">GIẢNG VIÊN</a></li>
                        <li class="item"><a href="../sinhvien/">SINH VIÊN</a></li>
                        <li class="item"><a href="../chuyende/">CHUYÊN ĐỀ</a></li>
                        <li class="item"><a href="../daotao/">ĐÀO TẠO</a></li>
                    </ul>
                </div>
                <!--END MAIN MENU-->              
            </div>
        </div>

    </div>


    <!--    330-->

    <div class="type-341">
        <div class="container training">
            <div class="container brochure">
                <div class="row">
                    <!--BROCHURE-->
                    <div class="magazine-viewport">
                        <div class="container">
                            <div class="magazine">
                                <!-- Next button -->
                                <div ignore="1" class="next-button"></div>
                                <!-- Previous button -->
                                <div ignore="1" class="previous-button"></div>
                            </div>
                        </div>
                    </div>
                    <div class="flipbook-viewport" style="background:url('');">
                        <div class="container_mag">
                            <div class="flipbook">
                                <div style="background-image:url(images/iTDCcatalog_print1.jpg)"></div>
                                <div style="background-image:url(images/iTDCcatalog_print2.jpg)"></div>
                                <div style="background-image:url(images/iTDCcatalog_print3.jpg)"></div>
                                <div style="background-image:url(images/iTDCcatalog_print4.jpg)"></div>
                                <div style="background-image:url(images/iTDCcatalog_print5.jpg)"></div>
                                <div style="background-image:url(images/iTDCcatalog_print6.jpg)"></div>
                                <div style="background-image:url(images/iTDCcatalog_print7.jpg)"></div>
                                <div style="background-image:url(images/iTDCcatalog_print8.jpg)"></div>
                                <div style="background-image:url(images/iTDCcatalog_print9.jpg)"></div>
                                <div style="background-image:url(images/iTDCcatalog_print10.jpg)"></div>
                                <div style="background-image:url(images/iTDCcatalog_print11.jpg)"></div>
                                <div style="background-image:url(images/iTDCcatalog_print12.jpg)"></div>
                                <div style="background-image:url(images/iTDCcatalog_print13.jpg)"></div>
                                <div style="background-image:url(images/iTDCcatalog_print14.jpg)"></div>
                                <div style="background-image:url(images/iTDCcatalog_print15.jpg)"></div>
                                <div style="background-image:url(images/iTDCcatalog_print16.jpg)"></div>
                            </div>
                        </div>
                    </div>                
                </div>
                <!--/END BROCHURE-->
            </div>
        </div>
    </div>




    <!--    300-->
    <div class="type-300">
        <!--FOOTER-->
        <footer>
            <div class="container intro">
                <div class="row">
                    <!--FOOTER INTRODUCTION-->
                    <div class="col-md-4">
                        <div class="footer-info">
                            <h4>KHOA CÔNG NGHỆ THÔNG TIN<br>
                                Trường Cao Đẳng Công Nghệ Thủ Đức</h4>
                            <p>53 Võ Văn Ngân, P.Linh Chiểu, Q.Thủ �?ức, Tp.HCM</p>
                            <p>Điện thoại: (08) 22 158 642</p>
                            <p>Fax: 08.38962474</p>
                            <p>Email: cntt@mail.tdc.edu.vn</p>
                        </div>
                    </div>
                    <!--/END FOOTER INTRODUCTION-->

                    <!--FOOTER LINK-->
                    <div class="col-md-4">
                        <ul class="bottom-link">
                            <li><a href="#">Giới thiệu</a></li>
                            <li><a href="#">Trường Cao Đẳng Công Nghệ Thủ Đức</a></li>
                        </ul>
                    </div>
                    <!--/END FOOTER LINK-->

                    <!--FOOTER COPYRIGHT-->
                    <div class="col-md-4 ">
                        <ul class="bottom-link">
                            <li><a href="#">Liên hệ</a></li>
                            <li>2017 <a href="#">Khoa Công nghệ thông tin | Cao đẳng Công nghệ Thủ Đức</a> All Rights Reserved.</li>
                        </ul>
                    </div>
                    <!--/END FOOTER COPYRIGHT-->
                </div>
            </div>
        </footer>
        <!--/END FOOTER-->
    </div>


</body>
<script>
    var oTurn = $(".flipbook").turn({
        width: 960,
        height: 338,
        elevation: 50,
        gradients: true,
        autoCenter: true,
        next: true
    });

    $("#prev").click(function (e) {
        e.preventDefault();
        oTurn.turn("previous");
    });

    $("#next").click(function (e) {
        e.preventDefault();
        oTurn.turn("next");
    });
</script>
