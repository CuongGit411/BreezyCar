<?php
    $sql_lietke_dh = "SELECT * FROM tbl_cart,tbl_dangky WHERE tbl_cart.id_khachhang = tbl_dangky.id_dangky ORDER BY tbl_cart.id_cart DESC";
    $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>
<p style="font-weight: bold;"  class="titledanhmuc">Liệt kê đơn hàng</p>
<table width="100%" boder="1px solib black" class="table table-hover"  >
  <tr>
    <th>Id</th>
    <th>Mã đơn hàng</th>
    <th>Tên khách hàng</th>
    <th>Địa chỉ</th>
    <th>Email</th>
    <th>Số điện thoại</th>
    <th>Tình Trạng</th>
    <th>Quản lý</th>
    <th>In</th>
  </tr>
  <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_dh)){
        $i++;
        ?>
        <tr style="text-align: center;">
            <td><?php echo $i ?></td>
            <td><?php echo $row['code_cart'] ?></td>
            <td><?php echo $row['tenkh'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['diachi'] ?></td>
            <td><?php echo $row['dienthoai'] ?></td>
            <td>
                <?php 
                if($row['cart_status'] == 1){
                    echo'<a href ="modules/quanlydonhang/xuly.php?code='.$row['code_cart'].'">Đơn hàng mới</a>';
                }else{
                    echo'Đã xem';
                } ?>
            </td>
            <td>
                <a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart'] ?>">Xem đơn hàng</a> 
            </td>
            <td>
                <a href="modules/quanlydonhang/indonhang.php?code=<?php echo $row['code_cart'] ?>">In đơn hàng</a> 
            </td>
        </tr>
  <?php
    }
  ?>
  
</table>