<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

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
    padding: 20px;
}

.contact-container {
    display: flex;
    justify-content: space-between;
    max-width: 1200px;
    margin: 0 auto;
    gap: 20px;
}

.contact-form, .contact-info {
    flex: 1;
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.contact-form h2, .contact-info h2 {
    margin-top: 0;
    color: #2c3e50;
}

.contact-form .form-group {
    margin-bottom: 15px;
}

.contact-form label {
    display: block;
    margin-bottom: 5px;
    color: #2c3e50;
}

.contact-form input, .contact-form textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.contact-form button {
    background-color: #2c3e50;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

.contact-form button:hover {
    background-color: #34495e;
}

.contact-info p {
    margin: 10px 0;
    color: #2c3e50;
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
    color: #ecf0f1; /* Light gray-white color on hover */
}

/* Responsive Design */
@media (max-width: 768px) {
    .title {
        font-size: 2em; /* Smaller title on mobile */
    }

    .subtitle {
        font-size: 1.3em; /* Smaller subtitle on mobile */
    }

    .section {
        font-size: 1.1em; /* Smaller section headers on mobile */
    }

    p {
        font-size: 0.9em; /* Slightly smaller font size for paragraphs on mobile */
    }
}

/* Responsive Design */
@media (max-width: 768px) {
    .contact-container {
        flex-direction: column;
    }

    .contact-form, .contact-info {
        margin-bottom: 20px;
    }
}
</style>
<main>
        <div class="contact-container">
            <section class="contact-form">
                <h2>Get in Touch</h2>
                <form action="send-email.php" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit">Send Message</button>
                </form>
            </section>
            <section class="contact-info">
                <h2>Contact Details</h2>
                <p><strong>Address:</strong> Ломоносова 114/4</p>
                <p><strong>Phone:</strong> +7 (999) 721-7053</p>
                <p><strong>Email:</strong> samasrak61@gmail.com</p>
            </section>
        </div>
    </main>
    <footer>
    <p>&copy; Хомам Ал Сафади </p>
        <nav>
            <ul>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Service</a></li>
            </ul>
        </nav>
    </footer>
</body>
</html>
