<?php 
    $loiGioiThieu = getCauHinhWebsiteByCode('loiGioiThieu');
    $address = getCauHinhWebsiteByCode('address');
    $phone = getCauHinhWebsiteByCode('phone');
?>
<footer class="footer_area">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="our_help_services ptb-80">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="help_service d-flex">
                                    <div class="h_ser_icon">
                                        <i class="zmdi zmdi-boat"></i>
                                    </div>
                                    <div class="h_ser_text">
                                        <h3>Free Shipping</h3>
                                        <p>Free Shipping on Viet Nam</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="help_service d-flex justify-content-center">
                                    <div class="h_ser_icon">
                                        <i class="zmdi zmdi-shield-security"></i>
                                    </div>
                                    <div class="h_ser_text">
                                        <h3>Money Guarentee</h3>
                                        <p>Free Shipping on Viet Nam</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="help_service d-flex justify-content-end">
                                    <div class="h_ser_icon">
                                        <i class="zmdi zmdi-phone-setting"></i>
                                    </div>
                                    <div class="h_ser_text">
                                        <h3>Online Support</h3>
                                        <p>Free Shipping on Viet Nam</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom ptb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single_footer widget_description">
                    <p><?php echo $loiGioiThieu['giatricauhinh'] ?></p>
                        <div class="addresses_inner">
                            <div class="single_address">
                                <p>
                                    <span> Address: </span> <span><?php echo $address['giatricauhinh']?></span>
                                </p> 

                                <p>
                                    <span> Phone: </span> <span><?php echo $phone['giatricauhinh']?></span>
                                </p>
                            </div>
                        </div> 
                        <div class="social__icon">
                            <ul>
                                <li>
                                    <a class="facebook" href="https://www.facebook.com" title="Facebook"><i class="zmdi zmdi-facebook"></i></a>
                                </li>
                                <li>
                                    <a class="google-plus" href="#" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a>
                                </li>

                                <li>
                                    <a class="twitter" href="#" title="Twitter"><i class="zmdi zmdi-twitter"></i></a>
                                </li>
                                <li>
                                    <a class="linkedin" href="#" title="Linkedin"><i class="zmdi zmdi-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_footer footer_widget_menu">
                        <div class="widget_title">
                            <h3>Services</h3>
                        </div>
                        <ul>
                            <li><a href="#">free shipping</a></li>
                            <li><a href="#">Product Delivary</a></li>
                            <li><a href="#">Product Tracking</a></li>
                            <li><a href="#">Online Pyament</a></li>
                            <li><a href="#">Discount</a></li>
                            <li><a href="#">Online Vendor</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_footer footer_widget_menu">
                        <div class="widget_title">
                            <h3>Support</h3>
                        </div>
                        <ul>
                            <li><a href="#">QUeality</a></li>
                            <li><a href="#">Order Details</a></li>
                            <li><a href="#">Order Slips</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Store Deal</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_footer footer_widget_menu">
                        <div class="widget_title">
                            <h3>Account</h3>
                        </div>
                        <ul>
                            <li><a href="#">My account </a></li>
                            <li><a href="#">order history</a></li>
                            <li><a href="#">wishslist</a></li>
                            <li><a href="#">Cart Details</a></li>
                            <li><a href="#">Compare</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    
                </div>
            </div>
        </div>
    </div> -->
</footer>