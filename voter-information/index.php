<?php

include('../inc/header.php');

do_header('Voter Information');
?>

<div class="container-12">
    <div class="row">
        <div class="grid-8 alpha">
            <h1>Voter Information</h1>

            <dl class="faq">
                <dt>Am I registered to vote?</dt>
                <dd><a target="_blank" href="https://www.vote.virginia.gov/search">Check your registration status</a></dd>
                <dt>Where do I vote?</dt>
                <dd><a target="_blank" href="https://voterinfo.sbe.virginia.gov/PublicSite/Public/FT2/PublicPollingPlace.aspx">Confirm your polling place</a></dd>
                <dt>Oh no! I'm not registered to vote. How can I register?</dt>
                <dd><a target="_blank" href="https://www.vote.virginia.gov">Register to vote online.</a> The deadline to register to vote November 3 is October 13.</dd>
                <dt>I will not be able to vote in person November 3. How do I request an absentee ballot?</dt>
                <dd><a target="_blank" href="http://elections.virginia.gov/index.php/casting-a-ballot/absentee-voting/">Request an absentee ballot.</a>The deadline to apply for an absentee ballot is October 26.</dd>
            </dl>
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











