<?php
include("./db.php");


if(!$_SESSION['email']){
    echo("
    <script>
        alert('로그인이 필요합니다!');
        location.replace('index.php');
    </script>
    ");
}

if(trim($_POST['sports'])==""){
    echo("
    <script>
        alert('종목을 선택해주세요');
        history.back();
    </script>
    ");
    exit;
}

if(trim($_POST['people'])==""){
    echo("
    <script>
        alert('인원수를 선택해주세요');
        history.back();
    </script>
    ");
    exit;
}

if(trim($_POST['level'])==""){
    echo("
    <script>
        alert('실력을 설정해주세요');
        history.back();
    </script>
    ");
    exit;
}

if(trim($_POST['area'])==""){
    echo("
    <script>
        alert('지역을 설정해주세요');
        history.back();
    </script>
    ");
    exit;
}

if(trim($_POST['d_area'])==""){
    echo("
    <script>
        alert('세부주소를 입력해주세요');
        history.back();
    </script>
    ");
    exit;
}

if(trim($_POST['date'])==""){
    echo("
    <script>
        alert('게임날짜를 입력해주세요');
        history.back();
    </script>
    ");
    exit;
}

$sql = "INSERT INTO board_20170715 SET writer = '".$_SESSION['email']."', sports = '".addslashes(htmlspecialchars($_POST['sports']))."', level = '".addslashes(htmlspecialchars($_POST['level']))."', people = '".addslashes(htmlspecialchars($_POST['people']))."', area = '".addslashes(htmlspecialchars($_POST['area']))."', d_area = '".addslashes(htmlspecialchars($_POST['d_area']))."', date = '".addslashes(htmlspecialchars($_POST['date']))."'";
sql_query($sql);
?>

<script>
    alert("경기 신청이 완료되었습니다.");
    location.replace("./game_list.php");
</script>

