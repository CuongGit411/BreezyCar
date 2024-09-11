<?php
    require_once('pages/connectdb.php');
    $logo = getCauHinhWebsiteByCode('logo');


    if(isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1){
        if(isset($_SESSION['dangky'])){
            unset($_SESSION['dangky']);
            
        }
    }

    function getMenuCha(){
        $query = "
            select *
            from menu
            where parentid is null
            order by sort asc
        ";
        $result = executeQueryReturnManyRow($query);
        return $result;
    }

    function getMenuCon($parentId){
        $query = "
            select *
            from menu
            where parentid = ".$parentId."
        ";
        $result = executeQueryReturnManyRow($query);
        return $result;
    }
     function renderMenu(){
        //Render menu cha
        $menuCha = getMenuCha();
        $html = '';
        foreach($menuCha as $mc){
            $count_menuCon = count(getMenuCon($mc['id']));
            if($count_menuCon > 0){
                $html = $html . '
                 <li><a href="'.$mc['linkmenu'].'">'.$mc['tenmenu'].'<i class="zmdi zmdi-chevron-down"></i></a>
                    <ul class="sub_menu">
                        '.renderMenuCon($mc['id']).'
                    </ul>
                </li>
            ';
            }
            else{
                $html = $html . '
                <li>
                    <a href="'.$mc['linkmenu'].'">'.$mc['tenmenu'].'</a>
                </li>
            ';
            }
            
        }
        echo $html;
    }
    function renderMenuCon($parentId){
        $menuCon = getMenuCon($parentId);
        $html = '';
        foreach($menuCon as $mc){
            $html = $html .'
            <li><a href="'.$mc['linkmenu'].'">'.$mc['tenmenu'].'</a></li>
            ';
        }
        return $html;
    }
?>
<header>
    <div class="header_middle">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-3">
                    <div class="logo">
                        <a href="index.php">
                            <img src="<?php echo $logo['giatricauhinh'] ?>">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-8">
                    <div class="category_search">
                        <form action="index.php?quanly=timkiem" method="POST">
                            <div class="category_search_inner">
                                
                                <div class="search">
                                    <input type="text" placeholder="Search Keyword Here" name="tukhoa">
                                </div>
                                <div class="submit">
                                    <button type="submit" name="timkiem" value="Tìm Kiếm"><i class="zmdi zmdi-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2 col-md-1">
                    <div class="mini_cart_box_wrapper text-right">
                        
                        <a href="#">

                            <img src="assets/img/icon/cart.png" alt="Mini Cart Icon">
                        </a>
                        <ul class="mini_cart_box">
                        <?php
                                        $total = 0;
                                    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                                        $i = 0;
                                        foreach ($_SESSION['cart'] as $cart_item) {
                                            $onlytotal = $cart_item['soluong'] * $cart_item['giasp'];
                                            $total += $onlytotal;
                                    ?>
                            <li class="single_product_cart">
                        
                                <div class="cart_img">
                                    <a href="product-details.html"><img src="admin/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh'] ?>" alt=""></a>
                                </div>
                                
                                <div class="cart_title">
                                    <h5> <?php echo $cart_item['tensanpham'] ?></h5>
                                    <h6>Black</h6>
                                    <span><?php echo '$' . number_format($cart_item['giasp']) ?> x <?php echo $cart_item['soluong'] ?></span>
                                </div>
                                <div class="cart_delete">
                                    <a href="pages/main/tocart.php?xoa=<?php echo $cart_item['id'] ?>"><i class="zmdi zmdi-delete"></i></a>
                                </div>
                            </li>
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
                            
                            <li class="cart_space">
                                <div class="cart_sub">
                                    <h4>Subtotal</h4>
                                </div>
                                <div class="cart_price">
                                    <h4><?php echo '$'.number_format($total)?></h4>
                                </div>
                            </li>
                            <li class="cart_btn_wrapper">
                                <a class="cart_btn" href="index.php?quanly=cart" style="margin: 0 auto;">view cart</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header_bottom" style="background: #0e0c15 none repeat scroll 0 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="menu d-none d-lg-block ">
                        <nav>
                            <ul>                                                  
                                <?php 
                                    renderMenu();
                                ?>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="header_right_info">
                        <ul>
                        <li><a href="#" onclick="increaseWishlistCount()">VIEW<span id="wishlistCount"> <i class="zmdi zmdi-favorite-outline"></i> (0) </span></a></li>
                            <li> 
                            <?php
                            
                            if(isset($_SESSION['dangky'])){
                                ?>
                                <a href="index.php?dangxuat=1">Log Out Account</a>
                        <?php
                            }else{
                        ?>
                        
                            <a href="index.php?quanly=my-account">Login</a>
                            <?php
                            }
                        ?>
                            </li>							                    
                        </ul>
                    </div>
                </div>
                <div class="col-12 d-lg-none">
                    <!--Mobile menu murkup start-->
                    <div class="mobile-menu-area d-lg-none">
                        <div class="mobile-menu clearfix">
                            <nav>
                                <ul>                                                  
                                    <li><a href="index.php">HOME </a>
                                    </li>
                                    
                                    <li><a href="index.php?quanly=shop&id=1">Shop</a>
                                        <ul>
                                            <li><a href="index.php?quanly=shop&id=1">Shop </a></li>
                                            <li><a href="checkout.html">Checkout </a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?quanly=about">About</a></li>
                                    <li><a href="index.php?quanly=blog">Blog</a>
                                    </li>
                                    <li><a href="index.php?quanly=contact">CONTACT </a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--Mobile menu murkup End-->
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    var wishlistCount = 0;  // Số lượng yêu thích ban đầu

    // Retrieve the count from localStorage if it exists
    if (localStorage.getItem("wishlistCount")) {
        wishlistCount = parseInt(localStorage.getItem("wishlistCount"));
    }

    function increaseWishlistCount() {
        wishlistCount++;  // Tăng số lượng yêu thích lên 1

        // Cập nhật nội dung trong thẻ <span> để hiển thị số lượng mới
        document.getElementById("wishlistCount").innerHTML = " <i class='zmdi zmdi-favorite-outline'></i> (" + wishlistCount + ")";

        // Lưu lại số lượng mới vào localStorage
        localStorage.setItem("wishlistCount", wishlistCount);
    }

    // Reset the page and increase "LikePage" count by 1
    window.onload = function() {
        increaseWishlistCount();
    };
</script>