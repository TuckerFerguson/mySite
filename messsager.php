<?php
if(isset($_POST["submit"]))
{   
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
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div id="bg">
    <img src="background.jpg">
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
    <footer>
        <div id="outro"><p>Thanks for Visitng</p></div>
        <div id="social"><p>Follow:</p>
           <a href="https://www.facebook.com/tucker.ferguson.7?ref=bookmarks"><img src="Facebook.png"></a>
           <a href="https://github.com/TuckerFerguson"><img src="Github.png"></a>
           <a href="https://www.linkedin.com/in/tucker-ferguson-04521511a/"><img src="Linkedin.png"></a>
        </div>
        <div id="message">
            <br>
         <a href="index.php">Message Me</a>
        </div>
    </footer>
</body>

</html>