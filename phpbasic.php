	<head>
		<title>PHP Basic</title>
	</head>
  	<body>
  	<h1 style="color:green">PHP Basic</h1>
    <hr>
  	<ol>
  	<h3>Variables & Echo</h3>
  	<?php
  		$nama = "Fatir"; //variabel nama
  		$umur = 17; //variabel umur
  		echo "Nama saya ". $nama. " baru menginjak usia ". $umur; //echo untuk menampilkan
  	?>
  	<h3>Constants & Echo</h3>
  	<?php
  		define("NAMA", "Fatir");
  		define("UMUR", 17);
  		echo NAMA. " usia ". UMUR;
  	?>
  	<h3>Doubles</h3>
	<?php
  		$dobelsatu = 7.3582401;
  		$dobeldua = 4.4118990;
  		$penjumlahandobel = $dobelsatu + $dobeldua;  
  			echo "$dobelsatu + $dobeldua = $penjumlahandobel";
	?>
	<h3>Local Variables</h3>
	<?php
		$x = 33;
		function assignx () {
    	$x = 77;
    		echo "\$x di dalam kurawal function adalah $x. ". "<br>";
  		}
  		assignx();
  			echo "\$x di luar kurawal function adalah $x. ";
	?>
  	</body>