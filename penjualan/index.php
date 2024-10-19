<?php
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
	?>
	<meta http-equiv="refresh" content="0;url=../login.php">
	<?php
} else {

	if (isset($_SESSION['penid'])) {
		?>
		<meta http-equiv="refresh" content="0;url=transaksi.php">
		<?php
	} else {
		?>
		<html>
		<!DOCTYPE html>
		<html lang="en">

		<head>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Daftar Penjualan</title>
			<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
		</head>
		<style>
			body {
				background-color: #f5f5f5;
				font-size: medium;
				font-family: 'Merriweather', serif;
				/* Kesan klasik dan elegan */
				color: #333;
			}
		</style>

		<body>
			<?php include "../header.php" ?>
			<main class="container border py-3 pt-5">
				<br><br><br>
				<!-- pencarian -->
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<h3>Daftar Penjualan</h3>
						</div>
						<div class="col-sm-4">
							<form class="d-flex" method="GET" action="">
								<input class="form-control me-2" type="date" name="tgl">
								<button class="btn btn-primary" type="submit"
									style="background-color:rgb(30, 18, 11);">Cari</button>
							</form>
						</div>
					</div>

					<!-- akhir pencarian -->

					<table class="table table-hover table-striped table-sm">
						<thead class="text-white" style="background-color:rgb(30, 18, 11);">
							<tr>
								<th class="py-2 px-3 rounded-start" width="55px">No.</th>
								<th class="py-2" width="200px">Tanggal</th>
								<th class="py-2 text-end" width="100px">Total Harga</th>
								<th class="py-2 text-end" width="100px">Bayar</th>
								<th class="py-2 text-end" width="100px">Kembali</th>
								<th class="py-2 px-3" width="200px">Pelanggan</th>
								<th class="py-2" width="200px">Petugas</th>
								<th class="py-2 text-center rounded-end" width="180px">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							include "../config.php";
							$id_petugas = $_SESSION['id_petugas'];
							$batas = 10;
							$halaman = isset($_GET['halaman']) ? (int) $_GET['halaman'] : 1;
							$halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

							$previous = $halaman - 1;
							$next = $halaman + 1;
							$tglskr = date("Y-m-d");
							if (isset($_GET['tgl'])) {
								$tgl = $_GET['tgl'];
								$sqldata = "select * from penjualan where tanggal like '$tgl%' and id_petugas='$id_petugas'";
							} else {
								$sqldata = "select * from penjualan where tanggal like '$tglskr%' and id_petugas='$id_petugas'";
							}
							$resdata = mysqli_query($koneksi, $sqldata);
							$jumlah_data = mysqli_num_rows($resdata);
							$total_halaman = ceil($jumlah_data / $batas);

							if (isset($_GET['tgl'])) {
								$tgl = $_GET['tgl'];
								$sql = "select * from penjualan where tanggal like '$tgl%' and id_petugas='$id_petugas' limit $halaman_awal, $batas";
							} else {
								$sql = "select * from penjualan where tanggal like '$tglskr%' and id_petugas='$id_petugas' limit $halaman_awal, $batas";
							}
							$result = mysqli_query($koneksi, $sql);
							$no = $halaman_awal + 1;
							while ($data = mysqli_fetch_array($result)) {

								$tohar = number_format($data['total_harga'], 0, ",", ".");
								$byr = number_format($data['bayar'], 0, ",", ".");
								$kembali = $data['bayar'] - $data['total_harga'];
								$kbl = number_format($kembali, 0, ",", ".");
								$id_pelanggan = $data['id_pelanggan'];
								$id_petugas = $data['id_petugas'];
								$sqlpetugas = "select * from petugas where id_petugas='$id_petugas'";
								$respetugas = mysqli_query($koneksi, $sqlpetugas);
								$dtpetugas = mysqli_fetch_array($respetugas);
								if (!$id_pelanggan) {
									$dtpelanggan['nama_pelanggan'] = 'umum';
								} else {
									$sqlpelanggan = "select * from pelanggan where id_pelanggan='$id_pelanggan'";
									$respelanggan = mysqli_query($koneksi, $sqlpelanggan);
									$dtpelanggan = mysqli_fetch_array($respelanggan);
								}
								?>
								<tr>
									<td class="px-3"><?= $no ?>.</td>
									<td><?= $data['tanggal'] ?></td>
									<td align="right"><?= $tohar ?></td>
									<td align="right"><?= $byr ?></td>
									<td align="right"><?= $kbl ?></td>
									<td class="px-3"><?= $dtpelanggan['nama_pelanggan'] ?></td>
									<td><?= $dtpetugas['nama_petugas'] ?></td>
									<td align="right">
										<a href="printnota.php?penid=<?= $data['penjualan_id'] ?>&kbl=<?= $kbl ?>" target="blank"
											class="btn btn-secondary btn-sm">Cetak Nota</a>
										<a href="detail_penjualan.php?penid=<?= $data['penjualan_id'] ?>&npet=<?= $dtpetugas['nama_petugas'] ?>&npel=<?= $dtpelanggan['nama_pelanggan'] ?>&tgl=<?= $data['tanggal'] ?>&byr=<?= $byr ?>&kbl=<?= $kbl ?>&halaman=<?= $halaman ?>"
											class="btn btn-warning btn-sm">Detail</a>

									</td>
								</tr>

								<!-- Modal Edit -->
								<div class="modal fade" id="modaledit<?= $data['penjualan_id'] ?>">
									<div class="modal-dialog modal-dialog-centered">
										<div class="modal-content">

											<!-- Modal Header -->
											<div class="modal-header">
												<h3 class="modal-title">Edit Data Produk</h3>
												<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
											</div>
											<!-- Modal body -->
											<div class="modal-body">
												<div class="row my-1">
													<div class="col-12">

													</div>

												</div>
											</div>

											<!-- Modal footer -->
											<div class="modal-footer">
												<button type="submit" class="btn text-white" name="save"
													style="background-color:rgb(30, 18, 11);">Simpan</button>
												<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Batal</button>
											</div>
											</form>
										</div>
									</div>
								</div>

								<!-- akhir modal Edit -->

								<?php
								$no++;
							}
							?>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="8" class="text-center">
									<div class="container">
										<div class="row">
											<div class="col-4 text-start py-3">

												<a class="btn text-white" href="penjualan_simpan.php"
													style="background-color:rgb(30, 18, 11);">Penjualan Baru</a>
											</div>
											<div class="col-8 text-end py-3">

												<!-- Untuk nomor Halaman -->
												<ul class="pagination justify-content-end pagination-sm">
													<li class="page-item"><a class="page-link" style=" color:black;" <?php if ($halaman > 1) {
														echo "href='?halaman=$previous'";
													} ?>>&laquo; Previous</a></li>

													<?php
													for ($x = 1; $x <= $total_halaman; $x++) {
														if ($x == $halaman) {
															?>
															<li class="page-item active"><a class="page-link"
																	href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
															<?php
														} else {
															?>
															<li class="page-item"><a class="page-link"
																	href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
															<?php
														}
													}
													?>
													<li class="page-item"><a class="page-link" <?php if ($halaman < $total_halaman) {
														echo "href='?halaman=$next'";
													} ?> style=" color:black;">Next
															&raquo;</a>
													</li>
												</ul>
											</div>
										</div>
									</div>

								</td>
							</tr>
						</tfoot>
					</table>
				</div>
				<!-- Modal Form -->
				<div class="modal fade" id="myModal">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">

							<!-- Modal Header -->
							<div class="modal-header">
								<h3 class="modal-title">Input Data Produk</h3>
								<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
							</div>
							<form method="POST" action="simpan.php?halaman=<?= $halaman ?>">
								<!-- Modal body -->
								<div class="modal-body">
									<div class="row my-1">
										<div class="col-4">
											Kode Produk
										</div>
										<div class="col-8">
											<input type="text" name="kp" class="form-control">
										</div>
									</div>
									<div class="row my-1">
										<div class="col-4">
											Nama Produk
										</div>
										<div class="col-8">
											<input type="text" name="np" class="form-control">
										</div>
									</div>
									<div class="row my-1">
										<div class="col-4">
											Harga
										</div>
										<div class="col-8">
											<input type="text" name="hp" class="form-control">
										</div>
									</div>
									<div class="row my-1">
										<div class="col-4">
											Stok
										</div>
										<div class="col-8">
											<input type="text" name="sp" class="form-control">
										</div>
									</div>
								</div>

								<!-- Modal footer -->
								<div class="modal-footer">
									<button type="submit" class="btn text-white" name="save"
										style="background-color:rgb(30, 18, 11);">Simpan</button>
									<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Batal</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<!-- akhir modal Form -->
			</main>
			<?php include "../footer.php" ?>
			<script src="../bootstrap/js/bootstrap.min.js"></script>
		</body>

		</html>
	<?php }
} ?>