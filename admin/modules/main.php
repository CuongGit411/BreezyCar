

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="text-align: center;">
      <h1>Welcom To BreezyCar </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-body">
            
        <?php
            if(isset($_GET['action']) && $_GET['query']) {
                $tam = $_GET['action'];
                $query = $_GET['query'];
            }else{
                $tam ='';
                $query = '';
            }
            
            if($tam == 'quanlyshop' && $query == 'them'){
                include("modules/quanlyshop/them.php");   
            }elseif($tam == 'quanlyshop' && $query == 'lietke'){
                include("modules/quanlyshop/lietke.php");
            }elseif($tam == 'quanlyshop' && $query == 'sua'){
                include("modules/quanlyshop/sua.php");
            }elseif($tam == 'quanlysp' && $query == 'them'){
                    include("modules/quanlysp/them.php");
                }elseif($tam == 'quanlysp' && $query == 'lietke'){
                    include("modules/quanlysp/lietke.php");
            }elseif($tam == 'quanlysp' && $query == 'sua'){
                    include("modules/quanlysp/sua.php");
            }elseif($tam == 'quanlydonhang' && $query == 'lietke'){
                include("modules/quanlydonhang/lietke.php");
            }elseif($tam == 'donhang' && $query == 'xemdonhang'){
                include("modules/quanlydonhang/xemdonhang.php");
            }else{
                include("modules/dashboard.php");
            }

        ?>
            


        </div>
        
        
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

  