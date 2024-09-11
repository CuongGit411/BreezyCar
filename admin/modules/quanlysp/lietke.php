<?php
    $sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
    $query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>
<p style="font-weight: bold;" class="titledanhmuc">Liệt kê sản phẩm</p>
<table class="table table-hover" width="100%"  >
  <tr>
    <th>Id</th>
    <th>Tên Sản Phẩm</th>
    <th>Hình Ảnh</th>
    <th>Giá sp</th>
    <th>Discount</th>
    <th>Giá Dis</th>
    <th>start</th>
    <th>sale</th>
    <th>Số Lượng</th>
    <th>Danh Mục</th>
    <th>Mã sp</th>
    <th>Tóm tắt</th>
    <th>Trạng Thái</th>
    <th>Quản lý</th>
  </tr>
  <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_sp)){
        $i++;
        ?>
        <tr style="text-align: center;">
            <td><?php echo $i ?></td>
            <td><?php echo $row['tensanpham'] ?></td>
            <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
            <td><?php echo $row['giasp'] ?></td>
            <td><?php echo $row['discount'] ?></td>
            <td><?php echo $row['giadis'] ?></td>
            <td><?php echo $row['start'] ?></td>
            <td><?php if($row['issale']=='sale'){
                echo 'True';
            }else{
              echo 'False';
            } ?>
            </td>
            <td><?php echo $row['soluong'] ?></td>
            <td><?php echo $row['tendanhmuc'] ?></td>
            <td><?php echo $row['masp'] ?></td>
            <td class="tomtat"><?php echo $row['tomtat'] ?></td>
            <td><?php if($row['tinhtrang']==1){
                echo 'Kich Hoat';
            }else{
              echo 'An';
            } ?>
            </td>
            
            <td>
                <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xóa</a> | <a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a>
            </td>
        </tr>
  <?php
    }
  ?>
  
</table>


