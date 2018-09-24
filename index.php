<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Ivan Garcia's portfolio website where he showcases his web design and development projects using HTML, CSS, JavaScript, Node.js and other technologies.">
    <meta name="keywords" content="web designer, portfolio, ivan garcia, freelance, web developer">
    <meta name="author" content="Ivan Garcia">


    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg"
        crossorigin="anonymous">
    <link href="//fonts.googleapis.com/css?family=Josefin+Slab:300,400,600,700" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
    <link rel="manifest" href="favicons/site.webmanifest">
    <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-config" content="favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <meta name="google-site-verification" content="_UeqJINN8HJ3405xcNvr3ck9rxO1JzEE19N_EiDTGb0" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="//www.googletagmanager.com/gtag/js?id=UA-121998830-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-121998830-1');
    </script>


    <title>Ivan Garcia</title>
</head>

<body>
    <nav class="main-nav">
        <ul class="main-nav__list">
            <li class="main-nav__item">
                <a href="//www.ivanvgarcia.com">
                    <img class="main-nav__logo" src="img/logo.jpg" alt="logo image">
                </a>
            </li>
            <li class="main-nav__item">
                <a href="#contact" class="main-nav__link">
                    Get in touch
                </a>
            </li>
        </ul>
    </nav>

    <section class="profile">
        <div class="profile__details">
            <div class="profile__heading">
                <h1 class="profile__heading-main">Hi, I'm Ivan</h1>
                <h2 class="profile__heading-sub">Designer. Front End Developer. Teacher.</h2>
            </div>
            <div class="profile__photo">
                <a href="//www.ivanvgarcia.com">
                    <img src="img/Ivan-min.jpg" alt="photo of Ivan">
                </a>
            </div>
        </div>
    </section>

    <section class="portfolio u-margin-top-bottom">
        <div class="portfolio__header">
            <h2 class="portfolio__heading">
                My Portfolio
            </h2>
            <div class="portfolio__details">
                Creating websites with a focus on clean and simple design. I help my clients use their online presence
                to convey what their
                service or product is about. Check out some of my work below!
            </div>
        </div>

        <div class="projects">
            <div class="project">
                <div class="project__details">
                    <img class="project__img" src="img/project-8.png" alt="project 7">
                    <div class="project__buttons">
                        <a href="//mighty-hollows-42573.herokuapp.com/journals" target="_blank" class="project__btn project__btn--primary">
                            Visit Website
                            <span class="project__btn-icon">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                        <a href="//github.com/ivanvgarcia/language-journal" target="_blank" class="project__btn project__btn--secondary">
                            Source code
                            <span class="project__btn-icon">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="project__overlay">
                    Lang Journal
                </div>
            </div>

            <div class="project">
                <div class="project__details">
                    <img class="project__img" src="img/project-7.png" alt="project 7">
                    <div class="project__buttons">
                        <a href="//www.simplyenglish.blog/blogs" target="_blank" class="project__btn project__btn--primary">
                            Visit Website
                            <span class="project__btn-icon">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                        <a href="//github.com/ivanvgarcia/english-teaching-blog" target="_blank" class="project__btn project__btn--secondary">
                            Source code
                            <span class="project__btn-icon">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="project__overlay">
                    Simply English
                </div>
            </div>

            <div class="project">
                <div class="project__details">
                    <img class="project__img" src="img/project-1.png" alt="project 1">
                    <div class="project__buttons">
                        <a href="//ivanvgarcia.github.io/Flow-Gengo/" target="_blank" class="project__btn project__btn--primary">
                            Visit Website
                            <span class="project__btn-icon">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                        <a href="//github.com/ivanvgarcia/Flow-Gengo" target="_blank" class="project__btn project__btn--secondary">
                            Source code
                            <span class="project__btn-icon">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="project__overlay">
                    Flow Gengo
                </div>
            </div>

            <div class="project">
                <div class="project__details">
                    <img class="project__img" src="img/project-2.jpg" alt="project 2">
                    <div class="project__buttons">
                        <a href="//ivanvgarcia.github.io/NYC-Tours-Project/" target="_blank" class="project__btn project__btn--primary">
                            Visit Website
                            <span class="project__btn-icon">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                        <a href="//github.com/ivanvgarcia/NYC-Tours-Project" target="_blank" class="project__btn project__btn--secondary">
                            Source code
                            <span class="project__btn-icon">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="project__overlay">
                    NYC Tours
                </div>
            </div>

            <div class="project">
                <div class="project__details">
                    <img class="project__img" src="img/project-3.png" alt="project 3">
                    <div class="project__buttons">
                        <a href="//ivanvgarcia.github.io/Nexter/" target="_blank" class="project__btn project__btn--primary">
                            Visit Website
                            <span class="project__btn-icon">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                        <a href="//github.com/ivanvgarcia/Nexter" target="_blank" class="project__btn project__btn--secondary">
                            Source code
                            <span class="project__btn-icon">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="project__overlay">
                    Nexter
                </div>
            </div>

            <div class="project">
                <div class="project__details">
                    <img class="project__img" src="img/project-4.png" alt="project 4">
                    <div class="project__buttons">
                        <a href="//ivanvgarcia.github.io/Panda-Trip/" target="_blank" class="project__btn project__btn--primary">
                            Visit Website
                            <span class="project__btn-icon">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                        <a href="//github.com/ivanvgarcia/Panda-Trip" target="_blank" class="project__btn project__btn--secondary">
                            Source code
                            <span class="project__btn-icon">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                    </div>

                </div>
                <div class="project__overlay">
                    Panda Trip
                </div>
            </div>

            <div class="project">
                <div class="project__details">
                    <img class="project__img" src="img/project-5.png" alt="project 5">
                    <div class="project__buttons">
                        <a href="//ivanvgarcia.github.io/RGB-Guessing-Game/" target="_blank" class="project__btn project__btn--primary">
                            Visit Website
                            <span class="project__btn-icon">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                        <a href="//github.com/ivanvgarcia/RGB-Guessing-Game" target="_blank" class="project__btn project__btn--secondary">
                            Source code
                            <span class="project__btn-icon">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="project__overlay">
                    RGB Color Game
                </div>
            </div>

            <div class="project">
                <div class="project__details">
                    <img class="project__img" src="img/project-6.png" alt="project six">
                    <div class="project__buttons">
                        <a href="//ivanvgarcia.github.io/Bitcoin/" target="_blank" class="project__btn project__btn--primary">
                            Visit Website
                            <span class="project__btn-icon">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                        <a href="//github.com/ivanvgarcia/Bitcoin" target="_blank" class="project__btn project__btn--secondary">
                            Source code
                            <span class="project__btn-icon">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="project__overlay">
                    Bitcoin Price
                </div>
            </div>
        </div>
    </section>

    <section class="section-contact u-margin-top-bottom" id="form">
        <div class="bg-video">
            <video class="bg-video__content" autoplay muted loop>
                <source src="img/Workaholic.mp4" type="video/mp4">
                <source src="img/Workaholic.webm" type="video/webm"> Your browser is not supported!
            </video>
        </div>
        <h2 class="section-contact__header">
            Interested in working together?
        </h2>
        <?php
            if($_GET['success'] == 1) {
                echo "<div class=\"form-messages success\">Thank you! Your message has been sent.</div>";
            }
            if($_GET['success'] == -1) {
                echo "<div class=\"form-messages error\">Oh no! Something went wrong. Please try again.</div>";
            }
        ?>
        <div id="contact" class="contact-form">

            <form action="./mailer-new.php" method="POST" class="contact-form__content">
                <div class="contact-form__label">
                    <label for="name">Name</label>
                </div>
                <div class="name">
                    <input type="text" name="name" id="name" placeholder="Your name" class="contact-form__input"
                        required>
                </div>
                <div class="contact-form__label">
                    <label for="email">Email</label>
                </div>
                <div class="">
                    <input type="text" name="email" id="email" placeholder="Your email" class="contact-form__input"
                        required>
                </div>
                <div class="contact-form__label">
                    <label for="project-type">Type of Project</label>
                </div>
                <div class="project-type">
                    <select name="project-type" id="project-type" class="contact-form__select">
                        <option value="web-design" selected>
                            Web Design
                        </option>
                        <option value="web-design">
                            Web Application
                        </option>
                        <option value="web-design">
                            Other
                        </option>
                    </select>
                </div>
                <div class="contact-form__label">
                    <label for="budget">Budget</label>
                </div>
                <div>
                    <select name="budget" id="budget" class="contact-form__select">
                        <option value="low-budget">
                            $300 - $600 USD
                        </option>
                        <option value="med-budget">
                            $600 - $1000 USD
                        </option>
                        <option value="high-budget">
                            $1000 - $2000+ USD
                        </option>
                    </select>
                </div>
                <div class="contact-form__label">
                    <label for="message">
                        Additional Details
                    </label>
                </div>
                <div class="contact-form__input">
                    <textarea name="message" id="message" cols="40" rows="10"></textarea>
                </div>
                <div class="contact-form__btn">
                    <input type="submit" value="Submit" class="btn">
                </div>
            </form>
        </div>
    </section>

    <footer class="u-margin-top-bottom">
        <div class="logo">
            <img class="logo__image" src="img/logo.jpg" alt="">
        </div>
        <div class=social-media>
            <div class="social-media__icon">
                <a href="//github.com/ivanvgarcia" target="_blank">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <div class="social-media__icon">
                <a href="//www.linkedin.com/in/ivan-garcia-64880651/" target="_blank">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
            <div class="social-media__icon">
                <a href="mailto:ivanvlora@gmail.com">
                    <i class="fas fa-envelope"></i>
                </a>
            </div>
        </div>
        <div class="copyright">
            Handcrafted by Ivan Garcia.
        </div>
    </footer>

</body>

</html>