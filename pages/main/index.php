<?php
    $indexBanner = getCauHinhWebsiteByCode('index_banner');
    function getSlidesByCode($code){
        $query = "
            select *
            from slide
            where codeslide = '".$code."'
        ";
        $result = executeQueryReturnManyRow($query);
        return $result;
    }

    function renderKhoiSlideBanner(){
        //Ky thuat dat bien trong
        $html = '';
        $slides = getSlidesByCode('index_slide');
        for($i = 0; $i < count($slides); $i++){
            $html = $html . '
                 <div class="single__slider bg-opacity" style="background-image:url('.$slides[$i]['anhslide'].')">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="slider-content slider-text-animation" >
                                                <h1 style="color: white">'.$slides[$i]['tieude1'].'</h1>
                                                <h2 style="color: white">'.$slides[$i]['tieude2'].'</h2>
                                                <p style="color: white">'.$slides[$i]['tieude3'].'</p>
                                                <a href="'.$slides[$i]['linknut'].'">'.$slides[$i]['tieudenut'].'</a>									
                                            </div>
                                        </div>
                                    </div>	
                                </div>
                            </div>
            ';
        }
        echo $html;
    }
?>


<div class="slider_wrapper">
            <div class="slider-active owl-carousel">
                <?php
                    renderKhoiSlideBanner();
                ?>     
            </div> 
                    <!--Hot Deal product start-->
                    <div class="hot_details_product pt-110 pb-107">
                        <div class="container">
                            <div class="row align-items-end">
                                <div class="col-lg-3 col-md-3 col-12">
                                    <div class="section_title">
                                        <h2>Hot Deals</h2>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row mt-60">
                                <div class="col-lg-9 col-md-12 ">
                                    <div class="tab-content">
                                        <div class="tab-pane active show fade" id="hot_all" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/1.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Gasoline Scooter A9</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/2.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Alloy Shimano z3</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/3.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Full Slev Shirt</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/4.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/5.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Full Slev Hudy</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/6.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Alloy Shimano z3</a></h3>
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
                                        <div class="tab-pane fade" id="hot_bike" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/1.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Tandem Beach Cruiser</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/2.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/3.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/4.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/5.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/6.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
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
                                        <div class="tab-pane fade" id="hot_tiar" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/1.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/2.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/3.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/4.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/5.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/6.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
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
                                        <div class="tab-pane fade" id="hot_parts" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/1.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/2.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/3.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/4.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/5.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/6.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
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
                                        <div class="tab-pane fade" id="hot_wheel" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/1.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/2.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/3.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/4.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/5.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/6.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
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
                                        <div class="tab-pane fade" id="hot_light" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/1.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/2.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/3.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/4.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/5.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/6.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
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
                                    </div>
                                    
                                </div>
                                <div class="col-lg-3 col-md-12">
                                    <div class="single_banner long_hot_detals d-lg-none">
                                        <a href="index.php?quanly=shop&id=1"><img src="assets/img/banner/banner_tab_1.jpg" alt="Shop Banner"></a>
                                    </div>
                                    <div class="single_banner long_hot_detals d-none d-lg-block">
                                        <a href="index.php?quanly=library"><img src="assets/img/slide/banner-r1.jpg" alt="Shop Banner"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Hot Deal product end-->  
                    
                                            
                    <!--Hot Deal product start-->
                    <div class="hot_details_product pt-110 pb-107">
                        <div class="container">
                            <div class="row align-items-end">
                                <div class="col-lg-3 col-md-3 col-12">
                                    <div class="section_title">
                                        <h2>Best Product</h2>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row mt-60">
                                <div class="col-lg-9 col-md-12 ">
                                    <div class="tab-content">
                                        <div class="tab-pane active show fade" id="hot_all" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/1.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Gasoline Scooter A9</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/2.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Alloy Shimano z3</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/3.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Full Slev Shirt</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/4.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/5.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Full Slev Hudy</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/6.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Alloy Shimano z3</a></h3>
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
                                        <div class="tab-pane fade" id="hot_bike" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/1.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Tandem Beach Cruiser</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/2.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/3.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/4.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/5.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/6.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
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
                                        <div class="tab-pane fade" id="hot_tiar" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/1.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/2.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/3.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/4.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/5.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/6.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
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
                                        <div class="tab-pane fade" id="hot_parts" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/1.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/2.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/3.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/4.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/5.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/6.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
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
                                        <div class="tab-pane fade" id="hot_wheel" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/1.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/2.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/3.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/4.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/5.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/6.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
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
                                        <div class="tab-pane fade" id="hot_light" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/1.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/2.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/3.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/4.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/5.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                                <div class="price_amount">
                                                                    <span class="current_price">$2999.99</span>
                                                                    <span class="discount_price">-08%</span>
                                                                    <span class="old_price">$3700.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single__product">
                                                        <div class="produc_thumb">
                                                            <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/6.png" alt=""></a>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_action">
                                                                <a href="index.php?quanly=shop&id=1" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                <a href="index.php?quanly=shop&id=1" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            </div>
                                                            <div class="product__desc">
                                                                <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
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
                                    </div>
                                    
                                </div>
                                <div class="col-lg-3 col-md-12">
                                    <div class="single_banner long_hot_detals d-lg-none">
                                        <a href="index.php?quanly=shop&id=1"><img src="assets/img/banner/banner_tab_1.jpg" alt="Shop Banner"></a>
                                    </div>
                                    <div class="single_banner long_hot_detals d-none d-lg-block">
                                        <a href="index.php?quanly=library"><img src="assets/img/slide/banner-r2.jpg" alt="Shop Banner"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Hot Deal product end-->  
                    
                    
                    <!--Banner product section-->
                    <div class="banner_product_section pb-110">
                        <div class="container">
                        <div class="section_title">
                                        <h2>Product litle</h2>
                                    </div>
                            <div class="row" style="padding-top:20px">
                                <div class="col-lg-7 col-md-12">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="single_banner banner_length">
                                                <a href="index.php?quanly=library"><img src="assets/img/slide/banner-l1.jpg" alt="Shop Banner"></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="single_banner banner_length">
                                                <a href="index.php?quanly=library"><img src="assets/img/slide/banner-l2.jpg" alt="Shop Banner"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12 col-12">
                                    <div class="best_seller_product_carousel owl-carousel">
                                        <div class="best_selling_single">
                                            <div class="single__product_sm mb-30">
                                                <div class="produc_thumb">
                                                    <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/pro1.png" alt=""></a>
                                                </div>
                                                <div class="product__desc">
                                                    <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3> 
                                                    <div class="product_ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="price_amount">
                                                        <span class="current_price">$2999.99</span>
                                                        <span class="discount_price">-08%</span>
                                                        <span class="old_price">$3700.00</span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="single__product_sm mb-30">
                                                <div class="produc_thumb">
                                                    <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/pro2.png" alt=""></a>
                                                </div>
                                                <div class="product__desc">
                                                    <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                    <div class="product_ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                    <div class="price_amount">
                                                        <span class="current_price">$2999.99</span>
                                                        <span class="discount_price">-08%</span>
                                                        <span class="old_price">$3700.00</span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="single__product_sm">
                                                <div class="produc_thumb">
                                                    <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/pro3.png" alt=""></a>
                                                </div>
                                                <div class="product__desc">
                                                    <h3><a href="index.php?quanly=shop&id=1">Lotafaj una khdii</a></h3>
                                                    <div class="product_ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="price_amount">
                                                        <span class="current_price">$2999.99</span>
                                                        <span class="discount_price">-08%</span>
                                                        <span class="old_price">$3700.00</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="best_selling_single">
                                            <div class="single__product_sm mb-30">
                                                <div class="produc_thumb">
                                                    <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/pro1.png" alt=""></a>
                                                </div>
                                                <div class="product__desc">
                                                    <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3> 
                                                    <div class="product_ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="price_amount">
                                                        <span class="current_price">$2999.99</span>
                                                        <span class="discount_price">-08%</span>
                                                        <span class="old_price">$3700.00</span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="single__product_sm mb-30">
                                                <div class="produc_thumb">
                                                    <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/pro2.png" alt=""></a>
                                                </div>
                                                <div class="product__desc">
                                                    <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                    <div class="product_ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                    <div class="price_amount">
                                                        <span class="current_price">$2999.99</span>
                                                        <span class="discount_price">-08%</span>
                                                        <span class="old_price">$3700.00</span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="single__product_sm">
                                                <div class="produc_thumb">
                                                    <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/pro3.png" alt=""></a>
                                                </div>
                                                <div class="product__desc">
                                                    <h3><a href="index.php?quanly=shop&id=1">Lotafaj una khdii</a></h3>
                                                    <div class="product_ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="price_amount">
                                                        <span class="current_price">$2999.99</span>
                                                        <span class="discount_price">-08%</span>
                                                        <span class="old_price">$3700.00</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="best_selling_single">
                                            <div class="single__product_sm mb-30">
                                                <div class="produc_thumb">
                                                    <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/pro1.png" alt=""></a>
                                                </div>
                                                <div class="product__desc">
                                                    <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3> 
                                                    <div class="product_ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="price_amount">
                                                        <span class="current_price">$2999.99</span>
                                                        <span class="discount_price">-08%</span>
                                                        <span class="old_price">$3700.00</span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="single__product_sm mb-30">
                                                <div class="produc_thumb">
                                                    <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/pro2.png" alt=""></a>
                                                </div>
                                                <div class="product__desc">
                                                    <h3><a href="index.php?quanly=shop&id=1">Soffer Pro x33</a></h3>
                                                    <div class="product_ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                    <div class="price_amount">
                                                        <span class="current_price">$2999.99</span>
                                                        <span class="discount_price">-08%</span>
                                                        <span class="old_price">$3700.00</span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="single__product_sm">
                                                <div class="produc_thumb">
                                                    <a href="index.php?quanly=shop&id=1"><img src="assets/img/product/pro3.png" alt=""></a>
                                                </div>
                                                <div class="product__desc">
                                                    <h3><a href="index.php?quanly=shop&id=1">Lotafaj una khdii</a></h3>
                                                    <div class="product_ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
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
                        </div>
                    </div>
                    <!--Banner product section end-->
                    
                    
                    <!--Full Width  banner start-->
                    <div class="full_width_banner pb-110">
                        <div class="single_banner">
                            <a href="index.php?quanly=library"><img src="<?php echo $indexBanner['giatricauhinh']?>" alt="Shop Banner"></a>
                        </div>
                    </div>
                    <!--Full Width Banner end-->