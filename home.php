<?php
   // session start
   session_start();

   // functions include
   include(__DIR__.'/functions/functions.php'); 

   // html header include
   include(__DIR__.'/include/home/header.php'); 

?>
<h1>運営者元ホームページ</h1>

<!-- セラーログインページ    -->
<div>
<h2>販売者様ログイン</h2>

<?php
// 新規登録が成功した場合、home_newacc.phpからここに飛ぶ
if(isset($_SESSION["newacc"])){
  if($_SESSION["newacc"]){
    echo "<p>新規登録できたよ！ここからログインしてね。</p>";
    $_SESSION["newacc"]=false;
    //var_dump($_SESSION["newacc"]);
  }else{
    echo "<p id=\"tpmsg\" class=\"logad\">こちらからアカウントにログインしてください。</p>";
  }
}else{
  echo "<p id=\"tpmsg\" class=\"logad\">こちらからアカウントにログインしてください。</p>";
  //var_dump($_SESSION["newacc"]);
}
?>

<?php   
if(isset($errMsg)){
  echo $errMsg;
}

?>
<!-- login_act.php は認証処理用のPHPです。 -->
<form id="login_form" name="form1" action="home_login_act.php" method="post">
<ul>
    <li>
      <input class="email" type="text" name="c_id" size="30" maxLength="50" placeholder="メール" />
    </li>
    <li>
      <input id="pwd" class="key" type="password" name="c_pass" size="30" maxLength="32" placeholder="パスワード" /></li>
    <li>
        <input type="checkbox" id="password-check" />&nbsp;&nbsp;パスワードを表示する
    </li>
    <li> 
      <input class="button" type="submit" value="ログイン" />
    </li>
</ul>
</form>

<p>新規登録は<a href="home_newacc.php">こちら</a></p>
</div>
<!-- セラーログイン ここまで --> 

<?php 
// html header include
   include(__DIR__.'/include/home/footer.php'); 
?>