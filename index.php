<?php 
require('./php/info.php');
?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>AniKatsu - Official AniKatsu #1 Watch High Quality Anime Online Without Ads</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="title" content="AniKatsu - Official AniKatsu #1 Watch High Quality Anime Online Without Ads" />
    <meta name="description" content="AniKatsu - Official AniKatsu #1 Watch High Quality Anime Online Without Ads. You can watch anime online free in HD without Ads. Best place for free find and one-click anime." />
    <meta name="keywords" content="AniKatsu, watch anime online, free anime, anime stream, anime hd, english sub, kissanime, gogoanime, animeultima, 9anime, 123animes, vidstreaming, gogo-stream, animekisa, zoro.to, gogoanime.run, animefrenzy, animekisa" />
    <meta name="charset" content="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <meta name="robots" content="index, follow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Content-Language" content="en" />
    <meta property="og:title" content="AniKatsu - Official AniKatsu #1 Watch High Quality Anime Online Without Ads">
    <meta property="og:description" content="AniKatsu - Official AniKatsu #1 Watch High Quality Anime Online Without Ads. You can watch anime online free in HD without Ads. Best place for free find and one-click anime.">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="AniKatsu">
    <meta property="og:url" content="<?=$webUrl?>">
    <meta itemprop="image" content="<?=$banner?>">
    <meta property="og:image" content="<?=$banner?>">
    <meta property="og:image:secure_url" content="<?=$banner?>">
    <meta property="og:image:width" content="650">
    <meta property="og:image:height" content="350">
    <meta name="apple-mobile-web-app-status-bar" content="#202125">
    <meta name="theme-color" content="#202125">
    <link rel="shortcut icon" href="<?=$webUrl?>/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn-eq4.pages.dev/anikatsu/files/css/style.css">
    <link rel="stylesheet" href="https://cdn-eq4.pages.dev/anikatsu/files/css/min.css">
    <script type="text/javascript">
        setTimeout(function () {
            var wpse326013 = document.createElement('link');
            wpse326013.rel = 'stylesheet';
            wpse326013.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css';
            wpse326013.type = 'text/css';
            var godefer = document.getElementsByTagName('link')[0];
            godefer.parentNode.insertBefore(wpse326013, godefer);
            var wpse326013_2 = document.createElement('link');
            wpse326013_2.rel = 'stylesheet';
            wpse326013_2.href = 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css';
            wpse326013_2.type = 'text/css';
            var godefer2 = document.getElementsByTagName('link')[0];
            godefer2.parentNode.insertBefore(wpse326013_2, godefer2);
        }, 500);
    </script>
    <noscript>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" />
    </noscript>
</head>

<body data-page="page_home">
    <div id="sidebar_menu_bg"></div>
    <div id="wrapper" data-page="page_home">
        <?php include('./php/include/header.php');?>
        <div class="clearfix"></div>
        <div class="deslide-wrap">
            <div class="container" style="max-width:100%!important;width:100%!important;">
                <div id="slider" class="swiper-container-initialized swiper-container-horizontal">
                    <?php include('./php/include/slidebar.html'); ?>
                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
                    <div class="swiper-navigation">
                        <div class="swiper-button swiper-button-next" tabindex="0" role="button"
                            aria-label="Next slide"><i class="fas fa-angle-right"></i></div>
                        <div class="swiper-button swiper-button-prev" tabindex="0" role="button"
                            aria-label="Previous slide"><i class="fas fa-angle-left"></i></div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
        </div>
        <div id="anime-trending">
            <div class="container">
                <section class="block_area block_area_trending">
                    <div class="block_area-header">
                        <div class="bah-heading">
                            <h2 class="cat-heading">Trending</h2>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="block_area-content">
                        <div class="trending-list" id="trending-home">
                            <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                                <div class="swiper-wrapper">

                                <?php 
                                $json = file_get_contents("$apiLink/getPopular/1");
                                $json = json_decode($json, true);
                                foreach($json as $key => $popular) { ?>
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="number">
                                                <span><?=$key+1?></span>
                                                <div class="film-title dynamic-name" data-jname="<?=$popular['animeTitle']?>"><?=$popular['animeTitle']?></div>
                                            </div>
                                            <a href="/anime/<?=$popular['animeId']?>" class="film-poster"
                                                title="<?=$popular['animeTitle']?>">
                                                <img data-src="<?=$popular['imgUrl']?>"
                                                    src="<?=$popular['imgUrl']?>"
                                                    class="film-poster-img lazyload" alt="<?=$popular['animeTitle']?>">
                                            </a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                <?php } ?>
                                


                                </div>
                                <div class="clearfix"></div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                            <div class="trending-navi">
                                <div class="navi-next swiper-button-disabled" tabindex="-1" role="button"
                                    aria-label="Next slide" aria-disabled="true"><i class="fas fa-angle-right"></i>
                                </div>
                                <div class="navi-prev swiper-button-disabled" tabindex="-1" role="button"
                                    aria-label="Previous slide" aria-disabled="true"><i class="fas fa-angle-left"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div id="anime-featured">
            <?php include('./php/include/anime-featured.php'); ?>
        </div>
        <div id="main-wrapper">
            <div class="container">
                <div id="main-content">
                    <section class="block_area block_area_home">
                        <div class="block_area-header">
                            <div class="float-left bah-heading mr-4">
                                <h2 class="cat-heading">Latest Subbed</h2>
                            </div>
                            <div class="float-right viewmore">
                                <a class="btn" href="/latest/subbed">View more<i
                                        class="fas fa-angle-right ml-2"></i></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="tab-content">
                            <div class="block_area-content block_area-list film_list film_list-grid">
                                <div class="film_list-wrap">

                                <?php 
                                $json = file_get_contents("$apiLink/getRecent/1/1");
                                $json = json_decode($json, true);
                                foreach($json as $recentRelease) { ?>
                                    <div class="flw-item">
                                        <div class="film-poster">
                                            <div class="tick ltr">
                                                <div class="tick-item-sub  tick-eps amp-algn"><?=$recentRelease['subOrDub']?></div>
                                            </div>
                                            <div class="tick rtl">
                                                <div class="tick-item tick-eps amp-algn">Episode <?=$recentRelease['episodeNum']?></div>
                                            </div>
                                            <img class="film-poster-img lazyload"
                                                data-src="<?=$recentRelease['imgUrl']?>"
                                                src="<?=$recentRelease['imgUrl']?>"
                                                alt="<?=$recentRelease['name']?>">
                                            <a class="film-poster-ahref"
                                                href="/watch/<?=$recentRelease['episodeId']?>"
                                                title="<?=$recentRelease['name']?>"
                                                data-jname="<?=$recentRelease['name']?>"><i class="fas fa-play"></i></a>
                                        </div>
                                        <div class="film-detail">
                                            <h3 class="film-name">
                                                <a
                                                    href="/watch/<?=$recentRelease['episodeId']?>"
                                                    title="<?=$recentRelease['name']?>"
                                                    data-jname="<?=$recentRelease['name']?>"><?=$recentRelease['name']?></a>
                                            </h3>
                                            <div class="fd-infor">
                                                <span class="fdi-item">Latest</span>
                                                <span class="dot"></span>
                                                <span class="fdi-item"><?=$recentRelease['subOrDub']?></span>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                   <?php } ?>

                                    
                                    
                                   
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </section>
                    <section class="block_area block_area_home">
                        <div class="block_area-header">
                            <div class="float-left bah-heading mr-4">
                                <h2 class="cat-heading">Latest Dubbed</h2>
                            </div>
                            <div class="float-right viewmore">
                                <a class="btn" href="/latest/dubbed">View more<i
                                        class="fas fa-angle-right ml-2"></i></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="tab-content">
                            <div class="block_area-content block_area-list film_list film_list-grid">
                                <div class="film_list-wrap">
                                <?php 
                                $json = file_get_contents("$apiLink/getRecent/1/2");
                                $json = json_decode($json, true);
                                foreach($json as $recentReleaseDub) { ?>

                                    <div class="flw-item">
                                        <div class="film-poster">
                                        <div class="tick ltr">
                                                <div class="tick-item-dub  tick-eps amp-algn"><?=$recentReleaseDub['subOrDub']?></div>
                                            </div>
                                            <div class="tick rtl">
                                                <div class="tick-item tick-eps amp-algn">Episode <?=$recentReleaseDub['episodeNum']?></div>
                                            </div>
                                            <img class="film-poster-img lazyload"
                                                data-src="<?=$recentReleaseDub['imgUrl']?>"
                                                src="<?=$recentReleaseDub['imgUrl']?>"
                                                alt="<?=$recentReleaseDub['imgUrl']?>">
                                            <a class="film-poster-ahref"
                                                href="/watch/<?=$recentReleaseDub['episodeId']?>" title="<?=$recentReleaseDub['name']?>"
                                                data-jname="<?=$recentReleaseDub['name']?>"><i class="fas fa-play"></i></a>
                                        </div>
                                        <div class="film-detail">
                                            <h3 class="film-name">
                                                <a
                                                    href="/watch/<?=$recentReleaseDub['episodeId']?>" title="<?=$recentReleaseDub['name']?>"
                                                    data-jname="<?=$recentReleaseDub['name']?>"><?=$recentReleaseDub['name']?></a>
                                            </h3>
                                            <div class="fd-infor">
                                                <span class="fdi-item">Latest</span>
                                                <span class="dot"></span>
                                                <span class="fdi-item">Dub</span>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                <?php } ?>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="clearfix"></div>
                </div>
                 <?php include('./php/include/main-sidenav.php'); ?>
                <div class="clearfix"></div>
            </div>
        </div>
        <?php include('./php/include/footer.html'); ?>
        <div id="mask-overlay"></div>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn-eq4.pages.dev/anikatsu/files/js/video.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
        <script type="text/javascript" src="https://cdn-eq4.pages.dev/anikatsu/files/js/app.js"></script>
        <script type="text/javascript" src="https://cdn-eq4.pages.dev/anikatsu/files/js/comman.js"></script>
        <script type="text/javascript" src="https://cdn-eq4.pages.dev/anikatsu/files/js/movie.js"></script>
        <link rel="stylesheet" href="https://cdn-eq4.pages.dev/anikatsu/files/css/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="https://cdn-eq4.pages.dev/anikatsu/files/js/function.js"></script>
    </div>
</body>

</html>