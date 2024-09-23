<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyborgsapient health care</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;1,100;1,200;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css ">
    <link rel="shortcut icon" href="img/s_logo.png">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="sub-header">
        <nav>
            <a href="index.php"><img src="img/nav_logo.png" alt="logo"></a>
            <div class="nav-links" id="navlinks">
                <i class="fa fa-times" onclick="hidemenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about-us.php">ABOUT</a></li>
                    <li><a href="services.php">SERVICES</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showmenu()"></i>
        </nav>
        <h1>About us</h1>
    </section>
    <section class="about">
        <div class="row">
            <div class="about-col">
                <h1>better health care</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta tempore dolore deleniti quibusdam
                    dicta provident alias facilis necessitatibus nesciunt libero earum nulla ullam, architecto autem
                    reprehenderit accusamus voluptatem voluptas error.</p>
                    <a class="btn-a btn-bak" href="">EXPLORE NOW</a>
            </div>
            <div class="about-col">
                <img src="img/img13.jpg" alt="">
            </div>
        </div>

    </section>
     <!-- ----- whatsapp ----- -->
     <div class="whatsapp">
        <a href="https://wa.link/q3mg12"><img src="img/whatsapp.png" alt="whatsapp" class="whatsapp-icon"></a>
      </div>
    <!-- ------ footer ------ -->
    <section class="footer">
        <h4>About us</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, ab accusamus numquam tempore magnam nemo
            <br>
            alias neque soluta iure incidunt? Culpa aut deleniti sunt et officia quae,<br> tempore optio pariatur
            laudantium
            doloribus omnis, sed temporibus qui quaerat numquam expedita itaque possimus! <br> Fuga beatae ea suscipit
            animi
            voluptatum repellat aliquam minima.
        </p>
        <div class="icons">
            <a href=""><i class="fa-brands fa-facebook-f"></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></a>
            <a href=""><i class="fa-brands fa-linkedin"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>

            <p> More about Cyborgsapient</p>

        </div>
        <div class="powerby">
            Copyright <i class="fa fa-copyright"></i> 2022| Powered by Cyborgsapient
        </div>

    </section>
    <!-- ----javascript---- -->
    <script>
        var navlinks = document.getElementById("navlinks");
        function showmenu() {
            navlinks.style.right = "0"
        }
        function hidemenu() {
            navlinks.style.right = "-200px"

        }
    </script>

</body>

</html>