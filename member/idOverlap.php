<?php
    header('Content-Type: text/html; charset=utf-8');
    include_once "../DBconnect.php";
    $DBconnect = new DBconnect();

    $user_id = $_GET['user_id'];
    $sql = "select id from user where id = '".$user_id."'";
    $stmt = mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($stmt);
    
    if($user==0){
        
?>
<div><?php echo $user_id;?>는 사용가능한 아이디입니다.</div>

<?php
    } else{
?>

<div><?php echo $user_id;?>는 중복된 아이디입니다.</div>
<?php
    }
?>
<button value="닫기" onclick="window.close()">닫기</button>