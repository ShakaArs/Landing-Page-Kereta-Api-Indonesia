
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>hasil inputan</title>
    </head>
        <body>
        <h2>HASIL INPUTAN</h2>
            <?php
            include('koneksi.php');

            $nama = $_POST['nama'];
            echo "Nama :".$_POST["nama"]. "<br />";
            $nim = $_POST['nim'];
            echo "NIM :".$_POST["nim"]. "<br />";
            $Alamat = $_POST['alamat'];
            echo "Alamat :".$_POST["alamat"]. "<br />";

            $perintah ="INSERT INTO mhs(nama, nim, alamat) VALUES ('$nama','$nim','$Alamat')";
            
            mysqli_query($konek,$perintah);
            ?>
        </body>
</html>
    