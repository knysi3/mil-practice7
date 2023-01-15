<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>File書き込み</title>
  </head>
<body>

<div style="text-align: center; background-color: #ffffff; max-width: 480px; min-height: 480px; margin: 0 auto;">
<label>データを入力してね</label>
<form action="write.php" method="POST">
	<!-- お名前: <input type="text" name="name">
	EMAIL: <input type="text" name="mail">
	メモ: <input type="text" name="memo"> -->
	<div class="mb-3 row">
      <label for="staticName" class="col-sm-2 col-form-label">お名前</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="staticName" name="name">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="inputMail" class="col-sm-2 col-form-label">メール</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputMail" name="mail">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="inputMemo" class="col-sm-2 col-form-label">メモ</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputMemo" name="memo">
      </div>
    </div>
	<input type="submit" class="btn btn-primary center-block" value="送信">
</form>
<div>
<ul>
	<a href="index.php" class="link-primary">戻る</a>
</ul>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>