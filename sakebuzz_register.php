<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sakebuzzユーザ登録画面</title>
  <style>
    /* Bodyとhtmlに対して高さ100%を設定 */
    html, body {
      height: 100%;
      margin: 0;
      display: flex;
      justify-content: center; /* 水平方向に中央揃え */
      align-items: center; /* 垂直方向に中央揃え */
      background-color: #f0f0f0; /* 任意の背景色を設定 */
    }
    /* フォームのスタイル */
    form {
      background-color:#adadad; /* 背景は */
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>

<body>
  <form action="sakebuzz_register_act.php" method="POST">
    <fieldset>
      <legend>sakebuzzユーザ登録画面</legend>
      <div>
        登録者名: <input type="text" name="username">
      </div>
      <div>
        パスワード: <input type="text" name="password">
      </div>
      <div>
        <button>ログイン</button>
      </div>
      <a href="sakebuzz_login.php">登録画面</a>
    </fieldset>
  </form>

</body>

</html>