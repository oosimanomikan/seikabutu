<?php
session_start();
$err = array();
?>

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  //POSTパラメーターから各種入力値を受け取る。
  $reserve_date = $_POST['reserve_date'];
  $reserve_time = $_POST['reserve_num'];
  $reserve_num = $_POST['reserve_time'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $tel = $_POST['tel'];
  $comment = $_POST['comment'];

  //各種入力地のバリデーション
  if($reserve_date){
    $err['reserve_date'] = '予約日を入力してください。';
  }

// TODO:予約日はプルダウン設定値を決定後にバリデーション事業

  if(!$reserve_num) {
    $err['reserve_num'] = '人数を入力してください。';
  }

  if(!$reserve_time) {
    $err['reserve_time'] = '予約時間を入力してください。';
  }

// TODO:予約時間はプルダウン設定後を決定時にバリデーション事業

  if(!$name) {
    $err['name'] = '氏名を入力してください。';
  }else if(mb_strlen($name,'utf-8')>20){
    $err['name']='氏名は20文字以内で入力してください。';
  }

  if(!$email) {
    $err['email'] = 'メールアドレスを入力してください。';
  } else if(mb_strlen($email, 'utf-8')> 100){
    $err['name'] = 'メールアドレスは100文字以内で入力してください。';
  }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $err['email'] = 'メールアドレスが不正です。';
  }

  if(!$tel) {
    $err['tel'] = '電話番号を入力してください.';
  }else if(mb_strlen($email,'utf-8')>20){
    $err['tel'] = '電話番号を入力してください。';
  } else if(!preg_match('/^¥d{2,4}-¥d{2,4}-¥d{3,4}$/', $tel)) {
      $err['tel'] = '電話番号を入力してください。';
  }

  if(mb_strlen($comment,'utf-8')>2000){
    $err['comment'] = '備考欄は2000文字以内で入力してください。';
  }
// エラーが無ければ次の処理に進む。
  if(empty($err)){
  //各種入力値をセッション変数に保存する
$_SESSION['RESERVE']['reserve_date'] = $reserve_date;
$_SESSION['RESERVE']['reserve_num'] = $reserve_num;
$_SESSION['RESERVE']['reserve_time'] = $reserve_time;
$_SESSION['RESERVE']['name'] = $name;
$_SESSION['RESERVE']['email'] = $email;
$_SESSION['RESERVE']['tel'] = $tel;
$_SESSION['RESERVE']['comment'] = $comment;

//予約確認画面へ遷移する
header('Location:/confirm.php');
exit;
}
} else {
//セッションに入力情報がある場合は取得する。
if(isset($SESSION['RESERVE'])) {
$reserve_date =  $_SESSION['RESERVE']['reserve_date'];
$reserve_num =   $_SESSION['RESERVE']['reserve_num'];
$reserve_time =  $_SESSION['RESERVE']['reserve_title'];
$name = $_SESSION['RESERVE']['name'];
$email = $_SESSION['RESERVE']['email'];
$tel =  $_SESSION['RESERVE']['tel'];
$comment = $_SESSION['RESERVE']['comment'];
}else{
  //存在しない場合は各変数を初期化
  $reverse_date = ";
  $reverse_date = ";
  $reverse_date = ";
  $name= ";
  $email = ";
  $tel = ";
  $comment = ";
  }
}
?>
