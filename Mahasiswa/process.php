<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mahasiswa = $_POST["mahasiswa"];
    $matkul = $_POST["matkul"];
    $jml_sks = $_POST["jml_sks"];

    // Sesuaikan dengan koneksi database Anda jika diperlukan

    // Proses penyimpanan data ke database atau operasi lainnya

    // Tampilkan data yang dimasukkan oleh mahasiswa
    echo '<div class="container">';
    echo '<h2>Hasil Proses</h2>';
    echo '<p class="success">Data berhasil disimpan:</p>';
    echo '<p><strong>Mahasiswa:</strong> ' . $mahasiswa . '</p>';
    echo '<p><strong>Mata Kuliah:</strong> ' . $matkul . '</p>';
    echo '<p><strong>Jumlah SKS:</strong> ' . $jml_sks . '</p>';
    echo '<p class="back-link"><a href="index.html">Kembali ke Formulir</a></p>';
    echo '</div>';
} else {
    // Jika tidak ada data dikirimkan, tampilkan pesan kesalahan atau operasi lainnya
    echo '<div class="container">';
    echo '<h2>Hasil Proses</h2>';
    echo '<p class="error">Terjadi kesalahan. Silakan kembali ke halaman sebelumnya.</p>';
    echo '<p class="back-link"><a href="index.html">Kembali ke Formulir</a></p>';
    echo '</div>';
}
?>
