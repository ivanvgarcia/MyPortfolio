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
    <link href="https://fonts.googleapis.com/css?family=Quattrocento+Sans:400,700" rel="stylesheet">
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
    <header>
        <nav class="main-nav container">
            <ul class="main-nav__list">
                <li class="main-nav__item">
                    <a href="//www.ivanvgarcia.com">
                        <img class="main-nav__logo" src="img/logo_transparent.png" alt="logo image">
                    </a>
                </li>
                <li class="main-nav__item">
                    <a href="#contact" class="main-nav__link">
                        Hire Me
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <section class="profile container">
        <div class="profile__image">
            <img src="img/nomad.png" alt="photo of work desk">
        </div>
        <div class="profile__heading">
            <h1 class="profile__main">Hi, I'm Ivan</h1>
            <h2 class="profile__sub">Full Stack Web Developer</h2>
        </div>
    </section>


    <section class="portfolio">
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

        <div class="project-section container">

            <div class="card">
                <div class="card-side">
                    <i class="fab fa-html5"></i>
                    <i class="fab fa-css3"></i>
                    <i class="fab fa-js"></i>
                    <i class="fab fa-node"></i>
                    <i class="fas fa-database"></i>
                    <i class="fab fa-react"></i>
                </div>
                <div class="card__image">
                    <img src="img/project-1.jpg" alt="journal">
                </div>

                <div class="card__information">
                    <div class="card__header">
                        <h3 class="card__title">
                            Developer Connector
                        </h3>
                    </div>
                    <div class="card__description">
                        A full stack website using MongoDB and the react library with redux. Users can sign up and
                        login, create a profile, and add their experiences and education.
                    </div>
                    <div class="card__links">
                        <a href="//github.com/ivanvgarcia/dev-connector" target="_blank"><i class="fab fa-github"></i>
                        </a>
                        <a href="//radiant-reaches-86758.herokuapp.com/" target="_blank"><i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-side">
                    <i class="fab fa-html5"></i>
                    <i class="fab fa-css3"></i>
                    <i class="fab fa-js"></i>
                    <i class="fab fa-node"></i>
                    <i class="fas fa-database"></i>
                    <i class="fab fa-react"></i>
                </div>
                <div class="card__image">
                    <img src="img/project-9.png" alt="journal">
                </div>

                <div class="card__information">
                    <div class="card__header">
                        <h3 class="card__title">
                            Client Panel
                        </h3>
                    </div>
                    <div class="card__description">
                        A full stack website using the firestore database and the react library with redux. This
                        website is a great example of software I can build for companies that need to manage clients
                        and keep up with payments.
                    </div>
                    <div class="card__links">
                        <a href="//github.com/ivanvgarcia/client-panel-react" target="_blank"><i class="fab fa-github"></i>
                        </a>
                        <a href="//react-client-panel-7952a.firebaseapp.com/" target="_blank"><i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-side">
                    <i class="fab fa-html5"></i>
                    <i class="fab fa-css3"></i>
                    <i class="fab fa-js"></i>
                    <i class="fab fa-node"></i>
                    <i class="fas fa-database"></i>
                </div>
                <div class="card__image">
                    <img src="img/project-8.png" alt="journal">
                </div>
                <div class="card__information">
                    <div class="card__header">
                        <h3 class="card__title">
                            Language Journal
                        </h3>
                    </div>
                    <div class="card__description">
                        This is a full stack project created using Node.js and Materialize CSS. As a learner of
                        languages, I always found websites that allowed people to practice their writing in new
                        languages useful. So, I decided to create my own.
                    </div>
                    <div class="card__links">
                        <a href="//github.com/ivanvgarcia/language-journal" target="_blank">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="//mighty-hollows-42573.herokuapp.com/" target="_blank">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card no-margin-right card-featured">
                <div class="card-side">
                    <i class="fab fa-html5"></i>
                    <i class="fab fa-css3"></i>
                    <i class="fab fa-js"></i>
                    <i class="fab fa-node"></i>
                    <i class="fab fa-npm"></i>
                </div>
                <div class="card__image">
                    <img src="img/project-7.png" alt="Simply English website">
                </div>
                <div class="card__information">
                    <div class="card__header">
                        <h3 class="card__title">
                            Simply English
                        </h3>
                    </div>
                    <div class="card__description">
                        <p>Full stack website using Node.js and the express framework with EJS as the templating
                            language. I
                            created this website to share blog posts with my students on various English topics related
                            to their industry.</p>
                    </div>
                    <div class="card__links">
                        <a href="//github.com/ivanvgarcia/english-teaching-blog" target="_blank">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="//www.simplyenglish.blog/blogs" target="_blank">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-side">
                    <i class="fab fa-html5"></i>
                    <i class="fab fa-css3"></i>
                    <i class="fab fa-sass"></i>
                </div>
                <div class="card__image">
                    <img src="img/project-6.png" alt="NYC tours website">
                </div>
                <div class="card__information">
                    <div class="card__header">
                        <h3 class="card__title">
                            NYC Tours
                        </h3>
                    </div>
                    <div class="card__description">
                        <p>A fully responsive website showcasing my web design skills. I worked with many modern CSS3
                            properties such as creating animations and interactive and engaging hover states for
                            components. If you're looking to build a similar site, take a look!</p>
                    </div>
                    <div class="card__links">
                        <a href="//github.com/ivanvgarcia/NYC-Tours-Project" target="_blank">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="//ivanvgarcia.github.io/NYC-Tours-Project/" target="_blank">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-side">
                    <i class="fab fa-html5"></i>
                    <i class="fab fa-css3"></i>
                    <i class="fab fa-sass"></i>
                    <i class="fab fa-npm"></i>
                </div>
                <div class="card__image">
                    <img src="img/project-5.png" alt="Nexter website">
                </div>
                <div class="card__information">
                    <div class="card__header">
                        <h3 class="card__title">
                            Nexter
                        </h3>
                    </div>
                    <div class="card__description">
                        <p>A real estate site mockup demonstrating the new CSS3 Grid and Flexbox layouts. A great
                            example of
                            the kind of layout that I can create with these new technologies to help you create a
                            website for you business.</p>
                    </div>
                    <div class="card__links">
                        <a href="//github.com/ivanvgarcia/Nexter" target="_blank">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="//ivanvgarcia.github.io/Nexter/" target="_blank">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card no-margin-right">
                <div class="card-side">
                    <i class="fab fa-html5"></i>
                    <i class="fab fa-css3"></i>
                    <i class="fab fa-sass"></i>
                    <i class="fab fa-npm"></i>
                </div>
                <div class="card__image">
                    <img src="img/project-4.png" alt="Panda Trip website">
                </div>
                <div class="card__information">
                    <div class="card__header">
                        <h3 class="card__title">
                            Panda Trip
                        </h3>
                    </div>
                    <div class="card__description">
                        <p>Panda Trip is a website created with Flexbox and responsive web design. It is a mock up for
                            a
                            fictional travel business.</p>
                    </div>
                    <div class="card__links">
                        <a href="//github.com/ivanvgarcia/Panda-Trip" target="_blank">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="//ivanvgarcia.github.io/Panda-Trip/" target="_blank">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="contact" class="section-contact u-margin-top-bottom" id="form">
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
        <div class="contact-form">

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
            <img class="logo__image" src="img/logo_transparent.png" alt="">
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