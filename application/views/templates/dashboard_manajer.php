<div class="content-wrapper">
  <!-- Header -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dashboard Manajer</h1>
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

      <!-- Navigasi Manajer -->
      <div class="row">
        <div class="col-md-4">
          <a href="<?= base_url('manajer/penjualan'); ?>" class="btn btn-outline-primary btn-block p-4">
            <i class="fas fa-chart-line fa-2x mb-2"></i><br>Data Penjualan
          </a>
        </div>
        <div class="col-md-4">
          <a href="<?= base_url('manajer/sales'); ?>" class="btn btn-outline-success btn-block p-4">
            <i class="fas fa-users fa-2x mb-2"></i><br>Data Sales
          </a>
        </div>
        <div class="col-md-4">
          <a href="<?= base_url('manajer/produk'); ?>" class="btn btn-outline-warning btn-block p-4">
            <i class="fas fa-boxes fa-2x mb-2"></i><br>Stok Produk
          </a>
        </div>
      </div>

      <!-- Grafik Penjualan Mingguan -->
      <div class="row mt-4">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">Grafik Penjualan Mingguan</h3>
            </div>
            <div class="card-body">
              <canvas id="grafikManajer" height="130"></canvas>
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
  const ctx = document.getElementById('grafikManajer').getContext('2d');
  const chart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'],
      datasets: [{
        label: 'Penjualan (Rp)',
        data: [1000000, 1250000, 750000, 900000, 1300000, 1100000, 800000], // Dummy data
        borderColor: 'rgba(54, 162, 235, 1)',
        backgroundColor: 'rgba(54, 162, 235, 0.2)',
        tension: 0.3
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false
    }
  });
</script>
