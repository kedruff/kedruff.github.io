<?php

include('../inc/header.php');
include('../inc/states.php');
do_header('Commit Your Support');
?>

<div class="container-12">
    <div class="row">
        <div class="grid-9 alpha push-2">
            <h1>Commit Your Support</h1>
            <div class="row" id="mc_embed_signup">
                <form action="//commonsenseforthevalley.us10.list-manage.com/subscribe/post?u=8b542ade1f8681b425d9725a6&amp;id=781dcee141" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate full-fields" target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll">
                        <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
                        <fieldset class="row">
                            <legend>Your Name</legend>
                            <div class="grid-4">
                                <label for="mce-FNAME">First Name  <span class="asterisk">*</span></label>
                                <input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
                            </div>
                            <div class="grid-4">
                                <label for="mce-LNAME">Last Name  <span class="asterisk">*</span></label>
                                <input type="text" value="" name="LNAME" class="required" id="mce-LNAME">
                            </div>
                        </fieldset>
                        <fieldset class="row">
                            <legend>Address Information</legend>
                            <div class="grid-8">
                                <label for="mce-ADDRESS-addr1">Address  <span class="asterisk">*</span></label>
                                <input type="text" value="" maxlength="70" name="ADDRESS[addr1]" id="mce-ADDRESS-addr1" class="required">
                            </div>
                            <div class="grid-8">
                                <label for="mce-ADDRESS-addr2">Address Line 2</label>
                                <input type="text" value="" maxlength="70" name="ADDRESS[addr2]" id="mce-ADDRESS-addr2">
                            </div>
                            <div class="row">
                                <div class="grid-3">
                                    <label for="mce-ADDRESS-city">City</label>
                                    <input type="text" value="" maxlength="40" name="ADDRESS[city]" id="mce-ADDRESS-city" class="required">
                                </div>
                                <div class="grid-3">
                                    <label for="mce-ADDRESS-state">State/Province/Region</label>
                                    <select name="ADDRESS[state]" id="mce-ADDRESS-state" class="required"><?php echo StateDropdown('VA', 'mixed'); ?></select>
                                </div>
                                <div class="grid-2">
                                    <label for="mce-ADDRESS-zip">Postal / Zip Code</label>
                                    <input type="text" value="" maxlength="10" name="ADDRESS[zip]" id="mce-ADDRESS-zip" class="required">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="row">
                            <legend>Contact Information</legend>
                            <div class="grid-4">
                                <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span></label>
                                <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                            </div>
                            <div class="grid-4">
                                <label for="mce-PHONE">Phone Number  <span class="asterisk">*</span></label>
                                <input type="text" name="PHONE" class="required" value="" id="mce-PHONE">
                            </div>
                        </fieldset>
                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;"><input type="text" name="b_8b542ade1f8681b425d9725a6_781dcee141" tabindex="-1" value=""></div>
                        <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="sharp-button" style="width:200px;">

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('../inc/footer.php');?>
