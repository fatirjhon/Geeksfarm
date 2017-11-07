<head>
	<title>Function</title>
	<body style="background-image: url(img/headbanger.png);background-repeat: no-repeat; background-position: 100% 115%; background-size: 400px; margin-bottom: 150px; background-attachment: fixed">
		<h1 style="color: green">Jawaban Soal Function</h1>
	<hr>
	<ol>
	<h3>Function 1</h3>
	<?php
		function luaspersegipanjang($panjang, $lebar){
			$luaspersegipanjang = $panjang * $lebar;
			echo $luaspersegipanjang;
		}
		echo '<img src="img/persegi.png" alt="gambar persegi"/>'. "<br>";
		echo "Rumus persegi panjang adalah panjang x lebar (gambar kiri). Hasilnya adalah :". "<br>";
		luaspersegipanjang(18, 12);
		echo "<br>". "<br>";
		function luaspersegi($sisi){
			$luaspersegi = $sisi * $sisi;
			echo $luaspersegi;
		}
		echo "Rumus persegi adalah sisi x sisi (gambar kanan). Hasilnya adalah :". "<br>";
		luaspersegi(9);
	?>
	<br>
	<br>

	<h3>Function 2</h3>
	<?php

		function split($angka){
		echo "Hasil split per 2 kata dari ". $angka. " adalah : ";
		foreach (str_split($angka, 2) as $value) {
			echo $value. " ";	} 
		}	split("120831");
	?>
	<br>
	<br>
	
	<h3>Function 3</h3>
	<?php
		function cari($contoh){
		$leng = strlen($contoh)/2;
		$kanan = ceil($leng);
		$kiri = floor($leng)-1;
		if (strlen($contoh)%2==0) {
			echo "String = ". $contoh. "<br>". "Huruf tengah string di atas adalah : ". substr($contoh, $kiri, 2). "<br>";
		} else {
			echo "String = ". $contoh. "<br>". "Huruf tengah string di atas adalah : ". substr($contoh, $leng, 1). "<br>". "<br>"; }
		}	cari("Jakarta"). cari("Padang");
		
	?>
	<br>
	
	<h3>Function 4</h3>
	<?php
		function vowel($kalimat){
			return substr_count($kalimat, "a") + substr_count($kalimat, "i") + substr_count($kalimat, "u") + substr_count($kalimat, "e") + substr_count($kalimat, "o");
		} 	echo vowel("Kucing itu berlarian dikejar tikus");
	?>
	<br>
	<br>
	
	<h3>Function 5</h3>
	<?php
		function hitungkata($kalimat){
			$kalimat = str_word_count($kalimat);
			return $kalimat;
		} echo "Jumlah kata dari kalimat ". "Laleur loar leor mapay areuy ". "adalah : ". hitungkata("Laleur loar leor mapay areuy"). " kata";
	?>
	<br>
	<br>
	
	<h3 style="color: red">Function 6</h3>
	<?php

	?>
	<br>
	<br>
	
	<h3">Function 7</h3>
	<?php
		function ascii($a, $b, $c){
			for ($x=1; $a <= $b ; $x++, $a++) { 
				echo chr($a);
				if ($x%$c==0) {
					echo "<br>";
				}
			}
		}	echo ascii(ord("("), ord("z"), 20);
	?>
	</body>
</head>