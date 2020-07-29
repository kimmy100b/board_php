<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/loginFormStyle.css">
    <title>로그인</title>
</head>
<body>
<?php
        if(isset($_COOKIE["userid"])){
            $_SESSION["userid"]=$_COOKIE["userid"];
        }

        if(!isset($_SESSION["userid"])) {
    ?>
<form action="login_result.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">아이디*</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="memberId" placeholder="아이디" aria-describedby="emailHelp" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">비밀번호*</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="memberPW" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">이름*</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="memberName" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">전화번호*</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="memberPW" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">이메일*</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="memberPW" placeholder="name@example.com" required>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">로그인 상태유지</label>
  </div>
  <div class="btn-group">
      <button type="reset" class="btn btn-secondary btn__reset">재작성</button>
      <button type="submit" class="btn btn-secondary btn__submit">회원가입</button>   
  </div>
</form>
<?php
        } else{
    ?>
    <?=$_SESSION["userid"]?>님 환영합니다.<br/>
    <a href="logout.php">로그아웃</a>
<?php
        }
    ?>

</body>
</html>