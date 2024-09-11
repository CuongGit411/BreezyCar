<?php
    $sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE  id_sanpham = '$_GET[idsanpham]' LIMIT 1";
    $query_sua_sp = mysqli_query($mysqli,$sql_sua_sp);
?>

<P style="font-weight: bold;"  class="titledanhmuc">Sửa Sản Phẩm</P>
<table boder="1" width="50%" style="border-collapse: collapse;" class="table table-hover">
<?php
while($row = mysqli_fetch_array($query_sua_sp)){
?>
    <form method="POST" action="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham']?>" enctype="multipart/form-data">  
  <tr>
    <td>Tên Sản Phẩm</td>
    <td><input type="text" value="<?php echo $row['tensanpham']?>" name="tensp"></td>
  </tr>

  <tr>
    <td>Mã Sản Phẩm</td>
    <td><input type="text" value="<?php echo $row['masp']?>" name="masp"></td>
  </tr>
  <tr>
    <td>Giá Sản Phẩm</td>
    <td><input type="text" value="<?php echo $row['giasp']?>" name="giasp"></td>
  </tr>
  <tr>
    <td>Giá Discount</td>
    <td><input type="text" value="<?php echo $row['giadis']?>" name="giadis"></td>
  </tr>
  <tr>
    <td>Discount</td>
    <td><input type="text" value="<?php echo $row['discount']?>" name="discount"></td>
  </tr>
  <tr>
    <td>Start</td>
    <td><input type="text" value="<?php echo $row['start']?>" name="start"></td>
  </tr>
  <tr>
    <td>Sale</td>
    <td>
      <select name="issale">
        <?php
          if($row['issale'] == 'sale'){
        ?>
        <option value="sale" selected>True</option>
        <option value="">False</option>
        <?php
          }else{
        ?>
            <option value="sale" >True</option>
            <option value="" selected>False</option>
        <?php
          }
        ?>
      </select>
    </td>
  </tr>
  <tr>
    <td>Số Lượng</td>
    <td><input type="text" value="<?php echo $row['soluong']?>" name="soluong"></td>
  </tr>
  <tr>
    <td>Hình Ảnh</td>
    <td>
      <input type="file" name="hinhanh">
      <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px">  
    </td>
  </tr>
  <tr>
    <td>Tóm Tắt</td>
    <td><textarea row='5'  name='tomtat'><?php echo $row['tomtat']?></textarea></td>
  </tr>
  <tr>
    <td>Nội Dung</td>
    <td><textarea row='5' name='noidung'><?php echo $row['noidung']?></textarea></td>
  </tr>
  <tr>
    <td>Danh Mục Sản Phẩm</td>
    <td>
      <select name="danhmuc">
          <?php
            $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
            $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
            while($row_danhmuc =  mysqli_fetch_array($query_danhmuc)){
              if($row_danhmuc['id_danhmuc']== $row['id_danhmuc']){

            ?>
               <option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
            <?php
              }else{
              ?>
              <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
              <?php
              }
            }
          ?>
      </select>
    </td>
  </tr>
  <tr>
    <td>Tình Trạng</td>
    <td>
      <select name="tinhtrang">
        <?php
          if($row['tinhtrang'] == 1){
        ?>
        <option value="1" selected>Kích Hoạt</option>
        <option value="0">Ẩn</option>
        <?php
          }else{
        ?>
            <option value="1" >Kích Hoạt</option>
            <option value="0" selected>Ẩn</option>
        <?php
          }
        ?>
      </select>
    </td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="suasanpham" value="Sửa sản phẩm"></td>
  </tr>
    </form>
    <?php
      }
    ?>
</table>