
<?php
function mailchimp() { ?>
    <div class="join-module sidebar-box">
        <h3>Join Us</h3>
        <?php include('mailchimp.php') ?>
    </div>
<?php }

function twitter() { ?>
<div class="twitter-module sidebar-box">
    <script>
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
    </script>
    <a class="twitter-timeline" href="https://twitter.com/search?q=voteadamsharp" data-widget-id="618118753058967553">Tweets about voteadamsharp</a>
</div>
<?php } ?>