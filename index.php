<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Home Page</title>
</head>
<body>
<link rel="stylesheet" href="index.css" />
    
    <header>
        <h1>Welcome to Diane_Fashion_Design!</h1>
        <h2></h2>
        <h2></h2>
    </header>

    <nav>
        <ul>
            <li><a href="page.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="contactform.php">Contact</a></li>
        </ul>
    </nav>

    <section>
        <h2>Latest Updates</h2>
        
        <?php
            // PHP code to fetch and display latest updates from a database or other source
            echo "<p>This is where you can buy the best clothes for the best service and best price.</p>";
        ?>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Our Website. All rights reserved.</p>
    </footer>
</body>
</html>
