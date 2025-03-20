<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, i'm fonsski, web-developer">
    <meta name="keywords" content="backend, frontent, PHP, HTML, CSS, JavaScript, sites, web apps, portfolio">
    <meta name="author" content="fonsski">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <!-- <meta property="og:url" content="https://mywebsite.com/"> -->
    <meta property="og:title" content="fonsski - web developer">
    <meta property="og:description" content="Professional web-developer, front-end, backe-end, fullstack developer">
    <meta property="og:image" content="https://mywebsite.com/preview.jpg">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://mywebsite.com/">
    <meta property="twitter:title" content="fonsski - webdeveloper Portfolio">
    <meta property="twitter:description" content="Professional web-developer, front-end, backe-end, fullstack developer">
    <meta property="twitter:image" content="https://mywebsite.com/preview.jpg">
    <title>fonsski - web.dev</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="favicon.png">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="/assets/css/main.css">
</head>

<body>
    <!-- Шапка -->
    <header>
        <div class="logo"><img src="/assets/img/logo/logo.png" alt="logo"></div>
        <nav>
            <ul>
                <li><a href="#hero">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <!-- Mobile Menu Button -->
        <button class="mobile-menu-btn">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </header>
    <!-- Секция с описанием -->
    <section id="hero" class="hero">
        <div class="hero-content">
            <h1>Hello, I'm fonsski <br> <span>Web Developer</span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#" class="btn">About Me</a>
        </div>
        <div class="hero-image">
            <img src="/assets/img/content/hero-image2.jpg" alt="photo">
        </div>
    </section>
    <!-- Секция с типами услуг -->
    <section id="services" class="services">
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <i class="fa-solid fa-code service-icon"></i>
                    <h3>Write</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="btn">Know More →</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="face face1">
                <div class="content">
                    <i class="fa-solid fa-gear service-icon"></i>
                    <h3>Test</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="btn">Know More →</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="face face1">
                <div class="content">
                    <i class="fas fa-cube service-icon"></i>
                    <h3>Maintain</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="btn">Know More →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Секция про технологический стэк -->
    <section id="stack" class="stack">
        <h2>Technology Stack</h2>
        <div class="stack-grid">
            <div class="stack-item">
                <i class="fab fa-php"></i>
                <span>PHP</span>
            </div>
            <div class="stack-item">
                <i class="fab fa-laravel"></i>
                <span>Laravel</span>
            </div>
            <div class="stack-item">
                <i class="fab fa-html5"></i>
                <span>HTML5</span>
            </div>
            <div class="stack-item">
                <i class="fab fa-css3-alt"></i>
                <span>CSS3</span>
            </div>
            <div class="stack-item">
                <i class="fab fa-js"></i>
                <span>JavaScript</span>
            </div>
            <div class="stack-item">
                <i class="fab fa-docker"></i>
                <span>Docker</span>
            </div>
        </div>
    </section>
    <!-- Секция про опыт -->
    <section id="expirience" class="experience">
        <div class="stat"> <span>4+</span> Years Experience </div>
        <div class="stat"> <span>20+</span> Clients </div>
        <div class="stat"> <span>10+</span> Completed Projects </div>
        <div class="stat"> <span>4</span> Achievements </div>
    </section>
    <!-- Секция с проектами -->
    <section id="projects" class="projects">
        <h2>Featured Projects</h2>
        <div class="project-grid">
            <div class="project">
                <img src="assets/img/projects/project1.jpg" alt="PHOTOLAB">
                <div class="project-info">
                    <h3>PHOTOLAB</h3>
                    <p>Web site for tipography</p>
                    <div class="project-links">
                        <a href="https://photolab.example.com" class="project-link live" target="_blank">
                            <i class="fas fa-external-link-alt"></i> Live Demo
                        </a>
                        <a href="https://github.com/username/photolab" class="project-link github" target="_blank">
                            <i class="fab fa-github"></i> GitHub
                        </a>
                    </div>
                </div>
            </div>

            <div class="project">
                <img src="assets/img/projects/noteapp.jpg" alt="NoteApp">
                <div class="project-info">
                    <h3>NoteApp</h3>
                    <p>Simple note-taking application</p>
                    <div class="project-links">
                        <a href="https://noteapp.example.com" class="project-link live" target="_blank">
                            <i class="fas fa-external-link-alt"></i> Live Demo
                        </a>
                        <a href="https://github.com/fonsski/NoteApp" class="project-link github" target="_blank">
                            <i class="fab fa-github"></i> GitHub
                        </a>
                    </div>
                </div>
            </div>

            <div class="project">
                <img src="assets/img/projects/pagoda.png" alt="WeatherApp">
                <div class="project-info">
                    <h3>WeatherApp</h3>
                    <p>Weather forecast application</p>
                    <div class="project-links">
                        <a href="https://github.com/fonsski/pagoda" class="project-link github" target="_blank">
                            <i class="fab fa-github"></i> GitHub
                        </a>
                    </div>
                </div>
            </div>

            <div class="project">
                <img src="assets/img/projects/quizzy.jpg" alt="Quizzy">
                <div class="project-info">
                    <h3>Quizzy</h3>
                    <p>Interactive quiz platform</p>
                    <div class="project-links">
                        <a href="https://github.com/fonsski/quizzy" class="project-link github" target="_blank">
                            <i class="fab fa-github"></i> GitHub
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Секция для обратной связи -->
    <section id="contact" class="contact-cta">
        <h2>Let's work together on your next project</h2>
        <p>Contact with me.</p>
        <a href="#" class="btn">Contact</a>
    </section>
    <!-- Подвал -->
    <footer>
        <nav>
            <ul>
                <li><a href="#hero">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <div class="social-links">
            <a href="#" class="social-link"><i class="fab fa-github"></i></a>
            <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
            <a href="#" class="social-link"><i class="fab fa-dribbble"></i></a>
            <a href="#" class="social-link"><i class="fab fa-telegram"></i></a> <a href="#" class="social-link"><i class="fab fa-vk"></i></a>
        </div>
        <p>Created by fonsski</p>
    </footer>
    <!-- Modal -->
    <div id="contactModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Contact Me</h2>
            <form id="contactForm">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" required></textarea>
                </div>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
    </div>
</body>
<!-- Подключение скрипта для сжатия шапки -->
<script src="/assets/js/header.js"></script>
<!-- Модальное окно -->
<script src="/assets/js/modal.js"></script>

</html>