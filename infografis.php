<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<style>
  body {
    background-color: #f9f9f9;
    font-family: 'Segoe UI', sans-serif;
  }

  .section-title {
    font-weight: 800;
    color: #237961;
    font-size: 32px;
  }

  .description {
    font-size: 16px;
    color: #444;
  }

  .info-box {
    background: #fff;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 20px;
  }

  .info-box img {
    width: 50px;
    height: 50px;
  }

  .info-text h6 {
    margin: 0;
    font-size: 14px;
    color: #666;
  }

  .info-text .jumlah {
    font-weight: bold;
    font-size: 20px;
    color: #228B22;
  }
   .section-subtitle {
    font-size: 24px;
    font-weight: bold;
    color: #237961;
    margin-top: 40px;
    margin-bottom: 20px;
  }

  .table-pekerjaan {
    border-collapse: collapse;
    width: 100%;
    background-color: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
  }

  .table-pekerjaan th {
    background-color: #2c9c7f;
    color: white;
    padding: 10px 15px;
    text-align: left;
  }

  .table-pekerjaan td {
    padding: 10px 15px;
    border-top: 1px solid #eee;
  }

  .job-cards {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    margin-top: 20px;
  }

  .job-card {
    background-color: white;
    border-radius: 10px;
    padding: 20px;
    flex: 1 1 200px;
    text-align: center;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
  }

  .job-card h6 {
    margin: 0;
    font-size: 15px;
    font-weight: 600;
    color: #333;
  }

  .job-card .jumlah {
    font-size: 22px;
    font-weight: bold;
    color: #444;
    margin-top: 8px;
  }
   .perkawinan-section {
    margin-top: 40px;
  }

  .perkawinan-title {
    font-size: 24px;
    font-weight: bold;
    color: #237961;
    margin-bottom: 20px;
  }

  .perkawinan-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 20px;
  }

  .perkawinan-card {
    background-color: white;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.05);
    text-align: center;
  }

  .perkawinan-card img {
    width: 60px;
    height: 60px;
    object-fit: contain;
    margin-bottom: 10px;
  }

  .perkawinan-card h6 {
    font-size: 15px;
    font-weight: 600;
    margin: 0;
    color: #333;
  }

  .perkawinan-card .jumlah {
    font-size: 22px;
    font-weight: bold;
    color: #2c8c71;
    margin-top: 8px;
  }
</style>

<div class="container mt-5 mb-5">
  <div class="row">
    <div class="col-md-8">
      <h2 class="section-title">DEMOGRAFI PENDUDUK</h2>
      <p class="description">
        Memberikan informasi lengkap mengenai karakteristik demografi penduduk suatu wilayah.
        Mulai dari jumlah penduduk, usia, jenis kelamin, tingkat pendidikan, pekerjaan, agama,
        dan aspek penting lainnya yang menggambarkan komposisi populasi secara rinci.
      </p>

      <h4 class="mt-4">Jumlah Penduduk dan Kepala Keluarga</h4>
      <div class="row mt-3">
        <div class="col-md-6">
          <div class="info-box">
            <img src="assets/icons/family.png" alt="Total Penduduk">
            <div class="info-text">
              <h6>TOTAL PENDUDUK</h6>
              <div class="jumlah">1.148 Jiwa</div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info-box">
            <img src="assets/icons/father.png" alt="Kepala Keluarga">
            <div class="info-text">
              <h6>KEPALA KELUARGA</h6>
              <div class="jumlah">303 Jiwa</div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info-box">
            <img src="assets/icons/woman.png" alt="Perempuan">
            <div class="info-text">
              <h6>PEREMPUAN</h6>
              <div class="jumlah">543 Jiwa</div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info-box">
            <img src="assets/icons/boy.png" alt="Laki-laki">
            <div class="info-text">
              <h6>LAKI-LAKI</h6>
              <div class="jumlah">605 Jiwa</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Tambahkan grafik atau bagian lanjutan lainnya di sini -->
    <div class="section-subtitle">Berdasarkan Pekerjaan</div>

<div class="row">
  <!-- Tabel -->
  <div class="col-md-5">
    <table class="table-pekerjaan">
      <thead>
        <tr>
          <th>Jenis Pekerjaan</th>
          <th>Jumlah</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>Pelajar/Mahasiswa</td><td>323</td></tr>
        <tr><td>Belum/Tidak Bekerja</td><td>269</td></tr>
        <tr><td>Mengurus Rumah Tangga</td><td>269</td></tr>
        <tr><td>Karyawan Swasta</td><td>117</td></tr>
        <tr><td>Nelayan/Perikanan</td><td>51</td></tr>
        <tr><td>Petani/Pekebun</td><td>38</td></tr>
        <tr><td>Wiraswasta</td><td>27</td></tr>
      </tbody>
    </table>
  </div>

  <!-- Kartu Jumlah -->
  <div class="col-md-7">
    <div class="job-cards">
      <div class="job-card">
        <h6>Pelajar/Mahasiswa</h6>
        <div class="jumlah">323</div>
      </div>
      <div class="job-card">
        <h6>Belum/Tidak Bekerja</h6>
        <div class="jumlah">269</div>
      </div>
      <div class="job-card">
        <h6>Mengurus Rumah Tangga</h6>
        <div class="jumlah">269</div>
      </div>
      <div class="job-card">
        <h6>Karyawan Swasta</h6>
        <div class="jumlah">117</div>
      </div>
      <div class="job-card">
        <h6>Nelayan/Perikanan</h6>
        <div class="jumlah">51</div>
      </div>
      <div class="job-card">
        <h6>Petani/Pekebun</h6>
        <div class="jumlah">38</div>
      </div>
      <div class="job-card">
        <h6>Wiraswasta</h6>
        <div class="jumlah">27</div>
      </div>
    </div>
  </div>
</div>
<div class="perkawinan-section">
  <div class="perkawinan-title">Berdasarkan Perkawinan</div>
  <div class="perkawinan-grid">
    <div class="perkawinan-card">
      <img src="assets/icons/perkawinan/belum-kawin.png" alt="Belum Kawin">
      <h6>Belum Kawin</h6>
      <div class="jumlah">622</div>
    </div>
    <div class="perkawinan-card">
      <img src="assets/icons/perkawinan/kawin.png" alt="Kawin">
      <h6>Kawin</h6>
      <div class="jumlah">451</div>
    </div>
    <div class="perkawinan-card">
      <img src="assets/icons/perkawinan/cerai-mati.png" alt="Cerai Mati">
      <h6>Cerai Mati</h6>
      <div class="jumlah">69</div>
    </div>
    <div class="perkawinan-card">
      <img src="assets/icons/perkawinan/cerai-hidup.png" alt="Cerai Hidup">
      <h6>Cerai Hidup</h6>
      <div class="jumlah">3</div>
    </div>
    <div class="perkawinan-card">
      <img src="assets/icons/perkawinan/kawin-tercatat.png" alt="Kawin Tercatat">
      <h6>Kawin Tercatat</h6>
      <div class="jumlah">2</div>
    </div>
    <div class="perkawinan-card">
      <img src="assets/icons/perkawinan/kawin-tidak-tercatat.png" alt="Kawin Tidak Tercatat">
      <h6>Kawin Tidak Tercatat</h6>
      <div class="jumlah">0</div>
    </div>
  </div>
</div>
  </div>
  
</div>

<?php include 'includes/footer.php'; ?>
