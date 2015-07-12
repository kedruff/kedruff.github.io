<?php

include('../inc/header.php');

do_header('About Adam');
?>

<div class="container-12">
    <div class="row">
        <div class="grid-8 alpha">
            <h1> About Adam</h1>
            <img src="/dist/images/feature-1.jpg" alt="Adam and his daughter, Diana">
            <?php include('../inc/bio-text.php'); bioText(false); ?>
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