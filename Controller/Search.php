<?php
require '../env/Config.php';

$search = $_POST['query'];

if ($search != '') {
   $sql = "SELECT * FROM products where product_name like '%$search%' ";

$stmt = $connection->prepare($sql);
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
if (isset($data['0'])) {
  
   foreach ($data as $list) {
      $html = '<tr>
			<td>' . $list['id'] . '</td>
			<td>' . $list['product_name'] . '</td>
         <td>' . $list['price'] . '</td>
         <td>' . $list['category'] . '</td>
        
		  </tr>';
   }
   echo $html;
} else {
   echo "Data not found";
}
}


   
 
 
 ?>
