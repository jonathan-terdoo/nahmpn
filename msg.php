<?php
    session_start();
    include "include/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <link rel="stylesheet" href="css/message.css">
    <link rel="stylesheet" href="css/icon-design.css">
    <link rel="stylesheet" href="css/media-screen.css">
    <link rel="stylesheet" href="css/messagepane.css">
    <script src="jquery-3.6.0.js"></script>
</head>
<body>
<div class="message">
    <div class="head">                        
        <?php  include "include/find_users.php"; ?>
    </div>
    <div class="body">
        
    </div>
    <div class="send-pane bot">
        <?php
            $sesion = $_SESSION['email'];
        ?>
        <form id="myForm">
            <input type="text" name="sender" value="<?php echo $sesion; ?>" hidden>
            <input type="text" name="receiver" value="<?php echo $email_p; ?>" hidden>
            <input type="text" placeholder="Type a message here..." id="message" name="message">
            <button type="submit" id="send">Send</button>
        </form>
    </div>
</div>
<script src="js/insert_msg.js"></script>
<script src="js/fetch_msg.js"></script>
</body>
</html>