<?php
# 첨부파일을 다운받는 소스코드

header('Content-Type: text/html; charset=utf-8');
session_start();

require_once 'DB.php';
$conn = db_connect();

$user = $_SESSION['memberId'];

$target_Dir = "./files";
$id = $_GET['id'];
$file = $_GET['fname'];

$down = "{$target_Dir}/{$id}/{$file}";
$filesize = filesize($down);

if(file_exists($down)){
  header("Content-Type:application/octet-stream");
  header("Content-Disposition:attachment;filename=$file");
  header("Content-Transfer-Encoding:binary");
  header("Content-Length:".filesize($down));
  header("Cache-Control:cache,must-revalidate");
  header("Pragma:no-cache");
  header("Expires:0");
  if(is_file($down)){
      $fp = fopen($down,"r");
      while(!feof($fp)){
        $buf = fread($fp,8096);
        $read = strlen($buf);
        print($buf);
        flush();
      }
      fclose($fp);
  }
} else{
  ?><script>alert("존재하지 않는 파일입니다.")</script><?
}
?>
