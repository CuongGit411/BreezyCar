<?php
    session_start();
    include('../../admin/config/config.php');

    //Them so luong
    if(isset($_GET['tang'])){
        $id = $_GET['tang'];
        $product = array();
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id'] != $id){
                $product[] = $cart_item;
            }else{
                $tangsoluong = $cart_item['soluong'] + 1;
                if($tangsoluong <= 10){
                    $cart_item['soluong'] = $tangsoluong;
                    $product[] = $cart_item;
                }else{
                    $product[] = $cart_item;
                }
            }
        }
        $_SESSION['cart'] = $product;
        header('Location: ../../index.php?quanly=cart');
        exit();
    }
    //Giam So Luong
    if(isset($_GET['giam'])){
        $id = $_GET['giam'];
        $product = array();
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id'] != $id){
                $product[] = $cart_item;
            }else{
                $giamsoluong = $cart_item['soluong'] - 1;
                if($giamsoluong > 0){
                    $cart_item['soluong'] = $giamsoluong;
                }
                $product[] = $cart_item;
            }
        }
        $_SESSION['cart'] = $product;
        header('Location: ../../index.php?quanly=cart');
        exit();
    }
    //Xoa san pham
    if(isset($_SESSION['cart']) && isset($_GET['xoa'])){
        $id = $_GET['xoa'];
        $product = array();
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id'] != $id){
                $product[] = $cart_item;
            }
        }
        $_SESSION['cart'] = $product;
        header('Location: ../../index.php?quanly=cart');
        exit();
    }

    //Them san pham to cart 
    if(isset($_POST['tocart'])){
        // session_destroy();
        $id = $_GET['idsanpham'];
        $soluong = 1;
        $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham='".$id."' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        $row = mysqli_fetch_array($query);
        if($row){
            $new_product = array(
                'tensanpham' => $row['tensanpham'],
                'id' => $id,
                'soluong' => $soluong,
                'giasp' => $row['giasp'],
                'discount' => $row['discount'],
                'start' => $row['start'],
                'sale' => $row['sale'],
                'hinhanh' => $row['hinhanh'],
                'masp' => $row['masp']
            );
            if(isset($_SESSION['cart'])){
                $found = false;
                $product = array();
                foreach($_SESSION['cart'] as $cart_item){
                    //neu du lieu trung
                    if($cart_item['id'] == $id){
                        $cart_item['soluong'] += $soluong;
                        $product[] = $cart_item;
                        $found = true;
                    }else{
                        
                        //neu du lieu khong trung
                        $product[] = $cart_item;
                    }
                }
                if($found == false){
                    // lien ket du lieu
                    $product[] = $new_product;
                }
                $_SESSION['cart'] = $product;
            }else{
                $_SESSION['cart'] = array($new_product);
            }
        }
        header('Location: ../../index.php?quanly=cart');
        exit();
    }
?>