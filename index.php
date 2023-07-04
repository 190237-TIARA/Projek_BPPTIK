<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap demo</title>
	<link href="library/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="my-div">
	<?php 

	function penjumlahan($a, $b) //mendefinisikan fungsi dengan parameter
	{
		return $a + $b;
	}


	$file = "data.json";
	// Mendapatkan isi file JSON
	$jsonData = file_get_contents($file);

	// Mengubah JSON menjadi array
	$dataArray = json_decode($jsonData, true);
	// membuat array bandara asal, dengan format asosiatif 
	$bandaraAsal = array(
		"Soekarno-Hatta(CGK)" => 50000, //nama bandara (key), pajak (value)
		"Husein Sastranegara(BDO)" =>30000,
		"Abdul Rachman Saleh(MLG)" => 40000,
		"Juanda(SUB)" => 40000
	);
	// membuat array bandara tujuan dengan format asosiatif
	$bandaraTujuan = array(
		"Ngurah Rai(DPS)" => 80000, //nama bandara (key), pajak (value)
		"Hasanudin(UPG)" =>70000,
		"Inanwatan(INX)" =>90000,
		"Sultan Iskandarmuda(BTJ)" => 70000
	);


	if (isset($_POST['submit'])) { //untuk memeriksa apakah tombol submit pada form telah diklik atau tidak
		//mengambil nilai dari input dengan atribut yang bernama maskapai dalam form lalu di simpan di dalam variabel
		$maskapai =	$_POST['maskapai']; 
		$asalBandara= $_POST['asal_bandara'];
		$tujuanBandara =$_POST['tujuan_bandara'];
		$hargaTiket = $_POST['harga'];
		//kondisi yang memeriksa apakah variabel $maskapai dan $hargaTiket tidak kosong
		if ($maskapai != "" && $hargaTiket !="") {
			$pajak = penjumlahan($bandaraAsal[$asalBandara],$bandaraTujuan[$tujuanBandara]); //panggil fungsi
			$totalHarga = penjumlahan ($hargaTiket, $pajak); //penggil fungsi
			$data = array(
				0 => $maskapai, 
				1 => $asalBandara, 
				2 => $tujuanBandara, 
				3 => $hargaTiket, 
				4 => $pajak, 
				5 => $totalHarga 
			);
			array_push($dataArray, $data); // Menambahkan elemen baru 

			// Mengencode data menjadi json
			$jsonfile = json_encode($dataArray, JSON_PRETTY_PRINT);

			// Menyimpan data ke dalam data.json
			file_put_contents($file, $jsonfile);

						sort($dataArray); //Mengurutkan array secara ascending (dari kecil ke besar) berdasarkan nilai elemen array
					}
				}


	// foreach ($bandaraAsal as $bandara => $value){
	// 	echo $bandara." ".$value."\n";
	// }
	// echo "\n";
	// foreach ($bandaraTujuan as $bandara => $value) {
	// 	echo $bandara." ".$value."\n";
	// }

				?>
				<!-- ======= bg Section ======= -->
				<section id="hero" class="d-flex align-items-center" style="background-color: rgb(173, 216, 230);">

					<div class="container">
						<div class="row gy-4">
							<div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
								<h1>Rute <b>Menarik</b></h1>
								<h2>Untuk Perjalanan Anda</h2>
							</div>
							<div class="col-lg-6 order-1 order-lg-2 hero-img">
								<img src="gambar/gambar_2.png" class="img-fluid animated" alt="">
							</div>
						</div>
					</div>

				</section><!-- bg Hero -->
				<br>
				<div class="container">
					<h2 style="text-align: center;">Pendaftaran Rute Penerbangan</h2>
					<!-- Form -->
					<form action="" method="post">
						<div class="mb-3 row">
							<label for="maskapai" class="col-sm-2 col-form-label">Maskapai</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="maskapai" name="maskapai">
							</div>
						</div>

						<div class="mb-3 row">
							<label for="bandaraAsal" class="col-sm-2 col-form-label">Bandara Asal</label>
							<div class="col-sm-10">
								<select class="form-select" aria-label="Default select example" name="asal_bandara">
									<option disabled>Pilih Bandara Asal</option>
									<?php foreach ($bandaraAsal as $bandara => $value):?> //Setiap elemen akan disimpan dalam variabel $bandara sebagai kunci (key) dan variabel $value akan menyimpan nilai (value) dari setiap elemen
										<option value="<?= $bandara ?>"><?= $bandara ?></option>
									<?php endforeach; ?> //menutup perulangan
								</select>
							</div>
						</div>

						<div class="mb-3 row">
							<label for="bandaraTujuan" class="col-sm-2 col-form-label">Bandara Tujuan</label>
							<div class="col-sm-10">
								<select class="form-select" aria-label="Default select example" name="tujuan_bandara">
									<option disabled>Pilih Bandara Tujuan</option>
									<?php foreach ($bandaraTujuan as $bandara => $value):?>
										<option value="<?= $bandara ?>"><?= $bandara ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="hargaTiket" class="col-sm-2 col-form-label">Harga Tiket</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" id="hargaTiket" name="harga">
							</div>
						</div>

						<div class="mb-3 row">
							<button type="submit" class="btn btn-primary" name="submit">Submit</button>
						</div>
					</form>
					<br>
					<h2 style="text-align: center;">Daftar Rute Penerbangan</h2><br>
					<table class="table">
						<thead>
							<tr>
								<!-- Header -->
								<th scope="col">No</th>
								<th scope="col">Maskapai</th>
								<th scope="col">Asal Penerbangan</th>
								<th scope="col">Tujuan Penerbangan</th>
								<th scope="col">Harga Tiket</th>
								<th scope="col">Pajak</th>
								<th scope="col">Total Harga Tiket</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($dataArray as $key => $value):?>
								<tr>
									<!-- Nilai $key+1 digunakan sebagai nomor urut -->
									<th scope="row"><?=$key+1?></th> 
									<td><?= $value[0] ?></td>
									<td><?= $value[1] ?></td>
									<td><?= $value[2] ?></td>
									<td><?= $value[3] ?></td>
									<td><?= $value[4] ?></td>
									<td><?= $value[5] ?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>



			<script src="library/js/bootstrap.bundle.min.js"></script>
		</body>
		</html>


