<?php
session_start();
$old_session_id = session_id();

// 再生成
session_regenerate_id(true);
$new_id = session_id();
// $new_session_id = session_id();

var_dump($old_id);
var_dump($new_id);
exit()


// // 新旧のidを画面に表示して更新されていることを確認
// echo "<p>旧id: {$old_session_id}</p>";
// echo "<p>新id: {$new_session_id}</p>";
// exit();

?>