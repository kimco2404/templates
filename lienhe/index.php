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
    $less->compileFile('less/lienhe.less', 'css/lienhe.css');
    $less->compileFile('less/343.less', 'css/343.css');
    $less->compileFile('less/300.less', 'css/300.css');
    $less->compileFile('less/337.less', 'css/337.css');
    $less->compileFile('less/331.less', 'css/331.css');
    $less->compileFile('less/332.less', 'css/332.css');
    ?>
    <link href="css/lienhe.css" rel="stylesheet" type="text/css"/>
    <link href="css/343.css" rel="stylesheet" type="text/css"/>
    <link href="css/300.css" rel="stylesheet" type="text/css"/>
    <link href="css/337.css" rel="stylesheet" type="text/css"/>
    <link href="css/331.css" rel="stylesheet" type="text/css"/>
    <link href="css/332.css" rel="stylesheet" type="text/css"/>


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

    <div class="type-331">
        <div class="container address">
            <div class="row">
                <!--LEFT ADDRESS-->
                <div class="col-sm-6 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Văn phòng Khoa<br><span>Địa chỉ</span></h2>
                        </div>
                        <div class="crossedbg"></div>
                        <div class="panel-body">
                            <address>
                                <p>
                                    <b>Khoa CNTT<br>
                                        Khu B, Cao đẳng Công nghệ Thủ Đức</b>
                                </p>
                                <ul class="itdcadd">
                                    <li>
                                        <i class="fa fa-clock-o fa-lg fa-fw"></i>&nbsp; Thứ 2 đến thứ 6, 7h00 - 11h30, 13h30 - 16h30<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Thứ 7, 7h30 - 11h
                                    </li>
                                    <li>
                                        <i class="fa fa-building fa-lg fa-fw"></i>&nbsp; 53, Võ Văn Ngân, P.Linh Chiểu,<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Q.Thủ Đức, Tp.HCM
                                    </li>
                                    <li>
                                        <i class="fa fa-phone fa-lg fa-fw"></i>&nbsp; (08) 22 158 642
                                    </li>
                                </ul>
                            </address>

                            <!--MAP CANVAS-->
                            <div id="map-canvas">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4805347001443!2d106.7560762145813!3d10.851008692270929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752797e321f8e9%3A0xb3ff69197b10ec4f!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEPDtG5nIG5naOG7hyBUaOG7pyDEkOG7qWM!5e0!3m2!1svi!2s!4v1488176391234" width="100%" height="450px" frameborder="0" style="border:2" allowfullscreen></iframe> 
                            </div>
                            <!--MAP CANVAS-->

                        </div>
                    </div>
                    <!--/END LEFT ADDRESS-->
                </div>
                <div class="col-sm-6 col-md-6"></div>
                <!--/END LEFT ADDRESS-->

                <!--RIGHT CONTACTS-->
                <div class="col-sm-6 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Liên hệ<br><span>Với chúng tôi</span></h2>
                        </div>
                        <div class="crossedbg"></div>
                        <div class="panel-body">
                            <!--CONTACT FORM-->
                            <form role="form" id="feedbackForm" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Họ và tên">
                                    <span class="help-block" style="display: none;">Please enter your name.</span>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                    <span class="help-block" style="display: none;">Please enter a valid e-mail address.</span>
                                </div>
                                <div class="form-group">
                                    <textarea rows="10" cols="100" class="form-control" id="message" name="message" placeholder="Lời nhắn"></textarea>
                                    <span class="help-block" style="display: none;">Please enter a message.</span>
                                </div>
                                <br>
                                <div class="form-group" style="margin-top: 10px;">
                                    <input type="text" class="form-control" name="captcha_code" id="captcha_code" placeholder="Vì lý do bảo mật, xin vui lòng điền mã hiển thị bên trên">
                                    <span class="help-block" style="display: none;">Please enter the code displayed within the image.</span>
                                </div>
                                <span class="help-block" style="display: none;">Please enter a the security code.</span>
                                <button type="submit" id="feedbackSubmit" name="feedbackSubmit" class="btn btn-primary btn-lg" style="display: block; margin-top: 10px;">Gửi</button>
                            </form>
                            <!--/END CONTACT FORM-->
                        </div>
                    </div>			
                </div>
                <!--/END RIGHT CONTACTS-->

            </div>
        </div>
    </div>
</div>
<!--/END RIGHT CONTACTS-->

</div>
</div>
</div>
</div>



<!--    330-->



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
                        <p>53 Võ Văn Ngân, P.Linh Chiểu, Q.Thủ Đức, Tp.HCM</p>
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
