<?php 
    function createConnection(){
        $host = "localhost";
        $username = "root";
        $password = "";
        $db = "carbreezy";

        $connection = mysqli_connect($host,$username,$password,$db);
        if($connection -> connect_errno){
            echo "<script>alert('Ket noi DB that bai!')</script>";
            return null;
        }else{
            return $connection;
        }
    }

    function executeQueryReturnOneRow($query){
         //B1: Tao ra ket noi
         $connection = createConnection();
         //B2: Viet cau query
         
         //B3: Lay ket qua
         $result = $connection -> query($query);
         //B4: Tao bien DATA trong
         $data = [];
         //B5: Lenh chuyen ket qua tu query result ($result) -> dang array (Tai bien data)
         while($row = mysqli_fetch_assoc($result)){
             array_push($data,$row);
         }
         //Cau lenh lay 1 phan tu
         return reset($data);
    }

    function executeQueryReturnManyRow($query){
        //B1: Tao ra ket noi
        $connection = createConnection();
        //B2: Viet cau query
        
        //B3: Lay ket qua
        $result = $connection -> query($query);
        //B4: Tao bien DATA trong
        $data = [];
        //B5: Lenh chuyen ket qua tu query result ($result) -> dang array (Tai bien data)
        while($row = mysqli_fetch_assoc($result)){
            array_push($data,$row);
        }
        //Cau lenh lay tat ca DATA
        return $data;
   }

   function getCauHinhWebsiteByCode($code){
    $query = "
        select *
        from cauhinhwebsite
        where codecauhinh = '".$code."'
    ";
    $result = executeQueryReturnOneRow($query);
    return $result;
}
?>