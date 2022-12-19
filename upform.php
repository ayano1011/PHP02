<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>

<body>
  <form action="upload.php" method="POST" enctype="multipart/form-data">
    <fieldset>
      <legend>プロフィール画像選択</legend>
      <div>
        <input type="file" name="upfile" accept="image/*" capture="environment" />
      </div>
      <div>
        <button>決定</button>
      </div>
    </fieldset>
  </form>

</body>

</html>