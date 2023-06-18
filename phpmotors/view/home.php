<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="utf-8">

    <title>PHP || Motors Template</title>
    <link rel="stylesheet" href="/phpmotors/css/small.css" media="screen">
    <link rel="stylesheet" href="normalize.css">

</head>

<body>
    <header>
        <?php require_once($_SERVER["DOCUMENT_ROOT"] . "/phpmotors/snippets/header.php"); ?>
    </header>



    <nav>
        <?php require_once($_SERVER["DOCUMENT_ROOT"] . "/phpmotors/snippets/nav.php"); ?>
    </nav>
    <main id="main-grid">
        <h1>Welcome to PHP Motors!</h1>
        <div id="car-box">
            <h3>DMC Delorean</h3>
            <p>3 Cup Holders</p>
            <p>Superman Doors</p>
            <p>Fuzzy Dice!</p>
        </div>
        <button>Own Today</button>
        <img src="/phpmotors/images/delorean.jpg" alt="Delorean Car">

        <h2 id="upgrade-heading">Delorean Upgrades</h2>
        <div id="upgrades-box">
            <div class="upgrade-container">
                <div class="upgrade-image-padding">
                    <img class="uc-img" src="/phpmotors/images/upgrades/flux-cap.png" alt="Flux Capacitor">
                </div>
                <p class="uc-txt">Flux Capacitor</p>
            </div>
            <div class="upgrade-container">
                <div class="upgrade-image-padding">
                    <img class="uc-img" src="/phpmotors/images/upgrades/flame.jpg" alt="Flame Decals">
                </div>
                <p class="uc-txt">Flame Decals</p>
            </div>
            <div class="upgrade-container">
                <div class="upgrade-image-padding">
                    <img class="uc-img" src="/phpmotors/images/upgrades/bumper_sticker.jpg" alt="Bumper Stickers">
                </div>
                <p class="uc-txt">Bumper Stickers</p>
            </div>
            <div class="upgrade-container">
                <div class="upgrade-image-padding">
                    <img class="uc-img" src="/phpmotors/images/upgrades/hub-cap.jpg" alt="Hub Caps">
                </div>
                <p class="uc-txt">Hub Caps</p>
            </div>
        </div>
        <h2 id="review-heading">DMC Delorean Reviews</h2>
        <div id="reviews-box">
            <ul>
                <li>"So fast it's almost like travelling through time." (4/5) </li>
                <li>"Coolest ride on the road." (4/5) </li>
                <li>"I'm feeling like Marty McFly!." (5/5) </li>
                <li>"The most futuristic ride of our day." (4.5/5) </li>
                <li>"80's livin and I love it!" (5/5) </li>
            </ul>
        </div>
    </main>

    <footer>
        <?php require_once($_SERVER["DOCUMENT_ROOT"] . "/phpmotors/snippets/footer.php"); ?>
    </footer>
</body>

</html>