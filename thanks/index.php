<?php

include('../inc/header.php');

do_header('Thanks');

$thanks = array(
    'commit' => array('Thank you', 'Thank you for committing to vote November 3!'),
    'contrib' => array('Thank you', 'Thank you for your contribution!'),
    'vol' => array('Thank you', 'Thank you for signing up to volunteer!'),
    'signup' => array('Thank you!', 'Please check your inbox for an email and click the link to confirm your email address.'),
    'confirm' => array('Thank you', 'Thank you for confirming your email address!')
);
?>

<div class="container-12">
    <div class="row">
        <div class="grid-12 alpha omega">
            <h1><?php echo $thanks[$_GET['ty']][0]?></h1>
            <h2><?php echo $thanks[$_GET['ty']][1]?></h2>
        </div>
    </div>
    <div class="row module-container">
        <div class="endorse-module grid-4 alpha">
            <h3 class="module-header">Endorsements</h3>
            <?php include('../inc/endorse-list.php'); endorseList(true);?>
        </div>
        <div class="twitter-module grid-4 omega push-4">
            <script>
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
            </script>
            <a class="twitter-timeline" href="https://twitter.com/search?q=voteadamsharp" data-widget-id="618118753058967553">Tweets about voteadamsharp</a>
        </div>
    </div>
</div>

<?php include('../inc/footer.php');?>