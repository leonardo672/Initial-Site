<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Writer's Homepage</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS stylesheet -->
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Jane Doe's Articles</h1>
        <nav>
            <ul>
                <li><a href="F.php">Home</a></li>
                <li><a href="articles.php">Articles</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <h2>Welcome to My Blog</h2>
        <p>Discover my latest articles and explore a range of topics.</p>
        <!-- Featured Article -->
        <article>
            <h3><a href="article.php?id=1">The Future of Technology</a></h3>
            <p>This is a brief summary of the featured article. Explore the latest trends in technology...</p>
            <a href="article.php?id=1">Read More</a>
        </article>
    </section>

    <!-- Recent Articles -->
    <section class="recent-articles">
        <h2>Recent Articles</h2>
        <article>
            <h3><a href="the-illusion.html">The Illusion</a></h3>
            <p>Explore the fascinating concept of illusion and how it shapes our perception of reality. This article delves into the science behind illusions and their impact on our understanding of the world.</p>
            <a class="read-more" href="the-illusion.html">Read More</a>
        </article>
        <article>
            <h3><a href="article.php?id=3">The Impact of Social Media on Society</a></h3>
            <p>An in-depth look at how social media affects our daily lives...</p>
            <a href="article.php?id=3">Read More</a>
        </article>
        <!-- Add more articles as needed -->
    </section>

    <!-- Popular Articles -->
    <section class="popular-articles">
        <h2>Popular Articles</h2>
        <article>
            <h3><a href="article.php?id=4">Top 10 Tips for Effective Writing</a></h3>
            <p>Learn essential tips to enhance your writing skills...</p>
            <a href="article.php?id=4">Read More</a>
        </article>
        <article>
            <h3><a href="article.php?id=5">How to Stay Motivated as a Writer</a></h3>
            <p>Discover strategies to maintain motivation and productivity...</p>
            <a href="article.php?id=5">Read More</a>
        </article>
        <!-- Add more articles as needed -->
    </section>

    <!-- About the Writer -->
    <section class="about-writer">
        <h2>About Me</h2>
        <p>Hi, I'm Jane Doe. Welcome to my blog where I share my thoughts on various topics related to technology, writing, and more.</p>
    </section>

    <!-- Newsletter Signup -->
    <section class="newsletter">
        <h2>Subscribe to My Newsletter</h2>
        <form action="subscribe.php" method="post">
            <input type="email" name="email" placeholder="Your email address" required>
            <button type="submit">Subscribe</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; <?php echo date('Y'); ?> Jane Doe. All rights reserved.</p>
        <nav>
            <ul>
                <li><a href="privacy.php">Privacy Policy</a></li>
                <li><a href="terms.php">Terms of Service</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </footer>
</body>
</html>
