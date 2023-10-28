<?php
session_start();
if ($_SESSION['veri'] == $_POST['veri']) {
    $dsn = new PDO ("mysql:host=localhost;charset=utf8;dbname=tickets","root","");
    $sql = "INSERT INTO `tickets` (`first_name`, `last_name`, `e-mail`, `password`)
    VALUES ('{$_POST['ft']}',
            '{$_POST['lt']}',
            '{$_POST['e-mail']}',
            '{$_POST['ps']}');";
    $dsn->query($sql);   

    header("location:home.html");
}else{
    ?>
    <script>
        alert("Please check the verification");
        location.href = "singin.html";
    </script>
    <?php
}
?>
