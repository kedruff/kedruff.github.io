<?php

include('inc/header.php');

do_header('Home');
?>

<div class="container-12">
    <div class="row">
        <div class="feature-image grid-8 alpha">
            <h2>Valley Values</h2>
        </div>
        <div class="grid-4 omega non-mobile">
            <h3>Join Us</h3>
            <?php include('inc/mailchimp.php') ?>
        </div>
    </div>
    <div class="row module-container">
        <div class="about-module grid-4 alpha">
            <h3 class="module-header">About Adam</h3>
            <?php
                include('inc/bio-text.php');
                bioText(true);
            ?>
        </div>
        <div class="endorse-module grid-4">
            <h3 class="module-header">Endorsements</h3>
            <?php include('inc/endorse-list.php'); endorseList(true);?>
        </div>
        <div class="twitter-module grid-4 omega">
            <script>
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
            </script>
            <a class="twitter-timeline" href="https://twitter.com/search?q=voteadamsharp" data-widget-id="618118753058967553">Tweets about voteadamsharp</a>
        </div>
    </div>
</div>

<?php include('inc/footer.php');?>