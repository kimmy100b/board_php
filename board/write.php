<?php
#게시물 작성화면
header('Content-Type: text/html; charset=utf-8');
include "../include/header.php";
session_start();?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>게시물 작성</title>
</head>
<?php 
//로그인 되어있는 지 확인
$user_id=$_SESSION['user_id'];
if(isset($user_id)){ ?>
<body>
    <div class="write-content">
        <form action="./process.php?mode=insert" method="POST" enctype="multipart/form-data">
            <div class="write_form">
                <label for="writer">작성자</label>
                <input type="text" name="writer" class="form-control" id="writer" value="<?php echo $user_id; ?>" required readonly>
                <!-- <label for="writer">작성자</label>
                <input type="text" name="writer" class="form-control" id="writer" placeholder="작성자" required> -->
            </div>
            <div class="write_form">
                <label for="title">제목</label>
                <input type="text" name="title" class="form-control" id="title"" placeholder="글 제목" required>
            </div>
            <div class="write_form">
                <label for="passwd">비밀번호</label>
                <input type="password" name="passwd" class="form-control" id="passwd" placeholder="비밀글을 원하실 비밀번호를 입력해주세요">
            </div>
            <div class="write_form write_not_setting">
                <label for="content">내용</label>
                <textarea name="content" id="ir1" rows="20" cols="219"> </textarea>
            </div>
            <div class="write_form write_not_setting">
                <label for="file">첨부파일</label>
                <input type="file" name="userfile" class="form-control-file" id="file">
                <!--
                    <input type="file" name="userfile[]" class="form-control-file" id="exampleFormControlFile2">
                    <input type="file" name="userfile[]" class="form-control-file" id="exampleFormControlFile3">
                    <input type="file" name="userfile[]" class="form-control-file" id="exampleFormControlFile4">
                -->
            </div>
            <div class="col-auto submit">
                <input id="saveBtn" type="submit" class="btn btn-secondary" onclick="submitContents(this)" value="제출">
            </div> 
        </form>
    </div>
    <script type="text/javascript" src="../se2/js/service/HuskyEZCreator.js" charset="utf-8"></script>
    <script type="text/javascript">
        var oEditors = [];
        nhn.husky.EZCreator.createInIFrame({
            oAppRef: oEditors,
            elPlaceHolder: "ir1",
            sSkinURI: "../se2/SmartEditor2Skin.html",
            fCreator: "createSEditor2"
        });
        function submitContents(elClickedObj) {
        // 에디터의 내용이 textarea에 적용된다.
            oEditors.getById["ir1"].exec("UPDATE_CONTENTS_FIELD", []);

            // 에디터의 내용에 대한 값 검증은 이곳에서
            // document.getElementById("ir1").value를 이용해서 처리한다.
            try {
            elClickedObj.form.submit();
            } catch(e) {}
        }
        </script>
        <?php
        }
        else{
        ?>
    <script>
        alert("로그인하세요");
        location.href="../member/login.php";
    </script>
    <?php
    }
    ?>
</body>
</html>