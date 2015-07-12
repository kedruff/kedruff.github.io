<?php
function endorseList($readmore) { ?>
    <ul class="endorsers">
        <li>Kevin Druff</li>
        <li>President and Secretary Clinton</li>
        <li>Steve Jobs</li>
        <li>Simba and Nala Disney</li>
    <?php if ($readmore) { ?>
        <li class="readmore"><a href="/endorsements/" class="sharp-button readmore">Read More</a></li>
    </ul>
    <?php
    } else { ?>
    </ul>
    <?php }
} ?>
