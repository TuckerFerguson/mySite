<?php
if(isset($_POST["submit"]))
{   
    echo "hi";
    $recipient="tuckerferguson208@gmail.com";
    $subject = "message from mysite";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, 
    "From: $sender <$senderEmail>");

    $thankYou="<p>Thank You! Your message has been sent.</p>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="./slick/slick.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"> 
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div id="page-container">
    <div class="backimage">
    <img src="background.jpg">
    </div>
    <div class="gallery">
    <div>
    <a href="https://github.com/BoiseState/CS471-F18-Ytho">
    <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="python.png"></a>
    </div>
    <div>
    <a href="https://github.com/ryestud/CS361P3">
    <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="java.jpg"></a>
    </div>
    <div>
    <a href="https://github.com/petersorBSCS/TrailheadCheckin_Dev">
    <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="javascript.png"></a>
    </div>
    <div>
    <a href="https://github.com/TuckerFerguson/websiteGit">
    <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="php.png"></a>
    </div>
    <div>
    <a href="https://github.com/TuckerFerguson/C_Programming/tree/master/backpack/CS453-2-f18/p3-shell-part2">    
    <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="c.jpg"></a>
    </div>
</div>
    <div class="centered">
       <div id="forminput">
       <?php $thankYou ?>
    ​   <form id="messager" method="post" action="messsager.php">
            Name: <input type="text" name="sender" value="Ex. Jon Doe" onclick="this.select()"><br>
            Email: <input type="text" name="senderEmail" value="Example@gmail.com" onclick="this.select()"><br>
            <textarea name="message" onclick="this.select()" cols="64" rows="15">Type Message...</textarea><br>
            <input type="submit" name="submit"><br>
        </form>
        </div>
    </div>
    <div id="foots">
    <footer>
        <div id="outro"><p>Thanks for Visitng</p></div>
        <div id="social"><p>Follow:</p>
           <a href="https://www.facebook.com/tucker.ferguson.7?ref=bookmarks"><img src="Facebook.png"></a>
           <a href="https://github.com/TuckerFerguson"><img src="Github.png"></a>
           <a href="https://www.linkedin.com/in/tucker-ferguson-04521511a/"><img src="Linkedin.png"></a>
        </div>
            <div id="message">
                <br>
            <a href="index.php">Home</a>
            </div>
        </footer>
        </div>
    </div>
    <script type="text/javascript">
            $(document).ready(function(){
                $('.gallery').slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
            });
        });
        </script>   
</body>

</html>