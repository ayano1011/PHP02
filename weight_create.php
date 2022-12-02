<?php
// var_dump($_POST);
// exit();

if (
  !isset($_POST['weight']) || $_POST['weight']=='' ||
  !isset($_POST['date']) || $_POST['date']==''
) {
  exit('ParamError');
}


// データの受け取り
$weight = $_POST["weight"];
$date = $_POST["date"];

$dbn ='mysql:dbname=F01_db;charset=utf8mb4;port=3306;host=localhost';
$user = 'root';
$pwd = '';

// DB接続
try {
  $pdo = new PDO($dbn, $user, $pwd);
//   exit('OK');
} catch (PDOException $e) {
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  exit();
}

$sql = 'INSERT INTO F01_un_table (date, weight) VALUES (:date, :weight)';

$stmt = $pdo->prepare($sql);

// バインド変数を設定
$stmt->bindValue(':weight', $weight, PDO::PARAM_STR);
$stmt->bindValue(':date', $date, PDO::PARAM_STR);

// SQL実行（実行に失敗すると `sql error ...` が出力される）
try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}


header('Location:input.php');
exit();


?>