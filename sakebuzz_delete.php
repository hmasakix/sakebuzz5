<?php
session_start();
include('functions.php');
check_session_id();

$id = $_GET['id'];

$pdo = connect_to_db();

$sql = 'DELETE FROM sakebuzz WHERE id=:id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

header("Location:sakebuzz_read.php");
exit();
