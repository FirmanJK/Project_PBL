<?php
$serverName = "DESKTOP-PVG8PJ5"; //serverName\instanceName

// Since UID and PWD are not specified in the $connectionInfo array,
// The connection will be attempted using Windows Authentication.
$connectionInfo = array("Database" => "BebasTanggungan");
$conn = sqlsrv_connect($serverName, $connectionInfo);


try {
     $conn = new PDO("sqlsrv:Server=DESKTOP-PVG8PJ5;Database=BebasTanggungan");
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
     die("Koneksi ke database gagal: " . $e->getMessage());
}
?>