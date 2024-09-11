<?php
    $sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
    $query_chitiet = mysqli_query($mysqli,$sql_chitiet);

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
                                        <li>product Details</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Breadcrumb section end-->
                <?php
                    while($row_chitiet = mysqli_fetch_array($query_chitiet)){
                ?>
                <!--product Details Inner-->
                <div class="product_details_inner left_sidebar ptb-110">
                    <div class="container">
                        <div class="row">
                            <!--Product Tab Style start-->
                            <div class="col-md-12 col-lg-5 col-12">
                                <div class="product-details-img-content">
                                    <div class="product-details-tab">
                                        <div id="img-1" class="zoomWrapper single-zoom">
                                            <a href="#">
                                                <img height="500px" width="700px" id="zoom1" src="admin/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>"  alt="big-1">
                                            </a>
                                        </div>
                                        <div class="single-zoom-thumb mt-20">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Product Tab Style End-->
                            <div class="col-md-12 col-lg-7 col-12">
                                    <form method="POST" action="pages/main/tocart.php?idsanpham=<?php echo $row_chitiet['id_sanpham']?>">
                                    <div class="product-details-content">
                                        <h3><?php echo $row_chitiet['tensanpham'] ?></h3>
                                        <div class="rating-number">
                                            <div class="product_rating">
                                                <a href="#"> <i  class="zmdi zmdi-star"> <?php echo $row_chitiet['start'] ?>/5</i></a>
                                            </div>
                                            <div class="review_count">
                                                <span><?php echo $row_chitiet['start'] ?> Ratting (S)</span>
                                            </div>
                                        </div>
                                        <div class="price_amount">
                                            <span class="current_price"><?php echo '$'.number_format($row_chitiet['giadis']) ?></span>
                                            <span class="discount_price"><?php echo '-'.number_format($row_chitiet['discount']).'%' ?></span>
                                            <span class="old_price"><?php echo '$'.number_format($row_chitiet['giasp']) ?></span>
                                        </div>
                                        <p><?php echo $row_chitiet['noidung'] ?></p>
                                        
                                        <div class="single_product_action d-flex align-items-center">
                                            
                                            <div class="add_to_cart_btn" style="padding-right:10px;padding-left:10px">
                                                    <input style="background-color:#f6563c;color:aliceblue;border:1px #626262 solid;border-radius:5px" class="tocart" name="tocart" type="submit" value="Add to Cart">
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="product_details_cat_list mt-35">
                                            <div class="categories_label">
                                                <span>Categories:</span>
                                            </div>
                                            <ul>
                                                <li><a href="#">Specifications Inside</a></li>
                                                <li><a href="#">electronics</a></li>
                                                <li><a href="#">Engine</a></li>
                                                <li><a href="#">Dimensions</a></li>
                                                <li><a href="#">Outside</a></li>
                                            </ul>
                                        </div>
                                        <div class="product_details_tag_list mtb-10">
                                            <div class="tag_label">
                                                <span>Tags : </span>
                                            </div>
                                            <ul>
                                                <li><a href="#">cars</a></li>
                                                <li><a href="#">fashion</a></li>
                                                <li><a href="#">fast and furious  </a></li>
                                                <li><a href="#">brands</a></li>
                                                <li><a href="#">jewellery</a></li>
                                            </ul>
                                        </div>
                                        <div class="product-share">
                                            <div class="share_label">
                                                <span>Share :</span>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="zmdi zmdi-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="zmdi zmdi-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="zmdi zmdi-google-plus"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="zmdi zmdi-pinterest"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                    </form>
                        </div>
                        <!-- Product Thumbnail Description Start -->
                        <div class="product_desc_tab_container mt-100 ">

                            
                        </div>
                         <!--Realted Product section start-->
                        <div class="related_product_section mt-100">

                            <div class="row">
                                <div class="col-12">
                                    <div class="section_title">
                                        <h2>Related Product</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row related_product_guttters owl-carousel mt-60">
                                <div class="col-lg-3">
                                    <div class="single__product">
                                        <div class="produc_thumb">
                                            <a href="#"><img src="assets/img/slide/banner4.jpg" alt=""></a>
                                        </div>
                                        <div class="product_hover">
                                            <div class="product_action">
                                                <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                            </div>
                                            <div class="product__desc">
                                                <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                <div class="price_amount">
                                                    <span class="current_price">$2999.99</span>
                                                    <span class="discount_price">-08%</span>
                                                    <span class="old_price">$3700.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single__product">
                                        <div class="produc_thumb">
                                            <a href="#"><img src="assets/img/slide/banner2.jpg" alt=""></a>
                                        </div>
                                        <div class="product_hover">
                                            <div class="product_action">
                                                <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                            </div>
                                            <div class="product__desc">
                                                <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                <div class="price_amount">
                                                    <span class="current_price">$2999.99</span>
                                                    <span class="discount_price">-08%</span>
                                                    <span class="old_price">$3700.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single__product">
                                        <div class="produc_thumb">
                                            <a href="#"><img src="assets/img/slide/banner1.jpg" alt=""></a>
                                        </div>
                                        <div class="product_hover">
                                            <div class="product_action">
                                                <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                            </div>
                                            <div class="product__desc">
                                                <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                <div class="price_amount">
                                                    <span class="current_price">$2999.99</span>
                                                    <span class="discount_price">-08%</span>
                                                    <span class="old_price">$3700.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single__product">
                                        <div class="produc_thumb">
                                            <a href="#"><img src="assets/img/slide/banner4.jpg" alt=""></a>
                                        </div>
                                        <div class="product_hover">
                                            <div class="product_action">
                                                <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                            </div>
                                            <div class="product__desc">
                                                <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                <div class="price_amount">
                                                    <span class="current_price">$2999.99</span>
                                                    <span class="discount_price">-08%</span>
                                                    <span class="old_price">$3700.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single__product">
                                        <div class="produc_thumb">
                                            <a href="#"><img src="assets/img/slide/banner4.jpg" alt=""></a>
                                        </div>
                                        <div class="product_hover">
                                            <div class="product_action">
                                                <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                            </div>
                                            <div class="product__desc">
                                                <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                <div class="price_amount">
                                                    <span class="current_price">$2999.99</span>
                                                    <span class="discount_price">-08%</span>
                                                    <span class="old_price">$3700.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single__product">
                                        <div class="produc_thumb">
                                            <a href="#"><img src="assets/img/slide/banner4.jpg " alt=""></a>
                                        </div>
                                        <div class="product_hover">
                                            <div class="product_action">
                                                <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                            </div>
                                            <div class="product__desc">
                                                <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                <div class="price_amount">
                                                    <span class="current_price">$2999.99</span>
                                                    <span class="discount_price">-08%</span>
                                                    <span class="old_price">$3700.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--Realted Product section end-->
                    </div>
                </div>
                <!--product Details End-->
                
                
               <?php
                    }
               ?>
                

                <div class="newsletter_section ptb-80">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-12">
                                <div class="newsletter_text">
                                    <h2>Get All Updates</h2>
                                    <p>Sign up our newsleter today. Also get allert for new product.</p>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12">
                                <div class="newsletter_form">
                                    <form action="#">
                                        <input type="email" placeholder="Type your email">
                                        <button type="submit">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Newsletter section end -->