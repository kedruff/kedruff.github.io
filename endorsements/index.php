<?php

include('../inc/header.php');

do_header('Endorsements');
?>

<div class="container-12">
    <div class="row">
        <div class="grid-8 alpha">
            <h1>Endorsements</h1>
            <?php include('../inc/endorse-list.php'); endorseList(false); ?>
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