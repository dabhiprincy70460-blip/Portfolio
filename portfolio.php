<?php
// Simple PHP Portfolio Website (Single File)
// You can split this into header.php, footer.php, etc. later

$name = "Dabhi Princy";
$role = "PHP Developer";
$email = "dabhiprincy70460@gmail.com";
$linkedin = "https://www.linkedin.com/in/yourprofile";
$github = "https://github.com/yourusername";

$skills = [
    "PHP",
    "MySQL",
    "HTML5",
    "CSS3",
    "JavaScript",
    "Bootstrap",
    "Git & GitHub"
];

$projects = [
    [
        "title" => "School Management System",
        "desc" => "Role-based PHP & MySQL system for admin, teachers, and students.",
        "tech" => "PHP, MySQL, CSS, JavaScript"
    ],
    [
        "title" => "Portfolio Website",
        "desc" => "Personal portfolio to showcase skills and projects.",
        "tech" => "PHP, HTML, CSS"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $name; ?> | Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { scroll-behavior: smooth; }
        .hero { background:#0d6efd; color:#fff; padding:80px 0; }
        .section { padding:60px 0; }
        footer { background:#111; color:#aaa; padding:20px 0; }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#home"><?php echo $name; ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero -->
<section class="hero text-center" id="home">
    <div class="container">
        <h1 class="display-5">Hi, I'm <?php echo $name; ?></h1>
        <p class="lead"><?php echo $role; ?></p>
        <a href="#projects" class="btn btn-light mt-3">View My Work</a>
    </div>
</section>

<!-- About -->
<section class="section" id="about">
    <div class="container">
        <h2>About Me</h2>
        <p>I am a passionate PHP developer with hands-on experience in building dynamic web applications using PHP and MySQL. I enjoy learning new technologies and improving my skills.</p>
    </div>
</section>

<!-- Skills -->
<section class="section bg-light" id="skills">
    <div class="container">
        <h2>Skills</h2>
        <div class="row">
            <?php foreach ($skills as $skill) { ?>
                <div class="col-md-3 col-6 mb-3">
                    <div class="card text-center p-3"><?php echo $skill; ?></div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- Projects -->
<section class="section" id="projects">
    <div class="container">
        <h2>Projects</h2>
        <div class="row">
            <?php foreach ($projects as $project) { ?>
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5><?php echo $project['title']; ?></h5>
                            <p><?php echo $project['desc']; ?></p>
                            <small class="text-muted">Tech: <?php echo $project['tech']; ?></small>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- Contact -->
<section class="section bg-light" id="contact">
    <div class="container">
        <h2>Contact</h2>
        <p>Email: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
        <p>
            <a href="<?php echo $linkedin; ?>" target="_blank">LinkedIn</a> |
            <a href="<?php echo $github; ?>" target="_blank">GitHub</a>
        </p>
    </div>
</section>

<footer class="text-center">
    <div class="container">
        <p>© <?php echo date('Y'); ?> <?php echo $name; ?>. All Rights Reserved.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
