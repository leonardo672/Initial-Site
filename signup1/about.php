<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
 
</head>
<body>
<header>
        <div class="symbol-container">
            <img src="Subject.png" alt="Esoteric Symbol" class="esoteric-symbol">
        </div>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="articles.php">Articles</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <!-- Google Translate Widget -->
        <div id="google_translate_element"></div>
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                    pageLanguage: 'en',
                    includedLanguages: 'ru,ar'
                }, 'google_translate_element');
            }
        </script>
        <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </header>
    <style>
        /* Base Styles */
/* Base Styles */
/* Base Styles */
/* Base Styles */
/* Font and Color Variables */


/* Base Styles */
body {
    font-family: 'Times New Roman', Times, serif;
    background-color: #f5f5f5; /* Light gray background */
    margin: 0;
    padding: 0;
    line-height: 1.6;
}

/* Header Styles */
header {
    text-align: center; /* Center align text and contents */
    padding: 10px;
    margin: 0;
    font-size: 18px;
    background-color: #2c3e50; /* Dark background color for header */
    color: white; /* White text color */
}

header .symbol-container {
    margin-bottom: 10px; /* Space below the symbol */
}

header .esoteric-symbol {
    max-width: 80px; /* Adjust size of the symbol */
    height: auto;
}

/* Navigation Styles */
nav ul {
    list-style: none; /* Remove bullet points */
    padding: 0;
    margin: 0;
}

nav ul li {
    display: inline; /* Display list items in a row */
    margin: 0 10px; /* Space between items */
}

nav ul li a {
    color: white; /* White text color for links */
    text-decoration: none; /* Remove underline */
    font-weight: bold; /* Bold text */
}

nav ul li a:hover {
    text-decoration: underline; /* Underline on hover */
}

/* Main Content Styles */
main {
    padding: 60px 20px;
    max-width: 1200px;
    margin: auto;
}

.horizontal-sections {
    display: flex;
    justify-content: space-between;
    margin-bottom: 40px;
    gap: 30px;
}

.horizontal-sections section {
    flex: 1;
    background-color: white;
    padding: 30px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    text-align: center;
    font-family: var(--font-secondary);
}

h1, h2 {
    color: var(--primary-color);
    font-family: var(--font-secondary);
    margin-bottom: 20px;
}

p {
    color: var(--secondary-color);
    font-family: var(--font-primary);
}

button, .button {
    display: inline-block;
    padding: 12px 24px;
    font-size: 16px;
    color: white;
    background-color: var(--primary-color);
    border: none;
    border-radius: 5px;
    text-align: center;
    text-decoration: none;
    margin: 10px 0;
    font-family: var(--font-secondary);
}

button:hover, .button:hover {
    background-color: var(--accent-color);
}

/* Blockquote Styles */
blockquote {
    font-family: var(--font-primary);
    font-size: 1.2em;
    font-style: italic;
    color: var(--primary-color);
    border-left: 4px solid var(--accent-color);
    padding-left: 15px;
    margin: 20px auto;
    max-width: 800px;
}

/* Footer Styles */
footer {
    background-color: #2c3e50; /* Dark blue-gray background */
    font-size: 18px;
    color: #ecf0f1; /* Light gray-white text */
    padding: 20px; /* Add padding for spacing */
    display: flex; /* Use flexbox for layout */
    flex-direction: column; /* Stack items vertically */
    align-items: center; /* Center content horizontally */
    position: relative; /* Allow absolute positioning within the footer */
    text-align: center; /* Center text for the nav links */
}

footer p {
    margin: 0; /* Remove default margin */
    font-size: 16px; /* Set font size */
    position: absolute; /* Absolute positioning for left alignment */
    left: 20px; /* Adjust as needed */
    top: 20px; /* Adjust as needed */
}

footer nav {
    width: 100%; /* Ensure the nav takes full width */
    top: 0px;
    margin-top: 0px; /* Space between the copyright and the nav */
}

footer nav ul {
    list-style: none; /* Remove bullet points */
    padding: 0; /* Remove default padding */
    margin: 0; /* Remove default margin */
    display: flex; /* Flexbox for horizontal layout */
    justify-content: center; /* Center items horizontally */
}

footer nav ul li {
    margin: 0 15px; /* Spacing between links */
}

footer nav ul li a {
    color: #ecf0f1; /* Light gray-white for links */
    text-decoration: none; /* Remove underline */
    font-weight: bold; /* Make links bold */
}

footer nav ul li a:hover {
    color: #ecf0f1; /* Red color on hover */
}


/* Responsive Design */
@media (max-width: 1024px) {
    .horizontal-sections {
        flex-direction: column;
    }

    .horizontal-sections section {
        margin-bottom: 30px;
    }
}


    </style>

    
    <main>
        <section class="about-intro">
            <h1>About Us</h1>
            <p>Our mission is to provide a platform for the exploration of profound philosophical questions and esoteric knowledge, encouraging intellectual curiosity and fostering a community of thinkers dedicated to understanding the deeper aspects of reality.</p>
        </section>

        <section class="about-history">
            <h2>Our History</h2>
            <p>The website was founded to bridge the gap between traditional philosophical discourse and modern esoteric studies. Inspired by a desire to explore the hidden dimensions of reality, our platform has evolved to include a diverse range of articles and insights.</p>
        </section>

        <section class="about-philosophy">
            <h2>Philosophical Orientation</h2>
            <p>We delve into various philosophical traditions, including metaphysics, ethics, and the nature of consciousness. Our content is influenced by both classical and modern thinkers, exploring themes that challenge conventional perceptions and embrace esoteric wisdom.</p>
        </section>

        <section class="about-content">
            <h2>Content Overview</h2>
            <p>Our site features in-depth essays, thought-provoking commentaries, and analyses of philosophical texts. Major themes include the intersection of philosophy with spirituality, science, and personal development.</p>
        </section>

        <section class="about-community">
            <h2>Community and Audience</h2>
            <p>We cater to students of philosophy, scholars, and anyone passionate about intellectual and esoteric subjects. Our community is engaged through discussion forums, contributions, and shared experiences.</p>
        </section>

        <section class="about-contributors">
            <h2>Meet the Contributors</h2>
            <p>Our team comprises experts in various philosophical fields. You can learn more about their backgrounds and contributions on our Contributors page.</p>
            <a href="contributors.php" class="button">Meet Our Contributors</a>
        </section>

        <section class="about-vision">
            <h2>Future Vision</h2>
            <p>We aim to expand our content offerings and grow our community. Stay tuned for upcoming projects, events, and collaborations that will further our mission.</p>
        </section>

        <section class="about-testimonials">
            <h2>Testimonials</h2>
            <blockquote>
                <p>"An incredible resource for anyone interested in deep philosophical and esoteric studies." - A Satisfied Reader</p>
            </blockquote>
            <blockquote>
                <p>"A platform that truly engages with the profound questions of our existence." - Philosopher X</p>
            </blockquote>
        </section>

        <section class="about-contact">
            <h2>Contact Us</h2>
            <p>If you have any questions or wish to get involved, please <a href="contact.php">contact us</a>.</p>
        </section>
    </main>

    <footer>
    <p>&copy; Хомам Ал Сафади </p>
        <nav>
            <ul>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </nav>
    </footer>
</body>
</html>
