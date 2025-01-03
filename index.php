<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <title>smart library</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ysabeau+Infant:wght@300;400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    </head>
    <body>
        <section class="header">
            <nav>
                <a href="index.php"><img src="images/2.jpg" width="70"height="70"></a>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" aria-hidden="true" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="">HOME</a></li>
                        <li><a href="">ABOUT</a></li>
                        <li><a href="">QURIES</a></li>
                        <li><a href="login.php"><img src="images/3.jpg" width="50" height="50"></a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" aria-hidden="true" onclick="showMenu()"></i>
            </nav>
            <div class="text-box">
                <h1> SMART LIBRARY</h1>
                <p>Hello BIBLIOPHILES... This Website helps you to find all the books you need.<br>Welcome to the realm of the Smart Library, where every tome is a gateway to boundless knowledge and literary adventure.</p>
                <a href="login.php" class="login-btn">LOGIN</a>
                <a href="create_acc.php" class="create-btn">CREATE ACCOUNT</a>
            </div>
        </section>
        <!------JavaScript for menu on media------>
        <script>
            var navLinks=document.getElementById("navLinks");
            function showMenu(){
                navLinks.style.right="0px";
            }
            function hideMenu(){
                navLinks.style.right="-200px";
            }
        </script>
    </body>
</html>