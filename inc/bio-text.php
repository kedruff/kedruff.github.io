<?php
function bioText($readmore) { ?>

    <p>The son of a Mennonite pastor, Adam came to the Shenandoah Valley twenty years ago. He graduated from Harrisonburg High School and went to JMU, where he studied history and Spanish.</p>
    <?php if ($readmore) { ?>
        <a href="/about/" class="sharp-button readmore">Read More</a>
    <?php
    } else { ?>
        <div class="image-right"><img src="/dist/images/adam_coach.jpg" style="height:250px; width:auto;"> </div>

        <p>Adam met his wife, Holly, while at JMU and they married in 2005. They moved to Strasburg in 2006, and moved just outside of Forestville on Holman's Creek late last year.</p>

        <p>Adam worked at Bowman Apple Products for several years in the beverage plant handling logistics. He also spent several years consulting Democratic candidates across the country, as well as working on advocacy campaigns. He now works at Andros Foods as an account manager. </p>

        <p>Currently Adam serves as the treasurer for the Shenandoah County Soccer League and coaches as needed.</p>

        <p>Adam and Holly are members at County Line UCC. Their son is at Ashby Lee Elementary and their daughter is three years old.</p>
<?php
    }
} ?>
