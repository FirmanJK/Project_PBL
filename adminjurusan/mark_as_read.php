<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("UPDATE notifications SET is_read = TRUE");
    $stmt->execute();
    echo json_encode(['success' => true]);
}
?>
