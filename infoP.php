<?php
    include "./include/dbconn.php";
    include "./include/sessioncheck.php";

    $userid = $_SESSION['userid'];
    $name   = $_POST["name"];
    $hp     = $_POST["hp"];
    $email  = $_POST["email"];
    $hobby  = $_POST["hobby"];
    $hobbystr = "";
    foreach($hobby as $h){
        $hobbystr .= $h.",";
    }
    $zipcode = $_POST["zipcode"];
    $address1 = $_POST["address1"];
    $address2 = $_POST["address2"];
    $address3 = $_POST["address3"];

    if(!$conn){
        echo "DB연결 실패!";
    }else{
        $sql = "UPDATE tb_member SET mem_name='$name', mem_hp='$hp', mem_email='$email', mem_hobby='$hobbystr',mem_zipcode='$zipcode', mem_address1='$address1', mem_address2='$address2', mem_address3='$address3' WHERE mem_userid='$userid'";
        $result = mysqli_query($conn, $sql);
    }
?>

<script>
    alert('회원정보수정 성공!');
    location.href="./info.php";
</script>
