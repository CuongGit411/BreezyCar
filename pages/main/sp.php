<?php
        $sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY tbl_sanpham.id_sanpham DESC";
        $query_pro = mysqli_query($mysqli,$sql_pro);

        $sql_cate = "SELECT * FROM tbl_danhmuc WHERE  tbl_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
        $query_cate = mysqli_query($mysqli,$sql_cate);
        $row_title = mysqli_fetch_array($query_cate);
?>          

<div class="tab-content">
                                                <div class="shop-top-bar ">
                                                    <h3><?php echo $row_title['tendanhmuc'] ?></h3>

                                                    </div>   

                                                    <?php
                                                                            while($row_pro = mysqli_fetch_array($query_pro)){

                                                                            
                                                                        ?>
                                            <div class="tab-pane active show fade" id="grid_view" role="tabpanel">

                                                    <div class="row">
                                                        <div class="col-12 mb-40">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <div class="single_Product_list">
                                                                        <div class="single__product">
                                                                            <span class="pro_badge">Sale</span>
                                                                            <div class="produc_thumb">
                                                                                <a href="index.php?quanly=product-details&id=<?php echo $row_pro['id_sanpham'] ?>"><img src="admin/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>" alt=""></a>
                                                                            </div>
                                                                            <div class="product_hover">
                                                                                <div class="product_action">
                                                                                    <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                                    <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                                                    <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                
                                                                <div class="col-lg-8">
                                                                    <div class="product__desc">
                                                                        <h3><a href="index.php?quanly=product-details&id=<?php echo $row_pro['id_sanpham'] ?>"><?php echo $row_pro['tensanpham'] ?></a></h3>
                                                                        <div class="product_rating">
                                                                         <a href="#"> <i  class="zmdi zmdi-star"> <?php echo $row_pro['start'] ?>/5</i></a>
                                                                        </div>
                                                                        <div class="price_amount">
                                                                            <span class="current_price"><?php echo '$'.number_format($row_pro['giasp']) ?></span>
                                                                            <span class="discount_price"><?php echo '-'.number_format($row_pro['discount']).'%' ?></span>
                                                                            <span class="old_price"><?php echo '$'.number_format($row_pro['giadis']) ?></span>
                                                                        </div>
                                                                        <p> <?php echo $row_pro['tomtat'] ?> </p>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                                            }
                                                                    ?>
                                            </div>
                                            
                                        </div>