<?php 
require('../php/info.php'); 
$page = $_GET['page']; 
if ($page == ""){
    $page = 1;
}
?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Ongoing Anime on AniKatsu</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="title" content="Ongoing Anime on AniKatsu">
    <meta name="description" content="Ongoing Anime in HD with No Ads. Watch anime online">
    <meta name="keywords" content="AniKatsu, watch anime online, free anime, anime stream, anime hd, english sub, kissanime, gogoanime, animeultima, 9anime, 123animes, AniKatsu, vidstreaming, gogo-stream, animekisa, zoro.to, gogoanime.run, animefrenzy, animekisa">
    <meta name="charset" content="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Language" content="en">
    <meta property="og:title" content="Ongoing Anime on AniKatsu">
    <meta property="og:description" content="Ongoing Anime on AniKatsu in HD with No Ads. Watch anime online">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="AniKatsu">
    <meta itemprop="image" content="<?=$banner?>">
    <meta property="og:image" content="<?=$banner?>">
    <meta property="og:image:width" content="650">
    <meta property="og:image:height" content="350">
    <meta property="twitter:card" content="summary">
    <meta name="apple-mobile-web-app-status-bar" content="#202125">
    <meta name="theme-color" content="#202125">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" type="text/css">
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
    <script></script>
</head>

<body data-page="page_anime">
    <div id="sidebar_menu_bg"></div>
    <div id="wrapper" data-page="page_home">
        <?php include('../php/include/header.php'); ?>
        <div class="clearfix"></div>
        <div id="main-wrapper">
            <div class="container">
                <div id="main-content">
                    <section class="block_area block_area_category">
                        <div class="block_area-header">
                            <div class="float-left bah-heading mr-4">
                                <h2 class="cat-heading">Ongoing Anime</h2>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="tab-content">
                            <div class="block_area-content block_area-list film_list film_list-grid film_list-wfeature">
                                <div class="film_list-wrap">

                                <?php 
                                $json = file_get_contents("$apiLink/getOngoing/$page");
                                $json = json_decode($json, true);
                                foreach($json as $key => $ongoing) { ?>
                                    <div class="flw-item">
                                        <div class="film-poster">
                                            <div class="tick ltr">
                                                <div class="tick-item-<?php $str = $ongoing['animeTitle'];
                                                  $last_word_start = strrpos ( $str , " ") + 1;
                                                  $last_word_end = strlen($str) - 1;
                                                  $last_word = substr($str, $last_word_start, $last_word_end);
                                                  if ($last_word == "(Dub)"){echo "dub";} else {echo "sub";}
                                                ?>  tick-eps amp-algn">
                                                <?php $str = $ongoing['animeTitle'];
                                                  $last_word_start = strrpos ( $str , " ") + 1;
                                                  $last_word_end = strlen($str) - 1;
                                                  $last_word = substr($str, $last_word_start, $last_word_end);
                                                  if ($last_word == "(Dub)"){echo "Dub";} else {echo "Sub";}
                                                ?>
                                                </div>
                                            </div>
                                            <div class="tick rtl">
                                            </div>
                                            <img class="film-poster-img lazyload"
                                                data-src="<?=$ongoing['imgUrl']?>"
                                                src="https://cdn-eq4.pages.dev/anikatsu/files/images/no_poster.jpg"
                                                alt="<?=$ongoing['animeTitle']?>">
                                            <a class="film-poster-ahref"
                                                href="/anime/<?=$ongoing['animeId']?>"
                                                title="<?=$ongoing['animeTitle']?>"
                                                data-jname="<?=$ongoing['animeTitle']?>"><i class="fas fa-play"></i></a>
                                        </div>
                                        <div class="film-detail">
                                            <h3 class="film-name">
                                                <a
                                                    href="/anime/<?=$ongoing['animeId']?>"
                                                    title="<?=$ongoing['animeTitle']?>"
                                                    data-jname="<?=$ongoing['animeTitle']?>"><?=$ongoing['animeTitle']?></a>
                                            </h3>
                                            <div class="description"></div>
                                            <div class="fd-infor">
                                                <span class="fdi-item"><?=$ongoing['status']?></span>
                                                <span class="dot"></span>
                                                <span class="fdi-item">Ongoing</span>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                <?php } ?>
                                    

                                </div>
                                <div class="clearfix"></div>
                                <style>
                                    .cus_pagi {
                                        margin-top: 7px;
                                    }

                                    div.cus_pagi input {
                                        background: #575757;
                                        color: #fff;
                                        border: 0;
                                        width: 56px;
                                        text-align: center;
                                        border-radius: 2px;
                                        height: 28px;
                                        outline: 0;
                                    }

                                    button.btn.btn-xs.btn-primary {
                                        padding: 7px 11px;
                                        height: 26px;
                                        margin-top: 12px;
                                        border-radius: 2px;
                                    }
                                </style>
                                <div class="pagination">
                                    <nav>
                                        <ul class="ulclear az-list">
                                        <?php 
                                           $ongoingPage = file_get_contents("$apiLink/ongoingPage/$page");
                                           $ongoingPage = json_decode($ongoingPage, true); { ?>
                                             <?=$ongoingPage['pagination']; ?>
                                           <?php } ?>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="clearfix"></div>
                </div>
                <?php include('../php/include/main-sidenav.php'); ?>
                <div class="clearfix"></div>
            </div>
        </div>
        <?php include('../php/include/footer.html'); ?>
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

        <div style="display:none;">
        </div>
    </div>
</body>

</html>