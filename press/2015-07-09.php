<?php

include('../inc/header.php');
$title = "I gotta piss";

do_header($title);
?>

<div class="container-12">
    <div class="row">
        <article class="grid-8 alpha">
            <h1><?=$title?></h1>

            <p>Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends. </p>

            <h2>Is she dead, yes or no?</h2>

            <p>Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that's what you see at a toy store. And you must think you're in a toy store, because you're here shopping for an infant named Jeb. </p>

            <h2>Is she dead, yes or no?</h2>

            <p>Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you. But I can't give you this case, it don't belong to me. Besides, I've already been through too much shit this morning over this case to hand it over to your dumb ass. </p>

            <h2>Hold on to your butts</h2>

            <p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
        </article>
        <aside class="grid-4 omega non-mobile">
            <?php
                include('../inc/sub-sidebar.php');
                mailchimp();
                twitter();
            ?>
        </aside>
    </div>
</div>

<?php include('../inc/footer.php');?>