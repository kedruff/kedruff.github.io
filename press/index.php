<?php

include('../inc/header.php');

do_header('Press Information');
?>

<div class="container-12">
    <div class="row">
        <div class="grid-8 alpha">
            <h1>Press Information</h1>

            <article class="press-snippet">
                <h2><a href="/press/2015-07-09.php">I gotta piss</a></h2>
                <time datetime="2015-07-09">July 9, 2015</time>
                <p>Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends. </p>

                <a href="/press/2015-07-09.php" class="sharp-button readmore">Read more</a>
            </article>
        </div>
        <div class="grid-4 omega non-mobile">
            <?php
                include('../inc/sub-sidebar.php');
                mailchimp();
                twitter();
            ?>
        </div>
    </div>
</div>

<?php include('../inc/footer.php');?>