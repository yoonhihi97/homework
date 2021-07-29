<?php
    include "../include/dbconn.php";
    include "../include/sessioncheck.php";

    $b_title = $_POST['b_title'];
    $b_userid = $_SESSION['userid'];
    $b_content = $_POST['b_content'];

    if(!$conn){
        echo "DB연결 실패!";
    }else{
        $sql = "INSERT INTO tb_board (b_title, b_userid, b_content) VALUES ('$b_title', '$b_userid', '$b_content')";
        $result = mysqli_query($conn, $sql);
        echo "<script>alert('글 작성 성공!');location.href='./list.php';</script>";
    }
?>

