<div class="content-wrapper">
  <!-- Header -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dashboard Sales</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- Konten Utama -->
  <section class="content">
    <div class="container-fluid">

      <!-- Navigasi Menu Sales -->
      <div class="row">
        <div class="col-md-4">
          <a href="<?= base_url('sales/pelanggan'); ?>" class="btn btn-outline-info btn-block p-4">
            <i class="fas fa-user-friends fa-2x mb-2"></i><br>Data Pelanggan
          </a>
        </div>
        <div class="col-md-4">
          <a href="<?= base_url('sales/penjualan'); ?>" class="btn btn-outline-success btn-block p-4">
            <i class="fas fa-shopping-basket fa-2x mb-2"></i><br>Riwayat Penjualan
          </a>
        </div>
        <div class="col-md-4">
          <a href="<?= base_url('sales/target'); ?>" class="btn btn-outline-warning btn-block p-4">
            <i class="fas fa-bullseye fa-2x mb-2"></i><br>Target Penjualan
          </a>
        </div>
      </div>

      <!-- Grafik Penjualan Pribadi -->
      <div class="row mt-4">
        <div class="col-md-12">
          <div class="card card-outline card-primary">
            <div class="card-header">
              <h3 class="card-title">Grafik Penjualan Anda (Minggu Ini)</h3>
            </div>
            <div class="card-body">
              <canvas id="grafikSales" height="130"></canvas>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
</div>

<!-- ChartJS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx = document.getElementById('grafikSales').getContext('2d');
  const chart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'],
      datasets: [{
        label: 'Penjualan',
        data: [3, 5, 2, 6, 4, 1, 0], // Ganti sesuai data user sales
        backgroundColor: 'rgba(40,167,69,0.7)'
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false
    }
  });
</script>
