<?php
session_start();
include("functions.php");
check_session_id();

$id = $_GET["id"];

$pdo = connect_to_db();

$sql = 'SELECT * FROM sakebuzz WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

$record = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sakebuzz（編集画面）</title>
  <style>
    /* Bodyとhtmlに対して高さ100%を設定 */
    html, body {
      height: 100%;
      margin: 0;
      display: flex;
      justify-content: center; /* 水平方向に中央揃え */
      align-items: center; /* 垂直方向に中央揃え */
      background-color:#b8acac; /* 任意の背景色を設定 */
    }
    /* フォームのスタイル */
    form {
      background-color: #f0f0f0; /* 背景は白色 */
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>

<body>
  <form action="sakebuzz_update.php" method="POST">
    <fieldset>
      <legend>sakebuzz（編集画面）</legend>
      <a href="sakebuzz_read.php">一覧画面</a>
      <div>
        お酒の名前: <input type="text" name="product_name" value="<?= $record["product_name"] ?>">
      </div>
      <div>
        味の特徴: <input type="text" name="flavor" value="<?= $record["flavor"] ?>">
      </div>
      <div>
        お店の名前: <input type="text" name="restaurant" value="<?= $record["restaurant"] ?>">
      </div>
        <input type="hidden" name="id" value="<?= $record["id"] ?>">
      <div>
        <button>登録</button>
      </div>
  </fieldset>
  </form>

</body>

</html>