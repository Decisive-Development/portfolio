<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    $message_sent   =   false;
    if(isset($_POST['email']) && $_POST['email']  !=  ''){

        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)  ) {

            $userName   =   $_POST['name'];
            $userEmail   =   $_POST['email'];
            $messageSubject   =   $_POST['subject'];
            $message   =   $_POST['message'];

            $to =   "tom@decisive-development.com";
            $body   =   "";

            $body   .=  "From:  ".$userName.    "\r\n";
            $body   .=  "Email:  ".$userEmail.    "\r\n";
            $body   .=  "Message:  ".$message.    "\r\n";

            mail($to,$messageSubject,$body);

            $message_sent   =   true;
    }
}
 ?>

<html lang="en" dir="ltr">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-175434534-2"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-175434534-2');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decisive Development</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <meta name="description" content="Tom Penny - Freelance website development for individuals or small business. Focusing on exceptional user interface and providing a slick experience. Based in south east England. ">
    <meta name="keywords" content="FREELANCE, WEBSITE, DEVELOPMENT, PORTFOLIO, UI/UX, UI, UX, DARKMODE, HOSTING, FRONTEND, BACKEND, FULLSTACK, RESPONSIVE">
    <meta name="autor" content="Decisive Development">
    <script src="https://kit.fontawesome.com/6e3790483c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
</head>
<body>
<div class='spinner-wrapper'>
    <div class="spinner-text">
        <h1>Just... a little.. longer!</h1>
    </div>
<div class="spinner"></div>
    </div>
<section class="contact-background" id="particles-js" >
    </section>
<section class="contact-page">
        <div class="logo-container">
            <a href="/" > <img class="logo" src="images/logo.svg" alt="Decsive Development"> </a>
        </div>
    <div class="nav-container">
        <nav class="navbar">
            <div class="menu">
                <h3>Menu</h3>
            </div>
        <div class="hamburger-menu">
            <div class="line line-1"></div>
            <div class="line line-2"></div>
            <div class="line line-3"></div>
        </div>
    <ul class="nav-list">
        <li class="nav-item">  <a href="/" class="nav-link">Home</a></li>
        <li class="nav-item">  <a href="projects" class="nav-link">Projects</a></li>
        <li class="nav-item">  <a href="about" class="nav-link">About</a></li>
        <li class="nav-item">  <a href="contact" class="nav-link">Contact</a></li>
    </ul>
        </nav>
    </div>
<div class="contact-container">
    <h1>Get In Touch!</h1>
<div class="border"></div>
    <p>I'll get back to you promptly</p>


<form class="contact-form" action="contact" method="POST">

    <input class="contact-form-text" type="text" name="name" id="name" placeholder="Full name" tabindex="1" required>
    <input  class="contact-form-text" type="email" name="email" id="email" placeholder="Your E-mail" tabindex="2" required>
    <input class="contact-form-text" type="text" name="subject" id="subject" placeholder="Subject" tabindex="3" required>

    <textarea class="contact-form-text" name="message" placeholder="Message" tabindex="4"></textarea>

    <button class="contact-form-button" type="submit" name="submit">Send</button>

</form>


</div>
</section>
<section class="page-bottom">
    <div class="bottom-container">
        <div class="bottom info">
            <h2>Get In Touch</h2>
            <p>Feel free to contact me at any time. I prefer email enquires as I may not be availible, but I am always happy to chat.</p>
        <ul>
            <li><span><i class="fas fa-mobile-alt"></i></span>
                <span class="contact"><a href="tel">07708754503</a></span></li>
            <li><span><i class="far fa-envelope"></i></span>
                <span class="contact">tom@decisive-development.com</span></li>
            <li><span><i class="fas fa-map-marker-alt"></i></span>
                <span class="contact">Oxfordshire, England</span></li>
            <li><span><i class="fab fa-instagram"></i></span>
                <span class="contact"><a class="insta" href="#">Instagram</a></span></li>
        </ul>
    </div>
<div class="bottom services">
    <h2>Services</h2>
    <p>I can provide a range of ways to help and can work flexibly, depending on the requirements of your project. To find out more, please get in touch.</p>
    <ul>
        <li><span><i class="fas fa-pencil-ruler"></i></span>
            <span class="contact">Bespoke design</span></li>
        <li><span><i class="fas fa-file-code"></i></span>
            <span class="contact">Bespoke development</span></li>
        <li><span><i class="fas fa-tools"></i></span>
            <span class="contact">Website maintenance</span></li>
        <li><span><i class="fas fa-server"></i></span>
            <span class="contact">Website hosting</span></li>
    </ul>
</div>
<div class="bottom availability">
    <h2>Availability</h2>
    <p>I am open for work, large or small. If it is time to bring your ideas to life and share with the world. Preferred contact via email message <a href="contact">here</a>, however please feel free to phone if you wish.</p>
</div>
</div>
</section>
<footer>
    <div class="footer-content">
        <ul>
            <li>Just website stuff...</li>
            <li><a href="https://stackoverflow.com/users/13467487/decisive-development">Stack-Overflow</a></li>
            <li><a href="sitemap.xml">Sitemap</a></li>
        </ul>
    </div>
</footer>
    <script src="js/script.js" ></script>
    <script src="particles.js" ></script>
    <script>
            particlesJS.load('particles-js', 'js/particlesjs-config.json', function() {
              console.log('callback - particles.js config loaded');
        });
    </script>
</body>
</html>
