<?php
    $pdo= new PDO("mysql:host=localhost;charset=UTF8;dbname=tickets","root","");
    session_start();
    if(!isset($_SESSION['login'])){ 
        header("location:home.html");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $sql="select * from `tickets`";
    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($rows as $row) {
       ?>
<table>
    <td>fitst_name:</td>
    <td><?= $row['first_name'];?>;</td>
    <td>last_name:</td>
    <td><?= $row['last_name'];?>;</td>
    <td>password:</td>
    <td><?= $row['password'];?>;</td>
    <td>e-mail:</td>
    <td><?= $row['e-mail'];?>;<br></td>
</table>
        <?php
    }
?>

</body>
</html>