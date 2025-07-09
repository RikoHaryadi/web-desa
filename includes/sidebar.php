<?php
// File: includes/sidebar.php
?>
<style>
  .sidebar-kades {
    position: fixed;
    top: 80px;
    right: 0;
    width: 250px;
    background-color: #ffffff;
    box-shadow: -2px 0 10px rgba(0,0,0,0.1);
    z-index: 999;
    border-radius: 10px 0 0 10px;
    overflow: hidden;
  }
  .sidebar-kades img {
    width: 100%;
    height: auto;
    border-bottom: 2px solid #007bff;
  }
  .sidebar-kades .info {
    background-color: #007bff;
    color: white;
    text-align: center;
    padding: 10px;
  }
  .sidebar-kades .button-sikema {
    background-color: #ffc107;
    color: black;
    text-align: center;
    font-weight: bold;
    padding: 10px;
    cursor: pointer;
  }
  .slider-container {
    position: relative;
    width: 100%;
    overflow: hidden;
  }
  .slider-wrapper {
    display: flex;
    animation: slide 12s infinite;
  }
  .slider-wrapper img {
    width: 100%;
    height: auto;
  }
  @keyframes slide {
    0%   { transform: translateX(0%); }
    25%  { transform: translateX(-100%); }
    50%  { transform: translateX(-200%); }
    75%  { transform: translateX(-300%); }
    100% { transform: translateX(0%); }
  }
  .jam-kerja {
  margin-top: 20px;
  border: 1px solid #ccc;
  background: #fff;
  border-radius: 5px;
  overflow: hidden;
}

.jam-kerja h3 {
  background-color: #2e7d32;
  color: white;
  padding: 10px;
  margin: 0;
  font-size: 16px;
  display: flex;
  align-items: center;
  gap: 5px;
}

.jam-kerja table {
  width: 100%;
  border-collapse: collapse;
  font-size: 14px;
}

.jam-kerja th,
.jam-kerja td {
  border: 1px solid #ccc;
  padding: 8px;
  text-align: center;
}

.jam-kerja thead {
  background-color: #e8f5e9;
  font-weight: bold;
  color: #2e7d32;
}

.libur {
  background-color: #ff5722;
  color: white;
  padding: 4px 8px;
  font-weight: bold;
  border-radius: 4px;
  display: inline-block;
}
@media (max-width: 768px) {
  .sidebar-kades {
    position: relative;
    width: 80%;
    margin: 20px auto 0 auto; /* Atas:20px, kanan:auto, bawah:0, kiri:auto */
    top: auto;
    right: auto;
    border-radius: 10px;
    box-shadow: none;
  }
}


</style>

<div class="sidebar-kades">
  <img src="assets/img/kepala-desa.JPG" alt="Kepala Desa">
  <div class="info">
    <div style="font-weight: bold; font-size: 16px;">SUTIYONO</div>
    <div style="font-size: 14px;">Kepala Desa</div>
  </div>

  <div class="button-sikema">
    <a href="pengaduan.php">
    <i class="fa fa-paper-plane"></i> Kirim Keluhan
    </a>
  </div>

  <div class="slider-container">
    <div class="slider-wrapper">
      <img src="assets/img/sekdes.JPG" alt="Sekdes">
      <img src="assets/img/ketua-bpd.JPG" alt="Ketua BPD">
      <img src="assets/img/kasi-pelayanan.JPG" alt="Kasi Pelayanan">
      <img src="assets/img/kadus.JPG" alt="Kadus">
    </div>
  </div>
  <div class="jam-kerja">
  <h3><i class="fa fa-clock-o"></i> JAM KERJA</h3>
  <table>
    <thead>
      <tr>
        <th>Hari</th>
        <th>Mulai</th>
        <th>Selesai</th>
      </tr>
    </thead>
    <tbody>
      <tr><td>Senin</td><td>07:30:00</td><td>15:00:00</td></tr>
      <tr><td>Selasa</td><td>07:30:00</td><td>15:00:00</td></tr>
      <tr><td>Rabu</td><td>07:30:00</td><td>15:00:00</td></tr>
      <tr><td>Kamis</td><td>07:30:00</td><td>15:00:00</td></tr>
      <tr><td>Jumat</td><td>07:30:00</td><td>11:00:00</td></tr>
      <tr><td>Sabtu</td><td colspan="2" style="text-align:center;"><span class="libur">LIBUR</span></td></tr>
      <tr><td>Minggu</td><td colspan="2" style="text-align:center;"><span class="libur">LIBUR</span></td></tr>
    </tbody>
  </table>
</div>
</div>


