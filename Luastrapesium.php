<?php
echo "MENGHITUNG LUAS TRAPESIUM <br> ";
print "<hr width=90% size=5 color=red align='left'>";

    @$atas = $_GET['atas'];
    @$bawah = $_GET['bawah'];
    @$tinggi = $_GET['tinggi'];
    @$luas = (($atas + $bawah)*$tinggi)/2;
?>

<!DOCTYPE html>
<hmtl>
    <head>
        <title>Menghitung LUAS TRAPESIUM</title>
    </head>

    <body>
        <form method="GET">
            A   (atas) ===   
            <input type="text" name="atas" value="<?php echo $atas; ?>"/> cm<br/><br>
            B (bawah) =
            <input type="text" name="bawah" value="<?php echo $bawah; ?>"/> cm<br/><br>
            t (tinggi)===
            <input type="text" name="tinggi" value="<?php echo $tinggi; ?>"/> cm<br/><br>
            <input type="submit" name="submit" value="HITUNG"/><br/><br/>
            <?php
    echo "Diketahui<br>";
    echo "Sisi Atas=  $atas cm<br>";
    echo "Sisi Bawah= $bawah cm<br>";
    echo "Tinggi =  $tinggi cm<br>";
    echo "<br>";
    echo "Maka: <br>";
                echo "Luas TRAPESIUM = ".$luas." cm<sup>2</sup><br/>";
             
            ?>
        </form>
    </body>
	<body><a class="nav-link" href="index.php"><h3>Kembali Ke Halaman Awal</h3></a></body>
</hmtl>