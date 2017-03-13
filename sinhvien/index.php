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
    $less->compileFile('less/sinhvien.less', 'css/sinhvien.css');
    $less->compileFile('less/343.less', 'css/343.css');
    $less->compileFile('less/300.less', 'css/300.css');
    $less->compileFile('less/312.less', 'css/312.css');
    $less->compileFile('less/321.less', 'css/321.css');
    $less->compileFile('less/322.less', 'css/322.css');
    $less->compileFile('less/323.less', 'css/323.css');
    $less->compileFile('less/324.less', 'css/324.css');
    $less->compileFile('less/326.less', 'css/326.css');
    ?>
    <link href="css/sinhvien.css" rel="stylesheet" type="text/css"/>
    <link href="css/343.css" rel="stylesheet" type="text/css"/>
    <link href="css/300.css" rel="stylesheet" type="text/css"/>
    <link href="css/312.css" rel="stylesheet" type="text/css"/>
    <link href="css/321.css" rel="stylesheet" type="text/css"/>
    <link href="css/322.css" rel="stylesheet" type="text/css"/>
    <link href="css/323.css" rel="stylesheet" type="text/css"/>
    <link href="css/324.css" rel="stylesheet" type="text/css"/>
    <link href="css/326.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Prata" />
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
                        <li class="item active"><a href="../tintuc">TIN TỨC</a></li>
                        <li class="item"><a href="../giangvien">GIẢNG VIÊN</a></li>
                        <li class="item"><a href="../sinhvien">SINH VIÊN</a></li>
                        <li class="item"><a href="../chuyende">CHUYÊN ĐỀ</a></li>
                        <li class="item"><a href="../daotao">ĐÀO TẠO</a></li>
                    </ul>
                </div>
                <!--END MAIN MENU-->              
            </div>
        </div>

    </div>
    
    <div class="type-312">
        <div class="container news">
            <div class="row">
                <!--LIST NEWS-->
                <div class="col-md-8">
                    <div class="list_news">
                        <div class="list_new_view">
                            <div class="row">
                                <!--THE IMAGES OF THE ARTICLE-->
                                <div class="col-md-5">
                                    <div class="top_news_block_thumb">
                                        <img src="images/posts-1.jpg" alt=""/>
                                    </div>
                                </div>
                                <!--END THE IMAGES OF THE ARTICLE-->
                                <!--ARTICLE CONTENT-->
                                <div class="col-md-7 top_news_block_desc">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-3 topnewstime">
                                            <span class="topnewsdate">20</span><br>
                                            <span class="topnewsmonth">Tháng 10</span><br>
                                        </div>
                                        <div class="col-md-9 col-xs-9 shortdesc">
                                            <h4>
                                                <a href="#">Săn lùng kỹ sư công nghệ thông tin</a>
                                            </h4>
                                            <p>Navigos Search vừa công bố nhu cầu tuyển dụng nhân sự trung và cao cấp tại thị trường Việt Nam quý III/2016.<a href="#">[...]</a></p>
                                        </div>
                                    </div>
                                </div>
                                <!--END ARTICLE CONTENT-->
                            </div>
                        </div>
                        <div class="list_new_view">
                            <div class="row">
                                <!--THE IMAGES OF THE ARTICLE-->
                                <div class="col-md-5">
                                    <div class="top_news_block_thumb">
                                        <img src="images/posts-1.jpg" alt=""/>
                                    </div>
                                </div>
                                <!--END THE IMAGES OF THE ARTICLE-->
                                <!--ARTICLE CONTENT-->
                                <div class="col-md-7 top_news_block_desc">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-3 topnewstime">
                                            <span class="topnewsdate">20</span><br>
                                            <span class="topnewsmonth">Tháng 10</span><br>
                                        </div>
                                        <div class="col-md-9 col-xs-9 shortdesc">
                                            <h4>
                                                <a href="#">Săn lùng kỹ sư công nghệ thông tin</a>
                                            </h4>
                                            <p>Navigos Search vừa công bố nhu cầu tuyển dụng nhân sự trung và cao cấp tại thị trường Việt Nam quý III/2016.<a href="#">[...]</a></p>
                                        </div>
                                    </div>
                                </div>
                                <!--END ARTICLE CONTENT-->
                            </div>
                        </div>
                        <div class="list_new_view">
                            <div class="row">
                                <!--THE IMAGES OF THE ARTICLE-->
                                <div class="col-md-5">
                                    <div class="top_news_block_thumb">
                                        <img src="images/posts-1.jpg" alt=""/>
                                    </div>
                                </div>
                                <!--END THE IMAGES OF THE ARTICLE-->
                                <!--ARTICLE CONTENT-->
                                <div class="col-md-7 top_news_block_desc">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-3 topnewstime">
                                            <span class="topnewsdate">20</span><br>
                                            <span class="topnewsmonth">Tháng 10</span><br>
                                        </div>
                                        <div class="col-md-9 col-xs-9 shortdesc">
                                            <h4>
                                                <a href="#">Săn lùng kỹ sư công nghệ thông tin</a>
                                            </h4>
                                            <p>Navigos Search vừa công bố nhu cầu tuyển dụng nhân sự trung và cao cấp tại thị trường Việt Nam quý III/2016.<a href="#">[...]</a></p>
                                        </div>
                                    </div>
                                </div>
                                <!--END ARTICLE CONTENT-->
                            </div>
                        </div>
                        <div class="list_new_view">
                            <div class="row">
                                <!--THE IMAGES OF THE ARTICLE-->
                                <div class="col-md-5">
                                    <div class="top_news_block_thumb">
                                        <img src="images/posts-1.jpg" alt=""/>
                                    </div>
                                </div>
                                <!--END THE IMAGES OF THE ARTICLE-->
                                <!--ARTICLE CONTENT-->
                                <div class="col-md-7 top_news_block_desc">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-3 topnewstime">
                                            <span class="topnewsdate">20</span><br>
                                            <span class="topnewsmonth">Tháng 10</span><br>
                                        </div>
                                        <div class="col-md-9 col-xs-9 shortdesc">
                                            <h4>
                                                <a href="#">Săn lùng kỹ sư công nghệ thông tin</a>
                                            </h4>
                                            <p>Navigos Search vừa công bố nhu cầu tuyển dụng nhân sự trung và cao cấp tại thị trường Việt Nam quý III/2016.<a href="#">[...]</a></p>
                                        </div>
                                    </div>
                                </div>
                                <!--END ARTICLE CONTENT-->
                            </div>
                        </div>
                        <div class="list_new_view">
                            <div class="row">
                                <!--THE IMAGES OF THE ARTICLE-->
                                <div class="col-md-5">
                                    <div class="top_news_block_thumb">
                                        <img src="images/posts-1.jpg" alt=""/>
                                    </div>
                                </div>
                                <!--END THE IMAGES OF THE ARTICLE-->
                                <!--ARTICLE CONTENT-->
                                <div class="col-md-7 top_news_block_desc">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-3 topnewstime">
                                            <span class="topnewsdate">20</span><br>
                                            <span class="topnewsmonth">Tháng 10</span><br>
                                        </div>
                                        <div class="col-md-9 col-xs-9 shortdesc">
                                            <h4>
                                                <a href="#">Săn lùng kỹ sư công nghệ thông tin</a>
                                            </h4>
                                            <p>Navigos Search vừa công bố nhu cầu tuyển dụng nhân sự trung và cao cấp tại thị trường Việt Nam quý III/2016.<a href="#">[...]</a></p>
                                        </div>
                                    </div>
                                </div>
                                <!--END ARTICLE CONTENT-->
                            </div>
                        </div>
                        <div class="list_new_view">
                            <div class="row">
                                <!--THE IMAGES OF THE ARTICLE-->
                                <div class="col-md-5">
                                    <div class="top_news_block_thumb">
                                        <img src="images/posts-1.jpg" alt=""/>
                                    </div>
                                </div>
                                <!--END THE IMAGES OF THE ARTICLE-->
                                <!--ARTICLE CONTENT-->
                                <div class="col-md-7 top_news_block_desc">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-3 topnewstime">
                                            <span class="topnewsdate">20</span><br>
                                            <span class="topnewsmonth">Tháng 10</span><br>
                                        </div>
                                        <div class="col-md-9 col-xs-9 shortdesc">
                                            <h4>
                                                <a href="#">Săn lùng kỹ sư công nghệ thông tin</a>
                                            </h4>
                                            <p>Navigos Search vừa công bố nhu cầu tuyển dụng nhân sự trung và cao cấp tại thị trường Việt Nam quý III/2016.<a href="#">[...]</a></p>
                                        </div>
                                    </div>
                                </div>
                                <!--END ARTICLE CONTENT-->
                            </div>
                        </div>
                        <!--PAGINATION-->    
                        <div class="pagination-centered">
                            <ul class="pagination">
                                <li class="active"><span>1</span></li>
                                <li><a href="#" data-ci-pagination-page="2" rel="start">2</a></li>
                                <li><a href="#" data-ci-pagination-page="3">3</a></li>
                                <li><a href="#" data-ci-pagination-page="4">4</a></li>
                                <li><a href="#" data-ci-pagination-page="5">5</a></li>
                                <li class="next"><a href="#" data-ci-pagination-page="2" rel="next">→</a></li>
                            </ul>            
                        </div>
                        <!--END PAGINATION-->  
                    </div>
                    <div class="type-326">
                        <!--LIST HEADLINES-->
                    <div class="headlines">
                        <ul>
                            <li>
                                <div class="headlinesdate">
                                    <div class="headlinesdm">
                                        <div class="headlinesday">21</div>
                                        <div class="headlinesmonth">09</div>
                                    </div>
                                    <div class="headlinesyear">14</div>
                                </div>
                                <div class="headlinestitle">
                                    <a href="#">CSS Image Sprites</a>                
                                </div>
                            <li>
                                <div class="headlinesdate">
                                    <div class="headlinesdm">
                                        <div class="headlinesday">21</div>
                                        <div class="headlinesmonth">09</div>
                                    </div>
                                    <div class="headlinesyear">14</div>
                                </div>
                                <div class="headlinestitle">
                                    <a href="#">CSS Image Sprites CSS Image Sprites CSS Image Sprites CSS Image Sprites</a>                
                                </div>
                            </li>
                            <li>
                                <div class="headlinesdate">
                                    <div class="headlinesdm">
                                        <div class="headlinesday">21</div>
                                        <div class="headlinesmonth">09</div>
                                    </div>
                                    <div class="headlinesyear">14</div>
                                </div>
                                <div class="headlinestitle">
                                    <a href="#">CSS Image Sprites CSS Image Sprites</a>                
                                </div>
                            </li>
                            </li>
                        </ul>
                    </div>
                        <div class="pagination-center">
                        <ul class="pagination">
                            <li class="active"><span>1</span></li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li class="next">
                                <a href="#">→</a>
                            </li>
                        </ul>     
                    </div>
                    </div>
                    
                        
                    
                </div>
                <!--END LIST NEWS-->
                
                <!--EVENT-->
                <div class="col-md-4">
                    <div class="type-321">
                        <div class="widget recent_news">

                        <!--RECENT NEWS-->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2>Tin tức <br><span>thông báo</span></h2>
                            </div>
                            <div class="crossedbg"></div>
                            <div class="panel-body">
                                <ul class="list-group">
                                    <li class="list-group-item on-recent-news">
                                        <a href="#">Thông báo V/v Tổ chức thi tốt nghiệp bậc TCCN chính quy-Đợt 1 năm học 2016-2017</a>                            
                                        <span> - 15/02/2017</span>
                                    </li>

                                    <li class="list-group-item on-recent-news">
                                        <a href="#">Thông báo v/v các lớp học phần sẽ bị hủy vì không đủ sĩ số</a>                            
                                        <span> - 08/02/2017</span>
                                    </li>

                                    <li class="list-group-item on-recent-news">
                                        <a href="#">Thông báo v/v đăng ký học phần học kỳ 2 năm học 2016 - 2017</a>                            
                                        <span> - 06/01/2017</span>
                                    </li>

                                    <li class="list-group-item on-recent-news">
                                        <a href="#">Thời gian nhận và trả lễ phục</a>                            
                                        <span> - 20/12/2016</span>
                                    </li>

                                    <li class="list-group-item on-recent-news">
                                        <a href="#">Thông báo đăng ký dự lễ tốt nghiệp khóa 2013 bậc CĐ và khóa 2014 bậc TCCN</a>                            
                                        <span> - 12/12/2016</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <!--/END RECENT NEWS-->

                    </div>
                    </div>
                    
                    <div class="type-322">
                        <!--STUDENT-->
                    <div class="widget html">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2>Sinh viên<br><span>Tiêu biểu</span></h2>
                            </div>
                            <div class="crossedbg"></div>
                            <div class="feedback_item row">
                               
                                <div class="feedback_owner col-sm-6 col-xs-12 col-md-12">
                                    <div class="row mobile" >
                                        <div class="col-md-4 col-sm-4 col-xs-4">
                                            <div class="feedback_thumb">
                                                <img class="img-responsive" src="images/sv.jpg">
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-8 feedback_desc">
                                            <span class="feedback_name"> Mai Khoa</span>
                                            <p class="feedback_title">Giải nhất Olympic tin học sinh viên toàn quốc 2015</p>
                                        </div>
                                    </div>          
                                </div>
                                <div class="feedback_owner col-sm-6 col-xs-12 col-md-12">
                                    <div class="row mobile" >
                                        <div class="col-md-4 col-sm-4 col-xs-4">
                                            <div class="feedback_thumb">
                                                <img class="img-responsive" src="images/sv.jpg">
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-8 feedback_desc">
                                            <span class="feedback_name"> Mai Khoa</span>
                                            <p class="feedback_title">Giải nhất Olympic tin học sinh viên toàn quốc 2015</p>
                                        </div>
                                    </div>          
                                </div>
                                <div class="feedback_owner col-sm-6 col-xs-12 col-md-12">
                                    <div class="row mobile" >
                                        <div class="col-md-4 col-sm-4 col-xs-4">
                                            <div class="feedback_thumb">
                                                <img class="img-responsive" src="images/sv.jpg">
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-8 feedback_desc">
                                            <span class="feedback_name"> Mai Khoa</span>
                                            <p class="feedback_title">Giải nhất Olympic tin học sinh viên toàn quốc 2015</p>
                                        </div>
                                    </div>          
                                </div>
                                <div class="feedback_owner col-sm-6 col-xs-12 col-md-12">
                                    <div class="row mobile" >
                                        <div class="col-md-4 col-sm-4 col-xs-4">
                                            <div class="feedback_thumb">
                                                <img class="img-responsive" src="images/sv.jpg">
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-8 feedback_desc">
                                            <span class="feedback_name"> Mai Khoa</span>
                                            <p class="feedback_title">Giải nhất Olympic tin học sinh viên toàn quốc 2015</p>
                                        </div>
                                    </div>          
                                </div>
                                <div class="feedback_owner col-sm-6 col-xs-12 col-md-12">
                                    <div class="row mobile" >
                                        <div class="col-md-4 col-sm-4 col-xs-4">
                                            <div class="feedback_thumb">
                                                <img class="img-responsive" src="images/sv.jpg">
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-8 feedback_desc">
                                            <span class="feedback_name"> Mai Khoa</span>
                                            <p class="feedback_title">Giải nhất Olympic tin học sinh viên toàn quốc 2015</p>
                                        </div>
                                    </div>          
                                </div>
                                <div class="feedback_owner col-sm-6 col-xs-12 col-md-12">
                                    <div class="row mobile" >
                                        <div class="col-md-4 col-sm-4 col-xs-4">
                                            <div class="feedback_thumb">
                                                <img class="img-responsive" src="images/sv.jpg">
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-8 feedback_desc">
                                            <span class="feedback_name"> Mai Khoa</span>
                                            <p class="feedback_title">Giải nhất Olympic tin học sinh viên toàn quốc 2015</p>
                                        </div>
                                    </div>          
                                </div>
                            </div>	
                            <div class="divider"></div>
                        </div>
                        <!--/END STUDENT-->

                    </div>
                    </div>
                    
                    <div class="type-323">
                        <div class="widget test">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2>Thử tài<br><span>Qua các cuộc thi</span></h2>
                            </div>
                            <div class="crossedbg"></div>
                            <div class="contest_list">
                                <div class="col-md-6 col-sm-6 col-xs-6 contest_item">
                                    <img class="img-responsive" src="images/oth_logo.gif">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 contest_item">
                                    <img class="img-responsive" src="images/oth_logo.gif">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 contest_item">
                                    <img class="img-responsive" src="images/oth_logo.gif">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 contest_item">
                                    <img class="img-responsive" src="images/oth_logo.gif">
                                </div>
                            </div>
                        </div>
                    </div>	
                    <div class="divider"></div>
                
                    </div>
                    
                    <div class="type-324">
                        <div class="widget dept_itdc">

                        <div class="panel panel-default list_departments">
                            <div class="panel-heading">
                                <h2>Bộ môn <br><span>chuyên ngành</span></h2>
                            </div>
                            <div class="crossedbg"></div>
                            <div class="dep_list">
                                <div class="dep_item dep_network">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <img class="img-responsive" src="images/mmt_thumb.jpg">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 dep_name">
                                            Mạng<br>máy tính
                                        </div>
                                    </div>
                                </div>
                                <div class="dep_item dep_software">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <img class="img-responsive" src="images/cnpm_thumb.jpg">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 dep_name">
                                            công nghệ<br> phần mềm
                                        </div>
                                    </div>
                                </div>
                                <div class="dep_item dep_graphic">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <img class="img-responsive" src="images/dh_thumb.jpg">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 dep_name">
                                            Đồ họa
                                        </div>
                                    </div>
                                </div>
                                <div class="dep_item dep_informatics">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <img class="img-responsive" src="images/thcs_thumb.jpg">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 dep_name">
                                            Tin học<br>cơ sở
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>	
                        <div class="divider"></div>
                    </div>
                    </div>
                   
                </div>
                <!--END EVENT-->                     
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
