<?php
include('../../config/config.php');

$tensanpham = mysqli_real_escape_string($mysqli, $_POST['tensp']);
$masp = mysqli_real_escape_string($mysqli, $_POST['masp']);
$giasp = mysqli_real_escape_string($mysqli, $_POST['giasp']);
$giadis = mysqli_real_escape_string($mysqli, $_POST['giadis']);
$discount = mysqli_real_escape_string($mysqli, $_POST['discount']);
$start = mysqli_real_escape_string($mysqli, $_POST['start']);
$issale = mysqli_real_escape_string($mysqli, $_POST['issale']);
$soluong = mysqli_real_escape_string($mysqli, $_POST['soluong']);
//XU LY HINH ANH
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;
$tomtat = mysqli_real_escape_string($mysqli, $_POST['tomtat']);
$noidung = mysqli_real_escape_string($mysqli, $_POST['noidung']);
$tinhtrang = mysqli_real_escape_string($mysqli, $_POST['tinhtrang']);
$danhmuc = mysqli_real_escape_string($mysqli, $_POST['danhmuc']);

if (isset($_POST['themsanpham'])) {
    //Them
    $sql_them = "INSERT INTO tbl_sanpham (tensanpham, masp, giasp, giadis, discount, start, issale, soluong, hinhanh, tomtat, noidung, tinhtrang, id_danhmuc) VALUES ('$tensanpham', '$masp', '$giasp', '$giadis', '$discount', '$start', '$issale', '$soluong', '$hinhanh', '$tomtat', '$noidung', '$tinhtrang', '$danhmuc')";
    mysqli_query($mysqli, $sql_them);
    move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
    header('Location:../../index.php?action=quanlysp&query=them');
} elseif (isset($_POST['suasanpham'])) {
    //Sua
    if ($hinhanh != '') {
        move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);

        $sql_update = "UPDATE tbl_sanpham SET tensanpham='$tensanpham', masp='$masp', giasp='$giasp', giadis='$giadis', discount='$discount', start='$start', issale='$issale', soluong='$soluong', hinhanh='$hinhanh', tomtat='$tomtat', noidung='$noidung', tinhtrang='$tinhtrang', id_danhmuc='$danhmuc' WHERE id_sanpham='$_GET[idsanpham]'";
        //Xoa anh cu
        $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        while ($row = mysqli_fetch_array($query)) {
            unlink('uploads/'.$row['hinhanh']);
        }
    } else {
        $sql_update = "UPDATE tbl_sanpham SET tensanpham='$tensanpham', masp='$masp', giasp='$giasp', giadis='$giadis', discount='$discount', start='$start', issale='$issale', soluong='$soluong', tomtat='$tomtat', noidung='$noidung', tinhtrang='$tinhtrang', id_danhmuc='$danhmuc' WHERE id_sanpham='$_GET[idsanpham]'";
    }

    mysqli_query($mysqli, $sql_update);
    header('Location:../../index.php?action=quanlysp&query=them');
} else {
    $id = $_GET['idsanpham'];
    $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$id' LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($query)) {
        unlink('uploads/'.$row['hinhanh']);
    }
    $sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham='$id'";
mysqli_query($mysqli, $sql_xoa);
    header('Location:../../index.php?action=quanlysp&query=them');
}
?>