<?php
include("./db.php");

$_SESSION=[];
session_destroy();
?>

<script>
    alert("로그아웃이 완료 되었습니다.");
    location.replace("index.php");
</script>