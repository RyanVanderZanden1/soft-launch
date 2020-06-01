<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ace in the Hole Register Form Submission</title>
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
        <meta charset="UTF-8">
        <link href="../css/nav.css" rel="stylesheet" type="text/css">
        <link href="../css/style.less" rel="stylesheet/less" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>
        <![endif]-->
    </head>
    <body>
    <div class="content-wrapper">
        <!-- navigation and hamburger menu -->

        <header class="header">

            <input class="menu-btn" type="checkbox" id="menu-btn"/>
            <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>

            <h1>Ace in the Hole</h1>

            <nav>
                <ul class="menu">
                    <li><a href="../home.html.php" target="_self">Home</a></li>
                    <li><a href="../packet.html.php" target="_self">Packet Pick Up</a></li>
                    <li><a href="register.html.php" target="_self">Register</a></li>
                    <li><a href="../contact/contact.html.php" target="_self">Contact</a></li>
                </ul>
            </nav>
        </header>

        <!-- container for tablet and desktop -->
        <div id="container">

            <main>
                <h2>Thank you!</h2>
                <div class="success">
                <p>Thank you for registering:<br><br>
                    Name: <?php echo htmlspecialchars($users_name, ENT_QUOTES, 'UTF-8'); ?><br>
                    Age: <?php echo htmlspecialchars($users_age, ENT_QUOTES, 'UTF-8'); ?><br>
                    Role: <?php echo htmlspecialchars($users_role, ENT_QUOTES, 'UTF-8'); ?><br>
                    Email: <?php echo htmlspecialchars($users_email, ENT_QUOTES, 'UTF-8'); ?><br>
                    Emergency Contact Name: <?php echo htmlspecialchars($users_emername, ENT_QUOTES, 'UTF-8'); ?><br>
                    Emergency Contact Phone Number: <?php echo htmlspecialchars($users_emerphone, ENT_QUOTES, 'UTF-8'); ?><br>
                    Gender: <?php echo htmlspecialchars($users_gender, ENT_QUOTES, 'UTF-8'); ?><br>
                    Accommodations needed: <?php echo htmlspecialchars($users_comment, ENT_QUOTES, 'UTF-8'); ?>
                </p>
                </div>
            </main>
            <footer>
                <?php include '../footer.php';?>

                <!-- social media icons -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <a href="https://www.facebook.com/Cas222Aceinthehole-110661963841617/" class="fa fa-facebook"></a>
                <a href="https://twitter.com/pcccas222" class="fa fa-twitter"></a>

            </footer>
            </div>
            </div>

    </body>
</html>