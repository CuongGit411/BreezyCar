<?php
    $sql_danhmucbrand = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc ASC LIMIT 5";
    $query_danhmucbrand = mysqli_query($mysqli,$sql_danhmucbrand);
?>
<?php
    $sql_danhmuccolor = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC  LIMIT 5";
    $query_danhmuccolor = mysqli_query($mysqli,$sql_danhmuccolor);
?>
<?php
        $sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT 5";
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
                                            
                                    <?php
                                        include('pages/main/sp.php')
                                    ?>
                                </div>
            
                            </div>
                        </div>
                       
                        
                    </div>
                </div>
                <!--shop area end-->
                
                

                <!--Newsletter section end -->
                
               
               
                
            </div>