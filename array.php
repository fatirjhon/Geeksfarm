  <head>
    <title>Array</title>
  </head>
  <body style="background-image: url(img/headbanger.png);background-repeat: no-repeat; background-position: right bottom; background-size: 600px; margin-bottom: 150px">
  	<h1 style="color: green">Jawaban Soal "array_ex.docx"</h1>
    <hr>
  	<ol>

    	<h3>Array 1</h3>
      <?php
        $color = array('white', 'green', 'red', 'blue', 'black');
          echo "The memory of that scene for me is like a frame
              of film forever frozen at that moment: the ". $color[2]. " carpet, ".
              "the ".$color[1]. " lawn, ". "the ". $color[2]. " house, ". "the leaden sky.
              The new president and his first lady. - Richard M. Nixon";
      ?>
      <br>
      <br>

      <h3 style="color: red">Array 2</h3>
      <?php
        $color = array('white', 'green', 'red');
          echo $color[0]. " ". $color[1]. " ". $color[2];
          echo '<ul>'.'<li>'. $color[1]. '</li>'. '<li>'. $color[2]. '</li>'. '<li>'. $color[0]. '</li>'. '</ul>';
      ?>
      <br>
      <br>

      <h3>Array 3</h3>
      <?php
        $ceu = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
          "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
          "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
          "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
          "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
          "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
          "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest",
          "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");
          echo "The capital of Netherlands is ". $ceu["Netherlands"]. '<br>'.
          "The capital of Greece is ". $ceu["Greece"]. '<br>'. "The capital of Germany is ". "The capital of Germany is ". $ceu["Germany"]. '<br>';
      ?>
      <br>
      <br>

      <h3>Array 5</h3>
      <?php
        $warna = array(4=>"white", 6=>"green", 11=>"red");
        $tmparray = array_values($warna);
          echo array_shift($tmparray);
      ?>
      <br>
      <br>

      <h3>Array 7</h3>
      <?php
        $angka = array(1, 2, 3, 4, 5);
        $menyisipkan = array( '$' );
        array_splice($angka, 3, 0, $menyisipkan);
        $urutan = count($angka);
          for ($x=0; $x < $urutan ; $x++) { 
            echo $angka[$x]. " ";
        }
      ?>
      <br>
      <br>

      <h3>Array 8</h3>
      <?php
        $associative = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
        asort($associative);
        echo "a) ";
        foreach ($associative as $x => $value) {
          echo $x. " = ". $value. '<br>';          
        }
        ksort($associative);
        echo '<br>'. "b) ";
        foreach ($associative as $x => $key) {
          echo $x. " = ". $key. '<br>';
        }
        arsort($associative);
        echo '<br>'. "c) ";
        foreach ($associative as $x => $value) {
          echo $x. " = ". $value. '<br>';
        }
        krsort($associative);
        echo '<br>'. "b) ";
        foreach ($associative as $x => $key) {
          echo $x. " = ". $key. '<br>';
        }
      ?>
      <br>
      <br>

      <h3>Array 9</h3>
      <?php
      $suhu = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
      $average = array_sum($suhu)/count($suhu);
        echo "Average : ". ($average). "<br>";
      sort($suhu);
        echo "List lowest tempratures : ";
        for ($x=0; $x < 5; $x++) { 
          echo $suhu[$x]. " ";
        }
        echo "<br>". "List highest tempratures : ";
        for ($y=count($suhu)-5; $y < count($suhu); $y++) { 
          echo $suhu[$y]. " ";
        }
      ?>
      <br>
      <br>

      <h3>Array 12</h3>
      <?php
      function huruf($data, $case){
      $kondisi = ($case == 'lowercase')? 'lowercase' : 'uppercase';
      $test = [];
      foreach($data as  $key => $value) {
        if ($kondisi == 'lowercase') {
          $test[$key] = strtolower($value);
            } else {
              $test[$key] = strtoupper($value);
            }
        } return $test;
}
      $color = array("A" => 'Blue', "B" => 'Green', "C" => 'Red');
      echo "Values are in lower case : ". "<br>";
      print_r(huruf($color, 'lowercase'));
      echo "<br>". "<br>". "Values are in upper case : ". "<br>";
      print_r(huruf($color, 'uppercase'));
        
      ?>
      <br>
      <br>

      <h3>Array 13</h3>
      <?php
        foreach (range(200, 250) as $number) {
            if ($number % 4 == 0) {
              echo $number. " ";
            }
        }
      ?>
      <br>
      <br>

      <h3>Array 14</h3>
      <?php
        $acak = array("abcd","abc","de","hjjj","g","wer");
        $length = array_map("strlen", $acak);
          echo "The shortest array length is : ". min($length). "<br>";
          echo "The longest array length is : ". max($length);
      ?>
      <br>
      <br>

      <h3>Array 15</h3>
      <?php
          $number = range(11, 20);
          shuffle($number);
          foreach ($number as $key) {
            echo $key. " ";
          }
      ?>
      <br>
      <br>

      <h3 style="color: red">Array 16</h3>
      <?php
        echo max($number); //array diambil dari soal nomor 15
      ?>
      <br>
      <br>

      <h3>Array 17</h3>
      <?php
        function lowint($nilai)
        {
          return min(array_filter(func_get_args()));
        }
        $a = 5;
        $b = 3;
        $c = -2;
        $d = 0;
        echo lowint($a, $b, $c, $d);
      ?>
      <br>
      <br>

      <h3>Array 36</h3>
      <?php
        $merk = array("Asus", "Samsung", "Xiaomi", "iPhone");     
        $merkl = array_map("strtolower", $merk);
          echo "Lower Case : ";
          foreach ($merkl as $key) {
            echo $key. " ";
          }
        $merku = array_map("strtoupper", $merk);
          echo "<br>". "Upper Case : ";
          foreach ($merku as $key) {
            echo $key. " ";
          }
      ?>
      <br>
      <br>

      <h3>Array 37</h3>
      <?php
        $freqsuhu = array_count_values($suhu);
        $brpkali = $freqsuhu["75"];
          echo "Angka 75 keluar sebanyak ". $brpkali. " kali";
      ?>
  </body>