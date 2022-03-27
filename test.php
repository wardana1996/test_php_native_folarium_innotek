<html>
<?php
    // jawaban no 1
    function bilangan_prima() {
        for($a=1;$a<=100;$a++) { 
            $k=0;
            for($b=1;$b<=$a;$b++) { 
                if($a % $b == 0) { 
                    $k++;
                }
            }
            if($k == 2){ 
                echo $a.',';
            }
        } 
    }
    echo bilangan_prima();
    echo "<br><br>";

    //jawaban no 2
    function bilangan_ganjil() {
        for($i = 1;$i<=100;$i++) {
            if($i % 2 == 1){
                echo $i ." ";
            }
        }
    }
    echo bilangan_ganjil();
    echo "<br><br>";

    //jawaban no 3
    function bilangan_genap() {
        for($i = 1;$i<=100;$i++) {
            if($i % 2 == 0){
                echo $i ." ";
            }
        }
    }
    echo bilangan_genap();
    echo "<br><br>";

    //jawaban no 4
    function bilangan_fibonacci() {
    $angka_pertama=0;
	$angka_kedua=1;
 
        for ($i=0; $i<10; $i++) {
            $output = $angka_pertama + $angka_kedua;
            echo " $output";
            $angka_pertama = $angka_kedua;
            $angka_kedua = $output;
        }
    }
    echo bilangan_fibonacci();
    echo "<br><br>";

    //jawaban no 5
    function segitiga() {
        $bintang=5;
	    for($a=$bintang;$a>0;$a--){
	        for($b=$bintang;$b>=$a;$b--){
		        echo "*";
	        }
	        echo "<br>";
	    }
    }
    echo segitiga();
    echo "<br><br>";

    //jawaban no 6
    function kelipatan_random_lima() {
        $lima = [1,5,10,15,20,25,30,35,40,45,50,55,60,65,70,75,80,85,90,95,100];
        $acak1 = array_rand($lima);
        $acak2 = array_rand($lima);
        $acak3 = array_rand($lima);
        $acak4 = array_rand($lima);
        $acak5 = array_rand($lima);

        if ($lima[$acak1] <= 60) {
            echo $lima[$acak1]." (Kurang)";
        } else if ($lima[$acak1] > 60 && $lima[$acak1] <= 70) {
            echo $lima[$acak1]." (Cukup)";
        } else if ($lima[$acak1] > 70 && $lima[$acak1] <= 80) {
            echo $lima[$acak1]." (Baik)";
        } else {
            echo $lima[$acak1]." (Luar Biasa)";
        }
        echo "<br>";

        if ($lima[$acak2] <= 60) {
            echo $lima[$acak2]." (Kurang)";
        } else if ($lima[$acak2] > 60 && $lima[$acak2] <= 70) {
            echo $lima[$acak2]." (Cukup)";
        } else if ($lima[$acak2] > 70 && $lima[$acak2] <= 80) {
            echo $lima[$acak2]." (Baik)";
        } else {
            echo $lima[$acak2]." (Luar Biasa)";
        }
        echo "<br>";

        if ($lima[$acak3] <= 60) {
            echo $lima[$acak3]." (Kurang)";
        } else if ($lima[$acak3] > 60 && $lima[$acak3] <= 70) {
            echo $lima[$acak3]." (Cukup)";
        } else if ($lima[$acak3] > 70 && $lima[$acak3] <= 80) {
            echo $lima[$acak3]." (Baik)";
        } else {
            echo $lima[$acak3]." (Luar Biasa)";
        }
        echo "<br>";

        if ($lima[$acak4] <= 60) {
            echo $lima[$acak4]." (Kurang)";
        } else if ($lima[$acak4] > 60 && $lima[$acak4] <= 70) {
            echo $lima[$acak4]." (Cukup)";
        } else if ($lima[$acak4] > 70 && $lima[$acak4] <= 80) {
            echo $lima[$acak4]." (Baik)";
        } else {
            echo $lima[$acak4]." (Luar Biasa)";
        }
        echo "<br>";

        if ($lima[$acak5] <= 60) {
            echo $lima[$acak5]." (Kurang)";
        } else if ($lima[$acak5] > 60 && $lima[$acak5] <= 70) {
            echo $lima[$acak5]." (Cukup)";
        } else if ($lima[$acak5] > 70 && $lima[$acak5] <= 80) {
            echo $lima[$acak5]." (Baik)";
        } else {
            echo $lima[$acak5]." (Luar Biasa)";
        }
        echo "<br>";
    }
    echo kelipatan_random_lima();
    echo "<br><br>";

    //jawaban no 7
    function kelipatan_tiga() {
        for ($i = 0; $i < 100; $i+=3) {
            echo $i;
            echo "<br>";
        }
    }
    echo kelipatan_tiga();
    echo "<br><br>";
?>
    <form action="" method="POST">
	<table>
		<tr>
			<td>Masukkan Nama Kota</td>
			<td>:</td>
			<td><input type="text" name="nama" placeholder="Masukkan nama kota" required></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="hasil"></td>
		</tr>
	</table>
</form>
    <?php 
        //jawaban no 8
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $arr = array("Jakarta", "Yogyakarta", "Bandung", "Bogor", "Semarang");
             if (in_array($nama, $arr)) {
                 echo true;
             } else {
                 echo false;
             }
        }
    ?>
</html>