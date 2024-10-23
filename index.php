<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <script src="script.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <title>Portfolio</title>
</head>
<body>
  <header>
    <h1><span>H.W. portfolio</span></h1>
    <nav>
      <ul>
        <li>Projects</li>
        <li>Technologies</li>
        <li>About me</li>
      </ul>
    </nav>
    <div class="socials">
      <ul>
        <li><a href="https://www.github.com/hiddewierper"><i class="bi bi-github"></i></a></li>
        <li><a href="https://www.instagram.com/hiddewierper"><i class="bi bi-instagram"></i></a></li>
        <li><a href="https://open.spotify.com/user/213ang5atptpcmibq5zug3w4q?si=d0051b2b860b431b"><i class="bi bi-spotify"></i></a></li>
      </ul>
    </div>
  </header>

  <section class="intro">
    <div class="info">
      <div class="me">
        <h1 class="name">Hello, I'm Hidde,</h1>
        <h1>Full-stack developer</h1>
        <p>Second-year software development student with skills in HTML, CSS, JS, and PHP. Focused on collaboration, communication, and learning new technologies like Tailwind and Laravel to grow as a developer.</p>
        <a href="files/Hidde-Wierper.pdf" download="CV Hidde Wierper">Download CV</a>      
      </div>
    </div>
    <div class="imgHw">
      <span></span>
      <img src="files/me.jpg" alt="Hidde Wierper">
    </div>
  </section>

  <section class="projects">
    <h1>Projects</h1>
    <div class="projectContainer">
      <div class="project">
        <div class="projectImg">
          <img src="files/weform.png" alt="weformConsultancy">
        </div>
       <div class="projectLang">
        <i class="bi bi-filetype-html"></i>
        <i class="bi bi-filetype-css"></i>
        <i class="bi bi-filetype-js"></i>
       </div>
     
      <div class="projectInfo">
        <h2><a href="https://www.github.com/hiddew2007/weform-master"><i style="color: white; font-size: 2rem;" class="bi bi-github"></i></a> WeformConsultancy</h2>
        <p>This is my first project where I learned how to use HTML, CSS, and JS to create a website. I learned how to use flexbox and grid to create a responsive website. I also learned how to use JS to create a hamburger menu.</p>
        <a class="link" href="https://weform.netlify.app" target="_blank">Watch it here!</a>
        </div>
      </div>


      <div class="project">
        <div class="projectImg">
          <img src="files/portfolio.png" alt="portfolio">
        </div>
      <div class="projectLang">
        <i class="bi bi-filetype-html"></i>
        <i class="bi bi-filetype-css"></i>
        <i class="bi bi-filetype-js"></i>
        <i class="bi bi-filetype-php"></i>
        <i class="bi bi-filetype-sql"></i>
      </div>
    
      <div class="projectInfo">
        <h2><a href="https://www.github.com/hiddewierper/portfolio"><i style="color: white; font-size: 2rem;" class="bi bi-github"></i></a> Portfolio</h2>
        <p>This is my first fullstack project where I learned to use HTML, CSS, JS, PHP and MySQL togheter.</p>
        <a class="link" href="http://localhost:8080//portfolio" target="_blank">Watch it here!</a>
        </div>
      </div>

      <div class="project">
        <div class="projectImg">
          <img src="files/no-escape.png" alt="no-escapae">
        </div>
      <div class="projectLang">
        <i class="bi bi-filetype-html"></i>
        <i class="bi bi-filetype-css"></i>
        <i class="bi bi-filetype-js"></i>
        <i class="bi bi-filetype-php"></i>
        <i class="bi bi-filetype-sql"></i>
      </div>
    
      <div class="projectInfo">
        <h2><a href="https://www.github.com/nathanhuijser/no-escape"><i style="color: white; font-size: 2rem;" class="bi bi-github"></i></a> No-Escape</h2>
        <p>This is my first teamproject where I learned how to work togheter at a project using git branches.</p>
        <a class="link" href="http://localhost:8080//no-escape" target="_blank">Watch it here!</a>
        </div>
      </div>
    </div>
  </section>

  <section class="skills">
    <div class="skillsContainer">
      <h1>Skills</h1>
      <div class="skill">
        <span><i class="bi bi-filetype-html"></i><h2>HTML</h2></span>
        <span style="width: 50%;" class="progress"></span>
      </div>
      <div class="skill">
        <span><i class="bi bi-filetype-css"></i><h2>CSS</h2></span>
        <span style="width: 100%;" class="progress"></span>
      </div>
      <div class="skill">
        <span><i class="bi bi-filetype-js"></i><h2>JS</h2></span>
        <span style="width: 50%;" class="progress"></span>
      </div>
    </div>
  </section>
</body>
</html>