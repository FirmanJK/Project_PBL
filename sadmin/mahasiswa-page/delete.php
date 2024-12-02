<?php
require '../../../../../koneksi.php'; // Sertakan koneksi database

// Periksa apakah `mahasiswa_id` ada di parameter URL
if (isset($_GET['mahasiswa_id'])) {
    $mahasiswa_id = $_GET['mahasiswa_id'];

    try {
        // Buat query untuk menghapus data mahasiswa berdasarkan mahasiswa_id
        $query = "DELETE FROM Mahasiswa WHERE mahasiswa_id = :mahasiswa_id";
        $stmt = $conn->prepare($query);

        // Bind parameter
        $stmt->bindParam(':mahasiswa_id', $mahasiswa_id, PDO::PARAM_INT);

        // Eksekusi query
        if ($stmt->execute()) {
            // Redirect kembali ke halaman utama dengan pesan sukses
            echo "<script>
                alert('Data berhasil dihapus!');
                window.location.href = 'index.php';
            </script>";
        } else {
            echo "<script>
                alert('Gagal menghapus data.');
                window.location.href = 'index.php';
            </script>";
        }
    } catch (PDOException $e) {
        // Tampilkan pesan error jika terjadi kesalahan
        echo "<script>
            alert('Error: " . $e->getMessage() . "');
            window.location.href = 'index.php';
        </script>";
    }
} else {
    // Jika `mahasiswa_id` tidak ditemukan, redirect dengan pesan kesalahan
    echo "<script>
        alert('ID mahasiswa tidak ditemukan.');
        window.location.href = 'index.php';
    </script>";
}
?>
