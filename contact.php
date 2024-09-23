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
    <section class="cont-sub-header">
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
        <a href="#contact" class="txt">
            <h1>Contact Us</h1>
        </a>
    </section>
    <!-- ----- contact us----- -->
    <section class="locataion">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.9672374332754!2d77.6773005145195!3d13.037757416951486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae11a8dce166a3%3A0xeb820e5491376ca0!2sCyborgSapient!5e0!3m2!1sen!2sin!4v1668540225577!5m2!1sen!2sin"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </section>
    <section id="contact" class="contact-us">
        <div class="row">
            <div class="contact-col">
                <i class="fa fa-home"></i>
                <span>
                    <h5>Pooja Garden 3rd B Cross Rd</h5>
                    <p> Kanaka Nagar, Kalkere, Bengaluru, Karnataka 560043</p>
                </span>
            </div>
            <div class="contact-col">
                <i class="fa fa-phone" ></i>
                <span>
                    <h5>+91 9484927920</h5>
                    <p>monday to saturday, 10AM to 6PM</p>
                </span>
            </div>
            <div class="contact-col">
                <i class="fa-solid fa-envelope"></i>
                <span>
                    <h5>bishnu1550bs@gmail.com</h5>
                    <p>E-mail for your query</p>
                </span>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="contact-coll">
                <form action="contact-us.php" method="post">
                 <input type="text" name="name" placeholder="Enter your name" required>
                 <input type="email" name="email" placeholder="Enter your email address" required>
                 <input type="text" name="text" placeholder="Enter your subject" required>
                 <textarea rows="8" name="messege" required></textarea>
                 <button type="submit" class="btn-a btn-bak send"> send</button>
                </form>
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