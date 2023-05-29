<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
			<title>PESAN TIKET</title>
			<link rel="stylesheet" href="JADWAL.css">
	</head>
		<body>
			<section>
				<div class="circle"></div>
				<header id="header">
                    <a href="#" class="logo">KERETA API INDONESIA</a>
                        <ul>
                            <li><a href="BERANDA.html" >BERANDA</a></li>
                            <li><a href="TENTANG.html">TENTANG</a></li>
                            <li><a href="JADWAL.php">JADWAL</a></li>
                            <li><a href="PESAN.html"class="active">PESAN TIKET</a></li>
                            <li><a href="CONTACT.html">HUBUNGI KAMI</a></li>
                        </ul>
                </header>
                <?php
                require_once("config/connection.php");
                $query =mysqli_query($connection,"SELECT * FROM tiket");
                ?>
            <div class="row">
                <div class="col-md-12">
                    <table border=1 cellspacing=4 cellpadding=10 width="700">
                        <thead>
                            <tr>
                                <th width="25">NO</th>
                                <th width="50">Nama Kereta</th>
                                <th width="50">Kelas</th>
                                <th width="50">Harga</th>
                                <th width="50">Aksi

                                    
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1;?>
                        <?php while($row =mysqli_fetch_array($query)):?>
                            <tr text align="center">
                                <td><?php echo $no ?></td>
                                <td><?php echo $row['nama']?></td>
                                <td><?php echo $row['Kelas']?></td>
                                <td><?php echo $row['harga']?></td>
                                <td>
                                    <a href="" class="btn btn-sm btn-warning">Pesan</a>
                                </td>
                            </tr>
                            <?php $no++?>
                            <?php endwhile;?>
                        </tbody>
                    </table>
                </div>
            </div>
				
			</section>
			<script type="text/javascript">
				function imgSlider(anything){
					document.querySelector('.gerbong1').src = anything;
				}
			</script>
            <br>
            <br>
            
		</body>
</html>