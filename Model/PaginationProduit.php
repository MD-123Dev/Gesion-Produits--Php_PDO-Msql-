<?php

require 'Config.php ';
$limit = 8;
$sql = 'SELECT * FROM products';
$s = $connection->prepare($sql);
$s->execute();
$allResp = $s->fetchAll(PDO::FETCH_ASSOC);
$total_results = $s->rowCount();
$total_pages = ceil($total_results / $limit);

if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = $_GET['page'];
}


$start = ($page - 1) * $limit;

$stmt = $connection->prepare("SELECT * FROM products  LIMIT $start, $limit");
$stmt->execute();


$stmt->setFetchMode(PDO::FETCH_OBJ);

$results = $stmt->fetchAll();

$conn = null;



$no = $page > 1 ? $start + 1 : 1;
           

?>