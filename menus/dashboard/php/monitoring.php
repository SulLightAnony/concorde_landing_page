<?php include "../../templates/header.php";?>

<?php
// ==================================================================================
// THE FREEDOM DASHBOARD LOGIC 🦅
// ==================================================================================

$cabang = $_SESSION['Cabang'];

// 1. LOGIC FILTER (Kunci Master vs Kunci Cabang)
if ($cabang == 'semua') {
    $whereClause = "WHERE 1=1";
} else {
    $whereClause = "WHERE Cabang = '$cabang'";
}

// 2. GET TOTAL OMZET (All Time)
// Kita bersihkan "Rp " dan titik agar bisa dijumlahkan oleh SQL (jika disimpan sebagai string)
// Note: Karena di database kamu simpan string "Rp 1.000.000", kita perlu trik sedikit.
// Tapi untuk performa terbaik, query SUM di SQL butuh kolom INT/FLOAT. 
// Asumsi: Kita tarik data lalu loop di PHP untuk aman-nya (karena tipe data string).
// ATAU jika kamu sudah ubah simpan angka murni, pakai SUM().
// --- METODE SAFE (PHP LOOP) ---
$qOmzet = mysqli_query($conn, "SELECT HargaTotalAkhir FROM transaksi $whereClause");
$totalOmzet = 0;
$totalTransaksi = mysqli_num_rows($qOmzet); // Sekalian hitung jumlah nota

while($row = mysqli_fetch_assoc($qOmzet)){
    // Bersihkan Rp dan Titik
    $clean = str_replace(['Rp ', '.'], '', $row['HargaTotalAkhir']);
    $totalOmzet += (int)$clean;
}

// 3. GET TOTAL USER AKTIF
// Jika semua, hitung semua user. Jika cabang, hitung user di cabang itu.
$qUser = mysqli_query($conn, "SELECT COUNT(ID) as JmlUser FROM users $whereClause");
$dUser = mysqli_fetch_assoc($qUser);
$totalUser = $dUser['JmlUser'];

// 4. DATA CHART (Tren Penjualan Harian)
// Kita ambil data, group by Tanggal (Y-m-d)
$chartDataLabels = [];
$chartDataValues = [];

// Query grouping tanggal (Perlu penyesuaian karena field TanggalBeli string/date)
// Kita tarik semua lalu olah di PHP supaya format tanggalnya rapi
$qChart = mysqli_query($conn, "SELECT TanggalTransaksi, HargaTotalAkhir FROM transaksi $whereClause ORDER BY ID ASC");

$tempChart = [];
while($cRow = mysqli_fetch_assoc($qChart)){
    // Ambil tanggal saja (misal 2023-12-20)
    // Asumsi format di DB: Y-m-d H:i:s atau Y-m-d
    $tgl = date('Y-m-d', strtotime($cRow['TanggalTransaksi']));
    $val = (int)str_replace(['Rp ', '.'], '', $cRow['HargaTotalAkhir']);
    
    if(!isset($tempChart[$tgl])) { $tempChart[$tgl] = 0; }
    $tempChart[$tgl] += $val;
}

// Masukkan ke array untuk JS
foreach($tempChart as $tgl => $val){
    $chartDataLabels[] = date('d M', strtotime($tgl)); // Format: 20 Dec
    $chartDataValues[] = $val;
}

// Konversi ke JSON buat ECharts
$jsonLabels = json_encode($chartDataLabels);
$jsonValues = json_encode($chartDataValues);

// 5. RECENT TRANSACTIONS (5 Terakhir)
$qRecent = mysqli_query($conn, "SELECT * FROM transaksi $whereClause ORDER BY ID DESC LIMIT 5");

?>

<div class="row g-3 mb-3">
  
  <div class="col-md-6 col-xxl-3">
    <div class="card h-md-100 ecommerce-card-min-width">
      <div class="card-header pb-0">
        <h6 class="mb-0 mt-2 d-flex align-items-center">Total Omzet (All Time)<span class="ms-1 text-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Akumulasi pendapatan kotor"><span class="far fa-question-circle" data-fa-transform="shrink-1"></span></span></h6>
      </div>
      <div class="card-body d-flex flex-column justify-content-end">
        <div class="row">
          <div class="col">
            <p class="font-sans-serif lh-1 mb-1 fs-4" style="color: #2c7be5;">Rp <?= number_format($totalOmzet, 0, ',', '.') ?></p>
            <span class="badge badge-subtle-success rounded-pill fs--2">Terus Meningkat! 🚀</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-xxl-3">
    <div class="card h-md-100">
      <div class="card-header pb-0">
        <h6 class="mb-0 mt-2">Total Transaksi</h6>
      </div>
      <div class="card-body d-flex flex-column justify-content-end">
        <div class="row justify-content-between">
          <div class="col-auto align-self-end">
            <div class="fs-4 fw-normal font-sans-serif text-700 lh-1 mb-1"><?= number_format($totalTransaksi) ?> <span class="fs-6">Nota</span></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-xxl-3">
    <div class="card h-md-100">
      <div class="card-header pb-0">
        <h6 class="mb-0 mt-2">Pengguna Aktif</h6>
      </div>
      <div class="card-body d-flex flex-column justify-content-end">
        <div class="row justify-content-between">
          <div class="col-auto align-self-end">
            <div class="fs-4 fw-normal font-sans-serif text-700 lh-1 mb-1"><?= $totalUser ?> <span class="fs-6">User</span></div>
            <span class="badge rounded-pill fs--2 bg-200 text-primary">System Ready</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-xxl-3">
    <div class="card h-md-100">
      <div class="card-header d-flex flex-between-center pb-0">
        <h6 class="mb-0">Aksi Cepat</h6>
      </div>
      <div class="card-body pt-2">
        <div class="row g-0 h-100 align-items-center">
            <div class="col-12 mb-2">
                <a href="../../kasir/php/index.php" class="btn btn-primary w-100 btn-sm"><i class="fas fa-cash-register"></i> Buka Kasir</a>
            </div>
            <div class="col-12">
                <a href="../../inventaris/php/form.php?add" class="btn btn-outline-success w-100 btn-sm"><i class="fas fa-plus"></i> Tambah Barang</a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row g-0">            
    <div class="col-lg-12 ps-lg-2 mb-3">
      <div class="card h-lg-100">
        <div class="card-header">
          <div class="row flex-between-center">
            <div class="col-auto">
              <h6 class="mb-0">Grafik Tren Penjualan (Harian)</h6>
            </div>
          </div>
        </div>
        <div class="card-body h-100 pe-0">
          <div id="mainSalesChart" style="min-height: 300px;" class="echart-line-total-sales h-100"></div>
        </div>
      </div>
    </div>
</div>

<div class="row g-0">
    <div class="col-lg-12 mb-3 pe-lg-2">
        <div class="card h-lg-100">
            <div class="card-header">
                <h6 class="mb-0">5 Transaksi Terakhir</h6>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-dashboard mb-0 table-borderless fs--1 border-200">
                        <thead class="bg-light">
                            <tr class="text-900">
                                <th>Kode Transaksi</th>
                                <th>Tanggal</th>
                                <th>Pelanggan</th>
                                <th class="text-end">Total</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($rowRecent = mysqli_fetch_assoc($qRecent)): ?>
                            <tr class="border-bottom border-200">
                                <td>
                                    <a href="../../laporan/php/transaksi-form.php?detail=Detail&id=<?= $rowRecent['ID'] ?>" class="fw-semi-bold">
                                        <?= $rowRecent['KodeTransaksi'] ?>
                                    </a>
                                </td>
                                <td><?= date('Y-m-d', strtotime($rowRecent['TanggalTransaksi'])) ?></td>
                                <td><?= $rowRecent['Pelanggan'] ?></td>
                                <td class="text-end fw-bold text-700"><?= $rowRecent['HargaTotalAkhir'] ?></td>
                                <td>
                                    <span class="badge rounded-pill badge-subtle-success">Lunas</span>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                            
                            <?php if(mysqli_num_rows($qRecent) == 0): ?>
                            <tr><td colspan="5" class="text-center p-3">Belum ada transaksi</td></tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-light py-2">
                <div class="row flex-between-center">
                    <div class="col-auto"></div>
                    <div class="col-auto"><a class="btn btn-sm btn-link" href="../../laporan/php/transaksi.php">Lihat Semua Transaksi<span class="fas fa-chevron-right ms-1" data-fa-transform="shrink-4 down-1"></span></a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "../../templates/footer.php"; ?>

<script src="../../../vendors/echarts/echarts.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var chartDom = document.getElementById('mainSalesChart');
        var myChart = echarts.init(chartDom);
        var option;

        // Data dari PHP
        var labels = <?php echo $jsonLabels; ?>;
        var values = <?php echo $jsonValues; ?>;

        option = {
            tooltip: {
                trigger: 'axis',
                formatter: function (params) {
                    var val = params[0].value;
                    // Format Rupiah di Tooltip
                    return params[0].name + '<br/>' + 'Rp ' + val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                }
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            xAxis: {
                type: 'category',
                boundaryGap: false,
                data: labels
            },
            yAxis: {
                type: 'value',
                axisLabel: {
                    formatter: function(value) {
                         // Singkatan K (Ribu) atau Jt (Juta) biar rapi
                         if (value >= 1000000) return (value / 1000000) + ' Jt';
                         if (value >= 1000) return (value / 1000) + ' K';
                         return value;
                    }
                }
            },
            series: [
                {
                    name: 'Omzet',
                    type: 'line',
                    smooth: true,
                    data: values,
                    areaStyle: {
                        opacity: 0.3,
                        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
                          { offset: 0, color: '#2c7be5' },
                          { offset: 1, color: 'rgba(44, 123, 229, 0.01)' }
                        ])
                    },
                    itemStyle: { color: '#2c7be5' },
                    lineStyle: { width: 3 }
                }
            ]
        };

        option && myChart.setOption(option);
        
        // Resize chart kalau window berubah ukuran
        window.addEventListener('resize', function() {
            myChart.resize();
        });

        document.querySelector("#navbarVerticalNav").children[0].children[1].classList.add("show");
        document.querySelector("#navbarVerticalNav").children[0].children[1].children[0].children[0].classList.add("active");
    });
</script>

</body>
</html>