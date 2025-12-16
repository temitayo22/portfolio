<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temitayo David | Web Developer</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <div class="background-animation">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
    </div>

    <nav class="navbar">
        <div class="logo">TD<span class="dot">.</span></div>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact" class="nav-btn">Contact</a></li>
        </ul>
        <div class="hamburger">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
    </nav>

    <section id="home" class="hero">
        <div class="hero-content">
            <h3 class="anim-left">Hello, I'm</h3>
            <h1 class="anim-left delay-1">Temitayo David</h1>
            <h2 class="anim-left delay-2">I'm a <span class="typing-text"></span><span class="cursor">|</span></h2>
            <p class="anim-left delay-3">Building high-performance web experiences with clean code and solid design.</p>
            <div class="social-icons anim-left delay-4">
                <a href="https://www.linkedin.com/in/temitayo-david-06955a395?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://github.com/temitayo22"><i class="fab fa-github"></i></a>
                <a href="https://x.com/DavidTemit70663"><i class="fab fa-twitter"></i></a>
            </div>
            <a href="#projects" class="btn anim-up delay-5">View My Work</a>
        </div>
        
        <div class="hero-image anim-right">
            <div class="img-box">
                <img src="./img/temitayo.png" alt="Temitayo David" onerror="this.style.display='none'; this.nextElementSibling.style.display='block'" >
                <div class="fallback-text">Add Picture</div>
            </div>
        </div>
    </section>

    <section id="about" class="section">
        <h2 class="section-title reveal-text">About <span>Me</span></h2>
        <div class="about-container">
            <div class="about-img reveal-left">
                 <div class="img-box square">
                    <img src="./img/temitayo.png" alt="About Temitayo" onerror="this.style.display='none'; this.nextElementSibling.style.display='block'">
                    <div class="fallback-text">Add Picture</div>
                </div>
            </div>
            <div class="about-text reveal-right">
                <h3>Web Developer & <span class="highlight">Problem Solver</span></h3>
                <p>
                    I am a passionate developer who focuses on writing semantic HTML, modern CSS, and clean JavaScript. 
                    I don't just build websites; I build experiences. My approach is minimalist yet effective, ensuring 
                    fast load times and accessibility across all devices.
                </p>
                <a href="#contact" class="btn-outline">Download CV</a>
            </div>
        </div>
    </section>

    <section id="skills" class="section">
        <h2 class="section-title reveal-text">My <span>Skills</span></h2>
        <div class="skills-wrapper">
            <div class="skill-card reveal-up">
                <div class="skill-header">
                    <i class="fab fa-html5" style="color:#e34c26"></i>
                    <span>HTML</span>
                </div>
                <div class="progress-bar-wrap">
                    <div class="progress-bar" data-width="100%"><span>100%</span></div>
                </div>
            </div>
            
            <div class="skill-card reveal-up delay-1">
                <div class="skill-header">
                    <i class="fab fa-css3-alt" style="color:#264de4"></i>
                    <span>CSS</span>
                </div>
                <div class="progress-bar-wrap">
                    <div class="progress-bar" data-width="98%"><span>98%</span></div>
                </div>
            </div>

            <div class="skill-card reveal-up delay-2">
                <div class="skill-header">
                    <i class="fab fa-js" style="color:#f7df1e"></i>
                    <span>JavaScript</span>
                </div>
                <div class="progress-bar-wrap">
                    <div class="progress-bar" data-width="75%"><span>75%</span></div>
                </div>
            </div>

            <div class="skill-card reveal-up delay-3">
                <div class="skill-header">
                    <i class="fab fa-php" style="color:#777bb3"></i>
                    <span>PHP</span>
                </div>
                <div class="progress-bar-wrap">
                    <div class="progress-bar" data-width="50%"><span>50%</span></div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="section">
        <h2 class="section-title reveal-text">Latest <span>Projects</span></h2>
        <div class="projects-grid">
            
            <div class="project-card reveal-up">
                <div class="project-img">
                    <img src="./img/E-commerce.jpeg" alt="E-commerce website preview" srcset="" width="800px" height="400px">
                </div>
                <div class="project-info">
                    <h3>E-Commerce Dashboard</h3>
                    <p>A responsive admin panel built with pure HTML/CSS and JS charts.</p>
                    <div class="tags">
                        <span>HTML</span><span>CSS</span><span>JS</span>
                    </div>
                    <div class="project-links">
                        <a href="https://temitayo22.github.io/portfolio/E-Commerce%20dashboard/"><i class="fas fa-link"></i> Live Demo</a>
                        <a href="https://github.com/temitayo22/portfolio/blob/cf1d3b180493808d73e2116e2352a3b15ca8d52d/E-Commerce%20dashboard/index.html"><i class="fab fa-github"></i> Code</a>
                    </div>
                </div>
            </div>

            <div class="project-card reveal-up delay-1">
                <div class="project-img">
                    <img src="./img/portfolio.png" alt="Portfolio preview" srcset="" width="350px" height="200px">
                </div>
                <div class="project-info">
                    <h3>Portfolio Template</h3>
                    <p>A personal portfolio website with custom animations and dark mode.</p>
                    <div class="tags">
                        <span>HTML</span><span>CSS</span>
                    </div>
                    <div class="project-links">
                        <a href="https://temitayo22.github.io/portfolio/MyPortfolio/"><i class="fas fa-link"></i> Live Demo</a>
                        <a href="https://github.com/temitayo22/portfolio/blob/cf1d3b180493808d73e2116e2352a3b15ca8d52d/MyPortfolio/index.html"><i class="fab fa-github"></i> Code</a>
                    </div>
                </div>
            </div>

            <div class="project-card reveal-up delay-2">
                <div class="project-img">
                  <img src="./img/to-do-task.jpeg" alt="To-Do List Preview" srcset="" width="350px" height="250px">
                </div>
                <div class="project-info">
                    <h3>Task Manager</h3>
                    <p>A dynamic To-Do list application using LocalStorage.</p>
                    <div class="tags">
                        <span>JavaScript</span><span>DOM</span>
                    </div>
                    <div class="project-links">
                        <a href="https://temitayo22.github.io/portfolio/To-Do%20List/"><i class="fas fa-link"></i> Live Demo</a>
                        <a href="https://github.com/temitayo22/portfolio/blob/cf1d3b180493808d73e2116e2352a3b15ca8d52d/To-Do%20List/index.html"><i class="fab fa-github"></i> Code</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

   <section id="contact" class="section contact-section">
    <h2 class="section-title reveal-text">Contact <span>Me</span></h2>
    <div class="contact-content reveal-up">
        <p>Have a project in mind? Let's discuss.</p>
        <a href="mailto:mhiztertroy18@gmail.com" class="btn">Send Email</a>
    </div>
    
    <footer>
        <p>Designed & Built by Temitayo David &copy; <?php echo date("Y"); ?></p>
    </footer>
</section>

    <script src="script.js"></script>
</body>
</html>