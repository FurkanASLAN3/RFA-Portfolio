<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Engineering Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo">Portfolio.</div>
        <ul class="nav-links">
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><button id="theme-toggle">Toggle Mode</button></li>
        </ul>
    </nav>

    <header class="hero">
        <h1>Welcome to My Professional Portfolio</h1>
        <p>Engineering Student & Web Developer</p>
    </header>

    <section id="projects">
        <h2>Featured Projects</h2>
        <div id="project-container" class="grid-container">
            <!-- Projects will be loaded here via AJAX -->
        </div>
    </section>

    <section id="contact">
        <h2>Contact Me</h2>
        <form id="contactForm" method="POST" action="send_message.php">
            <input type="text" name="name" id="name" placeholder="Full Name" required>
            <input type="email" name="email" id="email" placeholder="Email Address" required>
            <textarea name="message" id="message" placeholder="Your Message"></textarea>
            <button type="submit">Send Message</button>
        </form>
        <div id="form-feedback"></div>
    </section>

    <script src="script.js"></script>
</body>
</html>