<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/sidebar.php'; ?>


<div class="container mt-5 pt-5">
  <h2>Form Pengaduan</h2>
  <form id="form-wa">
    <div class="mb-3">
      <label>Nama</label>
      <input type="text" class="form-control" id="nama" required>
    </div>
    <div class="mb-3">
      <label>No HP</label>
      <input type="text" class="form-control" id="nohp" required>
    </div>
    <div class="mb-3">
      <label>Kategori</label>
      <select class="form-select" id="kategori" required>
        <option value="">-- Pilih Kategori --</option>
        <option value="Saran">Saran</option>
        <option value="Keluhan">Keluhan</option>
        <option value="Permintaan Informasi">Permintaan Informasi</option>
      </select>
    </div>
    <div class="mb-3">
      <label>Pesan</label>
      <textarea class="form-control" id="pesan" required></textarea>
    </div>
    <button type="submit" class="btn btn-success">Kirim via WhatsApp</button>
  </form>
</div>

<script>
  document.getElementById('form-wa').addEventListener('submit', function (e) {
    e.preventDefault();
    const nama = document.getElementById('nama').value;
    const nohp = document.getElementById('nohp').value;
    const kategori = document.getElementById('kategori').value;
    const pesan = document.getElementById('pesan').value;
    const teks = `Pengaduan Baru:\nNama: ${nama}\nHP: ${nohp}\nKategori: ${kategori}\nPesan:\n${pesan}`;
    window.open(`https://wa.me/6281374086084?text=${encodeURIComponent(teks)}`, '_blank');
  });
</script>

<?php include 'includes/footer.php'; ?>
