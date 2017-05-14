<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>

    <meta charset="UTF-8">
    <meta name="description" content="">

    <!--css styles-->
    <link rel="stylesheet" href="css/main.css">

    <!--font awesome-->
    <script src="https://use.fontawesome.com/4567abeb9b.js"></script>

    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>
<body>
    <main class="page-container">
        <header class="page-header">
            <object type="image/svg+xml" data="img/elements/logo.svg" class="logo"></object>

            <nav>
                <ul class="nav-bar nav-bar-hor">
                    <li><a class="nav-bar__item active" href="/">Home</a></li>
                    <li><a class="nav-bar__item" href="/about">About us</a></li>
                    <li><a class="nav-bar__item" href="/menu">Menu</a></li>
                    <li><a class="nav-bar__item" href="/wine-list">Wine list</a></li>
                    <li><a class="nav-bar__item" href="/gallery">Gallery</a></li>
                    <li><a class="nav-bar__item" href="/contacts">Contacts</a></li>
                </ul>

                <a class="btn btn-primary btn-lg" href="/reservation">Reservation</a>
            </nav>
        </header>

        <section class="content <?=$pageContentClass ?>">
            <?=$pageContent ?>
        </section>

        <footer class="page-footer">
            <div class="address">
                <span class="text-strong">Francesco</span><br>
                800 René-Lévesque Blvd<br>
                Montreal
            </div>
            <div class="phone text-strong">(576) 341-4334</div>
            <div class="social-media">
                <span class="fa-stack fa-1x">
                    <a class="fa fa-facebook fa-stack-2x" href="http://facebook.com"></a>
                </span>
                <span class="fa-stack fa-1x">
                    <a class="fa fa-youtube-play fa-stack-2x" href="http://youtube.com"></a>
                </span>
                <span class="fa-stack fa-1x">
                    <a class="fa fa-instagram fa-stack-2x" href="http://instagram.com"></a>
                </span>
            </div>
        </footer>
    </main>

    <script src="js/main.js"></script>
</body>
</html>