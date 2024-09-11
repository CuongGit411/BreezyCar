<?php
    $sql_danhmucbrand = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc ASC LIMIT 5";
    $query_danhmucbrand = mysqli_query($mysqli,$sql_danhmucbrand);
?>
<?php
    $sql_danhmuccolor = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC  LIMIT 5";
    $query_danhmuccolor = mysqli_query($mysqli,$sql_danhmuccolor);
?>
<?php
        if(isset($_GET['trang'])){
            $page =$_GET['trang'];
        }else{
            $page=1;
        }
        if($page == '' || $page == 1 ){
            $begin =0;
        }else{
            $begin = ($page*5)-5;
        }

        $sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,5";
        $query_pro = mysqli_query($mysqli,$sql_pro);

?>          



<div class="exporso_wrapper">
        
                <!--Breadcrumb section-->
                <div class="breadcrumb_section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="breadcrumb_inner">
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><i class="zmdi zmdi-chevron-right"></i></li>
                                        <li>Shop</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Breadcrumb section end-->
                
                
                <!--shop area start-->
                <div class="shop_area ptb-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-8 col-12">
                                <div class="shop_sidebar">
                                   
                                    <div class="sidebar_widget mb-50">
                                        <div class="widget_title">
                                            <h3>Categories</h3>
                                        </div>
                                        <div class="widget_categories">
                                           <ul>
                                           <?php
                                                    while($row_danhmuccolor =  mysqli_fetch_array($query_danhmuccolor)){
                                                ?>
                                                <li><a href="index.php?quanly=shop2&id=<?php echo $row_danhmuccolor['id_danhmuc'] ?>"><?php echo $row_danhmuccolor['tendanhmuc'] ?></a></li>
                                                <?php
                                                    }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div class="sidebar_widget mb-50">
                                        <div class="widget_title">
                                            <h3>Brands</h3>
                                        </div>
                                        <div class="widget_brand">
                                           <ul>
                                           <?php
                                                    while($row_danhmucbrand =  mysqli_fetch_array($query_danhmucbrand)){
                                                ?>
                                                <li><a href="index.php?quanly=shop2&id=<?php echo $row_danhmucbrand['id_danhmuc'] ?>"><?php echo $row_danhmucbrand['tendanhmuc'] ?></a></li>
                                                <?php
                                                    }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                    
                        
                                                          
                                    
                                    
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-12 col-12 shop_details">
                                <div class="row">
                                    <div class="col-12">
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                            
                                    <div class="tab-content">
                                                   
                                                    <?php
                                                while($row = mysqli_fetch_array($query_pro)){

                                            ?>
                                            <div class="tab-pane active show fade" id="grid_view" role="tabpanel">

                                                    <div class="row">
                                                        <div class="col-12 mb-40">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <div class="single_Product_list">
                                                                        <div class="single__product">
                                                                            <span class="pro_badge"><?php echo $row['issale'] ?></span>
                                                                            <div class="produc_thumb">
                                                                                <a href="index.php?quanly=product-details&id=<?php echo $row['id_sanpham'] ?>"><img src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt=""></a>
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
                                                                        <h3><a href="index.php?quanly=product-details&id=<?php echo $row['id_sanpham'] ?>"><?php echo $row['tensanpham'] ?></a></h3>
                                                                        <div class="product_rating">
                                                                             <a href="#"> <i  class="zmdi zmdi-star"> <?php echo $row['start'] ?>/5</i></a>
                                                                        
                                                                            
                                                                        </div>
                                                                        <div class="price_amount">
                                                                            <span class="current_price"><?php echo '$'.number_format($row['giadis']) ?></span>
                                                                            <span class="discount_price"><?php echo '-'.number_format($row['discount']).'%' ?></span>
                                                                            <span class="old_price"><?php echo '$'.number_format($row['giasp']) ?></span>
                                                                        </div>
                                                                        <p><?php echo $row['tomtat'] ?> </p>
                                                                        <p> Danh Mục:<?php echo $row['tendanhmuc'] ?>  </p>
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
                                </div>
                                <div class="row pagination_box mt-70">
                                    <div class="col-12">
                                        <div class="pagination">
                                            
                                            <?php
                                                $sql_trang= mysqli_query($mysqli,"SELECT * FROM tbl_sanpham ");
                                                $row_count = mysqli_num_rows($sql_trang);
                                                 $trang = ceil($row_count /5);
                                            ?>
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-chevron-left"></i> prev</a></li>
                                                <?php
                                                    
                                                    for($i=1;$i<$trang;$i++){
                                                        ?>
                                                            <li <?php if($i==$page){echo 'style="background:#f6563c"'; }else{echo '';}  ?>><a href="index.php?quanly=shop&id=1&trang=<?php echo $i ?>"><?php echo $i ?></a></li>
                                                        <?php
                                                    }
                                                ?>
                                                <li><a href="#">next<i class="zmdi zmdi-chevron-right"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                       
                        
                    </div>
                </div>
                <!--shop area end-->
                

                <!--Newsletter section end -->
                
               
               
                
            </div>