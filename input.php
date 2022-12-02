


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>入力画面</title>
    <link rel="stylesheet" href="input.css" />

</head>

<body>
  <div class="container">
  <form action="weight_create.php" method="POST">
   <div>
      <div class="title">体重</div>
      <div>
      <input type="date" name="date">
      </div>
      <div class="weight_input">
     <input class="weight "type="number" name="weight"  min="1000" max="3000">g
      </div>
      <div class="submit_area">
        <button class="submit">入力する</button>
      </div>
        <a href="read.php">グラフに戻る</a>

</div>
  </form>
</div>
</body>

</html>