<?php
function do_header($pageTitle)  {
    $scripts = '';
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title><?= $pageTitle?> | Adam Sharp for Shenandoah County Clerk of Court</title>

        <?php if ($pageTitle === "Thanks") : ?>
            <meta name="robots" content="noindex, nofollow, noarchive">
        <?php endif; ?>

        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">
        <link rel="stylesheet" href="/dist/sharp.css">
        <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
        <link rel="stylesheet" href="/dist/font-awesome.min.css">
    </head>

    <body>
        <div class="page-header">
            <header class="container-12" role="document">
                <a class="grid-6" href="/">
                    <div class="site-logo">
                        <?php if ($pageTitle === 'Home') : ?>
                            <h1 class="vh">Adam Sharp for Clerk of Court</h1>
                        <?php else : ?>
                            <span class="vh">Adam Sharp for Clerk of Court</span>
                        <?php endif; ?>
                    </div>
                </a>

                <div class="social-bar grid-5 non-mobile">
                    <div class="social-links">
                        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=7Y6QVNPARADK2" title="Contribute via PayPal"><i class="fa fa-2x fa-paypal"></i></a>
                        <a class="contribute-icon" href="https://secure.actblue.com/contribute/page/adamsharp" title="Contribute via ActBlue"><i class="fa fa-2x fa-usd"></i></a>
                        <a href="https://www.facebook.com/voteadamsharp"><i class="fa fa-2x fa-facebook-official"></i><span class="vh">Facebook</span></a>
                    </div>
                </div>
            </header>
            <div class="nav-bar">
                <nav class="container-12 main-menu">
                    <button class="sharp-button gray small mobile-only" id="menu-trigger">Menu <span class="fa fa-chevron-circle-down"></span></button>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="/about/">About Adam</a></li>
                        <li><a href="/why-im-running/">Why I'm Running</a></li>
                        <li><a href="/endorsements/">Endorsements</a></li>
                        <li><a href="/commit-to-vote/">Commit to Vote</a></li>
                        <li><a href="/press/">Press</a></li>
                    </ul>
                </nav>
            </div>
        </div>

<?php } ?>
