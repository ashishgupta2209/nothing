<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Reivise</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    <style>
    /* Basic Reset */
    body,
    h1,
    p,
    form,
    input,
    textarea,
    button {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Arial', sans-serif;
        line-height: 1.6;
        background-color: #121212;
        color: #e0e0e0;
        padding: 0;
        margin: 0;
    }

    header {
        background: #023c75;
        color: #fff;
        padding: 1rem;
        text-align: center;
    }

    nav ul {
        list-style: none;
        padding: 0;
    }

    nav ul li {
        display: inline;
        margin: 0 15px;
    }

    main {
        padding: 2rem 1rem;
        background: #121212;
    }

    .container {
        max-width: 800px;
        margin: auto;
        padding: 0 1rem;
    }

    h1 {
        text-align: center;
        color: #ffffff;
        margin-bottom: 1.5rem;
        font-size: 2rem;
    }

    form {
        background: #1f1f1f;
        padding: 2rem;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease;
    }

    form:hover {
        transform: translateY(-5px);
    }

    fieldset {
        border: none;
        padding: 0;
    }

    legend {
        font-size: 1.4rem;
        margin-bottom: 1rem;
        color: #ffffff;
        text-align: center;
        display: block;
    }

    label {
        display: block;
        margin-bottom: 0.5rem;
        color: #ffffff;
        font-weight: 700;
    }

    input[type="text"],
    input[type="email"],
    textarea {
        width: 100%;
        padding: 0.75rem;
        margin-bottom: 1rem;
        border: 1px solid #555;
        border-radius: 6px;
        background: #2a2a2a;
        color: #e0e0e0;
        font-size: 1rem;
        transition: border-color 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    textarea:focus {
        border-color: #017cff;
        outline: none;
    }

    button {
        background: #023c75;
        color: #ffffff;
        border: none;
        padding: 0.75rem 1.5rem;
        border-radius: 6px;
        cursor: pointer;
        font-size: 1.1rem;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    button:hover {
        background: #017cff;
        transform: translateY(-3px);
    }

    footer {
        background: #023c75;
        color: #ffffff;
        text-align: center;
        padding: 1rem;
        position: relative;
        bottom: 0;
        width: 100%;
    }

    footer ul {
        list-style: none;
        padding: 0;
        margin-top: 10px;
    }

    footer ul li {
        display: inline;
        margin: 0 10px;
    }

    footer ul li a {
        color: #ffffff;
        text-decoration: none;
        font-weight: bold;
        transition: color 0.3s ease;
    }

    footer ul li a:hover {
        color: #017cff;
    }
</style>

</head>

<body>
<header>
        <div class="container containernav">
            <h2 class="navreivise" title="Reivise (home)">Reivise</h2>
            <nav>
                <div class="menu-toggle">
                    
                    <span class="bar1"></span>
                    <span class="bar2"></span>
                    <span class="bar3"></span>
                </div>
                <div class="navicons">
                    <ul class="nav-links">
                        
                        <li><a href="#home">Home</a></li>
                        <li><a href="#mcqs">MCQs</a></li>
                        <li><a href="#solutions">Solutions</a></li>
                        <li><a href="#tests">Online Tests</a></li>
                        <li><a href="breng10thmcq.php">Contact</a></li>
                        
                    </ul>
                    
                </div>
            </nav>
        </div>
        
    </header>

    <main>
        <section id="contact">
            <div class="container">
                <h1>Contact Us</h1>
                <form action="contactphp.php" method="POST">
                    <fieldset>
                        <legend>Get in Touch</legend>

                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" value='name' required>

                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" value='email' required>


                        <button type="submit">Send</button>
                    </fieldset>
                </form>
            </div>
        </section>
    </main>
    


    <footer>
        <div class="container">
            <p>&copy; 2024 Reivise. All rights reserved.</p>
            <ul>
                <li><a href="#facebook">Facebook</a></li>
                <li><a href="#twitter">Twitter</a></li>
                <li><a href="#instagram">Instagram</a></li>
            </ul>
        </div>
    </footer>
    <script src="script.js"></script>
</body>

</html>