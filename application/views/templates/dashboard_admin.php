<div class="content-wrapper">
  <!-- Header -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Selamat Datang, Admin</h1>
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

  <!-- Main Content -->
  <section class="content">
    <div class="container-fluid">
      
      <!-- Navigasi Menu -->
      <div class="row">
        <div class="col-md-4">
          <a href="<?= base_url('product/data_produk'); ?>" class="btn btn-outline-primary btn-block p-4">
            <i class="fas fa-box fa-2x mb-2"></i><br>Kelola Produk
          </a>
        </div>
        <div class="col-md-4">
          <a href="<?= base_url('Salesorder/data_penjualan'); ?>" class="btn btn-outline-success btn-block p-4">
            <i class="fas fa-shopping-cart fa-2x mb-2"></i><br>Data Transaksi
          </a>
        </div>
        <div class="col-md-4">
          <a href="<?= base_url('pelanggan/data_pelanggan'); ?>" class="btn btn-outline-info btn-block p-4">
            <i class="fas fa-users fa-2x mb-2"></i><br>Data Pelanggan
          </a>
        </div>
      </div>

      <!-- Grafik Penjualan -->
      <div class="row mt-4">
        <div class="col-md-12">
          <div class="card card-outline card-primary">
            <div class="card-header">
              <h3 class="card-title">Grafik Penjualan Minggu Ini</h3>
            </div>
            <div class="card-body">
              <canvas id="penjualanChart" height="130"></canvas>
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
  const ctx = document.getElementById('penjualanChart').getContext('2d');
  const chart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'],
      datasets: [{
        label: 'Penjualan',
        data: [12, 19, 8, 11, 5, 6, 9], // Contoh data, bisa diganti dinamis
        backgroundColor: 'rgba(0, 123, 255, 0.3)',
        borderColor: 'rgba(0, 123, 255, 1)',
        borderWidth: 2,
        fill: true,
        tension: 0.4
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false
    }
  });
</script>
