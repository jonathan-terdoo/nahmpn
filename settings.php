<!DOCTYPE html>
<?php
    session_start();
    include "include/connection.php";

    $user = $_SESSION['email'];
    if(!isset($user)){
        header("location: signin.php");
    }else{
        $select_image = "select profile_photo from users where email = '$user'";
        $run = mysqli_query($con, $select_image);
    
        $array = mysqli_fetch_array($run);
        $profile = $array['profile_photo'];
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/settings.css">
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <div class="wrap-header">
        <header>
            <a href="index.php">Home</a>
            <h1>Settings</h1>
        </header>
    </div>
    <div class="preview">
        <form method="post" action="include/upload_photo.php" enctype="multipart/form-data">

        <div class="image-area">

            <img src="<?php echo $profile; ?>" style="width: 100%; height: 390px;" id="display">
        </div><br>
        <br>
            <label class="choose">
                Choose a profile picture
            </label><br>
            <br>
            <br>
            <label class="btn-choose">
                Choose an image file
                <input type="file" name="image" id="image" style="display: none;" onchange="showImage(this);">
            </label>
            <br>
            <br>
            <br>
            <input type="submit" value="Upload" class="btn" name="upload">
        </form>
    </div>
    <script>
        function showImage(e){
            if(e.files[0]){
                var reader = new FileReader();
                reader.onload = function (e){
                    let display = document.querySelector('#display');
                    display.setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(e.files[0]);
            }
        }
    </script>
</body>
</html>