<?php
    $sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
    $query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>
<p style="font-weight: bold;" class="titledanhmuc">Liệt kê sản phẩm</p>

<table width="100%" class="table table-hover">
<tr>
    <th>Id</th>
    <th>Tên Danh Mục</th>
    <th>Quản lý</th>
  </tr>
  <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
        $i++;
        ?>
        <tr style="text-align: center;">
            <td><?php echo $i ?></td>
            <td><?php echo $row['tendanhmuc'] ?></td>
            <td>
                <a href="modules/quanlyshop/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xóa</a> | <a href="?action=quanlyshop&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa</a>
            </td>
        </tr>
  <?php
    }
  ?>
</table>
