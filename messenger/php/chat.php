<?php
$fchat="";
$mechat="";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
        $fchat= "Friend: ".$_POST['ftext'];
    }
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $mechat= "me: ".$_GET['metext'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHAT AREA</title>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
    <div class="chat">
        <form class="friend" action="chat.php" method="post">
            <p>friend:</p>
            <textarea name="ftext" placeholder="Message"></textarea>  
            <br>
            <button name="send">send</button> 

        </form>
        <form class="you" action="chat.php" method="get">
            <p>me:</p>
            <textarea name="metext" placeholder="Message"></textarea>  
            <br>
            <button name="send">send</button> 

        </form>
    </div>
    <div>
        <?php
            echo $fchat;
        ?>
    </div>
    <div class="mechat">
        <?php
            echo $mechat;
        ?>
    </div>
    <form action="login.php">           
        <button class="log">log out</button>
    </form>
</body>
</html>