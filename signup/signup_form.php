<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/signupFormStyle.css">
    <title>회원가입</title>
</head>
<body>
<form action="./process_signup.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">아이디*</label>
    <div class="id">
      <input type="text" id="inputId" class="id__input form-control" name="memberId" placeholder="아이디" aria-describedby="emailHelp" required>
      <input type="button" value="아이디 중복검사"  class="id-overlap__btn btn btn-outline-secondary" onclick="checkid();">
      <!-- <button onclick="window.open('process_idOverlap.php','아이디 중복검사', width=300, height=300, scrollbars=on">중복검사</button> -->
    </div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">비밀번호*</label>
    <input type="password" class="form-control" name="memberPw" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">이름*</label>
    <input type="text" class="form-control" name="memberName" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">전화번호*</label>
    <input type="text" class="form-control" name="memberTel" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">이메일*</label>
    <input type="text" class="form-control" name="memberEmail" placeholder="example@email.com" required>
  </div>
  <div class="form-group btn-group">
      <button type="reset" class="btn btn-secondary btn__reset">재작성</button> 
      <button type="submit" class="btn btn-secondary btn__submit">회원가입</button> 
</div>
</form>
<script>
  function checkid(){
    var memid = document.getElementById("inputId").value;
    if(memid){
      url = "process_idOverlap.php?memid="+memid;
      window.open(url,"아이디 중복체크", "width=300,height=100");
    }else{
      alert("아이디를 입력하세요.");
    }
  }
</script>
</body>
</html>