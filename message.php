<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header('location: signin.php');
    }else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NHAMP chat room</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/message.css">
    <link rel="stylesheet" href="css/icon-design.css">
    <link rel="stylesheet" href="css/media-screen.css">
    <link rel="stylesheet" href="css/sidebar2.css">
    <!-- <link rel="stylesheet" href="css/messagepane.css"> -->
    <script src="jquery-3.6.0.js"></script>
</head>
<body>
    <!-- sidebar here -->
        <div class="sidebar">
            <div class="logo-header">
                <img src="images/NAHMP_Logo.png" style="width: 200px; height: 200px;">
                <h1>Messages</h1>
            </div>
            <div class="sidebar-cont">
                <a href="index.php" class="click">Dashboard</a>
                <a href="#" class="click">Licensing</a>
                <a href="#" class="click">Publication</a>                
                <a href="#" class="click">News</a>
                <a href="#" class="click">Inspection and Monitoring</a>
                <a href="#" class="click">Partnership support</a>
                <a href="include/logout.php?user_name=<?php $_SESSION['email']; ?>">Log out</a>
            </div>
        </div>
    <!-- sidebar ends here -->
<div class="side2wrap hide">
    <div class="sidebar2">
        <div class="logo-header2">
            <img src="images/NAHMP_Logo.png" style="width: 200px; height: 200px;">
            <h1>Messages</h1>
        </div>
        <div class="sidebar-cont2">
            <a href="index.php" class="click2">Dashboard</a>
            <a href="#" class="click2">Licensing</a>
            <a href="#" class="click2">Publication</a>                
            <a href="#" class="click2">News</a>
            <a href="#" class="click2">Inspection and Monitoring</a>
            <a href="#" class="click2">Partnership support</a>
            <a href="include/logout.php">Log out</a>
        </div>
    </div>
</div>
    <!-- main panel start here -->
        <main>
            <div class="main-wrapper">
                <div class="users-page">
                    <div class="wrap-this">
                        <div class="blue">
                            <span class="bar">&#9776;</span>
                            <form>
                                <input type="text" id="peoples_name" name="names" placeholder="Search for a Person here..." class="input">
                            </form>
                        </div>
                    </div>
                    <div class="users">
                        <?php include "include/get_users.php"; ?>
                    </div>
                </div>
                <!-- messages here -->
                <div class="message">
                    <div class="head">                        
                        <?php  include "include/find_users.php"; ?>
                    </div>
                    <div class="body">
                        
                    </div>
                    <div class="send-pane">
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

            </div>
        </main>
    <!-- main panel ends here -->
    <script src="js/read.js"></script>
    <script src="js/insert_msg.js"></script>
    <script src="js/fetch_msg.js"></script>
    <script src="js/sidebar.js"></script>
    <script src="js/opento.js"></script>
</body>
</html>
<?php
    }
?>