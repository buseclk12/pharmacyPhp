<?php
header("Content-Type: application/json") ;

require_once './db.php';
$id = $_GET["id"];
$stmt = $db->prepare("DELETE FROM ilac WHERE id = ?");
$stmt->execute([$id]);

echo json_encode(["success" => "ok"]) ;

