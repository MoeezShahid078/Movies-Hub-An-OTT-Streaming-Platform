<?php
header('Content-Type: application/json');

$pdo = new PDO('mysql:host=localhost;dbname=toonhub', 'root', '');
$stmt = $pdo->query("SELECT id, name, username, email, image, is_active FROM users WHERE role != 'admin' ");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($users);
?>
