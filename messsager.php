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
    ​   <form id="messager">
            Name: <input type="text" name="name" value="Ex. Jon Doe"><br>
            Email: <input type="text" name="email" value="Example@gmail.com"><br>
            <textarea name="message" form="messager" onclick="this.select()" cols="64" rows="15">Type Message...</textarea><br>
            <input type="submit" onclick="gohome()" value="Submit"><br>
            <script>
                function gohome(){
                    location.replace("index.php")
                }
            </script>    
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