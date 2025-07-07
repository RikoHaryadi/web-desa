<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<style>
  body {
    background-color: #b2fef7;
  }
  .container {
    padding-right: 270px; /* Menyesuaikan lebar sidebar */
  }
  .card-box {
    background-color: white;
    border-radius: 20px;
    padding: 30px;
    margin-bottom: 30px;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
  }
  .card-title {
    font-size: 2rem;
    font-weight: bold;
    text-align: center;
    margin-bottom: 20px;
    color: #003f3f;
  }
  .card-content {
    font-size: 1.1rem;
    text-align: center;
  }
  .card-content ol {
    text-align: left;
    margin-top: 20px;
  }
</style>

<div class="container mt-5 pt-5">
  <h2>Berita Desa</h2>
  <p>Berisi informasi dan kegiatan terbaru di Desa Pelayangan.</p>
  <ul>
    <li>23 Juni: Gotong royong membersihkan lingkungan</li>
    <li>20 Juni: Sosialisasi kesehatan ibu dan anak</li>
  </ul>
</div>

<?php include 'includes/footer.php'; ?>
