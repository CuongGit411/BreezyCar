<?php
    $loiGioiThieu = getCauHinhWebsiteByCode('loiGioiThieu');
    $address = getCauHinhWebsiteByCode('address');
    $phone = getCauHinhWebsiteByCode('phone');
    $gmail = getCauHinhWebsiteByCode('gmail');
    $dinhVi = getCauHinhWebsiteByCode('dinhVi');
 ?>
 <!--Breadcrumb section-->
<div class="breadcrumb_section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_inner">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><i class="zmdi zmdi-chevron-right"></i></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb section end-->

<!--Contact us start-->
    <div class="contact-us pt-110 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="contact-us-desc">
                        <div class="get-in-touch">
                            <h3>get in touch</h3>
                            <p><?php echo $loiGioiThieu['giatricauhinh'] ?></p>
                        </div>
                        <div class="contact-social">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                            <a href="#"><i class="zmdi zmdi-rss"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                        </div>
                        <div class="contact-address">
                            <h3>address</h3>
                            <div class="contact-list">
                                <div class="single-contact-list">
                                    <div class="contact-icon">
                                        <i class="zmdi zmdi-pin"></i>
                                    </div>
                                    <div class="conatct-desc">
                                        <p><?php echo $address['giatricauhinh'] ?></p>
                                    </div>
                                </div>
                                <div class="single-contact-list">
                                    <div class="contact-icon">
                                        <i class="zmdi zmdi-phone"></i>
                                    </div>
                                    <div class="conatct-desc">
                                        <p><?php echo $phone['giatricauhinh'] ?></p>
                                    </div>
                                </div>
                                <div class="single-contact-list">
                                    <div class="contact-icon">
                                        <i class="zmdi zmdi-email"></i>
                                    </div>
                                    <div class="conatct-desc">
                                        <p><?php echo $gmail['giatricauhinh'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="map-area">
                        <div id="googleMap" style="width:100%;height:460px;"><iframe src="<?php echo $dinhVi['giatricauhinh'] ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                    </div>
                </div>
            </div>