<?php 
//echo implode(',', $nama_produk)."<br>";
//echo implode(',', $kd_produk)."<br>";
//echo implode(',', $satuan)."<br>";
//echo implode(',', $qty)."<br>";
//echo implode(',', $harga)."<br>";
//echo implode(',', $jumlah)."<br>";
?>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<!--
		<table border="1px solid">
			<tr>
				<th>Kode Produk</th>
				<th>Nama Produk</th>
				<th>Satuan</th>
				<th>Quantity</th>
				<th>Harga</th>
				<th>Jumlah</th>
			</tr>
			<?php foreach ($produk as $i) { ?>
			<tr>
				<td><?php echo $i;?></td>
				<td><?php echo $i;?></td>
				<td><?php echo $i;?></td>
				<td><?php echo $i;?></td>
				<td><?php echo $i;?></td>
				<td><?php echo $i;?></td>
			</tr>
			<?php } ?>
		</table>
	-->
	<?php 
	/*
	for ($i=0; $i <= count($this->input->post('txtnmbarang')) ; $i++) { 
		$barang[$i] = array(
			'nama_produk' => $produk['namabarang'][$i],
			'satuan' => $produk['satuan'][$i],
			'qty' => $produk['qty'][$i],
			'harga' => $produk['harga'][$i],
			'jumlah' => $produk['jlh'][$i]
			);
	}
	echo $test;*/
	echo "<pre>";
	print_r($produk);
	echo "</pre>";
	?>
	</body>
</html>