<?php
/*
Site : http:www.smarttutorials.net
Author :muni
*/
require_once 'config.php';
if($_POST['type'] == 'produk_table'){
	$row_num = $_POST['row_num'];
	$name = $_POST['name_startsWith'];
	$query = "SELECT kd_produk, nama_produk FROM tbl_inproduk where UPPER(nama_produk) LIKE '".strtoupper($name)."%'";
	$result = mysqli_query($con, $query);
	$data = array();
	while ($row = mysqli_fetch_assoc($result)) {
		$name = $row['kd_produk'].'|'.$row['nama_produk'].'|'.$row_num;
		array_push($data, $name);	
	}
	echo json_encode($data);
}


