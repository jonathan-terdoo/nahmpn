<!DOCTYPE html>
<?php 
    session_start();
    include 'include/connection.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NHAMP</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/settings.css">
    <link rel="stylesheet" href="css/modal.css">
    <script src="jquery-3.6.0.js"></script>
<body>
    <!-- sidebar here -->
        <div class="sidebar">
            <div class="logo-header">
                <img src="images/NAHMP_Logo.png" style="width: 200px; height: 200px;">
                <h1>DASHBOARD</h1>
            </div>
            <div class="sidebar-cont">
                <a href="#" class="click">About us</a>
                    <span class="context">
                        <a href="about_us.php">Vision</a>
                        <a href="about_us.php">Mission</a>
                        <a href="about_us.php">Organogram</a>
                    </span>
                <a href="#" class="click">Licensing</a>
                <a href="#" class="click">Publication</a>
                <a href="message.php" class="click">Messages</a>
                <a href="#" class="click">News</a>
                <a href="#" class="click">Inspection and Monitoring</a>
                <a href="#" class="click">Partnership support</a>
                <a href="settings.php" class="click">Settings</a>
            </div>
        </div>
    <!-- sidebar ends here -->
    <div class="side-wrap">
    <div class="sidebar2">
            <div class="logo-header2">
                <img src="images/NAHMP_Logo.png" style="width: 200px; height: 200px;">
                <h1>DASHBOARD</h1>
            </div>
            <div class="sidebar-cont2">
                <a href="#" class="click2">About us</a>
                    <span class="context2">
                        <a href="about_us.php">Vision</a>
                        <a href="about_us.php">Mission</a>
                        <a href="about_us.php">Organogram</a>
                    </span>
                <a href="#" class="click2">Licensing</a>
                <a href="#" class="click2">Publication</a>
                <a href="message.php" class="click">Messages</a>
                <a href="#" class="click2">News</a>
                <a href="#" class="click2">Inspection and Monitoring</a>
                <a href="#" class="click2">Partnership support</a>
                <a href="settings.php" class="click2">Settings</a>
            </div>
        </div>
    </div>
    <!-- main panel start here -->
        <main>
            <header>
                <span class="bar">
                    &#9776;
                </span>
                <h1>Welcome to NAHMP</h1>
                <input type="search" name="search" id="search" placeholder="Search the site here...">
                <?php
                    if(isset($_SESSION['email'])){
                        $user = $_SESSION['email'];
                        $select = "select * from users where email ='$user'";
                        $run_select = mysqli_query($con, $select);

                        $row = mysqli_fetch_array($run_select);
                        $profile = $row['profile_photo'];
                        $status = $row['status'];
                        $name = $row['fname'];
                        
                        echo "
                            <span class='user'>
                            <div class='settings' style=''>
                                <div class='out'>
                                    <div class='circle'>
                                        <img src='$profile' onclick='myFunc();' style='object-fit: cover; width: 50px; height: 50px; border-radius: 50%;'>
                                        <div class='big'>
                                            <img src='$profile' ondblclick='douBle(this);'>
                                        </div>
                                    </div>
                                        <p>$name</p>
                                        <p>$status</p>                               
                                    </div>
                                </div>
                            </span>

                            <span class='log-out'>
                                <a href='include/logout.php?user_name=$name' class='out'>Log out</a>
                            </span>
                        ";
                    }else{
                        echo '
                            <div class="log">
                                <a href="register.php">Register</a>
                                <a href="#">|</a>
                                <a href="signin.php">Log in</a>                    
                            </div>
                        ';
                    }
                ?>                
            </header>
            <div class="upto"> 
                <div class="pane">
                    <p class="col">
                        What is Lorem Ipsum?
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the
                        1500s, when an unknown printer took a galley of type and scrambled it to 
                        make a type specimen book. It has survived not only five centuries, but 
                        also the leap into electronic typesetting, remaining essentially unchanged. 
                        It was popularised in the 1960s with the release of Letraset sheets 
                        containing Lorem Ipsum passages, and more recently with desktop publishing 
                        software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>                                
                </div>
                <div class="pane2">
                    <div class="slide"></div>
                    <div class="slide"></div>
                    <div class="slide"></div>
                </div>
            </div>
            <footer>
                <p>
                    &copy; 2021 production limited | Designed by Jonathan Demawa
                </p>
            </footer>
        </main>
    <!-- main panel ends here -->
    <script src="js/sidebar.js"></script>
    <script src="js/showImage.js"></script>
    <script>
        let searchPane = document.querySelector('#search');
        searchPane.onkeyup = function(){
            // console.log(searchPane.value);
            window.find(searchPane.value); 
        }
    </script>
</body>
</html>