<?php  
 //fetch.php  
 $connect = mysqli_connect("pdb42.awardspace.net", "2747134_orders", "MLG4life", "2747134_orders");   
 if(isset($_POST["employee_id"]))  
 {  
      $query = "SELECT * FROM tbl_employee WHERE id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>