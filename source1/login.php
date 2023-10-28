<?php
    $pdo= new PDO("mysql:host=localhost;charset=utf8;dbname=tickets","root","");
    session_start();
    $first_name=$_POST["first_name"];
    $last_name=$_POST["last_name"];
    $email=$_POST["e-mail"];
    $password=$_POST["password"];
    
    $row=$pdo->query("SELECT * FROM `tickets` WHERE `first_name`='$first_name'AND`last_name`='$last_name'AND`e-mail`='$email'AND`password`='$password'")->fetch();
    if($row){
        $_SESSION['login']=true;
        ?><script>alert("welcome");location.href="vip.php"</script><?php
    }else{
        ?><script>alert("login error");location.href="login.html"</script><?php
    }
?>