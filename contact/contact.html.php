<!--
File Name: contact.html.php
Date: 05/30/20
Programmer: Ryan VanderZanden
-->
<head>

    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <meta charset="UTF-8">
    <link href="../css/nav.css" rel="stylesheet" type="text/css">
    <link href="../css/style.less" rel="stylesheet/less" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>

    <title>Ace in the Hole: Contact</title>

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
                <li><a href="../register/register.html.php" target="_self">Register</a></li>
                <li><a href="contact.html.php" target="_self">Contact</a></li>
            </ul>
        </nav>
    </header>
    <!-- container for tablet and desktop -->
    <div id="container">

<main>

<h2>Contact Us</h2>

<div class="label">

    <form action="contact.php" method="post">
    <label for="name">Name: </label>
    <input type="text" id="name" name="name" ><br><br>

    <label for="email">E-mail: </label>
    <input type="text" id="email" name="email"><br><br>

    <label for="role">Role: </label>
    <select name="role" id="role">
        <option></option>
        <option value="athlete">Athlete</option>
        <option value="volunteer">Volunteer</option>
        <option value="party">Interested Party</option>
    </select><br><br>

    <label for="comment">Question or Comment: </label>
    <textarea id="comment" rows="3" cols="30" name="comment"></textarea><br><br>


    <input type="submit" id="but" value="Submit">
</form>

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