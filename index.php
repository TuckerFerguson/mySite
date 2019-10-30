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
<div id="page-container">
    <div id="bg">
    <img src="background.jpg">
    </div>
    <header>
    </header>
    <div id="gallery">
    <div id="pic1">
    <a href="https://github.com/BoiseState/CS471-F18-Ytho">
    <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="python.png"></a>
    </div>
    <div id="pic2">
    <a href="https://github.com/ryestud/CS361P3">
    <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="java.jpg"></a>
    </div>
    <div id="pic3">
    <a href="https://github.com/petersorBSCS/TrailheadCheckin_Dev">
    <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="javascript.png"></a>
    </div>
    <div id="pic4">
    <a href="https://github.com/TuckerFerguson/websiteGit">
    <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="php.png"></a>
    </div>
    <div id="pic5">
    <a href="https://github.com/TuckerFerguson/C_Programming/tree/master/backpack/CS453-2-f18/p3-shell-part2">    
    <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="c.jpg"></a>
    </div>
    <script>
    function bigImg(x) {
        x.style.height = "80px";
        x.style.width = "120px";
    }

    function normalImg(x) {
        x.style.height = "100%";
        x.style.width = "100%";
    }
    </script>
  </div> 
        <div class="centered">
            <div class="profpic">
           <img src="profilePic2.png">
            </div>
            <div class="biobanner">
                <h1>Tucker J.</h1>
                <h2>Ferguson</h2>
            </div>
            <div class="bio">
                <h1>About Me</h1>
                <ul>
                    <li><h3>Boise State University</h3>Graduate: May, 2019</li>
                    <li><h3>Major: Computer Science</h3>Go Broncos.</li>
                    <li><h3>Thank you</h3> for visiting my portfolio website. Feel free to explore and learn a 
                        little about me. If you have any questions feel free to reach out to me <a href="messsager.php">here</a>
                    </li>
                </ul> 
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
                 <a href="messsager.php">Message Me</a>
                </div>
            </footer>
        </div>
        </div>
    </body>
</html>