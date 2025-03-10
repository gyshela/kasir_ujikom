<?php
session_start();
if (!isset($_SESSION['penid'])) {
	?>
	<meta http-equiv="refresh" content="0;url=index.php">
	<?php
}
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
	<link href="../img/logo.png" rel='shortcut icon'>
</head>
<style>
	/* Baris ganjil: Coklat muda pudar (mendekati putih) */
	.table-striped tbody tr:nth-of-type(odd) {
		background-color: rgba(240, 228, 215, 0.6);
		/* Coklat muda mendekati putih, lebih pudar */
	}

	/* Baris genap: Coklat sangat pudar (lebih mendekati putih) */
	.table-striped tbody tr:nth-of-type(even) {
		background-color: rgba(240, 228, 215, 0.3);
		/* Coklat sangat pudar, lebih mendekati putih */
	}
</style>

<body>
	<?php include "../header.php" ?>
	<main class="container border py-3 pt-5">
		<br><br><br>
		<!-- pencarian -->
		<div class="row">
			<div class="col-sm-8">
				<!-- kiri -->

				<div class="row pb-2">
					<div class="col-sm-8">
						Penjualan ID : <?= $_SESSION['penid'] ?><br>
						Kasir : <?= $_SESSION['nama_petugas'] ?><br>
					</div>
					<div class="col-sm-4">
						<?php
						if (isset($_SESSION['id_pelanggan'])) {
							include "../config.php";
							$ipel = $_SESSION['id_pelanggan'];
							$sqlplg = "select * from pelanggan where id_pelanggan='$ipel'";
							$resplg = mysqli_query($koneksi, $sqlplg);
							$dtlg = mysqli_fetch_array($resplg);
							?>
							Nama Pelanggan : <?= $dtlg['nama_pelanggan'] ?>
							<?php
						} else {
							?>
							<form class="d-flex" method="POST" action="pelanggan_simpan.php">
								<select id="ip" name="ip" required placeholder="Pelanggan" class="form-select me-2">
									<option value="" hidden selected>Pelanggan</option>
									<?php
									include "../config.php";
									$sqlpl = "select * from pelanggan";
									$respl = mysqli_query($koneksi, $sqlpl);
									while ($dtl = mysqli_fetch_array($respl)) {
										?>
										<option value="<?= $dtl['id_pelanggan'] ?>">
											<?= $dtl['nama_pelanggan'] ?>
										</option>
										<?php
									}
									?>
								</select>
								<button class="btn text-white" type="submit" name="save"
									style="background-color:rgb(30, 18, 11);">Simpan</button>
							</form>
							<?php
						}
						?>

					</div>
				</div>

				<?php
				if (!isset($_SESSION['bayar'])) {
					?>
					<!-- awal form transaksi -->

					<div class="row">
						<div class="col-sm-8">
							<form class="d-flex" method="POST" action="simpan.php">
								<?php
								if (isset($_GET['kp'])) {
									$kp = $_GET['kp'];
									?>
									<input class="form-control me-2" type="text" name="kp" value="<?= $kp ?>">
									<?php
								} else {
									?>
									<select id="kp" name="kp" class="form-select me-2" required>
										<option value="" hidden selected>Produk</option>
										<?php
										include "../config.php";
										$sqlp = "select * from produk";
										$resp = mysqli_query($koneksi, $sqlp);
										while ($dt = mysqli_fetch_array($resp)) {
											?>
											<option value="<?= $dt['kode_produk'] ?>"><?= $dt['nama_produk'] ?> |
												<?= $dt['harga'] ?></option>
											<?php
										}
										?>
									</select>


									<?php
								}
								?>
								<input class="form-control me-2" type="number" placeholder="Jumlah" name="jp" value="1"
									style="width:100px">
								<button class="btn text-white" type="submit" name="save"
									style="background-color:rgb(30, 18, 11);">Simpan</button>
							</form>
						</div>
						<div class="col-sm-4">
							<div class="d-grid">
								<a href="produk.php" class="btn btn-warning btn-block">Lihat Daftar Produk</a>
							</div>
						</div>
					</div>
					<!-- akhir form transaksi -->
				<?php } ?>
				<div class="table-responsive-sm">
					<table class="table table-hover table-striped table-sm">
						<thead class="text-white" style="background-color:rgb(30, 18, 11);">
							<tr>
								<th class="py-2 px-3 rounded-start" width="55px">No.</th>
								<th class="py-2" width="100px">Kode</th>
								<th class="py-2">Nama Produk</th>
								<th class="py-2 text-end" width="100px">Harga</th>
								<th class="py-2 text-end" width="70px">Jumlah</th>
								<th class="py-2 text-end" width="120px">Total</th>
								<th class="py-2 text-center rounded-end" width="130px">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							include "../config.php";
							$penid = $_SESSION['penid'];
							$sql = "select * from detail_penjualan where penjualan_id='$penid'";

							$result = mysqli_query($koneksi, $sql);
							$no = 1;
							$jmltot = 0;
							while ($data = mysqli_fetch_array($result)) {
								$hp = number_format($data['harga'], 0, ",", ".");
								$jp = number_format($data['jumlah'], 0, ",", ".");
								$total = $data['harga'] * $data['jumlah'];
								$tot = number_format($total, 0, ",", ".");
								?>
								<tr>
									<td class="px-3"><?= $no ?>.</td>
									<td><?= $data['kode_produk'] ?></td>
									<td><?= $data['nama_produk'] ?></td>
									<td align="right"><?= $hp ?></td>
									<td align="right"><?= $jp ?></td>
									<td align="right"><?= $tot ?></td>
									<td align="right">
										<?php
										if (isset($_SESSION['bayar'])) {
											?>
											<a href="" class="btn btn-success btn-sm disabled">Edit</a>
											<a class="btn btn-danger btn-sm disabled">Delete</a>
											<?php
										} else {
											?>
											<a href="" class="btn btn-success btn-sm" data-bs-toggle="modal"
												data-bs-target="#modaledit<?= $data['detail_id'] ?>">Edit</a>
											<a class="btn btn-danger btn-sm" href="delete.php?id=<?= $data['detail_id'] ?>"
												onclick="return confirm('Apakah Anda Yakin data penjualan produk <?= $data['nama_produk'] ?> akan dihapus ?')"
												class="hapus">Delete</a>
											<?php
										}
										?>

									</td>
								</tr>

								<!-- Modal Edit -->
								<div class="modal fade" id="modaledit<?= $data['detail_id'] ?>">
									<div class="modal-dialog modal-dialog-centered">
										<div class="modal-content">

											<!-- Modal Header -->
											<div class="modal-header" style="background-color:rgb(30, 18, 11);">
												<h3 class="modal-title text-white">Edit Data Penjualan</h3>
												<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
											</div>
											<form method="POST" action="update.php">
												<!-- Modal body -->
												<div class="modal-body">
													<div class="row my-1">
														<div class="col-4">
															Kode Produk
														</div>
														<div class="col-8">
															<input type="hidden" name="id"
																value="<?= $data['detail_id'] ?>">
															<input type="text" name="kp" class="form-control"
																value="<?= $data['kode_produk'] ?>" readonly>
														</div>
													</div>
													<div class="row my-1">
														<div class="col-4">
															Nama Produk
														</div>
														<div class="col-8">
															<input type="text" name="np" class="form-control"
																value="<?= $data['nama_produk'] ?>" readonly>
														</div>
													</div>
													<div class="row my-1">
														<div class="col-4">
															Harga
														</div>
														<div class="col-8">
															<input type="text" name="hp" class="form-control"
																value="<?= $hp ?>" readonly>
														</div>
													</div>
													<div class="row my-1">
														<div class="col-4">
															Jumlah
														</div>
														<div class="col-8">
															<input type="number" name="jp" class="form-control"
																value="<?= $data['jumlah'] ?>">
														</div>
													</div>
												</div>

												<!-- Modal footer -->
												<div class="modal-footer">
													<button type="submit" class="btn text-white" name="save"
														style="background-color:rgb(30, 18, 11);">Simpan</button>
													<button type="button" class="btn btn-danger"
														data-bs-dismiss="modal">Batal</button>
												</div>
											</form>
										</div>
									</div>
								</div>

								<!-- akhir modal Edit -->

								<?php
								$no++;
								$jmltot = $jmltot + $total;
								$jmltotal = number_format($jmltot, 0, ",", ".");
							}
							?>
						</tbody>
						<tfoot>
							<?php
							if (!isset($jmltotal)) {
								$jmltotal = 0;
							}
							?>
							<tr>
								<td colspan="5" class="text-start py-2">Total</td>
								<td class="text-end"><b><?= $jmltotal ?></b></td>
								<td></td>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
			<!-- Modal Form -->
			<div class="modal fade" id="myModal">
				<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content">

						<!-- Modal Header -->
						<div class="modal-header">
							<h3 class="modal-title">Daftar Produk</h3>
							<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
						</div>
						<form method="POST" action="simpan.php?halaman=<?= $halaman ?>">
							<!-- Modal body -->
							<div class="modal-body modal-dialog-scrollable">
								<div class="row my-1 p-2">
									<iframe src="produk.php" height="40px"></iframe>
								</div>
							</div>

							<!-- Modal footer -->
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
							</div>
						</form>
					</div>
				</div>
			</div>

			<!-- akhir modal Form -->
			<div class="col-md-4">
				<div class="container border p-2 bg-dark text-light rounded mb-2">
					<div class="row">
						<div class="col-4">Jumlah Total :</div>
						<div class="col-8">
							<h1 style="font-size:60px; text-align: right"><?= $jmltotal ?>,-</h1>
						</div>
					</div>
				</div>
				<?php
				if (isset($_SESSION['bayar'])) {
					$bayar = $_SESSION['bayar'];
					$kembali = $bayar - $jmltot;
					$byr = number_format($bayar, 0, ",", ".");
					$kbl = number_format($kembali, 0, ",", ".");
					?>
					<div class="container border p-2 bg-dark text-light rounded mb-2">
						<div class="row">
							<div class="col-4">Bayar :</div>
							<div class="col-8">
								<h1 style="font-size:60px; text-align: right"><?= $byr ?>,-</h1>
							</div>
						</div>
					</div>
					<div class="container border p-2 bg-dark text-light rounded mb-2">
						<div class="row">
							<div class="col-4">Kembali :</div>
							<div class="col-8">
								<h1 style="font-size:60px; text-align: right"><?= $kbl ?>,-</h1>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="d-grid">
								<a href="selesai.php" class="btn text-white btn-block btn-lg"
									style="background-color:rgb(30, 18, 11);">Selesai</a>
							</div>
						</div>
						<div class="col">
							<div class="d-grid">
								<a href="printbyr.php" target="cetak-nota"
									class="btn btn-secondary btn-block  btn-lg">Cetak</a>
							</div>
						</div>
					</div>
					<div class="container p-2 rounded text-center my-0">
						<iframe name="cetak-nota" src="" width="100%" height="200px"></iframe>
					</div>

					<?php
				} else {
					?>
					<div class="container border p-2 bg-light text-dark rounded text-center my-1">
						<form class="d-flex" method="POST" action="bayar.php">
							<input type="hidden" name="jmltotal" value="<?= $jmltot ?>">
							<input class="form-control me-2" type="number" placeholder="Bayar" name="bayar">
							<button class="btn text-white" type="submit" name="save"
								style="background-color:rgb(30, 18, 11);">Hitung</button>
						</form>
					</div>
				<?php } ?>
			</div>

	</main>
	<?php include "../footer.php" ?>
	<script src="../bootstrap/js/bootstrap.min.js"></script>

</body>

</html>