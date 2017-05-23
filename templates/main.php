<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$pageTitle?></title>

    <meta charset="UTF-8">
    <meta name="description" content="This is a student exercise website for the Vancouver Institute of Media Arts">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--css styles-->
    <link rel="stylesheet" href="/css/main.css">
    <?if (count($pageStyles) > 0):?>
        <? foreach ($pageStyles as $path): ?>
            <link rel="stylesheet" href="<?=$path?>">
        <?endforeach; ?>
    <?endif;?>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/ico" href="/favicon.ico">

    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>
<body>
<?php include_once("img/elements/svg-defs.svg"); ?>
    <main class="page-container">
        <header class="page-header">
            <object type="image/svg+xml" data="/img/elements/logo.svg" class="logo"></object>
            <div class="mobile-nav-bg">
                <div class="mobile-nav-toggle">
                    <span></span>
                </div>
            </div>
            <nav class="nav-bar">

                <ul class="nav-bar-hor">
                    <li><a class="nav-bar__item <?=$navActive['home'] ?? '' ?>" href="/">Home</a></li>
                    <li><a class="nav-bar__item <?=$navActive['about'] ?? '' ?>" href="/about">About us</a></li>
                    <li><a class="nav-bar__item <?=$navActive['menu'] ?? '' ?>" href="/menu">Menu</a></li>
                    <li><a class="nav-bar__item <?=$navActive['wine-list'] ?? '' ?>" href="/wine-list">Wine list</a></li>
                    <li><a class="nav-bar__item <?=$navActive['gallery'] ?? '' ?>" href="/gallery">Gallery</a></li>
                    <li><a class="nav-bar__item <?=$navActive['contacts'] ?? '' ?>" href="/contacts">Contacts</a></li>
                </ul>

                <a class="btn btn-primary btn-lg" href="/reservation">Reservation</a>
            </nav>
        </header>
        <? if ($pageContentClass === 'home'):?>
        <div class="logo-mobile">
            <object type="image/svg+xml" data="../img/elements/logo.svg" class="logo-mobile-img"></object>
            <div class="arrow-down"></div>
        </div>
        <? endif;?>
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
                <a href="http://facebook.com"><svg class="social-media-icon">
                    <use xlink:href="#social-media-facebook-1" />
                </svg></a>
                <a href="http://youtube.com"><svg class="social-media-icon">
                    <use xlink:href="#social-media-youtube-play" />
                </svg></a>
                <a href="http://instagram.com"><svg class="social-media-icon">
                    <use xlink:href="#social-media-instagram" />
                </svg></a>
            </div>
        </footer>
    </main>

    <!--page scripts-->
    <?if (count($pageScript) > 0):?>
        <? foreach ($pageScript as $path): ?>
            <script src="<?=$path?>"></script>
        <?endforeach; ?>
    <?endif;?>

    <!--main script-->
    <script src="/js/main.js"></script>
</body>
</html>