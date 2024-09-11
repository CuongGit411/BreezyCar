

<?php
    if(isset($_SESSION['dangky'])){
        echo  '<p style="color:orange; text-align:center;padding-top :10px;font-size:20px">Xin chào:  '. $_SESSION['dangky'] .' </p>';
        
    }
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
                                        <li>Cart</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Breadcrumb section end-->

                    <!-- PAGE SECTION START -->
                    <div class="cart_page_area pt-100 pb-60">
                       <form action="#">
                            <div class="container">
                                <div class="row">
                                	<div class="col-12">
                                        <div class="cart-table table-responsive mb-40">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="pro-thumbnail">Image</th>
                                                        <th class="pro-title">Product</th>
                                                        <th class="pro-price">Price</th>
                                                        <th class="pro-quantity">Quantity</th>
                                                        <th class="pro-subtotal">Total</th>
                                                        <th class="pro-remove">Remove</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                        $total = 0;
                                                    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                                                        $i = 0;
                                                        foreach ($_SESSION['cart'] as $cart_item) {
                                                            $onlytotal = $cart_item['soluong'] * $cart_item['giasp'];
                                                            $total += $onlytotal;
                                                    ?>
                                                            <tr>
                                                                <td class="pro-thumbnail"><img src="admin/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh'] ?>" alt="" /></td>
                                                                <td class="pro-title"><p><?php echo $cart_item['tensanpham'] ?></p></td>
                                                                <td class="pro-price"><span class="amount"><?php echo '$' . number_format($cart_item['giasp']) ?></span></td>
                                                                <td class="pro-quantity">
                                                                    <div style="font-size:20px">
                                                                        <div class="tang-giam">
                                                                            <div class="row">
                                                                                <div class="col-4"><a href="pages/main/tocart.php?giam=<?php echo $cart_item['id'] ?>">-</a> </div>
                                                                                <div class="col-4"><?php echo $cart_item['soluong'] ?></div>
                                                                                <div class="col-4"><a href="pages/main/tocart.php?tang=<?php echo $cart_item['id'] ?>">+</a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="pro-subtotal"><?php echo '$' . number_format($onlytotal) ?></td>
                                                                <td class="pro-remove"><a href="pages/main/tocart.php?xoa=<?php echo $cart_item['id'] ?>">×</a></td>
                                                            </tr>
                                                    <?php
                                                        }
                                                    } else {
                                                    ?>
                                                        <tr>
                                                            <td colspan="6"><p style="text-align: center;">Giỏ Hàng Trống</p></td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                    
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-12">
                                        <div class="cart-buttons mb-30">
                                        <a href="index.php?quanly=shop&id=1">Continue Shopping</a>
                                        </div>
                                        <div class="cart-coupon mb-40">
                                            <h4>Coupon</h4>
                                            <p>Enter your coupon code if you have one.</p>
                                            <div class="coupon_form_inner">
                                                <input type="text" placeholder="Coupon code" />
                                                <input type="submit" value="Apply Coupon" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="cart-total mb-40">
                                            <h3>Cart Totals</h3>
                                            <div class="table-responsive">
                                                <table>
                                                    <tbody>
                                                        <tr class="cart-subtotal">
                                                            <th>Subtotal</th>
                                                            <td><span class="amount"><?php echo '$'.number_format($total)?></span></td>
                                                        </tr>
                                                        <tr class="order-total">
                                                            <th>Total</th>
                                                            <td>
                                                                <strong><span class="amount"><?php echo '$'.number_format($total)?></span></strong>
                                                            </td>
                                                        </tr>											
                                                    </tbody>
                                                </table>
                                            </div>
                                            
                                            <div class="proceed-to-checkout section mt-30">
                                                <?php
                                                    if(isset($_SESSION['dangky'])){
                                                ?>
                                                <?php
                                                    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                                                ?>
                                                <p><a href="index.php?quanly=checkout">Proceed to Checkout</a></p>
                                                <?php
                                                    }
                                                ?>
                                                <?php
                                                    }else{
                                                ?>
                                                <a href="index.php?quanly=my-account">Sign up to pay</a>
                                                <?php
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </form>	
                    </div>
                    <!-- PAGE SECTION END --> 
                
                <!--Newsletter section start-->
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