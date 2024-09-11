<!--Breadcrumb section-->
<div class="breadcrumb_section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="breadcrumb_inner">
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><i class="zmdi zmdi-chevron-right"></i></li>
                                        <li>Checkout</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                    if (isset($_POST['place_order'])) {
                        echo "<script>window.location.href = 'pages/main/order.php';</script>";
                        exit;
                    }
                ?>
                <!--Breadcrumb section end-->

                <!-- checkout-area start -->
                <div class="checkout-area ptb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="coupon-accordion">
                               					
                            </div>
                        </div>
                    </div>
                    <div class="outer">
                            <div class="your-order">
                                <h3>Your order</h3>
                                <div class="your-order-table table-responsive">
                                    
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-name">Product</th>
                                                <th class="product-total">Total</th>
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
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                    <?php echo $cart_item['tensanpham'] ?> <strong class="product-quantity"> × <?php echo $cart_item['soluong'] ?></strong>
                                                </td>
                                                <td class="product-total">
                                                    <span class="amount"><?php echo '$' . number_format($cart_item['giasp']) ?></span>
                                                </td>
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
                                        <tfoot>
                                            <tr class="cart-subtotal">
                                                <th>Cart Subtotal</th>
                                                <td><span class="amount"><?php echo '$'.number_format($total)?></span></td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Order Total</th>
                                                <td><strong><span class="amount"><?php echo '$'.number_format($total)?></span></strong>
                                                </td>
                                            </tr>								
                                        </tfoot>
                                    </table>

                                </div>
                                <div class="payment-method">
                                    <div class="payment-accordion">
                                        <div class="panel-group" id="faq">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h5 class="panel-title"><a data-toggle="collapse" aria-expanded="true" data-parent="#faq" href="#payment-1">Direct Bank Transfer.</a></h5>
                                                </div>
                                                <div id="payment-1" class="panel-collapse collapse show">
                                                    <div class="panel-body">
                                                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h5 class="panel-title"><a class="collapsed" data-toggle="collapse" aria-expanded="false" data-parent="#faq" href="#payment-2">Cheque Payment</a></h5>
                                                </div>
                                                <div id="payment-2" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h5 class="panel-title"><a class="collapsed" data-toggle="collapse" aria-expanded="false" data-parent="#faq" href="#payment-3">PayPal</a></h5>
                                                </div>
                                                <div id="payment-3" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <form action="#" method="POST">
                                        <div class="login_submit">
                                             <input type="submit" name="place_order" value="PLACE ORDER" style="background-color: #f6563c; color: white; padding: 12px 20px; border: none; border-radius: 4px; cursor: pointer;">
                                        </div>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            


