
<!DOCTYPE html>
<html lang="cat">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="cssPortfolio.css" rel="stylesheet" type="text/css">
    <script src="jsPortfolio.js" defer></script>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>Document</title>

</head>
<body>
    <header>
        <div class="logo-container">
            <img src="imatges/imatgeLogo/robot.png" alt="Logo" class="logo">
        </div>
        <nav class="nav-buttons">
            <a href="#gotopresentation">01. Sobre mi</a>
            <a href="#gotoprojects">02. Projectes</a>
            <a href="#gotowork">03. Treball</a>
            <a href="#gotocontact">04. Contacte</a>
            <button class="special-button" onclick="window.open('imatges/curriculum.pdf', '_blank');">Veure CV</button>
        </nav>
    </header>

    <div class="intermediate-block">
        <div class="side">
            <div class="vertical-text-container">
                <a href="https://github.com/Och8s" target="_blank">
                    <img class="lateral-logo" src="imatges/github.png" alt="github">
                </a>
                <a href="https://twitter.com/yourprofile" target="_blank">
                    <img class="lateral-logo" src="imatges/twiter.png" alt="twitter">
                </a>
                <a href="https://www.linkedin.com/in/javier-manj%C3%B3n-martos-72650832a/" target="_blank">
                    <img class="lateral-logo" src="imatges/linkedin.png" alt="linkedin">
                </a>
                <a href="https://www.instagram.com/yourprofile" target="_blank">
                    <img class="lateral-logo" src="imatges/instagram.png" alt="instagram">
                </a>
                <div class="line" id="line1"></div>
            </div>
        </div>
        <div class="principal-container">
            <div id="supletoryText" class="supletory-text">
                <p>APP - JS - PHP - JAVA - CSS - MySQL - PL/SQL - LARAVEL - ANGULAR - HTML</p>
            </div>            
            
            <div class="presentation">
                <p class="basicText">Hola, el meu nom es</p>
                <p class="presentationText">Javier Manjón Martos.</p>
                <p class="presentationText" id="text2">I build things for the web.</p>
                <p class="basicText">
                    Soy un ingeniero de software especializado en crear (y ocasionalmente diseñar) experiencias digitales excepcionales. 
                    Actualmente, estoy centrado en la creación de productos accesibles y centrados en el ser humano en Upstatement.
                </p>
            </div>
            <div id="gotopresentation" class="about">
                <h1>01. Sobre mi</h1>
                <div class="personal-description">
                    <div class="text-personal-description">
                        <p>
                             párrafo de prueba que describe a un programador, con un tamaño de texto que debería ocupar aproximadamente diez líneas en un formato A4:
                            Soy un programador apasionado con más de cinco años de experiencia en el desarrollo de aplicaciones web y móviles. Mi formación en ingeniería de software 
                            me ha proporcionado una sólida base en diferentes lenguajes de programación, incluyendo JavaScript, PHP y Python. A lo largo de mi carrera, he trabajado
                             en proyectos de diversas magnitudes, desde pequeñas aplicaciones para startups hasta sistemas complejos para grandes empresas. Disfruto enfrentando desafíos
                              técnicos y siempre busco soluciones innovadoras que optimicen el rendimiento y la usabilidad de mis proyectos. Además, tengo una fuerte orientación hacia
                               el trabajo en equipo y la colaboración, ya que creo que el intercambio de ideas es fundamental para el éxito de cualquier proyecto. Me apasiona aprender 
                               sobre nuevas tecnologías y tendencias en la industria, lo que me permite estar siempre actualizado. Fuera del trabajo, disfruto compartiendo mis conocimientos 
                               a través de charlas y talleres, fomentando una comunidad de aprendizaje.</p>
                    </div>
                    <div class="img-personal-description">
                        <img src="imatges/fotoJavi.jpg" alt="Descripción de la imagen" class="personal-img">
                    </div>
                </div>                
            </div>
            <div id="gotoprojects" class="projects">
                <h1>02. Projectes</h1>
               <!-- Proyecto 1 -->
                <div class="project">
                    <div class="project-img-container">
                    <img src="imatges/<?php echo $result[0]['foto']; ?>" alt="Imagen Proyecto 1" class="project-img">
                    </div>
                    <div class="project-content">
                        <h6><?php echo htmlspecialchars($result[0]['tipus']); ?></h6>
                        <h5><?php echo htmlspecialchars($result[0]['titol']); ?></h5>
                        <p class="projects-description"><?php echo $result[0]['petitText']; ?></p>
                        <p class="projects-type "><?php echo $result[0]['eines']; ?></p>
                        <button class="explore-button" onclick="window.location.href='Index.php?action=show&id=1'">Explorar</button>
                        <!-- <button class="explore-button" onclick="goToProjecte1()">Explorar</button> -->
                    </div>
                </div>
                <!-- Proyecto 2 -->
                <div class="project">
                    <div class="project-img-container">
                    <img src="imatges/<?php echo $result[1]['foto']; ?>" alt="Imagen Proyecto 2" class="project-img">
                    </div>
                    <div class="project-content">
                        <h6><?php echo htmlspecialchars($result[1]['tipus']); ?></h6>
                        <h5><?php echo htmlspecialchars($result[1]['titol']); ?></h5>
                        <p class="projects-description"><?php echo $result[1]['petitText']; ?></p>
                        <p class="projects-type "><?php echo $result[1]['eines']; ?></p>
                        <button class="explore-button" onclick="window.location.href='Index.php?action=show&id=2'">Explorar</button>
                    </div>
                </div>
                <!-- Proyecto 3 -->
                <div class="project">
                    <div class="project-img-container">
                        <img src="imatges/<?php echo $result[2]['foto']; ?>" alt="Imagen Proyecto 3" class="project-img">
                    </div>
                    <div class="project-content">
                        <h6><?php echo htmlspecialchars($result[2]['tipus']); ?></h6>
                        <h5><?php echo htmlspecialchars($result[2]['titol']); ?></h5>
                        <p class="projects-description"><?php echo $result[2]['petitText']; ?></p>
                        <p class="projects-type "><?php echo $result[2]['eines']; ?></p>
                        <button class="explore-button" onclick="window.location.href='Index.php?action=show&id=3'">Explorar</button>
                    </div>
                </div>
                <!-- Proyecto 4 -->
                <div class="project">
                    <div class="project-img-container">
                        <img src="imatges/<?php echo $result[3]['foto']; ?>" alt="Imagen Proyecto 4" class="project-img">
                    </div>
                    <div class="project-content">
                        <h6><?php echo htmlspecialchars($result[3]['tipus']); ?></h6>
                        <h5><?php echo htmlspecialchars($result[3]['titol']); ?></h5>
                        <p class="projects-description"><?php echo $result[3]['petitText']; ?></p>
                        <p class="projects-type "><?php echo $result[3]['eines']; ?></p>
                        <button class="explore-button" onclick="window.location.href='Index.php?action=show&id=4'">Explorar</button>
                    </div>
                </div>
                <!-- Proyecto 5 -->
                <div class="project">
                    <div class="project-img-container">
                        <img src="imatges/<?php echo $result[4]['foto']; ?>" alt="Imagen Proyecto 5" class="project-img">
                    </div>
                    <div class="project-content">
                        <h6><?php echo htmlspecialchars($result[4]['tipus']); ?></h6>
                        <h5><?php echo htmlspecialchars($result[4]['titol']); ?></h5>
                        <p class="projects-description"><?php echo $result[4]['petitText']; ?></p>
                        <p class="projects-type "><?php echo $result[4]['eines']; ?></p>
                        <button class="explore-button" onclick="window.location.href='Index.php?action=show&id=5'">Explorar</button>
                    </div>
                </div>
                <!-- Proyecto 6 -->
                <div class="project">
                    <div class="project-img-container">
                         <img src="imatges/<?php echo $result[5]['foto']; ?>" alt="Imagen Proyecto 6" class="project-img">
                    </div>
                    <div class="project-content">
                        <h6><?php echo htmlspecialchars($result[5]['tipus']); ?></h6>
                        <h5><?php echo htmlspecialchars($result[5]['titol']); ?></h5>
                        <p class="projects-description"><?php echo $result[5]['petitText']; ?></p>
                        <p class="projects-type "><?php echo $result[5]['eines']; ?></p>
                        <button class="explore-button" onclick="window.location.href='Index.php?action=show&id=6'">Explorar</button>
                    </div>
                </div>
                <div class="moreProjects">
                    <button onclick="window.location.href='Index.php?action=crud'">Tots els projectes </button>
                </div>
            </div>   
            <div id="gotowork" class="works">
                <h1>03. Treball</h1>
                <div class="work-blocs">
                    <div class="work">
                        <h5 class="company-title">Executive HR Talent</h5>
                        <img src="imatges/executivehr.jpeg" alt="Foto Empresa 1" class="work-img">
                        <div>
                            <a href="https://executivehr.es/" class="work-link" target="_blank">Empresa</a>
                            <button class="alert-button" onclick="showAlert('Desenvolupador a Executive HR Talent', 'A Executive HR Talent vaig adquirir experiencia com Desenvolupador de APP i WEBS. Vaig utilitzar eines tal com PHP, JS i MySQL, a més despecialitzar-me en Laravel i Angular.')">Desenvolupament</button>
                        </div>
                    </div>
                    <div class="work">
                        <h5 class="company-title">Ingenio LeaderShip School</h5>
                        <img src="imatges/ingenios.jpeg" alt="Foto Empresa 2" class="work-img">
                        <div>
                            <a href="https://www.ingenioschool.com/aulavirtual/" class="work-link" target="_blank">Empresa</a>
                            <button class="alert-button" onclick="showAlert('Ingenios LeaderShip School', 'Aqui vaig treballar de desenvolupador de APP i WEB, actualitzan el moodle i vam crear un accés desde Executive HR Talent')">Desenvolupament</button>
                        </div>
                    </div>
                    <div class="work">
                        <h5 class="company-title">Institut Baix Camp</h5>
                        <img src="imatges/baixcamp.jpeg" alt="Foto Empresa 3" class="work-img">
                        <div>
                            <a href="https://www.insbaixcamp.org/index.php/oferta-d-estudis/cicles-formatius/cf-de-grau-mitja-2" class="work-link" target="_blank">Empresa</a>
                            <button class="alert-button" onclick="showAlert('Executive HR Talent', 'Descripción del trabajo realizado en Institut Baix Camp. Aquí se detalla lo que hiciste en esta empresa, tus funciones y habilidades adquiridas.')">Desenvolupament</button>
                        </div>
                    </div>
                </div>
                <div class="work-descriptions">
                    <div class="button-container">
                        <button class="description-button" onclick="changeDescription('Descripción 1')">Executive HR</button>
                        <button class="description-button" onclick="changeDescription('Descripción 2')">Ingenios School</button>
                        <button class="description-button" onclick="changeDescription('Descripción 3')">Institut Baix Camp</button>
                        <button class="description-button" onclick="changeDescription('Descripción 4')">Vuit</button>
                    </div>
                    <div class="work-description">
                        <h5 id="job-title">Cargo en la Empresa</h5>
                        <h6 id="job-date">Fecha del Trabajo</h6>
                        <p id="dynamic-description">
                            "En Executive HR Talent, trabajé como desarrollador de aplicaciones y sitios web, donde me especialicé
                            en el uso de PHP, JavaScript y MySQL. Durante mi tiempo allí, colaboré en proyectos innovadores, mejorando
                            la funcionalidad y la experiencia del usuario. Además, adquirí habilidades en frameworks modernos como 
                            Laravel y Angular, lo que me permitió optimizar el rendimiento de las aplicaciones. Esta experiencia me
                            brindó una sólida base en el desarrollo web, así como un enfoque centrado en el cliente."
                        </p>
                    </div>
                </div>
            </div>  
            <div id="gotocontact" class="contact">
                <div>
                    <h1 id="contact-title">04. I ara què?</h1>
                    <p id="contact-letterG">Contacta'm</p>
                    <p id="contact-letterB"> "Encara que no estic buscant noves oportunitats en aquest moment, la meva bústia sempre està oberta. Ja sigui que tinguis una pregunta o simplement vulguis saludar, faré tot el possible per respondre't!"</p>
                    <button class="contact-button" onclick="window.location.href='mailto:jmanjonmartos@gmail.com';">Diga'm HOLA</button>
                </div>
            </div>             
        </div>   
        <div class="side">
            <div class="vertical-text-container">
                <a href="mailto:jmanjonmartos@gmail.com" style="text-decoration: none; color: inherit;">
                <h3>Jmanjonmartos@gmail.com</h3>
                </a>
                <div class="line" id="line2"></div>
            </div>
        </div>
    </div>
    <footer>
        <p>© 2024 Javier Manjón Martos</p>
    </footer> 

</body>
</html>
