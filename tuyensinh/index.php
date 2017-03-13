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
    $less->compileFile('less/tuyensinh.less', 'css/tuyensinh.css');
    $less->compileFile('less/343.less', 'css/343.css');
    $less->compileFile('less/300.less', 'css/300.css');
    $less->compileFile('less/337.less', 'css/337.css');
    $less->compileFile('less/330.less', 'css/330.css');
    $less->compileFile('less/340.less', 'css/340.css');
    ?>
    <link href="css/tuyensinh.css" rel="stylesheet" type="text/css"/>
    <link href="css/343.css" rel="stylesheet" type="text/css"/>
    <link href="css/300.css" rel="stylesheet" type="text/css"/>
    <link href="css/337.css" rel="stylesheet" type="text/css"/>
    <link href="css/330.css" rel="stylesheet" type="text/css"/>
    <link href="css/340.css" rel="stylesheet" type="text/css"/>
    

    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>   

    <script src="js/bootstrap.min.js" type="text/javascript"></script>

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
    <div class="type-330">
        <!--LIST OF HEADER-->
        <div class="container">
            <div class="title-tuyensinh">
                <div class="ribbon">
                    <div class="ribbon-stitches-top"></div>
                    <strong class="ribbon-content">
                        <h1>
                            Tuyển sinh 2017
                        </h1>
                    </strong>
                    <div class="ribbon-stitches-bottom"></div>
                </div>
            </div>
            <!--IMAGES-->
            <div>
                <img src="images/tdcwhyus.gif" alt="tdc-tuyensinh-2015" style="width: 100%; max-width: 100%;">
                <img src="images/tdc-tuyensinh.gif" alt="tdc-tuyensinh-2015-tong-quan" style="width: 100%; max-width: 100%;">
            </div>
        </div>
        <!--END OF HEADER-->
    </div>
    
    <div class="type-340">
        <!--LIST OF HEADER-->
        <div class="container tuyen-sinh">
            <header class="section-heading">
                <div>
                    <span class="spacer"></span>
                    <h2>BẬC CAO ĐẲNG</h2>
                    <span class="spacer"></span>
                </div>
            </header>
            <!--LIST OF TAB-->
            <div class="ready">
                <ul class="tabs tab3">
                    <li>
                        <div class="fold">
                            <h3>Ngành Công nghệ thông tin</h3>
                            <p>Trang bị cho sinh viên kiến thức và kỹ năng để<br>trở thành nhà phát triển phần mềm chuyên<br>nghiệp.</p>
                        </div>
                        <a href="#" class="more">Xem thêm</a>
                    </li>
                    <li>
                        <div class="fold">
                            <h3>Ngành Truyền thông và Mạng máy tính</h3>
                            <p>Sinh viên có khả năng nghiên cứu, thiết kế, phát triển và triển khai các ứng dụng về các công nghệ Mạng máy tính.</p>
                        </div>
                        <a href="#" class="more">Xem thêm</a>
                    </li>
                    <li>
                        <div class="fold">
                            <h3>Ngành Thiết kế Đồ họa</h3>
                            <p>Sinh viên có kiến thức nền tảng và chuyên sâu trong<br>các lĩnh vực thiết kế quảng cáo, phục vụ cho rất nhiều mục đích như: truyền thông, quảng cáo, ...</p>
                        </div>
                        <a href="#" class="more">Xem thêm</a>
                    </li>
                    <div style="clear:both;"></div>
                </ul>
            </div>
        </div>

        <!--END OF HEADER-->
    </div>



    <div class="type-340">
        <!--LIST OF HEADER-->
        <div class="container tuyen-sinh">
            <header class="section-heading">
                <div>
                    <span class="spacer"></span>
                    <h2>BẬC TRUNG CẤP CHUYÊN NGHIỆP</h2>
                    <span class="spacer"></span>
                </div>
            </header>
            <!--LIST OF TAB-->
            <div class="ready">
                <ul class="tabs tab3">
                    <li>
                        <div class="fold">
                            <h3>Ngành Tin Học Ứng Dụng</h3>
                            <p>Trang bị cho sinh viên kiến thức và kỹ năng để<br>trở thành nhà phát triển phần mềm chuyên<br>nghiệp.</p>
                        </div>
                        <a href="#" class="more">Xem thêm</a>
                    </li>
                    <li>
                        <div class="fold">
                            <h3>Ngành Truyền thông và Mạng máy tính</h3>
                            <p>Sinh viên có khả năng nghiên cứu, thiết kế, phát triển và triển khai các ứng dụng về các công nghệ Mạng máy tính.</p>
                        </div>
                        <a href="#" class="more">Xem thêm</a>
                    </li>
                    <li>
                        <div class="fold">
                            <h3>Ngành Truyền Thông Đa Phương Tiện</h3>
                            <p>Sinh viên có kiến thức nền tảng và chuyên sâu trong<br>các lĩnh vực thiết kế quảng cáo, phục vụ cho rất nhiều mục đích như: truyền thông, quảng cáo, ...</p>
                        </div>
                        <a href="#" class="more">Xem thêm</a>
                    </li>
                    <div style="clear:both;"></div>
                </ul>
            </div>
        </div>

        <!--END OF HEADER-->
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
