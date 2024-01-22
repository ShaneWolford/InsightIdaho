<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="images/Simple-House-Line-Art.png">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <title>Thank You</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/e581c92dce.js" crossorigin="anonymous"></script>
    <script>
        function myMenu () {
            var x = document.getElementsByClassName("main-menu")[0];
            if(x.classList.contains("active")) {
                // x.style.display = "none"
                x.classList.remove("active");
            }
            else {
                x.style.display = "block";
                x.classList.add("active");
            }
        }
    </script>
    <script>
            function myMenu () {
                var x = document.getElementsByClassName("main-menu")[0];
                if(x.classList.contains("active")) {
                    x.style.display = "none"
                    x.classList.remove("active");
                }
                else {
                    x.style.display = "block";
                    x.classList.add("active");
                }
            }
        </script>
    


    <?php
    $name = $_REQUEST['fullname'];
    $from = $_REQUEST['email']; //This is from
    $phone = $_REQUEST['telephone'];
    $comments = $_REQUEST['comments'];
    $spamCheck = $_REQUEST['street'];


    $message = "Name: " . $name . "\nPhone: " . $phone . "\nComments: " . $comments;
    echo $message;

    $to ="duane.erickson@mtchs.org";
    $subject = "Contact Form Submission";

    if($spamCheck) {
        die("Go Away! Not sending this!");
    }
    else {
        $emailSuccess = mail($to, $subject, $message, $from);
        if ($emailSuccess) {
            echo "Email sent<br>";
        }
    }


    ?>
</head>

<body style="display: block;">
<header>

<img src="images/Buster_Logo_barbed_only_Updated.png" alt="Picture" class="logo">
<h1 class="s">Buster's Restaurant & Saloon</h1>
<span class="icon" onclick="myMenu()">
    <i class="fa-solid fa-bars"></i>
</span>
    <ul class="contents">
        <li><a href="bustershome.html">Home</a></li>
        <li><a href="Busterrv.html">Locations and Rv Park</a></li>
        <li><a href="bustermenu.html">Menu</a></li>
        <li><a href="busterscontact.html">Contact Us!</a></li>
        <li><a href="https://www.facebook.com/busterssaloon2014?ref=hl" target="_blank" aria-label="Go to Facebook Page"><i class="fa-brands fa-facebook" style="color: #ffffff;" aria-hidden="true"></i></a></li>
    </ul>
</header>
<nav class="main-menu">
<ul class="hamb">
<li><a href="bustershome.html">Home</a></li>
<li><a href="Busterrv.html">Uswer</a></li>
<li><a href="bustermenu.html">Menu</a></li>
<li><a href="busterscontact.html">Contact Us!</a></li>
<li><a href="https://www.facebook.com/busterssaloon2014?ref=hl" target="_blank" aria-label="Go to Facebook Page"><i class="fa-brands fa-facebook" style="color: #ffffff;" aria-hidden="true"></i></a></li>
</ul>
</nav>
    <main class="mainphp">
        
        <h1 class="title6">Thank You!</h1>
        
    </main>
    <footer><span>&copy; Buster's</span> <h4>208-655-4000</h4><h4> Idaho</h4></footer>
</body>
</html>