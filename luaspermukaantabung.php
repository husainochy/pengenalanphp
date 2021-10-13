<html>
<head>
    <title>Menghitung Luas PermukaanTabung</title>
</head>
<body>
    <h1>Form Hitung Luas Permukaan Tabung</h1>
    <h2>Isi Data:</h2>
    <form action="#" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Luas Alas^2</td>
                <td>:</td>
                <td><input type="text" name="alas" required></td>
            </tr>
            <tr>
                <td>Luas Selimut Tabung</td>
                <td>:</td>
                <td><input type="text" name="tinggi" required ></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_POST['submit'])){
            $alas    =$_POST['alas'];
            $tinggi    =$_POST['tinggi'];
            
            // menghitung luas segitiga
            $luas_segitiga = (2 * $alas) + $tinggi;
            
            echo "Hasil hitung luas segitiga adalah sebagai berikut:<br />";
            echo "Diketahui;<br />";
            echo "Luas Alas = $alas<br />";
            echo "Luas Selimut Tabung = $tinggi<br />";
            echo "Maka luas segitiga sama dengan  ((2*$alas) + $tinggi) = $luas_segitiga";
        }
    ?>
</body>
<body><a class="nav-link" href="index.php"><h3>Kembali Ke Halaman Awal</h3></a></body>
</html>