<?php
    header('Content-Type: text/html; charset=utf-8');
    session_start();

    require_once '../DBconnect.php';
    $conn = db_connect();

    $mem_id = $_POST["user_id"];
    $mem_pw = $_POST["userPw"];
    $chbox = $_REQUEST["chbox"];
    $pw_hash = hash("sha256",$mem_pw);
 
    if(isset($chbox)){ //isset는 안에 변수가 설정되어있는 지 확인, 설정되어있으면 true, 설정 안 되어있으면 false
        $a = setcookie("user_id", $mem_id, time()+60*60*60);
        $b = setcookie("userPw",$pw_hash,time()+60*60*60);
    }

    $sql = "SELECT id, passwd, name FROM user WHERE id='".$mem_id."'";
    $result = mysqli_query($conn, $sql);
    
    //아이디가 있다면 비밀번호 검사
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_assoc($result);

        if($row['passwd']==$pw_hash){
            $_SESSION["user_id"]= $mem_id;
            if(isset($_SESSION['user_id'])){
            ?>
             <script>
                alert("로그인되었습니다.");
                location.href="../list.php"
            </script>
            <?php } else{
                echo "세션 저장실패";
            }
        }
        else{ ?>
            <script>
                alert("아이디 혹은 비밀번호가 일치하지 않습니다.");
                history.back();
            </script>
        <?php
        }
    }  
?>
