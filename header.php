<header class="container-fluid"
	style="position:fixed; background-image: url('../img/bglogin_polos.png'); background-size: cover; background-position: center;">
	<nav class="container navbar navbar-expand-sm navbar-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="../dashboard">
				<script src="https://unpkg.com/@phosphor-icons/web"></script>
				<script src="https://unpkg.com/boxicons@2.1.3/dist/boxicons.js"></script>
				<h3><box-icon name='coffee' type='solid' flip='horizontal' animation='tada' size="md"
						color='#fffefb'></box-icon></box-icon> COFFEE KITA</h3>
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse  justify-content-end" id="collapsibleNavbar">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link btn-sm text-white rounded-3 px-4 mx-1 my-1" href="../penjualan"
							style="font-family: 'Merriweather', serif; font-size:larger;"><i class="ph-fill ph-bag"></i>
							Penjualan</a>
					</li>
					<?php if ($_SESSION['level'] == "admin") { ?>
						<li class="nav-item">
							<a class="nav-link btn-sm text-white rounded-3 px-4 mx-1 my-1" href="../produk"
								style="font-family: 'Merriweather', serif; font-size:larger;"><i
									class="ph-fill ph-coffee"></i>
								Produk</a>
						</li>
						<li class="nav-item">
							<a class="nav-link btn-sm text-white rounded-3 px-4 mx-1 my-1" href="../pelanggan"
								style="font-family: 'Merriweather', serif; font-size:larger;"><i
									class="ph-fill ph-user"></i>
								Pelanggan</a>
						</li>
						<li class="nav-item">
							<a class="nav-link btn-sm text-white rounded-3 px-4 mx-1 my-1" href="../petugas"
								style="font-family: 'Merriweather', serif; font-size:larger;"><i
									class="ph-fill ph-user-circle"></i>
								Petugas</a>
						</li>
					<?php } ?>
					<li class="nav-item">
						<a class="nav-link btn-sm text-white rounded-3 px-4 mx-1 my-1" href="../report"
							style="font-family: 'Merriweather', serif; font-size:larger;"><i
								class="ph-fill ph-scroll"></i>
							Laporan</a>
					</li>
					<li class="nav-item">
						<a class="nav-link btn-sm text-white rounded-3 px-4 mx-1 my-1" href="../logout.php"
							style="font-family: 'Merriweather', serif; font-size:larger;"><i
								class="ph-fill ph-sign-out"></i>
							Logout</a>
					</li>
					<li class="nav-item">
						<a class="nav-link btn-sm text-white rounded-3 px-4 mx-1 my-1" href="../about"
							style="font-family: 'Merriweather', serif; font-size:larger;"><i class="ph ph-info"></i>
							About</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>

<style>
	a.nav-link:hover {
		color: orange !important;
	}

	body {
		background-color: #f5f5f5;
		font-family: 'Merriweather', serif;
		color: #333;
	}
</style>