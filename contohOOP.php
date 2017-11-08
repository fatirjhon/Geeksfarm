<head>
		<title>OOP</title>
</head>
	<body style="background-image: url(img/headbanger.png);background-repeat: no-repeat; background-position: 100% 115%; background-size: 400px; background-attachment: fixed">
		<h1 style="color: green">OOP</h1>
	<hr>
	<ol>
	<h3>Toko alat musik</h3>
	<?php
		abstract class AlatMusik{
			abstract protected function merk($am); //harus public / protected
			abstract protected function warna($aw); //2 fungsi ini harus dipanggil di tiap anak kelasnya
		}

		class Aksesoris{
			protected static $cab = "cabinet";
			protected static $stp = "strap";
			protected function adalah(){ //fungsi harus berisi body
				return "Aksesoris ini adalah : ";
			}
		}

		interface Effect{
			public function tipe($et); //harus public
		}

		class Drum extends AlatMusik{
			public function merk($am){
				return "Merk drum ini adalah $am";
			}
			public function warna($aw){
				return " berwarna $aw ";
			}
			public function kondisi($hd){
				return " kondisi $hd. <br> <br>";
			}
		} $vardrum = new Drum(); //instansiasi

		echo $vardrum->merk("yamaha"). $vardrum->warna("hitam"). $vardrum->kondisi("full set");
		
		class Gitar extends AlatMusik implements effect {
			public  function merk($am){
				return "Merk gitar ini adalah $am ";
			}
			public function warna($aw){
				return "berwarna $aw";
			}
			public function tipe($et){
				return " menggunakan pedal $et. <br> <br>";
			}
		} $vargitar = new Gitar();
		
		echo $vargitar->merk("ibanez"). $vargitar->warna("merah"). $vargitar->tipe("AMT P2");
		
		class Cabinet extends Aksesoris{
			public function adalah(){
				return parent::adalah(); //overridden method
			}
			public function cab(){
				return parent::$cab; //overridden property
			}
		} $varcab = new Cabinet();

		echo $varcab->adalah(). $varcab->cab();
		
		class Strap extends Aksesoris{
			public function adalah(){
				return parent::adalah(); //overridden method
			}
			public function tipe(){
				return parent::$stp; //overridden property
			}
		} $varstr = new Strap();

		echo "<br>". "<br>". $varstr->adalah(). $varstr->tipe();
	?>
	</body>