<div id="main">
    <div class="maincontent">
        <?php
            if(isset($_GET['quanly'])){
                $tam = $_GET['quanly'];
            }else{
                $tam ='';
            }
            if($tam == 'shop'){
                include("main/shop.php");
            }elseif($tam == 'shop2'){
                include("main/shop2.php");
            }elseif($tam == 'timkiem'){
                include("main/timkiem.php");
            }elseif($tam == 'product-details'){
                include("main/product-details.php");
            }elseif($tam == 'checkout'){
                include("main/checkout.php");
            }elseif($tam == 'my-account'){
                include("main/my-account.php");
            }elseif($tam == 'cart'){
                include("main/cart.php");
            }elseif($tam == 'about'){
                include("main/about.php");
            }elseif($tam == 'blog'){
                include("main/blog.php");
            }elseif($tam == 'library'){
                include("main/library.php");
            }elseif($tam == 'contact'){
                include("main/contact.php");
            }elseif($tam == 'camon'){
                include("main/camon.php");
            }else{
                include("main/index.php");
            }

        ?>

    </div>
</div>