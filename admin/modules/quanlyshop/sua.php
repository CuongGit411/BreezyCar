<?php
    $sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
    $query_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp);
?>

<P style="font-weight: bold;" class="titledanhmuc">Sửa Danh Mục Sản Phẩm</P>
<table boder="1" width="50%" style="border-collapse: collapse;" class="table table-hover">
    <form method="POST" action="modules/quanlyshop/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc']?>">

    <?php
        while($dong = mysqli_fetch_array($query_sua_danhmucsp)){

    ?>
  <tr>
    <td>Tên Danh Mục</td>
    <td><input type="text" value="<?php echo $dong['tendanhmuc']?>" name="tendanhmuc"></td>
  </tr>

  <tr>
    <td>Thứ Tự</td>
    <td><input type="text" value="<?php echo $dong['thutu']?>" name="thutu"></td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm"></td>
  </tr>
  <?php
        }
  ?>
</table>