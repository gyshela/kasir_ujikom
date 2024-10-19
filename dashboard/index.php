<?php
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
    ?>
    <meta http-equiv="refresh" content="0;url=../login.php">
    <?php
} else {
}
?>
<?php
include "../config.php";
$tahun = date('Y');

// Data untuk grafik transaksi bulanan
$sql = "SELECT MONTH(tanggal) AS bulan, COUNT(*) AS count FROM penjualan WHERE YEAR(tanggal) = $tahun GROUP BY bulan";
$result = mysqli_query($koneksi, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $penjualan[] = ['bulan' => $row['bulan'], 'count' => $row['count']];
}
$json_penjualan = json_encode($penjualan);

// Data untuk produk terjual
$sql = "SELECT SUM(jumlah) AS jumlah, nama_produk FROM `detail_penjualan` GROUP BY nama_produk";
$result = mysqli_query($koneksi, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $produk[] = ['nama_produk' => $row['nama_produk'], 'jumlah' => $row['jumlah']];
}
$json_produk = json_encode($produk);

// Total barang terjual
$sql = "SELECT SUM(jumlah) AS total_barang_terjual FROM detail_penjualan";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);
$total_barang_terjual = $row['total_barang_terjual'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <script src="../popper.min.js"></script>
    <link href="../img/logo.png" rel='shortcut icon'>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Merriweather', serif;
        }

        .team-section {
            padding: 70px 0;
        }

        .chart-card {
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .chart-container {
            width: 100%;
            padding: 20px 0;
        }

        h3 {
            font-family: 'Merriweather', serif;
        }

        .total-box {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .total-box h5 {
            font-size: 16px;
            color: #333;
        }

        .total-box p {
            font-size: 24px;
            font-weight: bold;
            margin: 0;
        }

        .pie-chart-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .legend-list {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            padding: 0;
            margin: 20px 0 0;
            list-style: none;
        }

        .legend-list li {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
        }

        .legend-color-box {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }

        @media (max-width: 576px) {
            .legend-list {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 400px) {
            .legend-list {
                grid-template-columns: repeat(1, 1fr);
            }
        }
    </style>
</head>

<body>
    <?php include "../header.php"; ?>
    <main class="container pt-5">
        <section class="team-section">
            <h3>Dashboard</h3>
            <div class="row">
                <div class="col-md-8">
                    <div class="total-box">
                        <h5>Total Produk Terjual</h5>
                        <p><?= $total_barang_terjual; ?></p>
                    </div>
                    <div class="chart-card">
                        <h4>Jumlah Transaksi per Bulan</h4>
                        <div class="chart-container">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="chart-card pie-chart-container">
                        <h4>Produk Terlaris</h4>
                        <div class="chart-container">
                            <canvas id="Charts"></canvas>
                        </div>
                        <ul class="legend-list" id="legendList"></ul>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include "../footer.php"; ?>

    <script src="../chart.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script>
        const grafik = <?= $json_penjualan; ?>;
        const ctx = document.getElementById('myChart').getContext('2d');
        const bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: grafik.map((item) => bulan[item.bulan - 1]),
                datasets: [{
                    label: 'Jumlah Transaksi',
                    data: grafik.map(item => item.count),
                    backgroundColor: "rgb(73, 54, 40)",
                    borderColor: "rgb(73, 54, 40)",
                    borderWidth: "1"
                }]
            }
        });

        // Data untuk pie chart produk terjual
        const charts = document.getElementById('Charts').getContext('2d');
        const grafiks = <?= $json_produk; ?>;
        const pieChart = new Chart(charts, {
            type: 'pie',
            data: {
                labels: grafiks.map((item) => item.nama_produk),
                datasets: [{
                    backgroundColor: [
                        'rgb(228, 197, 158)',
                        'rgb(175, 130, 96)',
                        'rgb(128, 61, 59)',
                        'rgb(50, 44, 43)',
                        'rgb(111, 78, 55)',
                        'rgb(102, 67, 67)',
                        'rgb(236, 177, 118)',
                        'rgb(254, 216, 177)',
                        'rgb(214, 192, 179)',
                    ],
                    label: 'Jumlah Terjual',
                    data: grafiks.map(item => item.jumlah)
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });

        const legendList = document.getElementById('legendList');
        grafiks.forEach((item, index) => {
            const color = pieChart.data.datasets[0].backgroundColor[index];
            const listItem = document.createElement('li');
            listItem.innerHTML = `<div class="legend-color-box" style="background-color:${color};"></div>${item.nama_produk}`;
            legendList.appendChild(listItem);
        });
    </script>
</body>

</html>