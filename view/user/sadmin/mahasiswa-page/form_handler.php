<?php
session_start();
require '../../../../../koneksi.php';

// Fungsi untuk menyimpan data ke database SQL Server
function saveUserData($data, $file)
{
    global $conn;

    if (!$conn instanceof PDO) {
        throw new Exception("Koneksi ke database tidak valid.");
    }

    try {
        // Validasi input
        foreach ($data as $key => $value) {
            if (empty($value)) {
                throw new Exception("Semua data wajib diisi.");
            }
        }


        // Simpan file gambar jika diunggah
        $imagePath = null;
        if ($file['image']['error'] == UPLOAD_ERR_OK) {
            $uploadDir = "../../../../assets/uploads/"; // Pastikan direktori ini ada dan memiliki izin tulis
            $imagePath = $uploadDir . basename($file['image']['name']);
            move_uploaded_file($file['image']['tmp_name'], $imagePath);
        }

        // Query untuk menyimpan data ke tabel
        $query = "INSERT INTO Mahasiswa (first_name, last_name, nim, email, password, phone_number, image, address) 
                  VALUES (:first_name, :last_name, :nim, :email, :password, :phone_number, :image, :address)";
        $stmt = $conn->prepare($query);

        // Bind parameter ke query
        $stmt->bindParam(':first_name', $data['first_name']);
        $stmt->bindParam(':last_name', $data['last_name']);
        $stmt->bindParam(':nim', $data['nim']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':password', $data['password']);
        $stmt->bindParam(':phone_number', $data['phone_number']);
        $stmt->bindParam(':image', $imagePath);
        $stmt->bindParam(':address', $data['alamat']);

        // Eksekusi query
        $stmt->execute();
        return "Data berhasil disimpan!";
    } catch (PDOException $e) {
        return "Error: " . $e->getMessage();
    }
}

// Proses form ketika disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'first_name' => $_POST['first_name'] ?? '',
        'last_name' => $_POST['last_name'] ?? '',
        'nim' => $_POST['nim'] ?? '',
        'email' => $_POST['email'] ?? '',
        'password' => $_POST['password'] ?? '',
        'phone_number' => $_POST['phone_number'] ?? '',
        'alamat' => $_POST['alamat'] ?? ''
    ];

    try {
        $message = saveUserData($data, $_FILES);
        echo "<script>
                alert('$message');
                window.location.href = 'index.php';
              </script>";
    } catch (Exception $e) {
        echo "<script>
                alert('Error: " . $e->getMessage() . "');
              </script>";
    }
}

if (isset($_GET['delete_mahasiswa'])) {
    $mahasiswa_id = $_GET['delete_mahasiswa'];
    $query = "DELETE FROM Mahasiswa WHERE mahasiswa_id = '$mahasiswa_id'";
    $stmt = $conn->prepare($query);

    if ($stmt) {
        header("location: index.php");
    } else {
        echo $query;
    }

}


?>