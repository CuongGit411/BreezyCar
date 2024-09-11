<P style="font-weight: bold;" class="titledanhmuc">Thêm Sản Phẩm</P>
<table boder="1" width="50%" style="border-collapse: collapse;" class="table table-hover">
    <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
  <tr>
    <td>Tên Sản Phẩm</td>
    <td><input type="text" name="tensp"></td>
  </tr>

  <tr>
    <td>Mã Sản Phẩm</td>
    <td><input type="text" name="masp"></td>
  </tr>
  <tr>
    <td>Giá Sản Phẩm</td>
    <td><input type="text" name="giasp"></td>
  </tr>
  <tr>
    <td>Giá Discount</td>
    <td><input type="text" name="giadis"></td>
  </tr>
  <tr>
    <td>Số Lượng</td>
    <td><input type="text" name="soluong"></td>
  </tr>
  <tr>
    <td>Discount</td>
    <td><input type="text" name="discount"></td>
  </tr>
  <tr>
    <td>Start</td>
    <td><input type="text" name="start"></td>
  </tr>
  <tr>
    <td>Hình Ảnh</td>
    <td><input type="file" name="hinhanh"></td>
  </tr>
  <tr>
    <td>Tóm Tắt</td>
    <td><textarea row='5' name='tomtat'></textarea></td>
  </tr>
  <tr>
    <td>Nội Dung</td>
    <td><textarea row='5' name='noidung'></textarea></td>
  </tr>
  <tr>
    <td>Danh Mục Sản Phẩm</td>
    <td>
      <select name="danhmuc">
          <?php
            $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
            $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
            while($row_danhmuc =  mysqli_fetch_array($query_danhmuc)){
            ?>
               <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
            <?php
            }
          ?>
      </select>
    </td>
  </tr>
  <tr>
    <td>Sale</td>
    <td>
      <select name="issale">
        <option value="sale">True</option>
        <option value="">False</option>
      </select>
    </td>
  </tr>
  <tr>
    <td>Tình Trạng</td>
    <td>
      <select name="tinhtrang">
        <option value="1">Kích Hoạt</option>
        <option value="0">Ẩn</option>
      </select>
    </td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="themsanpham" value="Thêm sản phẩm"></td>
  </tr>

</table>