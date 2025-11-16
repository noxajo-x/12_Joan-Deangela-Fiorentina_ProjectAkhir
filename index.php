<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css?v=<?= time()?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Pinstripe:ital@0;1&family=Dancing+Script&family=Doto:wght@100..900&family=Fleur+De+Leah&family=Imperial+Script&family=Italianno&family=Jersey+10&family=Jua&family=League+Script&family=Lovers+Quarrel&family=Martian+Mono:wght@100..800&family=Mukta+Malar:wght@200;300;400;500;600;700;800&family=Nanum+Myeongjo&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Pinyon+Script&family=Quintessential&family=Rouge+Script&family=Rubik:ital,wght@0,300..900;1,300..900&family=Ruda:wght@400..900&family=WindSong:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
        <div class="nav-left">
            <h2>Midnight Library</h2>
        </div>

        <div class="nav-center">
            <img src="logo.png" alt="Library Logo" class="nav-logo">
        </div>

        <div class="nav-right">
            <a href="about.php">About Us</a>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        </div>
    </nav>

    <div class="container">
        <div class="title">
            <p class="aest">⋆⭒˚.⋆</p>
            <p class="main">Welcome to The Midnight Library</p>
            <p class="aest">⋆⭒˚.⋆</p>
        </div>
            
        <div class="text">
            <p>Enter a world where stories breathe magic and every book opens a portal to the unknown. From epic quests to timeless legends, our shelves are filled with fantasy worlds waiting to be discovered. Step inside and let the adventure begin.</p>
        </div>        
    </div>

    <div class="container2">
        <div class="sub">
            <div class="subtitle">
                <p>⋆⭒˚.⋆</p><h1>Select your path</h1><p>⋆⭒˚.⋆</p>
            </div>

            <div class="subtitle">
                <h1>Where will your story begin?</h1>
            </div>
        </div>

        <div class="cards">
            <div class="card">
                <div class="img1">
                    <img src="action3.png" alt="">
                </div>
                <div class="genre">
                    <h3>Action</h3>
                </div>
                <div class="desc">
                    <p>Embark on epic quests where heroes rise, kingdoms fall, and legends are forged in fire. Every battle holds a story, are you ready to take up the sword?</p>
                </div>
            </div>

            <div class="card">
                <div class="img">
                    <img src="romance3.png" alt="">
                </div>
                <div class="genre">
                    <h3>Romance</h3>
                </div>
                <div class="desc">
                    <p>Step into worlds where love blooms beneath moonlit skies and magic binds hearts beyond time. Some destinies are written not in stars, but in spells.</p>
                </div>
            </div>

            <div class="card">
                <div class="img">
                    <img src="comedy3.png" alt="">
                </div>
                <div class="genre">
                    <h3>Comedy</h3>
                </div>
                <div class="desc">
                    <p>Even in lands of dragons and wizards, laughter is the greatest magic of all. Join quirky adventurers and enchanted mishaps that prove fantasy can be fun, too!</p>
                </div>
            </div>        
        </div>
        
    </div>

    <footer class="footer">
        <p>© 2025 Midnight Library. All rights reserved.</p>
    </footer>

</body>
</html>