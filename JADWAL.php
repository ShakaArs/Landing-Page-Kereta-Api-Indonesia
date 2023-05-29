<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
			<title>JADWAL</title>
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
                            <li><a href="JADWAL.html"class="active">JADWAL</a></li>
                            <li><a href="PESAN.html">PESAN TIKET</a></li>
                            <li><a href="CONTACT.html">HUBUNGI KAMI</a></li>
                        </ul>
                </header>
				<div class="content">
					<div class="textBox">
						<h2>JADWAL PEMBERANGKATAN KA <br>di <span>PULAU JAWA</span></h2>
						<p>Rangkaian Kereta Api di pulau jawa sudah berjalan kembali secara normal, Namun untuk ketentuan dan syarat naik kereta silahkan cek di website resmi.
                        </p>
						<a href="https://www.instagram.com/kai121_/?hl=id">JADWAL</a>
						<a href="https://www.kai.id/">INFORMASI</a>
				</div>
				<div class="imgBox">
					<img src="gerbong1.jpg" class="gerbong1">
				</div>
				<ul class="thumb">
					<li><img src="gerbong1.jpg" onclick="imgSlider('gerbong1.jpg')"></li>
					<li><img src="gerbong2.jpg" onclick="imgSlider('gerbong2.jpg')"></li>
					<li><img src="gerbong3.jpg"  onclick="imgSlider('gerbong3.jpg')"></li>
					<li><img src="gerbong4.jpg"  onclick="imgSlider('gerbong4.jpg')"></li>
				</ul>
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