<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informational Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        nav {
            margin: 10px;
            text-align: center;
        }
        nav a {
            margin: 0 15px;
            color: #333;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        section {
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to My Informational Website</h1>
    </header>

    <nav>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#contact">Contact</a>
    </nav>

    <section id="about">
        <h2>About Us</h2>
        <p>This is a simple informational website created to showcase the capabilities of Azure App Services with PHP. You can use this template as a starting point for your own projects.</p>
    </section>

    <section id="services">
        <h2>Our Services</h2>
        <p>We offer a variety of services to help you with your web development needs. Whether you're looking for custom solutions or need help deploying your applications, we're here to assist.</p>
    </section>

    <section id="contact">
        <h2>Contact Us</h2>
        <p>If you have any questions or need further information, feel free to reach out to us via our contact form or email.</p>
    </section>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> My Informational Website. All rights reserved.</p>
    </footer>
</body>
</html>
