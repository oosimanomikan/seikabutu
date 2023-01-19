  <!doctype html>
<html lang="ja">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Original CSS -->
    <link href="/css/style.css" rel="stylesheet">

    <title>ご来店予約</title>
  </head>

  <body>
    <header>SAMPLE SHOP</header>
    
    <h1>ご来店予約</h1>

<form class="m-3" method="post" action="confirm.php">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">『1』予約日を選択</label>
  <select class="form-select <?php if(isset($err['reserve_date']))echo "is_invalid"
  ?> "name="reserve_date">
  <option selected>日付</option>
  <option value="1">1/19</option>
  <option value="2">1/20</option>
  <option value="3">1/21</option>
</select>
<div class="invalid-feedback"><?=$err['reserve_date']?></div>


</div>
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">『2』予約日を選択</label>
<select class="form-select" <?php if(isset($err['reserve_num']))echo "is_invalid"
  ?> name="reserve_num">
<option selected>人数</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  </select>
  <div class="invalid-feedback"><?=$err['reserve_num']?></div>
</div>
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">『3』予約時間を選択</label>
  <select class="form-select" <?php if(isset($err['reserve_time']))echo "is_invalid"
  ?> name="reserve-time">
  <option selected>時間</option>
  <option value="12:00">12:00</option>
  <option value="13:00">13:00</option>
  <option value="14:00">14:00</option>
  </select>
  <div class="invalid-feedback"><?=$err['reserve_time']?></div>
</div>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">『4』予約情報を入力</label>
  <input type="text" class="form-control" <?php if(isset($err['name']))echo "is_invalid"
  ?>  name="name" placeholder="氏名" value="<?= $name ?>">
  <div class="invalid-feedback"><?=$err['name']?></div>
</div>
<div class="mb-3">
    <input type="text" class="form-control"  <?php if(isset($err['email']))echo "is_invalid"
  ?>  name="email" placeholder="メールアドレス" value="<?= $email ?>">
  <div class="invalid-feedback"><?=$err['email']?></div>
</div>
<div class="mb-3">
  <input type="text" class="form-control"  <?php if(isset($err['tel']))echo "is_invalid"
  ?>  name="tel" placeholder="電話番号"> value="<?= $tel ?>">
  <div class="invalid-feedback"><?=$err['tel']?></div>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">『5』備考欄</label>
  <textarea class="form-control"  <?php if(isset($err['comment']))echo "is_invalid"
  ?>  name="comment" rows="3" placeholder="備考欄"><?= $comment ?>"</textarea>
    <div class="invalid-feedback"><?= $comment?></div>
</div>

  <div class="d-grid gap-2">
  <button class="btn btn-primary rounded-pill" type="submit">確認画面へ</button>
  <button class="btn btn-secondary rounded-pill" type="button">戻る</button>
</div>
</div>
</form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>