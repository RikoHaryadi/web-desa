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
</style>

<div class="sidebar-kades">
  <img src="assets/img/kepala-desa.jpg" alt="Kepala Desa">
  <div class="info">
    <div style="font-weight: bold; font-size: 16px;">SUTIYONO</div>
    <div style="font-size: 14px;">Kepala Desa</div>
  </div>

  <div class="button-sikema">
    <i class="fa fa-paper-plane"></i> Kirim Keluhan
  </div>

  <div class="slider-container">
    <div class="slider-wrapper">
      <img src="assets/img/sekdes.jpg" alt="Sekdes">
      <img src="assets/img/ketua-bpd.jpg" alt="Ketua BPD">
      <img src="assets/img/kasi-pelayanan.jpg" alt="Kasi Pelayanan">
      <img src="assets/img/kadus.jpg" alt="Kadus">
    </div>
  </div>
</div>
